#! /usr/bin/perl
################################################################################
## NAME: kontroll-client-5.0.x_linux-x86.pl
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
use Net::SNMP;
use Getopt::Long;
use POSIX qw(strftime);
use Sys::Hostname;
use DBI;
use Time::HiRes qw(gettimeofday tv_interval);

#GLOBS 
my $server_host = hostname; #using Sys::Hostname
my $name = "kontroll-client_linux-x86.pl";
my $website = "http://kontrollsoft.com";
my $package_version = "2.0";
my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;

sub start_xml {
    print<<XML
<?xml version="1.0" encoding="UTF-8"?>
<!-- generator="$name" -->
<!-- website="$website" -->
<!-- package_ver="$package_version" -->
<!-- copyright-notice "Copyright 2008, Matt Reid" -->
<!-- license-type "BSD http://www.opensource.org/licenses/bsd-license.php" -->
 <kontrollbase version="2.0">
  <server hostname="$server_host">
   <datetime>$datetime</datetime>
XML
}

sub end_xml {
    print<<XML
  </server>
 </kontrollbase>
XML
}

sub error_report {
    my $err = $_[0];
    print $err;
    end_xml();
    exit 1;
}

sub get_snmp_os_stats {
    my ($server_snmp_local_address,
	$server_snmp_port,
	$server_snmp_rocommunity,
	$server_snmp_version,
	$snmp_timeout,
	$snmp_retries) = @_;
    
    my ($session, $error) = Net::SNMP->session(
	-hostname  => "$server_snmp_local_address",
	-community => "$server_snmp_rocommunity",
	-port      => "$server_snmp_port",
	-timeout   => "$snmp_timeout",
	-retries  =>  "$snmp_retries"
	);
    
    if (!defined($session)) {
	error_report("<error type=\"snmp\"><![CDATA[$error]]></error>");
    }
    
    my $sysSwapTotal = '<item name="os_swap_total"><![CDATA[';
    my $sysSwapFree = '<item name="os_swap_free"><![CDATA[';
    my $sysRamTotal = '<item name="os_mem_total"><![CDATA[';
    my $sysRamUsed = '<item name="os_mem_used"><![CDATA[';
    my $sysLoad1 = '<item name="os_load_1"><![CDATA[';
    my $sysLoad5 = '<item name="os_load_5"><![CDATA[';
    my $sysLoad15 = '<item name="os_load_15"><![CDATA[';
    my $sysCpuUser = '<item name="os_cpu_user"><![CDATA[';
    my $sysCpuSystem = '<item name="os_cpu_system"><![CDATA[';
    my $sysCpuIdle = '<item name="os_cpu_idle"><![CDATA[';
    
    my $sysSwapTotal_OID = '.1.3.6.1.4.1.2021.4.3.0';
    my $sysSwapFree_OID = '.1.3.6.1.4.1.2021.4.4.0';
    my $sysRamTotal_OID = '.1.3.6.1.4.1.2021.4.5.0';
    my $sysRamUsed_OID = '.1.3.6.1.4.1.2021.4.6.0';
    my $sysLoad1_OID = '.1.3.6.1.4.1.2021.10.1.3.1';
    my $sysLoad5_OID = '.1.3.6.1.4.1.2021.10.1.3.2';
    my $sysLoad15_OID = '.1.3.6.1.4.1.2021.10.1.3.3';
    my $sysCpuUser_OID = '.1.3.6.1.4.1.2021.11.9.0';
    my $sysCpuSystem_OID = '.1.3.6.1.4.1.2021.11.10.0';
    my $sysCpuIdle_OID = '.1.3.6.1.4.1.2021.11.11.0';
    
    my @identifiers = (
	$sysSwapTotal,
	$sysSwapFree,
	$sysRamTotal,
	$sysRamUsed,
	$sysLoad1,
	$sysLoad5,
	$sysLoad15,
	$sysCpuUser,
	$sysCpuSystem,
	$sysCpuIdle
	);
    
    my @oids = (
	$sysSwapTotal_OID,
	$sysSwapFree_OID,
	$sysRamTotal_OID,
	$sysRamUsed_OID,
	$sysLoad1_OID,
	$sysLoad5_OID,
	$sysLoad15_OID,
	$sysCpuUser_OID,
	$sysCpuSystem_OID,
	$sysCpuIdle_OID
	);
    
    my $count = 0;
    my $result = undef;
    my @vars = [];
    $vars[$count] = [];

    foreach my $request (@oids) {
	$result = $session->get_request(
	    -varbindlist => [$request] );
	
	if (!defined($result)) {
	    $error = $session->error;
	    $session->close;
	    error_report("<error type=\"snmp\"><![CDATA[SNMP: $error]]></error>\n");
	}
	
	# start making our nested array. 
	# ie: $vars[0][0]='$os_swap_total' 
	# and $vars[0][1]='$result->{$request} for result of $sysSwapTotal_OID'
	
	$vars[$count][0] = $identifiers[$count];
	$vars[$count][1] = $result->{$request};

	if($count < 4) {
	    $vars[$count][1] = ($vars[$count][1] * 1024);
	}

	print "   ".$vars[$count][0].$vars[$count][1]."]]></item>\n";
	$count++;
    }
    
    $session->close;
    return 0;
}

