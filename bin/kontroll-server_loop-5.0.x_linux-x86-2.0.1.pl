#! /usr/bin/perl
################################################################################
## NAME: kontroll-server_loop-5.0.x_linux-x86.pl
## VERSION: 2.0.1
## DATE: 2008-12-01
## ID: $Id$
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

my $perlclient = "kontroll-client-5.0.x_linux-x86-2.0.1.pl";
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
my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;

# If you have issues with the php binary not being found please specify the full path in the commands below.
sub config_connect {    
    my $cfgapp = "../system/application/config/bin-read-configs.php";
    $mysql_r_user = `php $cfgapp read username`;
    $mysql_r_pass = `php $cfgapp read password`;
    $mysql_r_db = `php $cfgapp read database`;
    $mysql_r_host = `php $cfgapp read hostname`;
    $mysql_w_user = `php $cfgapp write username`;
    $mysql_w_pass = `php $cfgapp write password`;
    $mysql_w_db = `php $cfgapp write database`;
    $mysql_w_host = `php $cfgapp write hostname`;
    $error_log = "../system/logs/sys_error.log";
    $debug_log = "../system/logs/sys_debug.log";
}

sub debug_clear {
    my $note = "LOG TRUNCATED";
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | server-loop-5.0.x_linux-x86: ".$note."\n";
    print $note;
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">$debug_log" or die $!;
    print FILE $note;
    close FILE;
}

sub debug_report {
    my $note = $_[0];
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | server-loop-5.0.x_linux-x86: ".$note."\n";
    print $note;
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$debug_log" or die $!;
    print FILE $note;
    close FILE;
}

sub error_report {
    my $err = $_[0];
    my $errtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $err = $errtime." | server-loop-5.0.x_linux-x86: ".$err."\n";
    print $err."\n";
    sysopen(FILE, $error_log, O_RDWR|O_EXCL|O_CREAT, 0644);    
    open FILE, ">>$error_log" or die $!; 
    print FILE $err; 
    close FILE;   
    exit 1;
}

sub get_list {
    my $dbh = DBI->connect( 
        "DBI:mysql:$mysql_r_db:$mysql_r_host", 
        $mysql_r_user, 
        $mysql_r_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
    ) or error_report("$DBI::errstr");

    my $sql0 = "select t1.*,t2.id as server_client_id ,t2.server_client_name, t3.system_server_loop_timeout from server_list as t1, server_client as t2, system_main as t3 where t1.active >='1' and t1.server_client_id = t2.id order by id;";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	my $server_id = $row->{'id'};
	my $active = $row->{'active'};
	my $active_status = undef;
	my $updated_status = undef;
	my $server_ipaddress = $row->{'server_ipaddress'};
	my $server_hostname = $row->{'server_hostname'};
	my $server_ssh_user = $row->{'server_ssh_user'};
	my $server_mysql_port = $row->{'server_mysql_port'};
	my $server_mysql_db = $row->{'server_mysql_db'};
	my $server_mysql_host = $row->{'server_mysql_host'};
	my $server_mysql_user = $row->{'server_mysql_user'};
	my $server_mysql_pass = $row->{'server_mysql_pass'};
	my $server_mysql_socket = $row->{'server_mysql_socket'};
	my $server_snmp_local_address = $row->{'server_snmp_local_address'};
	my $server_snmp_port = $row->{'server_snmp_port'};
	my $server_snmp_rocommunity = $row->{'server_snmp_rocommunity'};
	my $server_snmp_version = $row->{'server_snmp_version'};
	my $server_client_name = $row->{'server_client_name'};
	my $system_server_loop_timeout = $row->{'system_server_loop_timeout'};
	
	my $xmlfile = "xml/$server_id-$server_client_name-$server_hostname-$server_ipaddress.xml";

	print "\nEXEC $perlclient client script for host: $server_hostname $server_ssh_user\@$server_ipaddress\n";
	

	 eval {
		local $SIG{ALRM} = sub {die "ssh connection timeout reached\n"};
                alarm $system_server_loop_timeout; 
		#debug_report("Connecting to server: --snmp-host=$server_snmp_local_address --snmp-port=$server_snmp_port --snmp-rocommunity=$server_snmp_rocommunity --snmp-version=$server_snmp_version --mysql-user=$server_mysql_user --mysql-pass=$server_mysql_pass --mysql-port=$server_mysql_port --mysql-socket=$server_mysql_socket --mysql-db=$server_mysql_db --mysql-host=$server_mysql_host");
		system("ssh $server_ssh_user\@$server_ipaddress \"./$perlclient --snmp-host=$server_snmp_local_address --snmp-port=$server_snmp_port --snmp-rocommunity=$server_snmp_rocommunity --snmp-version=$server_snmp_version --mysql-user=$server_mysql_user --mysql-pass=$server_mysql_pass --mysql-port=$server_mysql_port --mysql-socket=$server_mysql_socket --mysql-db=$server_mysql_db --mysql-host=$server_mysql_host\" > $xmlfile");
		alarm 0;
		};

	if ($@  eq "ssh connection timeout reached\n") { 
	    $active_status = $active;
	    $updated_status = '2';
	    
	    if($active_status != $updated_status) {		
		my $dbh2 = DBI->connect(
				       "DBI:mysql:$mysql_w_db:$mysql_w_host",
				       $mysql_w_user,
				       $mysql_w_pass,
				       {
					   PrintError => 0,
					   RaiseError => 0
					   }
				       ) or error_report("$DBI::errstr");
		
		my $sql2 = "UPDATE server_list set active = '2' where id = $server_id;";
		debug_report("New status: connection with $server_hostname could not be established, updating database, setting active = '2'");
		
		my $sth2 = $dbh2->prepare($sql2) or error_report("$DBI::errstr");
		$sth2->execute or error_report("$DBI::errstr");
		$sth2->finish;
		$dbh2->disconnect;
	    }
	    else {
		debug_report("Same status: connection with $server_hostname still down, continuing with server loop.");
	    }
	}
	else {	    
	    print "EXEC stats gather script for host: $server_hostname $server_ssh_user\@$server_ipaddress active: $active\n";
	    system("./kontroll-stats-gather-5.0.x_linux-x86-2.0.1.pl \"$xmlfile\" \"$server_id\" \"$active\" \"$server_hostname\"");	
	}
    }   
    $sth->finish;
    $dbh->disconnect;
}

config_connect();
debug_clear();
debug_report("#### server-loop process start");
get_list();
debug_report("#### server-loop process end");
