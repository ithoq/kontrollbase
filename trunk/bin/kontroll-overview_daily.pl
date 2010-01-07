#! /usr/bin/perl
################################################################################
## NAME: kontroll-overview_daily.pl
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

sub overview_daily {
    my $dbh = DBI->connect( 
        "DBI:mysql:$mysql_r_db:$mysql_r_host", 
        $mysql_r_user, 
        $mysql_r_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
    ) or error_report("$DBI::errstr");

    my $sql9 = "select ((MAX(os_mem_used)) / POWER(1024,3)) max_os_mem_used, ((MIN(os_mem_used)) / POWER(1024,3)) min_os_mem_used, ((AVG(os_mem_used)) / POWER(1024,3)) avg_os_mem_used, ((STDDEV_POP(os_mem_used)) / POWER(1024,3))stdev_os_mem_used, ((MAX(length_data + length_index)) / POWER(1024,3)) max_size, ((MIN(length_data + length_index)) / POWER(1024,3)) min_size, ((AVG(length_data + length_index)) / POWER(1024,3)) avg_size, ((STDDEV_POP(length_data + length_index)) / POWER(1024,3)) stdev_size, MAX(num_connections) max_connections,  MIN(num_connections) min_connections, AVG(num_connections) avg_connections, STDDEV_POP(num_connections) stdev_connections, MAX(queries_per_second) max_qps, MIN(queries_per_second) min_qps, AVG(queries_per_second) avg_qps, STDDEV_POP(queries_per_second) stdev_qps from server_statistics where DATE_SUB(CURDATE(), INTERVAL 7 DAY)";

    my $sth9 = $dbh->prepare($sql9) or error_report("$DBI::errstr");

    debug_report("#### overview_daily queries prepared.");
    $sth9->execute or error_report("$DBI::errstr");
    debug_report("#### overview_daily queries executed.");
    $sth9->finish;

    debug_report("#### overview_daily statement handlers finished.");
    $dbh->disconnect;
    debug_report("#### overview_daily database handler disconnected.");
}

config_connect();
debug_report("#### overview_daily start");
overview_daily();
debug_report("#### overview_daily end");