sub get_mysql_stats {
    my($server_mysql_user,
       $server_mysql_pass,
       $server_mysql_port,
       $server_mysql_socket,
       $server_mysql_db,
       $server_mysql_host) = @_;

    my $sql0 = "show global variables;";
    my $sql1 = "show global status;";
    my $sql2 = "select count(SCHEMA_NAME) from INFORMATION_SCHEMA.SCHEMATA;"; #number of schema
    my $sql3 = "select count(TABLE_NAME) from INFORMATION_SCHEMA.TABLES;"; #number of tables
    my $sql4 = "select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES;"; #overall data size
    my $sql5 = "select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES;"; #overall index size
    my $sql6 = "select count(ENGINE) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';"; #number of innodb tables
    my $sql7 = "select count(ENGINE) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';"; #number of myisam tables
    my $sql8 = "show full processlist;"; #number of connections
    my $sql9 = "select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';"; #size of innodb indexes
    my $sql10 = "select sum(INDEX_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';"; #size of myisam indexes
    my $sql11 = "select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='InnoDB';"; #size of innodb data
    my $sql12 = "select sum(DATA_LENGTH) from INFORMATION_SCHEMA.TABLES where ENGINE='MyISAM';"; #size of myisam data
    my $sql13 = "show slave status;";
    my $sql14 = "select User,Host from user where Select_priv='Y' and Insert_priv='Y' and Update_priv='Y' and Delete_priv='Y' and Create_priv='Y' and Drop_priv='Y' and Reload_priv='Y' and Shutdown_priv='Y' and Process_priv='Y' and File_priv='Y' and References_priv='Y' and Index_priv='Y' and Alter_priv='Y' and Show_db_priv='Y' and Super_priv='Y' and Create_tmp_table_priv='Y' and Lock_tables_priv='Y' and Execute_priv='Y' and Repl_slave_priv='Y' and Repl_client_priv='Y' and Create_view_priv='Y' and Show_view_priv='Y' and Create_routine_priv='Y' and Alter_routine_priv='Y' and Create_user_priv='Y' and Host != 'localhost' AND Host != '127.0.0.1';";
    my $sql15 = "select * from user where Grant_priv='Y' and User != 'root';";
    my $sql16 = "select * from user where User='root' and Host != 'localhost' AND Host != '127.0.0.1';";
    my $sql17 = "select * from user where Password='';";
    my $sql18 = "select * from user where User='';";

    my $dsn = "DBI:mysql:database=$server_mysql_db;host=$server_mysql_host;port=$server_mysql_port;mysql_socket=$server_mysql_socket";
## Optional line if you need to specify a different socket file. Comment out the line above this, then uncomment the line below.
##    my $dsn = "DBI:mysql:database=$server_mysql_db;host=$server_mysql_host;port=$server_mysql_port;mysql_socket=/tmp/mysqld.sock";
    my $dbh = DBI->connect(
	$dsn, 
	$server_mysql_user, 
	$server_mysql_pass,
	{
	    PrintError => 0,
	    RaiseError => 0
	})
	or error_report("<error type=\"mysql-connection-error\"><![CDATA[$DBI::errstr ]]></error>\n");
    
    my $sth = $dbh->prepare($sql0) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'Variable_name'};
	my $varvalue = $row->{'Value'};
	print '   <item name="'.$varname.'"><![CDATA['.$varvalue."]]></item>\n";
    }

    $sth = $dbh->prepare($sql1) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'Variable_name'};
        my $varvalue = $row->{'Value'};
        print '   <item name="'.$varname.'"><![CDATA['.$varvalue."]]></item>\n";
    }

    $sth = $dbh->prepare($sql2) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(SCHEMA_NAME)'};
        print '   <item name="num_schema"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql3) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(TABLE_NAME)'};
        print '   <item name="num_tables"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql4) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(DATA_LENGTH)'};
        print '   <item name="length_data"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql5) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(INDEX_LENGTH)'};
        print '   <item name="length_index"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql6) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(ENGINE)'};
        print '   <item name="engine_count_innodb"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql7) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(ENGINE)'};
        print '   <item name="engine_count_myisam"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql8) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    my $proc_count = 0;
    while(my $row = $sth->fetchrow_hashref) {
	$proc_count++;
    }

    $sth = $dbh->prepare($sql9) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(INDEX_LENGTH)'};
        print '   <item name="engine_innodb_size_index"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql10) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
	my $varname = $row->{'sum(INDEX_LENGTH)'};
        print '   <item name="engine_myisam_size_index"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql11) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
	my $varname = $row->{'sum(DATA_LENGTH)'};
        print '   <item name="engine_innodb_size_data"><![CDATA['.$varname."]]></item>\n";
    }

    $sth = $dbh->prepare($sql12) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    while(my $row = $sth->fetchrow_hashref) {
	my $varname = $row->{'sum(DATA_LENGTH)'};
        print '   <item name="engine_myisam_size_data"><![CDATA['.$varname."]]></item>\n";
    }

    # Replication checks
    my $Slave_IO_Running = "NULL";
    my $Slave_SQL_Running = "NULL";
    my $Seconds_Behind_Master = "NULL";

    $sth = $dbh->prepare($sql13) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) { #if slave is configured/started we get numbers
	while(my $row = $sth->fetchrow_hashref) {		
	    $Slave_IO_Running = $row->{'Slave_IO_Running'};
	    $Slave_SQL_Running = $row->{'Slave_SQL_Running'};
	    $Seconds_Behind_Master = $row->{'Seconds_Behind_Master'};
	    print '   <item name="Slave_IO_Running"><![CDATA['.$Slave_IO_Running."]]></item>\n";
	    print '   <item name="Slave_SQL_Running"><![CDATA['.$Slave_SQL_Running."]]></item>\n";
	    print '   <item name="Seconds_Behind_Master"><![CDATA['.$Seconds_Behind_Master."]]></item>\n";
	}
   }
   else {
	print '   <item name="Slave_IO_Running"><![CDATA['.$Slave_IO_Running."]]></item>\n";
	print '   <item name="Slave_SQL_Running"><![CDATA['.$Slave_SQL_Running."]]></item>\n";
	print '   <item name="Seconds_Behind_Master"><![CDATA['.$Seconds_Behind_Master."]]></item>\n";
    }

    $sth = $dbh->prepare($sql14) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) { 
	print '   <item name="illegal_global_user"><![CDATA[';
	while(my $row = $sth->fetchrow_hashref) {
	    my $IllegalUser = $row->{'User'};
	    my $IllegalHost = $row->{'Host'};
	    print 'Host: '.$IllegalHost.' User:'.$IllegalUser.",";
	}
	print "]]></item>\n";
    }
    else {
	print '   <item name="illegal_global_user"><![CDATA[0]]></item>\n';
    }
    
    $sth = $dbh->prepare($sql15) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) {
	print '   <item name="illegal_grant_user"><![CDATA[';
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
	    print 'Host: '.$IllegalHost.' User:'.$IllegalUser.",";
        }
	print "]]></item>\n";
    }
    else {
        print "   <item name=\"illegal_grant_user\"><![CDATA[0]]></item>\n";
    }

    $sth = $dbh->prepare($sql16) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) {
	print '   <item name="illegal_remote_root"><![CDATA[';
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
	    print 'Host: '.$IllegalHost.' User:'.$IllegalUser.",";
        }
	print "]]></item>\n";
    }
    else {
        print "   <item name=\"illegal_remote_root\"><![CDATA[0]]></item>\n";
    }

    $sth = $dbh->prepare($sql17) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) {
	print '   <item name="illegal_user_nopass"><![CDATA[';
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
	    print 'Host: '.$IllegalHost.' User:'.$IllegalUser.",";
        }
	print "]]></item>\n";
    }
    else {
        print "   <item name=\"illegal_user_nopass\"><![CDATA[0]]></item>\n";
    }

    $sth = $dbh->prepare($sql18) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    if($sth->fetchrow_hashref) {
	print '   <item name="illegal_user_noname"><![CDATA[';
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
	    print 'Host: '.$IllegalHost.' User:'.$IllegalUser.",";
        }
	print "]]></item>\n";
    }
    else {
        print "   <item name=\"illegal_user_noname\"><![CDATA[0]]></item>\n";
    }


    print '   <item name="num_connections"><![CDATA['.$proc_count."]]></item>\n";    
    $sth->finish;
    $dbh->disconnect;
}

