#! /usr/bin/perl
################################################################################
## NAME: kontroll-server_loop-5.0.x_linux-x86.pl
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

my $mysql_r_user = undef;
my $mysql_r_pass = undef;
my $mysql_r_db = undef;
my $mysql_r_host = undef;
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

sub qcache_preload {
    my $dbh = DBI->connect( 
        "DBI:mysql:$mysql_r_db:$mysql_r_host", 
        $mysql_r_user, 
        $mysql_r_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
    ) or error_report("$DBI::errstr");

    my $sql0 = "select max(queries_per_second) as queries_per_second,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql1 = "select max(num_connections) as num_connections,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql2 = "select max(os_load_15) as os_load_15,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql3 = "select max(os_mem_used) as os_mem_used,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql4 = "select max(os_cpu_idle) as os_cpu_idle,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql5 = "select max(length_data) as length_data,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql6 = "select max(length_index) as length_index,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql7 = "select Bytes_received,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    my $sql8 = "select Bytes_sent,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";

    my $sth0 = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    my $sth1 = $dbh->prepare($sql1) or error_report("$DBI::errstr");
    my $sth2 = $dbh->prepare($sql2) or error_report("$DBI::errstr");
    my $sth3 = $dbh->prepare($sql3) or error_report("$DBI::errstr");
    my $sth4 = $dbh->prepare($sql4) or error_report("$DBI::errstr");
    my $sth5 = $dbh->prepare($sql5) or error_report("$DBI::errstr");
    my $sth6 = $dbh->prepare($sql6) or error_report("$DBI::errstr");
    my $sth7 = $dbh->prepare($sql7) or error_report("$DBI::errstr");
    my $sth8 = $dbh->prepare($sql8) or error_report("$DBI::errstr");
    debug_report("#### query_cache_preload queries prepared.");
    $sth0->execute or error_report("$DBI::errstr");
    $sth1->execute or error_report("$DBI::errstr");
    $sth2->execute or error_report("$DBI::errstr");
    $sth3->execute or error_report("$DBI::errstr");
    $sth4->execute or error_report("$DBI::errstr");
    $sth5->execute or error_report("$DBI::errstr");
    $sth6->execute or error_report("$DBI::errstr");
    $sth7->execute or error_report("$DBI::errstr");
    $sth8->execute or error_report("$DBI::errstr");
    debug_report("#### query_cache_preload queries executed.");
    $sth0->finish;
    $sth1->finish;
    $sth2->finish;
    $sth3->finish;
    $sth4->finish;
    $sth5->finish;
    $sth6->finish;
    $sth7->finish;
    $sth8->finish;
    debug_report("#### query_cache_preload statement handlers finished.");
    $dbh->disconnect;
    debug_report("#### query_cache_preload database handler disconnected.");
}

config_connect();
debug_report("#### query_cache_preload start");
qcache_preload();
debug_report("#### query_cache_preload end");
