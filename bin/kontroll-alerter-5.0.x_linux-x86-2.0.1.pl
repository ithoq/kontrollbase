#! /usr/bin/perl
################################################################################
## NAME: kontroll-alerter-5.0.x_linux-x86.pl
## VERSION: 2.0.1
## DATE: 2008-12-01
## AUTHOR: Matt Reid
## WEBSITE: http://kontrollsoft.com
## EMAIL: kontact@kontrollsoft.com
## LICENSE: PLEASE REFER TO THE LICENSE.txt file bundled with this software release
## to understand your right and options for using this software.
## Copyright 2008 Kontrollsoft LLC
## All rights reserved.
################################################################################

use strict;
use warnings;
use DBI;
use Fcntl;
use POSIX qw(strftime);
use Time::HiRes qw(gettimeofday tv_interval);
use Math::Calc::Units qw(convert readable);

my $config = "../config.cfg";
my $mysql_r_user = undef;
my $mysql_r_pass = undef;
my $mysql_r_db = undef;
my $mysql_r_host = undef;
my $mysql_w_user = undef;
my $mysql_w_pass = undef;
my $mysql_w_db = undef;
my $mysql_w_host = undef;
my $error_log = undef;
my $debug_log = undef;
my $h = undef;
my $system_alerts_email = undef;
my $system_hostname = undef;

sub config_connect {    
    open(DAT, $_[0]) || die ("Could not open config file ($_[0])");
    my @data=<DAT>;
    close(DAT);    
    @data = grep(!/^#/, @data); #remove comment lines
    foreach my $item(@data) { chomp($item);} #remove carriage returns

    $mysql_r_user = $data[0];
    $mysql_r_pass = $data[1];
    $mysql_r_db = $data[2];
    $mysql_r_host = $data[3];
    $mysql_w_user = $data[4];
    $mysql_w_pass = $data[5];
    $mysql_w_db = $data[6];
    $mysql_w_host = $data[7];
    $error_log = $data[8];
    $debug_log = $data[9];

    #remove the starting string                                                                                                                           
    $mysql_r_user =~ s/MYSQL_R_USER=//g;
    $mysql_r_pass =~ s/MYSQL_R_PASS=//g;
    $mysql_r_db =~ s/MYSQL_R_DB=//g;
    $mysql_r_host =~ s/MYSQL_R_HOST=//g;
    $mysql_w_user =~ s/MYSQL_W_USER=//g;
    $mysql_w_pass =~ s/MYSQL_W_PASS=//g;
    $mysql_w_db =~ s/MYSQL_W_DB=//g;
    $mysql_w_host =~ s/MYSQL_W_HOST=//g;
    $error_log =~ s/ERROR_LOG=//g;
    $debug_log =~ s/DEBUG_LOG=//g;
}

sub error_report {
    my $err0 = $_[0];
    my $errtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    my $err1 = $errtime." | ERROR | kontroll-alerter-5.0.x_linux-x86-2.0.1: ".$err0."\n";
    print $err1;
    sysopen(FILE, $error_log, O_RDWR|O_EXCL|O_CREAT, 0600);    
    open FILE, ">>$error_log" or die $!; 
    print FILE $err1; 
    close FILE;   
    debug_report($err0);
    exit 1;
}

sub debug_report {
    my $note = $_[0];
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | kontroll-alerter-5.0.x_linux-x86-2.0.1: ".$note."\n";
    print $note;
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0600);
    open FILE, ">>$debug_log" or die $!;
    print FILE $note;
    close FILE;
}

sub get_system {
    my $dbh = DBI->connect( 
        "DBI:mysql:$mysql_r_db:$mysql_r_host", 
        $mysql_r_user, 
        $mysql_r_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
	) or error_report("$DBI::errstr");

    my $sql0 = "select system_alerts_email,system_hostname from system_main";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	$system_alerts_email = $row->{'system_alerts_email'};
	$system_hostname = $row->{'system_hostname'};
    }   
    $sth->finish;
    $dbh->disconnect;
}


sub get_alerts {
    my $dbh = DBI->connect( 
        "DBI:mysql:$mysql_r_db:$mysql_r_host", 
        $mysql_r_user, 
        $mysql_r_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
	) or error_report("$DBI::errstr");

    my $sql0 = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.creation_time, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname,t4.server_client_name from alerts_def as t1, alerts_current as t2, server_list as t3, server_client as t4 where t3.server_client_id = t4.id and t3.active = '0' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' and t1.alert_level ='0' order by server_hostname,t1.alert_level";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	my $alert_name = $row->{'alert_name'};
	my $alert_desc = $row->{'alert_desc'};
	my $alert_links = $row->{'alert_links'};
	my $alert_solution = $row->{'alert_solution'};
	my $renew_time = $row->{'renew_time'};
	my $response_time = $row->{'response_time'};
	my $server_hostname = $row->{'server_hostname'};
	my $creation_time = $row->{'creation_time'};
	my $server_client_name = $row->{'server_client_name'};
	
	email_alert($alert_name,$alert_desc,$alert_links,$alert_solution,$renew_time,$response_time,$server_hostname,$creation_time,$server_client_name);
    }   
    $sth->finish;
    $dbh->disconnect;
}

sub email_alert {
    my ($alert_name,$alert_desc,$alert_links,$alert_solution,$renew_time,$response_time,$server_hostname,$creation_time,$server_client_name) = @_;
    
    my $subject = "$alert_name";
    my $message = "===================================
This is a kontrollbase alert notification
===================================
State:       Critical
Customer:    $server_client_name
Check:       $server_hostname - $alert_name
Begin Time:  $creation_time
Message:     
$subject
$alert_desc
$alert_solution
$alert_links

Created: $creation_time
Response: $response_time
Renew: $renew_time";
    my $from_email = "kontrollbase\@$system_hostname";
    my $sendmail = `which sendmail`;
    chomp($sendmail);
    my $to = $system_alerts_email;
    open(MAIL, "|$sendmail -oi -t");
    print MAIL "From: $from_email\n"; 
    print MAIL "To: $to\n";
    print MAIL "Subject: $subject\n\n";
    print MAIL "$message\n";
    close(MAIL);
    debug_report("sending email for $server_hostname : $subject");
}

config_connect($config);
debug_report("starting alert script");
get_system();
get_alerts();
debug_report("ending alert script");