sub get_cnf {
    my $cnf = "/etc/my.cnf";
    open(DAT, $cnf) || print "<error type=\"mysql\"><![CDATA[Could not open cnf file $cnf]]></error>\n";
    my @data=<DAT>;
    close(DAT);
    print "   <item name=\"cnf_file\"><![CDATA[";    
    foreach my $item(@data) { chomp($item);} #remove carriage returns
    foreach my $item(@data) { 
	print $item."\n";
    } 
    print "]]></item>\n";
}

#### END FUNTIONS

#### BEGIN OPERATIONS
my $server_snmp_local_address = 'localhost';
my $server_snmp_port = '161';
my $server_snmp_rocommunity = 'public';
my $server_snmp_version = '1';
my $server_mysql_port = '3306';
my $server_mysql_socket = '/var/run/mysql.sock';
my $server_mysql_db = 'mysql';
my $server_mysql_user = 'root';
my $server_mysql_pass = '';
my $server_mysql_host = 'localhost';
my $snmp_timeout = 5;
my $snmp_retries = 2;
my $help = undef;
my $verbose = undef;

GetOptions (
    'snmp-host=s' => \$server_snmp_local_address, 
    'snmp-port=i' => \$server_snmp_port, 
    'snmp-rocommunity=s' => \$server_snmp_rocommunity, 
    'snmp-version=i' => \$server_snmp_version,
    'snmp-timeout=i' => \$snmp_timeout,
    'snmp-retries=i' => \$snmp_retries,
    'mysql-user=s' => \$server_mysql_user,
    'mysql-pass=s' => \$server_mysql_pass,
    'mysql-port=i' => \$server_mysql_port,
    'mysql-socket=s' => \$server_mysql_socket,
    'mysql-db=s' => \$server_mysql_db,
    'mysql-host=s' => \$server_mysql_host,
    'verbose' => \$verbose,
    'help' => \$help
    );

if(!$ARGV[0]) { $ARGV[0] = '';}
if($help || $ARGV[0] eq "help" || $ARGV[0] eq "?") {
print<<HELP;
####################################
$name
Gets OS and MySQL stats, outputs XML
$website
package version: $package_version
####################################
--help        = this message

--snmp-host        = snmp host address
--snmp-port        = snmp port
--snmp-retries     = snmp retries
--snmp-rocomminity = snmp rocommunity
--snmp-timeout     = snmp timeout
--snmp-version     = snmp version
--mysql-user       = mysql username
--mysql-pass       = mysql password
--mysql-port       = mysql port
--mysql-socket     = mysql socket
--mysql-db         = mysql database
--mysql-host       = mysql host
                
defaults if variables not specified
snmp-host:        localhost
snmp-port:        161
snmp-rocommunity: public
snmp-version:     1
snmp-timeout:     5
snmp-retries:     2
mysql-user:       root
mysql-pass:       <blank>
mysql-port:       3306
mysql-socket:       /var/run/mysql.sock
mysql-db:         mysql
mysql-host:       localhost

HELP
}

else {
    if($verbose) {
    print<<GO;
####################################
$name
Gets OS and MySQL stats, outputs XML
$website
package version: $package_version
####################################
Current Settings
snmp address:     $server_snmp_local_address
snmp port:        $server_snmp_port
snmp rocommunity: $server_snmp_rocommunity
snmp version:     $server_snmp_version
snmp timeout:     $snmp_timeout
snmp retries:     $snmp_retries
mysql user:       $server_mysql_user
mysql pass:       $server_mysql_pass
mysql port:       $server_mysql_port
mysql socket:       $server_mysql_socket
mysql db:         $server_mysql_db
mysql host:       $server_mysql_host

GO
    }
    my $t0 = [gettimeofday]; #start timer
    start_xml();
    get_snmp_os_stats(
	$server_snmp_local_address,
	$server_snmp_port,
	$server_snmp_rocommunity,
	$server_snmp_version,
	$snmp_timeout,
	$snmp_retries
	);
    get_mysql_stats(
	$server_mysql_user,
	$server_mysql_pass,
	$server_mysql_port,
	$server_mysql_socket,
	$server_mysql_db,
	$server_mysql_host
	);
    get_cnf();
    my $t1 = [gettimeofday]; #end timer
    my $elapse = tv_interval $t0, $t1; #calculate time
    print "   <item name=\"collection_time_elapse\"><![CDATA[$elapse]]></item>\n";
    end_xml();
}
