#! /usr/bin/perl
################################################################################
## NAME: kontroll-reporter-5.0.x_linux-x86.pl
## VERSION: 2.0.1
## DATE: 2008-12-01
## AUTHOR: Matt Reid
## WEBSITE: http://kontrollsoft.com
## EMAIL: kontact@kontrollsoft.com
## LICENSE: PLEASE REFER TO THE LICENSE.txt file bundled with this software release
## to understand your rights and options for using this software.
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
my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
my $tmpfiletime = strftime "%Y-%m-%d%H%M%S", localtime;
my $commit_report = "tmp/kontrollbase-reporter-$tmpfiletime.log";

# this is really dirty
my($ALERT00,$ALERT01,$ALERT02,$ALERT03,$ALERT04,$ALERT05,$ALERT06,$ALERT07,$ALERT08,$ALERT09,$ALERT10,$ALERT11,$ALERT12,$ALERT13,$ALERT14,$ALERT15,$ALERT16,$ALERT17,$ALERT18,$ALERT19,$ALERT20,$ALERT21,$ALERT22,$ALERT23,$ALERT24,$ALERT25,$ALERT26,$ALERT27,$ALERT28,$ALERT29,$ALERT30,$ALERT31,$ALERT32,$ALERT33,$ALERT34,$ALERT35,$ALERT36,$ALERT37,$ALERT38,$ALERT39,$ALERT40,$ALERT41,$ALERT42,$ALERT43,$ALERT44,$ALERT45,$ALERT46,$ALERT47,$ALERT48,$ALERT49,$ALERT50,$ALERT51,$ALERT52,$ALERT53,$ALERT54,$ALERT55,$ALERT56,$ALERT57,$ALERT58,$ALERT100,$ALERTSNMP,$ALERTMYSQL) = 0;
# I feel ashamed for those variables

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

sub writer {
    my $note = $_[0];
    $note = $note."\n";
#    print $note;
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0600);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;
    close FILE;
}

sub writerx {
    my $note = $_[0];
    $note = "<detail>".$note."</detail>\n";
#    print $note;
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0600);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;
    close FILE;
}

sub flush_writer {
    debug_report("truncating $commit_report");
    my $note = "";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0600);
    open FILE, ">$commit_report" or die $!;
    print FILE $note;
    close FILE;
    return;
}

sub debug_report {
    my $note = $_[0];
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | reporter-5.0.x_linux-x86: ".$note."\n";
    print $note;
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0600);
    open FILE, ">>$debug_log" or die $!;
    print FILE $note;
    close FILE;
}

sub error_report {
    my $err = $_[0];
    my $errtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $err = $errtime." | reporter-5.0.x_linux-x86: ".$err."\n";
    print $err."\n";
    sysopen(FILE, $error_log, O_RDWR|O_EXCL|O_CREAT, 0600);    
    open FILE, ">>$error_log" or die $!; 
    print FILE $err; 
    close FILE;   
    exit 1;
}

sub human {
    my $val = $_[0];
    if($val < 1048576) {
	$val = convert("$val byte", "KB");
        $val =~ s/KB//g;
        $val =~ s/ //g;
        $val =~ s/\..*//g;
	$val = "$val K";
        $val =~ s/ //g;
	return $val;
    }
    elsif($val => 1048576 && $val < 1073741824) {
	$val = convert("$val byte", "MB");
	$val =~ s/MB//g;
	$val =~ s/ //g;
	$val =~ s/\..*//g;
	$val = "$val M";
	$val =~ s/ //g;
	return $val;
    }
    elsif($val => 1073741824) {
        $val = convert("$val byte", "GB");	
        $val =~ s/GB//g;
        $val =~ s/ //g;
        $val =~ s/\..*//g;
	$val = "$val G";
        $val =~ s/ //g;
	return $val;
    }
    else {
	return $val;
    }
    
}

sub get_info {
    my $id = $_[0];
    my $dbh = DBI->connect(
        "DBI:mysql:$mysql_r_db:$mysql_r_host",
        $mysql_r_user,
        $mysql_r_pass,
	{
            PrintError => 0,
            RaiseError => 0
	}
	) or error_report("$DBI::errstr");
    
    my $alert_name = undef;
    my $alert_desc = undef;
    my $alert_links = undef;
    my $alert_solution = undef;
    my $alert_function = undef;
    my $alert_category = undef;
    
    my $sql0 = "select * from alerts_def where id = '$id' limit 1;";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	 $alert_name = $row->{'alert_name'};
	 $alert_desc = $row->{'alert_desc'};
	 $alert_links = $row->{'alert_links'};
	 $alert_solution = $row->{'alert_solution'};
	 $alert_function = $row->{'alert_function'};
	 $alert_category = $row->{'alert_category'};
    }
    return($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category);
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

    my $sql0 = "select t1.id,t1.server_ipaddress,t1.server_hostname,t2.id as server_client_id ,t2.server_client_name from server_list as t1, server_client as t2 where t1.active >='1' and t1.server_client_id = t2.id order by id;";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	my $server_id = $row->{'id'};
	my $server_ipaddress = $row->{'server_ipaddress'};
	my $server_hostname = $row->{'server_hostname'};
	my $server_client_name = $row->{'server_client_name'};
	
	debug_report("working on $server_client_name,$server_id, $server_hostname\n");
	analyze_data($server_id,$server_client_name,$server_hostname);
    }   
    $sth->finish;
    $dbh->disconnect;
}

sub round {
    my($number) = shift;
    return int($number + .5 * ($number <=> 0));
}

sub alert_01 {
    writer("");
    my $Aborted_connects = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("1");
    writer("<alert id=\"1\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($Aborted_connects > 99) {
	$ALERT01=1; 
	writer("<description>$alert_desc</description>");
	writer("<links>$alert_links</links>");
	writer("<solution>$alert_solution</solution>");
    } 
    else {
	writerx("You are not having a problem with aborted connections.");
	$ALERT01 =0;
    }
    writer("</alert>");
    return $ALERT01;
}

sub alert_03 {
    writer("");
    my $log_bin = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("3");
    writer("<alert id=\"3\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($log_bin eq "OFF") {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT03=1;
    } 
    else {
	writerx("Binary log settings are fine.");
	$ALERT03=0;
    }
    writer("</alert>");
    return $ALERT03;
}

sub alert_04 {
    writer("");
    my $sync_binlog = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("4");
    writer("<alert id=\"4\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($sync_binlog == 0) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT04=1;
    } 
    else {
	writerx("The sync_binlog setting is fine.");
	$ALERT04=0;
    }
    writer("</alert>");
    return $ALERT04;
}
sub alert_05 {
    writer("");
    my($Max_used_connections,$max_connections,$Threads_connected) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("5");
    writer("<alert id=\"5\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $connections_ratio = round((($Max_used_connections * 100)/$max_connections),2);
    writerx("Current max_connections = $max_connections");
    writerx("Current Threads_connected = $Threads_connected");
    writerx("Historic Max_used_connections = $Max_used_connections");
    writerx("The number of used connections is: $connections_ratio% of the maximum configured.");

    if($connections_ratio > 85) { 
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT05 = 1; 
    } 
    elsif($connections_ratio <= 10) {
	writer("<description>$alert_desc</description>");
	writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Currently using less than 10% of your max_connections. Lowering your max_connections can help avoid an over allocation of memory resources.");
        writerx("Decrease the max_connections variable - server is using $connections_ratio% of current max");
	$ALERT05 = 1;	
    }
    
    else {
        writerx("The connection usage and max_connections variable is ok.");
	$ALERT05 = 0;
    }    
    writer("</alert>");
    return $ALERT05;
}

sub alert_06 {
    writer("");
    my($Qcache_lowmem_prunes,$query_cache_size,$Qcache_free_memory) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("6");
    if($query_cache_size == 0) {
	writer("<alert id=\"6\">");
	writerx("Query cache NOT enabled. Please enable.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
	$ALERT06=1;
	return $ALERT06;
    }
    else {
	my $Qratio = round((($query_cache_size - $Qcache_free_memory) * 100) / $query_cache_size);
	writer("<alert id=\"6\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	
	my $query_cache_size_HR = human($query_cache_size);
	my $Qcache_free_memory_HR = human($Qcache_free_memory);
	
	writerx("Current Qcache_lowmem_prunes = $Qcache_lowmem_prunes");
	writerx("Current Qcache_free_memory = $Qcache_free_memory_HR");
	writerx("Current query_cache size = $query_cache_size_HR");
	writerx("Current query cache usage ratio = $Qratio%");
	
	
	if(($Qcache_lowmem_prunes >= 50) && ((($query_cache_size - $Qcache_free_memory) / $query_cache_size) >= .85)) {
	    my $query_cache_size_R = human(($query_cache_size - $Qcache_free_memory) * 1.25);
	    writerx("query cache size recommended size = $query_cache_size_R");
	    
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT06=1;
	} 
	else {
	    writerx("Query cache is not too small.");
	    $ALERT06=0;
	}
	writer("</alert>");
	return $ALERT06;
    }
}

sub alert_07 {
    writer("");
    my($query_cache_size,$Qcache_free_memory,$Qcache_lowmem_prunes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("7");
    if($query_cache_size == 0) {
	writer("<alert id=\"7\">");
        writerx("Query cache NOT enabled. Please enable.");
        writer("<description>$alert_desc</description>");
	writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writer("</alert>");
        $ALERT07=1;
        return $ALERT07;
    }
    else {
	my$Qratio = round((($query_cache_size - $Qcache_free_memory) * 100) / $query_cache_size);
	writer("<alert id=\"7\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	
	my $query_cache_size_HR = human($query_cache_size);
	my $Qcache_free_memory_HR = human($Qcache_free_memory);
	
	writerx("Current Qcache_lowmem_prunes = $Qcache_lowmem_prunes");
	writerx("Current Qcache_free_memory = $Qcache_free_memory_HR");
	writerx("Current query_cache size = $query_cache_size_HR");
	writerx("Current query cache usage ratio = $Qratio%");
	
	if((($query_cache_size - $Qcache_free_memory) / $query_cache_size) <= .25) {
	    my $query_cache_size_R = human(($query_cache_size - $Qcache_free_memory) * 1.25);
	    writerx("query cache size recommended size = $query_cache_size_R");    
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT07=1;
	}
	else {
	    writerx("Query cache is not too large.");
	    $ALERT07=0;
	}
	writer("</alert>");
	return $ALERT07;
    }
}

sub alert_08 {
    writer("");
    my($os_mem_total,$max_heap_table_size,$tmp_table_size,$read_buffer_size,$read_rnd_buffer_size,$sort_buffer_size,$thread_stack,$join_buffer_size,$binlog_cache_size,$max_connections,$Max_used_connections,$innodb_buffer_pool_size,$innodb_additional_mem_pool_size,$innodb_log_buffer_size,$key_buffer_size,$query_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("8");
    writer("<alert id=\"8\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $total_system_memory=$os_mem_total;
    my $effective_tmp_table_size = undef;
    
    if($max_heap_table_size >= $tmp_table_size) {
	$effective_tmp_table_size=$max_heap_table_size;
    }
    else {
	$effective_tmp_table_size=$tmp_table_size;
    }
    my $per_thread_buffers=(($read_buffer_size+$read_rnd_buffer_size+$sort_buffer_size+$thread_stack+$join_buffer_size+$binlog_cache_size)*$max_connections);
    my $per_thread_max_buffers=(($read_buffer_size+$read_rnd_buffer_size+$sort_buffer_size+$thread_stack+$join_buffer_size+$binlog_cache_size)*$Max_used_connections);
    my $global_buffers=($innodb_buffer_pool_size+$innodb_additional_mem_pool_size+$innodb_log_buffer_size+$key_buffer_size+$query_cache_size);
    my $max_memory=($global_buffers+$per_thread_max_buffers);
    my $total_memory=($global_buffers+$per_thread_buffers);
      
    my $pct_of_sys_mem=round(($total_memory*100)/$total_system_memory);     

    my $per_thread_buffers_HR = human($per_thread_buffers);
    my $per_thread_max_buffers_HR = human($per_thread_max_buffers);
    my $global_buffers_HR = human($global_buffers);
    my $max_memory_HR = human($max_memory);
    my $total_memory_HR = human($total_memory);
    my $total_system_memory_HR = human($total_system_memory);

    writerx("Per-Thread buffers: $per_thread_buffers_HR");
    writerx("Per-Thread max allocated: $per_thread_max_buffers_HR");
    writerx("Global buffers: $global_buffers_HR");
    writerx("Max memory ever allocated: $max_memory_HR");
    writerx("Max memory possible by configuration: $total_memory_HR");
    writerx("Available system memory: $total_system_memory_HR");
    writerx("Memory allocation ratio to available system memory: $pct_of_sys_mem %");

    if($pct_of_sys_mem > 85) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT08=1;
    }
    else {
	writerx("Memory usage is fine.");
	$ALERT08=0;
    }
    writer("</alert>");
    return $ALERT08;
}

sub alert_09 {
    writer("");
    my($read_buffer_size,$Handler_read_rnd_next,$Com_select)= @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("9");
    writer("<alert id=\"9\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $full_table_scans=($Handler_read_rnd_next/$Com_select);
    if($Com_select > 0) {
	if(($full_table_scans >= 4000) && ($read_buffer_size >= 2097152)) {
	    $ALERT09=1; 
	    writerx("You have a high ratio of sequential access requests to SELECTs.");
	    writerx("You may benefit from raising the read_buffer_size and/or improving your use of indexes.");
	    writerx("Increase read_buffer_size, Current size is $read_buffer_size.");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT09=1;
	}
	elsif($read_buffer_size > 8388608) {
	    writerx("read_buffer_size is over 8 MB");
	    writerx("Decrease read_buffer_size, Current size is $read_buffer_size");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT09=1;
	}
	else {
	    writerx("Your read_buffer_size setting is fine.");
	    $ALERT09=0;
	}
    }
    else {
	writerx("Your read_buffer_size is fine");
	$ALERT09=0;
    }
    writer("</alert>");
    return $ALERT09;    
}

sub alert_10 {
    writer("");
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("10");
    writer("<alert id=\"10\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $tmp_disk_tables=undef;
    if($Created_tmp_tables == 0) {
        $tmp_disk_tables=0;
    }
    else {
        $tmp_disk_tables=round((($Created_tmp_disk_tables*100)/$Created_tmp_tables));
    }

    writerx("Current max_heap_table_size = $max_heap_table_size");
    writerx("Current tmp_table_size = $tmp_table_size");
    writerx("Of $Created_tmp_tables temp tables, $tmp_disk_tables % were created on disk");

    if($tmp_table_size > $max_heap_table_size) {
        writerx("Effective in-memory tmp_table_size is limited to max_heap_table_size.");
	writerx("Increase the size of max_heap_table_size.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	$ALERT10=1;
    }
    elsif($tmp_disk_tables >= 25) {
        writerx("Increase tmp_table_size, Current size is $tmp_table_size");
        writerx("Increase max_heap_table_size, Current size is $max_heap_table_size.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT10=1;
    }
    else {
        writerx("Created disk tmp tables ratio seems fine.");
	$ALERT10=0;
    }
    writer("</alert>");
    return $ALERT10;
}

sub alert_11 {
    writer("");
    my($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("11");
    writer("<alert id=\"11\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    my $allowed_innodb_buffer_size = ($os_mem_total * .85);
    my $needed_innodb_buffer_size = (($engine_innodb_size_index + $engine_innodb_size_data)* 1.10);

    my $innodb_buffer_pool_sizeHR = human($innodb_buffer_pool_size);
    my $allowed_innodb_buffer_sizeHR = human($allowed_innodb_buffer_size);
    my $needed_innodb_buffer_sizeHR = human($needed_innodb_buffer_size);
    my $engine_innodb_size_indexHR = human($engine_innodb_size_index);
    my $engine_innodb_size_dataHR = human($engine_innodb_size_data);
    my $os_mem_totalHR = human($os_mem_total);
    my $innodb_recommend = human((($needed_innodb_buffer_size * 100) / 85));

    if($Innodb_buffer_pool_pages_free == 0) {
        $Innodb_buffer_pool_pages_free = 1;
    }
    if($Innodb_buffer_pool_pages_total == 0) {
        $Innodb_buffer_pool_pages_total = 1;
    }
    my $Innodb_buffer_pool_pages_ratio = ($Innodb_buffer_pool_pages_free/$Innodb_buffer_pool_pages_total);

    writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
    writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
    writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
    writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR"); 
    writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
    writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
    writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
    writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");
    writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");
    
    if($innodb_buffer_pool_size < $needed_innodb_buffer_size) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT11=1;
    }
    else {
        writerx("You do not need to increase the size of the innodb_buffer_pool_size based on the data+index sizes.");
        $ALERT11=0;
    }

    if($Innodb_buffer_pool_pages_ratio > .995) {
        writerx("You may want to consider increasing the innodb_buffer_pool_size based on the Innodb_buffer_pool_pages_ratio.");
	$ALERT11=1;
    }
    else  {
	$ALERT11=0;
    }
    writer("</alert>");
    return $ALERT11;
}

sub alert_12 {
    writer("");
    my($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("12");
    writer("<alert id=\"12\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $allowed_innodb_buffer_size = ($os_mem_total * .85);
    my $needed_innodb_buffer_size = (($engine_innodb_size_index + $engine_innodb_size_data)* 1.10);

    my $innodb_buffer_pool_sizeHR = human($innodb_buffer_pool_size);
    my $allowed_innodb_buffer_sizeHR = human($allowed_innodb_buffer_size);
    my $needed_innodb_buffer_sizeHR = human($needed_innodb_buffer_size);
    my $engine_innodb_size_indexHR = human($engine_innodb_size_index);
    my $engine_innodb_size_dataHR = human($engine_innodb_size_data);
    my $os_mem_totalHR = human($os_mem_total);
    my $innodb_recommend = human((($needed_innodb_buffer_size * 100) / 85));

    writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
    writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
    writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
    writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR");
    writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
    writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
    writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
    writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");

    if($Innodb_buffer_pool_pages_free == 0) {
        $Innodb_buffer_pool_pages_free = 1;
    }
    if($Innodb_buffer_pool_pages_total == 0) {
        $Innodb_buffer_pool_pages_total = 1;
    }

    my $Innodb_buffer_pool_pages_ratio = ($Innodb_buffer_pool_pages_free/$Innodb_buffer_pool_pages_total);
    writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");

    if($innodb_buffer_pool_size > $needed_innodb_buffer_size) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT12=1;
    }
    else {
        writer("You do not need to decrease the size of the innodb_buffer_pool_size based on the data+index sizes.");
        $ALERT12=0;
    }
    
    if($Innodb_buffer_pool_pages_ratio < .995) {
	writerx("You may want to consider decreasing the innodb_buffer_pool_size based on the Innodb_buffer_pool_pages_ratio.");
	$ALERT12=1;
    }
    else  {
	$ALERT12=0;
    }
    writer("</alert>");
    return $ALERT12;
}

sub alert_13 {
    writer("");
    my($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("13");
    writer("<alert id=\"13\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $key_cache_miss_rate = undef;
    my $key_buffer_ratio = undef;
    my $key_buffer_ratioRND = undef;
    my $key_buffer_fill = undef;
    my $key_blocks_total = undef;

    if($Key_reads == 0) {
        writerx("No Key_reads. Use some indexes please.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        $key_cache_miss_rate = 0;
        $key_buffer_ratio = 0;
        $key_buffer_ratioRND = 0;
	$ALERT13=1;
    }
    else {
        $key_cache_miss_rate=round($Key_read_requests/$Key_reads);
        if($Key_blocks_unused > 0) {
	    $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
	    $key_buffer_fill=($Key_blocks_used/$key_blocks_total);
	    $key_buffer_ratio=round($key_buffer_fill*100);
	    $key_buffer_ratioRND=round($key_buffer_ratio);
        }
        else {
	    $key_buffer_fill = 0;
	    $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
	    $key_buffer_ratio = 0;
	    $key_buffer_ratioRND = 75;
	}
    }

    my $key_buffer_sizeHR = human($key_buffer_size);
    my $key_blocks_totalHR = human($key_blocks_total);

    if($Key_blocks_used == 0) { $Key_blocks_used = 1;}
    if($key_blocks_total == 0) { $key_blocks_total = 1;}
    print "kbu: $Key_blocks_used mul kbs: $key_buffer_size div by kbt: $key_blocks_total mul 100 div 95";
    my $key_recommend = human((((($Key_blocks_used * $key_buffer_size) / $key_blocks_total) * 100) / 95));

    writerx("Current Key_reads = $Key_reads");
    writerx("Current Key_read_requests = $Key_read_requests");
    writerx("Current Key_blocks_used = $Key_blocks_used");
    writerx("Current Key_blocks_unused = $Key_blocks_unused");
    writerx("Current key_blocks_total: $key_blocks_total");
    writerx("Current buffer fill ratio = $key_buffer_ratio%");    
    writerx("Current cache miss rate is 1:$key_cache_miss_rate");
    writerx("Current key_buffer_size = $key_buffer_sizeHR");
    writerx("Recommended key_buffer_size for 95% fill = $key_recommend");

    if(($key_cache_miss_rate >= 1000) || ($key_buffer_ratio <= 50)) {
	my $key_buffer_sizeC = human($key_buffer_size / 2);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("Your key_buffer_size is too high. (Less than 50% utilized)");
        writerx("You can use these resources elsewhere.");
	writerx("Recommended key_buffer_size = $key_recommend");
#	writerx("Recommend incremental decrease: change to $key_buffer_sizeC");
	$ALERT13=1;
    }
    else {
        writerx("Your key_buffer_size is fine.");
	$ALERT13=0;
    }
    writer("</alert>");
    return $ALERT13;
}

sub alert_14 {
    writer("");
    my($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("14");
    writer("<alert id=\"14\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    my $key_cache_miss_rate = undef;
    my $key_buffer_ratio = undef;
    my $key_buffer_ratioRND = undef;
    my $key_buffer_fill = undef;
    my $key_blocks_total = undef;
    
    if($Key_reads == 0) {
	writerx("No Key_reads. Use some indexes please.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	$key_cache_miss_rate = 0;
	$key_buffer_ratio = 0;
	$key_buffer_ratioRND = 0;
	$ALERT14=1;
    }
    else {
	$key_cache_miss_rate=round($Key_read_requests/$Key_reads);
	if($Key_blocks_unused != 0) {
	    $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
	    $key_buffer_fill=($Key_blocks_used/$key_blocks_total);
	    $key_buffer_ratio=round($key_buffer_fill*100);
	    $key_buffer_ratioRND=round($key_buffer_ratio);
	}
	else {
            $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
            $key_buffer_ratio = 0;
            $key_buffer_ratioRND = 75;
        }
    }

    my $key_buffer_sizeHR = human($key_buffer_size);
    my $key_blocks_totalHR = human($key_blocks_total);

    if($Key_blocks_used == 0) { $Key_blocks_used = 1;}
    if($key_blocks_total == 0) { $key_blocks_total = 1;}
    my $key_recommend = human((((($Key_blocks_used * $key_buffer_size) / $key_blocks_total) * 100) / 95));

    writerx("Current Key_reads = $Key_reads");
    writerx("Current Key_read_requests = $Key_read_requests");
    writerx("Current Key_blocks_used = $Key_blocks_used");
    writerx("Current Key_blocks_unused = $Key_blocks_unused");
    writerx("Current key_blocks_total: $key_blocks_total");
    writerx("Current buffer fill ratio = $key_buffer_ratio%");
    writerx("Current cache miss rate is 1:$key_cache_miss_rate");
    writerx("Current key_buffer_size = $key_buffer_sizeHR");
    writerx("Recommended key_buffer_size for 95% fill = $key_recommend");

    if(($key_cache_miss_rate <= 100) && ($key_cache_miss_rate >= 0) && ($key_buffer_ratioRND >= 80)) {
        my $key_buffer_sizeC = human($key_buffer_size * 2);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("Increase the key_buffer_size (we want between 75-90% buffer fill ratio)");
	writerx("Recommended key_buffer_size = $key_recommend");
#        writerx("Recommend incremental increase: change to $key_buffer_sizeC");
        $ALERT14=1;
    }
    else {
        writerx("Your key_buffer_size is fine.");
        $ALERT14=0;
    }
    writer("</alert>");
    return $ALERT14;
}

sub alert_15 {
    writer("");
    my($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("15");
    writer("<alert id=\"15\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $total_sorts=($Sort_scan+$Sort_range);
    $sort_buffer_size=($sort_buffer_size+8);
    $read_rnd_buffer_size=($read_rnd_buffer_size+8);
    my $sort_buffer_sizeHR = human($sort_buffer_size);
    my $read_rnd_buffer_sizeHR = human($read_rnd_buffer_size);
    my $passes_per_sort = undef;

    writerx("Current sort_buffer_size = $sort_buffer_sizeHR");
    writerx("Current read_rnd_buffer_size = $read_rnd_buffer_sizeHR");

    if($total_sorts == 0) {
        writerx("No sort operations have been performed");
        $passes_per_sort=0;
    }
    if($Sort_merge_passes != 0) {
        $passes_per_sort=($Sort_merge_passes/$total_sorts);
	writerx("Current passes_per_sort = $passes_per_sort");
    }
    else {
        $passes_per_sort=0;
	writerx("Current passes_per_sort = $passes_per_sort");
    }
    if($passes_per_sort >= 2) {
	my $sort_buffer_size_R = human($sort_buffer_size * 2);
        my $read_rnd_buffer_size_R = human($read_rnd_buffer_size * 2);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("# Increase sort_buffer_size, Current size is $sort_buffer_sizeHR");
        writerx("# Recommend: soft_buffer_size = $sort_buffer_size_R");
        writerx("# Increase read_rnd_buffer_size, Current size is $read_rnd_buffer_sizeHR");
        writerx("# Recommend: read_rnd_buffer_size = $read_rnd_buffer_size_R");
	$ALERT15=1;
    }
    else {
        writerx("Sort buffer is not too small.");
	$ALERT15=0;
    }
    writer("</alert>");
    return $ALERT15;
}

sub alert_16 {
    writer("");
    my($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("16");
    writer("<alert id=\"16\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $total_sorts=($Sort_scan+$Sort_range);
    $sort_buffer_size=($sort_buffer_size+8);
    $read_rnd_buffer_size=($read_rnd_buffer_size+8);
    my $sort_buffer_sizeHR=human($sort_buffer_size);
    my $read_rnd_buffer_sizeHR=human($read_rnd_buffer_size);
    my $passes_per_sort = undef;

    writerx("Current sort_buffer_size = $sort_buffer_sizeHR");
    writerx("Current read_rnd_buffer_size = $read_rnd_buffer_sizeHR");

    if($total_sorts == 0) {
        writerx("No sort operations have been performed.");
        $passes_per_sort=0;
    }
    if($Sort_merge_passes != 0) {
        $passes_per_sort=($Sort_merge_passes/$total_sorts);
	writerx("Current passes_per_sort = $passes_per_sort");
    }
    else {
        $passes_per_sort=0;
	writerx("Current passes_per_sort = $passes_per_sort");
    }
    if($passes_per_sort < 2) {
	my $sort_buffer_size_R = human($sort_buffer_size / 2);
	my $read_rnd_buffer_size_R = human($read_rnd_buffer_size / 2);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("# Decrease sort_buffer_size, Current size is $sort_buffer_sizeHR");
	writerx("# Recommend: soft_buffer_size = $sort_buffer_size_R");
        writerx("# Decrease read_rnd_buffer_size, Current size is $read_rnd_buffer_sizeHR");
	writerx("# Recommend: read_rnd_buffer_size = $read_rnd_buffer_size_R");
	$ALERT16=1;
    }
    else {
        writerx("Sort buffer is not too large.");
        $ALERT16=0;
    }
    writer("</alert>");
    return $ALERT16;
}

sub alert_17 {
    writer("");
    my($join_buffer_size,$Select_range_check,$Select_full_join) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("17");
    writer("<alert id=\"17\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    $join_buffer_size=($join_buffer_size+4096);
    my $join_buffer_sizeHR=human($join_buffer_size);
    writerx("Current join_buffer_size = $join_buffer_sizeHR");
    writerx("Current Select_full_join = $Select_full_join");
    writerx("Current Select_range_check = $Select_range_check");
    writerx("You have had $Select_full_join queries where a join could not use an index properly.");
    if(($Select_range_check == 0) && ($Select_full_join == 0)) {
        writerx("Your joins are using indexes properly.");
	$ALERT17=0;
    }
    if($Select_full_join > 0) {
	$ALERT17=1;
    }
    if($Select_range_check > 0) {
        writerx("You have had $Select_range_check joins without keys that check for key usage after each row.");
	$ALERT17=1;	
    }
    if($ALERT17 == 1) {
	my $join_buffer_size_R = ($join_buffer_size * 2);
	my $warn = 0;
	if($join_buffer_size_R >= 4194304) {
	    $join_buffer_size_R = (4194304 - 8192);
	    $warn = 1;
	}
	my $join_buffer_size_R_HR = human($join_buffer_size_R);
	if($warn == 0) {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");

	    writerx("# Recommend a starting point of $join_buffer_size_R_HR");	
	}
	elsif($warn == 1) {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");

	    writerx("Join buffer is already set to 4M or greater. It is not recommended to set this higher than 4M but experiementally you can try it. If this alert does not go away unless your join_buffer_size is set higher than 4M please contact kontact\@kontrollsoft.com and let us know as we are tuning this alert.");
	    $join_buffer_size_R = ($join_buffer_size * 1.5);
	    $join_buffer_size_R_HR = human($join_buffer_size_R);
	    writerx("# Recommend a starting point of $join_buffer_size_R_HR");	    
	}
    }
    writer("</alert>");
    return $ALERT17;
}

sub alert_18 {
    writer("");
    my($join_buffer_size,$Select_range_check,$Select_full_join,$log_queries_not_using_indexes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("18");
    writer("<alert id=\"18\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    $join_buffer_size=($join_buffer_size+4096);
    my $join_buffer_sizeHR=human($join_buffer_size);
    writerx("Current join_buffer_size = $join_buffer_sizeHR");
    writerx("Current Select_full_join = $Select_full_join");
    writerx("Current Select_range_check = $Select_range_check");
    writerx("You have had $Select_full_join queries where a join could not use an index properly.");
    
    if($join_buffer_size > 4194304) {
	$ALERT18 = 1;
	my $join_buffer_size_R = 4194303;
	$join_buffer_size_R = ($join_buffer_size_R - 8192);
	my $join_buffer_size_R_HR = human($join_buffer_size_R);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("# Recommend a starting point of $join_buffer_size_R_HR");
    }
    elsif($join_buffer_size == 4194304) {
        $ALERT18 = 0;
        writerx("Your join_buffer_size is already at the maximum recommended setting.");
        if($Select_full_join > 0 || $Select_range_check > 0 || $log_queries_not_using_indexes eq "ON") {
            writerx("Check your slow queries log to find the joins that are NOT using indexes.");
        }
        elsif($Select_full_join >0 || $Select_range_check> 0 || $log_queries_not_using_indexes eq "OFF") {
            writerx("# Enable log_queries_not_using_indexes in the cnf file so that you can find the join queries that are not using indexes. These queries will show up in the slow log. You may then begin the process of adding the appropriate indexes to your tables.");
        }	
    }
    else {
	$ALERT18=0;
	writerx("Your join_buffer_size is not too large.");	
	if($Select_full_join > 0 || $Select_range_check > 0 || $log_queries_not_using_indexes eq "ON") {
	    writerx("Check your slow queries log to find the joins that are NOT using indexes.");	    
	}
	elsif($Select_full_join >0 || $Select_range_check> 0 || $log_queries_not_using_indexes eq "OFF") {
	    writerx("# Enable log_queries_not_using_indexes in the cnf file so that you can find the join queries that are not using indexes. These queries will show up in the slow log. You may then begin the process of adding the appropriate indexes to your tables.");
	}
    }
    writer("</alert>");
    return $ALERT18;
}

sub alert_19 {
    writer("");
    my($Open_files,$open_files_limit,$table_cache) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("19");
    writer("<alert id=\"19\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    my $thresh = 75;
    my $open_files_ratio = round(($Open_files / $open_files_limit) * 100);
    writerx("Current open_files_limit = $open_files_limit");
    writerx("Current Open_files = $Open_files");
    writerx("Current usage ration = $open_files_ratio %");

    if($open_files_ratio >= $thresh) {	
	my $open_files_limit_R = undef;
	if($open_files_limit <= 65535) {
	    my $tc3 = ($table_cache * 3);
	    if($tc3 <= 65535) {
		$open_files_limit_R = $tc3;
	    }
	    else {
		$open_files_limit_R = 65535; #this is the highest we can go
	    }
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");

	    writerx("# Recommend a starting point of open_files_limit = $open_files_limit_R");
	    $ALERT19=1;
	}
	else {
	    # It should alert but since we can't set it higher than 65535 we'll not alert 
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");

	    writerx("Your Open_files is over the 75% usage threshold of $open_files_limit.");
	    writerx("However, your open_files_limit cannot be set any higher so we are not alerting.");
	    $ALERT19=0;
	}	
    }	
    else {
	$ALERT19=0;
	writerx("Your open_files_limit variable setting is within threshold range of 75% usage.");
    }
    writer("</alert>");
    return $ALERT19;
}

sub alert_20 {
    writer("");
    my($Table_locks_waited,$Table_locks_immediate,$concurrent_insert,$num_tables,$engine_count_innodb,$Questions) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("20");
    writer("<alert id=\"20\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $immediate_locks_miss_rate = undef;
    if($Table_locks_waited > 0) {
        $immediate_locks_miss_rate=round($Table_locks_immediate/$Table_locks_waited);
        writerx("Current table lock wait ratio = $immediate_locks_miss_rate:$Questions");
    }
    else {
        $immediate_locks_miss_rate = 5001;	
        writerx("Current table lock wait ratio = NULL");
    }
    my $innodb_ratio = round(($engine_count_innodb / $num_tables) * 100);
    if(($immediate_locks_miss_rate < 5000) && ($innodb_ratio <= 66)) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("You may want to consider migrating your high-use tables to InnoDB as your table lock ratio is too high.");
	writerx("Your ratio of InnoDB tables to total tables = $innodb_ratio%");
	$ALERT20 = 1;	
    }
    else {
	writerx("Your ratio of InnoDB tables to total tables = $innodb_ratio%");
        writerx("Your table lock ratio is fine.");
	$ALERT20=0;
    }
    writer("</alert>");
    return $ALERT20;
}

sub alert_21 {
    writer("");
    my($Opened_tables,$table_cache,$Open_tables) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("21");
    writer("<alert id=\"21\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $table_cache_hit_rate = undef;
    my $table_cache_fill = undef;

    if(($Opened_tables != 0) && ($table_cache != 0)) {
        $table_cache_hit_rate=round(($Open_tables*100)/$Opened_tables);
        $table_cache_fill=round(($Open_tables*100)/$table_cache);
    }
    elsif(($Opened_tables == 0) && ($table_cache != 0)) {
        $table_cache_hit_rate=100;
        $table_cache_fill=(($Open_tables*100)/$table_cache);
    }
    if($table_cache !=0) {
        writerx("Current table_cache value = $table_cache tables");
        writerx("Current Open_tables = $Open_tables tables.");
	writerx("Current table_cache_fill_ratio is: $table_cache_fill %");
        writerx("Current table_cache_hit_rate is: $table_cache_hit_rate %");
	
	if(($table_cache_hit_rate >= 95) && ($table_cache_fill >= 95)) {
	    $ALERT21=1;
	    my $table_cache_R = round($Open_tables * 1.6);
	    writerx("# Increase the table_cache, Current size is $table_cache. Recommend table_cache=$table_cache_R");
	}
	else {
	    writerx("The table_cache variable setting is not too small.");
	    $ALERT21=0;
	}
    }
    else {
	my $table_cache_R = round($Open_tables * 1.6);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("Table cache is set to 0 size.");
        writerx("# Enable a value for table_cache, Current value is $table_cache. Recommend table_cache=$table_cache_R");
	$ALERT21=1;
    }
    writer("</alert>");
    return $ALERT21;
}

sub alert_22 {
    writer("");
    my($Opened_tables,$table_cache,$Open_tables) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("22");
    writer("<alert id=\"22\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $table_cache_hit_rate = undef;
    my $table_cache_fill = undef;

    if(($Opened_tables != 0) && ($table_cache != 0)) {
        $table_cache_hit_rate=round(($Open_tables*100)/$Opened_tables);
        $table_cache_fill=round(($Open_tables*100)/$table_cache);
    }
    elsif(($Opened_tables == 0) && ($table_cache != 0)) {
        $table_cache_hit_rate=100;
        $table_cache_fill=(($Open_tables*100)/$table_cache);
    }
    if($table_cache !=0) {
        writerx("Current table_cache value = $table_cache tables");
        writerx("Current Open_tables = $Open_tables tables.");
	writerx("Current table_cache_fill_ratio is: $table_cache_fill %");
        writerx("Current table_cache_hit_rate is: $table_cache_hit_rate %");
	
	if(($table_cache_hit_rate <= 75) && ($table_cache_fill <= 75)) {
	    $ALERT22=1;
	    my $table_cache_R = round($Open_tables * 1.6);
	    writerx("# Decrease the table_cache, Current size is $table_cache. Recommend table_cache=$table_cache_R");
	}
	else {
	    writerx("The table_cache variable setting is not too large.");
	    $ALERT22=0;
	}
    }
    else {
	my $table_cache_R = round($Open_tables * 1.6);
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("Table cache is set to 0 size.");
        writerx("# Enable a value for table_cache, Current value is $table_cache. Recommend table_cache=$table_cache_R");
	$ALERT22=2;
    }
    writer("</alert>");
    return $ALERT22;
}

sub alert_23 {
    writer("");
    my($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("23");
    writer("<alert id=\"23\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    my $Conn_global = $num_connections;
    my $Historic_threads_per_second=round($Threads_created/$Uptime);
    if($Threads_cached == 0 ) {
	writerx("Threads_cached = 0. Please enable thread caching.");
	writer("<description>$alert_desc</description>");
	writer("<links>$alert_links</links>");
	writer("<solution>$alert_solution</solution>");
	writer("</alert>");
	$ALERT23 = 1;
	return $ALERT23;
    }
    else {
	my $Thread_hit_ratio = (100 - ($Threads_created/$Threads_cached));
	writerx("Current thread_cache_size: $thread_cache_size");
	writerx("Current Threads_cached: $Threads_cached");
	writerx("Current Threads_connected: $Threads_connected");
	writerx("Current Threads_created: $Threads_created");
	writerx("Current Global connections: $Conn_global");
	writerx("Historic Max_used_connections: $Max_used_connections");
	writerx("Historic_threads_per_second: $Historic_threads_per_second");
	writerx("Thread_hit_ratio: $Thread_hit_ratio%");
	my $warn=0;
	if($Historic_threads_per_second >= 2) {
	    my $thread_cache_R = ($Threads_created +1);
	    writerx("Threads created per second are overrunning threads_cached.");
	    writerx("You need to increase the thread_cache_size.");
	    writerx("# Increase the thread_cache_size, recommend $thread_cache_R");
	    $warn=1;
	    $ALERT23=1;
	}
	if($Thread_hit_ratio > 99.9) {
	    
	    writerx("Thread_hit_ratio is more than 99%.");
	    writerx("You need to change the thread_cache_size.");	
	    my $thread_cache_R = ($Threads_created +1);
	    writerx("# Increase the thread_cache_size, recommend thread_cache_size $thread_cache_R");
	    $warn=1;
	    $ALERT23=1;
	}
	else { 
	    writerx("Your thread_cache_size is not too small.");
	    $ALERT23=0;
	}
	if($warn==1) {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	}
	writer("</alert>");
	return $ALERT23;
    }
}

sub alert_24 {
    writer("");
    my($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("24");
    writer("<alert id=\"24\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $Conn_global = $num_connections;
    my $Historic_threads_per_second=round($Threads_created/$Uptime);
    if($Threads_cached == 0 ) {
        writerx("Threads_cached = 0. Please enable thread caching.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writer("</alert>");
        $ALERT24 = 1;
	return $ALERT24;
    }
    else {
	my $Thread_hit_ratio = (100 - ($Threads_created/$Threads_cached));
	writerx("Current thread_cache_size: $thread_cache_size");
	writerx("Current Threads_cached: $Threads_cached");
	writerx("Current Threads_connected: $Threads_connected");
	writerx("Current Threads_created: $Threads_created");
	writerx("Current Global connections: $Conn_global");
	writerx("Historic Max_used_connections: $Max_used_connections");
	writerx("Historic_threads_per_second: $Historic_threads_per_second");
	writerx("Thread_hit_ratio: $Thread_hit_ratio%");
	
	if($Thread_hit_ratio < 99.0) {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    
	    writerx("Thread_hit_ratio is more than 99%.");
	    writerx("You need to change the thread_cache_size.");
	    my $thread_cache_R = ($Threads_created +1);
	    writerx("# Decrease the thread_cache_size, recommend thread_cache_size = $thread_cache_R");
	    $ALERT24=1;
	}
	else {
	    writerx("Your thread_cache_size is not too large.");
	    $ALERT24=0;
	}
	writer("</alert>");
	return $ALERT24;
    }
}

sub alert_25 {
    writer("");
    my($Binlog_cache_disk_use,$Binlog_cache_use,$binlog_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("25");
    writer("<alert id=\"25\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    if($Binlog_cache_disk_use == 0 ) { $Binlog_cache_disk_use = 1;}
    if($Binlog_cache_use == 0 ) {$Binlog_cache_use = 1;}
    my $bcache_tmp_ratio = ($Binlog_cache_disk_use / $Binlog_cache_use);
    my $binlog_cache_size_HR = human($binlog_cache_size);
    my $binlog_total_usage = ($Binlog_cache_disk_use + $Binlog_cache_use);
    writerx("Current binlog_cache_size = $binlog_cache_size_HR");
    writerx("Current binlog cache usage by transactions: $Binlog_cache_use");
    writerx("Current tmp files created for binlog usage: $Binlog_cache_disk_use");
    writerx("Out of $binlog_total_usage writes, $Binlog_cache_disk_use have been to tmp disk files.");
    writerx("Your binlog_cache utilization ratio: $bcache_tmp_ratio%");
    my $warn=0;
    if($bcache_tmp_ratio < 25) {
	writerx("Your binlog_cache has less than 25% utilization.");
	if($Binlog_cache_disk_use > 1024) {
	    my $binlog_cache_size_R = ($binlog_cache_size * 1.5);
	    writerx("Your binlog_cache has failed to buffer more than 1024 transactions.");
	    writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");
	    $warn=1;
	    $ALERT25=1;
	}
	else {
	    writerx("Your binlog_cache_size is set to an acceptable value.");
	    $ALERT25=0;
	}
    }
    else {
	writerx("Your binlog_cache utilization exceeds 25% utilization.");
	if($Binlog_cache_disk_use > 1024) {
	    my $binlog_cache_size_R = ($binlog_cache_size * 1.5);
            writerx("Your binlog_cache has failed to buffer more than 1024 transactions.");
            writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");
	    $warn=1;
            $ALERT25=1;
        }
	else {
	    $Binlog_cache_disk_use = 1024;
	    my $binlog_cache_size_R = ($binlog_cache_size + $Binlog_cache_disk_use);
	    writerx("Your binlog_cache_size exceeds 25% utilization");
	    writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");		    
	    $warn=1;
	    $ALERT25=1;
	}
    }    
    if($warn==1) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
    }
    writer("</alert>");
    return $ALERT25;
}

sub alert_26 {
    writer("");
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("26");
    writer("<alert id=\"26\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $warn=0;
    my $tmp_disk_ratio = undef;
    if($Created_tmp_tables == 0) {
        $tmp_disk_ratio=0;
    }
    else {
        $tmp_disk_ratio=round(($Created_tmp_disk_tables/$Created_tmp_tables)*100);
    }
    my $max_heap_table_sizeHR=human($max_heap_table_size);
    my $tmp_table_sizeHR=human($tmp_table_size);
    my $tmp_per_sec = round($Created_tmp_tables/$Uptime);
    my $heap_to_tmp = round(($max_heap_table_size/$tmp_table_size)*100);

    writerx("Current max_tmp_tables = $max_tmp_tables");
    writerx("Current max_heap_table_size = $max_heap_table_sizeHR");
    writerx("Current tmp_table_size = $tmp_table_sizeHR");
    writerx("Current Created_tmp_tables = $Created_tmp_tables");
    writerx("Current Created_tmp_disk_tables = $Created_tmp_disk_tables");
    writerx("Currently $tmp_disk_ratio% of tmp tables were created on disk");
    writerx("Ratio of tmp_table_size to in-memory allowance: $heap_to_tmp%");
    writerx("Average usage = $tmp_per_sec tmp tables/sec");

    if($tmp_table_size > $max_heap_table_size) {
        writerx("Note: Effective in-memory tmp_table_size is limited to max_heap_table_size.");
    }
    if($max_tmp_tables > 32){
	writerx("Your max_tmp_tables is set to a greater value than default.");
	writerx("If you consistently need more tmp tables you probably would be better off adding more RAM.");
	writerx("# Recommend default setting max_tmp_tables = 32");	
	$warn=1;
	$ALERT26=1;
    }
    if($tmp_disk_ratio >= 75) {	
	my $tmp_table_size_R = human($tmp_table_size * (((100 - $tmp_disk_ratio)/100)+1));
        writerx("# Increase tmp_table_size, Current size is $tmp_table_sizeHR. Recommend tmp_table_size = $tmp_table_size_R ");
        writerx("# Increase max_heap_table_size, Current size is $max_heap_table_size.");
	$warn=1;
	$ALERT26=1;
    }
    else {
        writerx("Current tmp table settings are fine.");
	$ALERT26=0;
    }
    if($warn==1) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
    }
    writer("</alert>");
    return $ALERT26;
}

sub alert_27 {
    writer("");
    my($flush_time) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("27");
    writer("<alert id=\"27\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($flush_time > 0) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT27=1;
    }
    else {
	writerx("Variable flush_time is set to zero value, which is correct.");
	$ALERT27=0;
    }
    writer("</alert>");
    return $ALERT27;
}

sub alert_29 {
    writer("");
    my($innodb_doublewrite) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("29");
    writer("<alert id=\"29\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($innodb_doublewrite eq "ON") {
	writerx("The innodb_doublewrite buffer is enabled, which is correct.");
	$ALERT29=0;
    }
    else {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT29=1;
    }
    writer("</alert>");
    return $ALERT29;
}

sub alert_30 {
    writer("");
    my($innodb_flush_method,$version_compile_os) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("30");
    writer("<alert id=\"30\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    writerx("Current innodb_flush_method = $innodb_flush_method");
    if ($version_compile_os =~ /win/) {
	writerx("Server is not a unix based server, alert not able to process.");
	$ALERT30=0;
    }
    else {
	writerx("Server is not windows based, continuing with check.");
	if($innodb_flush_method ne "O_DIRECT") {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT30=1;
	}
	else {
	    writerx("Your innodb_flush_method is set correctly.");
	    $ALERT30=0;
	}
    }
    writer("</alert>");
    return $ALERT30;
}

sub alert_31 {
    writer("");
    my($tx_isolation) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("31");
    writer("<alert id=\"31\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current transaction-isolation (tx-isolation) = $tx_isolation");
    if(($tx_isolation =~ /REPEATABLE-READ/) || ($tx_isolation =~ /SERIALIZABLE/)) {
	writerx("Your InnoDB transaction-isolation level is set correctly for ACID compliance.");
	$ALERT31=0;
    }
    else {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT31=1;
    }    
    writer("</alert>");
    return $ALERT31;
}

sub alert_32 {
    writer("");
    my($innodb_lock_wait_timeout) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("32");
    writer("<alert id=\"32\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    writerx("Current innodb_lock_wait_timeout = $innodb_lock_wait_timeout");
    if($innodb_lock_wait_timeout > 50) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT32=1;
    }
    else {
	writerx("innodb_lock_wait_timeout setting is fine.");
	$ALERT32=0;
    }
    writer("</alert>");
    return $ALERT32;
}

sub alert_33 {
    writer("");
    my($concurrent_insert) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("33");
    writer("<alert id=\"33\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current concurrent_insert value = $concurrent_insert");
    if(($concurrent_insert eq "OFF") || ($concurrent_insert == 0)) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT33=1;
    }
    else {
	writerx("Concurrency value is set correctly.");
	$ALERT33=0;
    }
    writer("</alert>");
    return $ALERT33;
}

sub alert_34 {
    writer("");
    my($query_cache_type,$query_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("34");
    writer("<alert id=\"34\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current query_cache_type = $query_cache_type");
    writerx("Current query_cache_size = $query_cache_size");
    if($query_cache_type eq "OFF") { $query_cache_type = 0;}
    if($query_cache_type eq "ON") { $query_cache_type= 1;}
    if(($query_cache_type == 0) || ($query_cache_size == 0)) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT34=1;
    }
    else {
	writerx("Query cache is enabled.");
	$ALERT34=0;
    }
    writer("</alert>");
    return $ALERT34;
}

sub alert_37 {
    writer("");
    my($thread_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("37");
    writer("<alert id=\"37\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    writerx("Current thread_cache_size = $thread_cache_size");
    if($thread_cache_size == 0) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT37=1;
    }
    else {
	writerx("Your thread_cache is enabled. Good job!");
	$ALERT37=0;
    }
    writer("</alert>");
    return $ALERT37;
}

sub alert_38 {
    writer("");
    my($queries_per_second,$threshold_queries_per_second) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("38");
    writer("<alert id=\"38\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current queries_per_second = $queries_per_second/sec");
    writerx("Configured threshold = $threshold_queries_per_second/sec");
    if($queries_per_second >= $threshold_queries_per_second) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT38=1;
    }
    else {
	writerx("Queries per second is not over configured threshold.");
	$ALERT38=0;
    }
    writer("</alert>");
    return $ALERT38;
}

sub alert_39 {
    writer("");
    my($expire_logs_days) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("39");
    writer("<alert id=\"39\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current binary log rotation = $expire_logs_days");
    if($expire_logs_days > 0) {
	writerx("Purging setup correctly.");
	$ALERT39=0;
    }
    else {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT39=1;
    }
    writer("</alert>");
    return $ALERT39;
}

sub alert_56 {
    writer("");
    my($log,$server_type) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("56");
    writer("<alert id=\"56\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $S = undef;
    if($server_type eq 0) {
	$S = "production";
    }
    elsif($server_type eq 1) {
	$S = "staging";
    }
    elsif($server_type eq 2) {
	$S = "development";
    }
    else {
	$S = "server type incorrectly set";
    }
    writerx("Current general log setting = $log");
    writerx("Current server type = $S");
    if($log eq "ON") {
	if(($server_type eq 0) || ($server_type = 1)) {
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    $ALERT56=1;
	}
	elsif($server_type eq 2) {
	    writerx("General query log setting is fine for development server use. Please watch disk usage.");
	    $ALERT56=0;
	}
	else {
	    writerx("Server type set incorrectly. Please address.");
	    $ALERT56=1;
	}
    }
    else {
	writerx("General query log setting is fine for production use.");
	$ALERT56=0;
    }
    writer("</alert>");
    return $ALERT56;
}

sub alert_57 {
    writer("");
    my($log_warnings,$server_type) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("57");
    writer("<alert id=\"57\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current warning log setting = $log_warnings");
    if(($log_warnings eq "OFF") || ($log_warnings == 0)) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT57=1;
    }
    else {
        writerx("Warning log setting is fine.");
        $ALERT57=0;
    }
    writer("</alert>");
    return $ALERT57;
}

sub alert_100 {
    writer("");
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("100");
    writer("<alert id=\"100\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    my $warn=0;
    my $tmp_disk_ratio = undef;
    if($Created_tmp_tables == 0) {
        $tmp_disk_ratio=0;
    }
    else {
        $tmp_disk_ratio=round(($Created_tmp_disk_tables/$Created_tmp_tables)*100);
    }
    my $max_heap_table_sizeHR=human($max_heap_table_size);
    my $tmp_table_sizeHR=human($tmp_table_size);
    my $tmp_per_sec = round($Created_tmp_tables/$Uptime);
    my $heap_to_tmp = round(($max_heap_table_size/$tmp_table_size)*100);

    writerx("Current max_heap_table_size = $max_heap_table_sizeHR");
    writerx("Current tmp_table_size = $tmp_table_sizeHR");
    writerx("Currently $tmp_disk_ratio% of tmp tables were created on disk");
    writerx("Ratio of tmp_table_size to in-memory allowance: $heap_to_tmp%");

    if($tmp_table_size > $max_heap_table_size) {
        writerx("Note: Effective in-memory tmp_table_size is limited to max_heap_table_size.");
    }
    if($heap_to_tmp < 75) {
	my $max_heap_table_size_HR = human(round($max_heap_table_size));
	my $max_heap_table_size_R = ($tmp_table_size * .8);
	my $tmp_table_size_R = human($max_heap_table_size_R * 1.2);
	writerx("Temporary tables larger than $max_heap_table_size_HR will not be allowed into ram.");
	writerx("# If your memory-usage will allow it, increase max_heap_table_size to $max_heap_table_size_HR");
	writerx("# Otherwise, decrease tmp_table_size to $tmp_table_size_R");
	$ALERT100=1;
	$warn=1;
    }
    else {
        writerx("Current max_heap_table_size settings are fine.");
	$ALERT100=0;
    }
    if($warn==1) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
    }
    writer("</alert>");
    return $ALERT100;
}

sub alert_00 {
    writer("");
    my $Uptime = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("99");
    writer("<alert id=\"99\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    if($Uptime < 172800) {
	$Uptime = round($Uptime / 3600); #fix for hours
	writerx("Current Uptime = $Uptime hours");
	writer("<description>$alert_desc</description>");
        writer("<solution>$alert_solution</solution>");
	$ALERT00=1;
    }
    else {
	$Uptime = round($Uptime / 3600); #fix for hours
	writerx("Current Uptime = $Uptime hours");
	writerx("Server has been running $Uptime hours, or more than 48 hours. Continuing with report.");
	$ALERT00=0;
    }
    writer("</alert>");
    return $ALERT00;
}

# user account checks
sub alert_47 {
    writer("");
    my($illegal_global_user) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("47");
    writer("<alert id=\"47\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if(!$illegal_global_user) {
	writerx("No illegal global users found.");
	$ALERT47=0;
    }
    else {
	writerx("Illegal global users found: $illegal_global_user");

	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT47=1;
    }
    writer("</alert>");
    return $ALERT47;
}

sub alert_48 {
    writer("");
    my($old_passwords) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("48");
    writer("<alert id=\"48\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");
    
    if($old_passwords eq "0") {
	$old_passwords = "OFF";
    }
    if($old_passwords eq "OFF") {
	writerx("Old password hashing disabled.");
	$ALERT48=0;
    }
    else {
	writerx("Old password hashing is enabled!");

	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT48=1;
    }
    writer("</alert>");
    return $ALERT48;
}

sub alert_50 {
    writer("");
    my($illegal_grant_user) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("50");
    writer("<alert id=\"50\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($illegal_grant_user == 0) {
	writerx("No illegal grant users found.");
	$ALERT50=0;
    }
    else {
	writerx("Illegal grant users found: $illegal_grant_user");

	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT50=1;
    }
    writer("</alert>");
    return $ALERT50;
}

sub alert_51 {
    writer("");
    my($illegal_remote_root) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("51");
    writer("<alert id=\"51\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if(!$illegal_remote_root) {
	writerx("No illegal remote root users found.");
	$ALERT51=0;
    }
    else {
	writerx("Illegal remote root users found: $illegal_remote_root");

	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT51=1;
    }
    writer("</alert>");
    return $ALERT51;
}

sub alert_52 {
    writer("");
    my($illegal_user_nopass) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("52");
    writer("<alert id=\"52\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($illegal_user_nopass == 0) {
	writerx("No empty passwords found.");
	$ALERT52=0;
    }
    else {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("Empty passwords found for users: $illegal_user_nopass");
        $ALERT52=1;
    }
    writer("</alert>");
    return $ALERT52;
}

sub alert_53 {
    writer("");
    my($illegal_user_noname) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("53");
    writer("<alert id=\"53\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    if($illegal_user_noname == 0) {
	writerx("No empty usernames found.");
	$ALERT53=0;
    }
    else {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

	writerx("Found empty username for these entries: $illegal_user_noname");
        $ALERT53=1;
    }
    writer("</alert>");
    return $ALERT53;
}

# error code alerts
sub alert_snmp {
    writer("");
    writer("<alert id=\"00\">");
    writer("<name>SNMP client error codes</name>");
    writer("<category>client errors</category>");
    my($server_snmp_error_code) = @_;    
    if($server_snmp_error_code == 0) {
	writerx("No snmp error codes from client.");
	$ALERTSNMP=0;
    }
    else {
	writerx("Current snmp error for server: $server_snmp_error_code");
	$ALERTSNMP=1;
    }
    writer("</alert>");
    return $ALERTSNMP;
}

sub alert_mysql {
    writer("");
    writer("<alert id=\"00\">");
    writer("<name>MySQL client error codes</name>");
    writer("<category>client errors</category>");
    my($server_mysql_error_code) = @_;
    if($server_mysql_error_code== 0) {
	writerx("No mysql error codes from client.");
	$ALERTMYSQL=0;
    }
    else {
        writerx("Current snmp error for server: $server_mysql_error_code");
        $ALERTMYSQL=1;
    }
    writer("</alert>");
    return $ALERTMYSQL;
}

#replication slave alerts if server is set as a slave
sub alert_42 {
    writer("");
    my($Slave_SQL_Running) = @_;    
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("42");
    writer("<alert id=\"42\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Slave_SQL_Running  = $Slave_SQL_Running");
    if($Slave_SQL_Running eq "NO") {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	$ALERT42=1;
    }
    else {
	$ALERT42=0;
    }
    writer("</alert>");
    return $ALERT42;
}

sub alert_43 {
    writer("");
    my($Slave_IO_Running) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("43");
    writer("<alert id=\"43\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Slave_IO_Running  = $Slave_IO_Running");
    if($Slave_IO_Running eq "NO") {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT43=1;
    }
    else {
        $ALERT43=0;
    }
    writer("</alert>");
    return $ALERT43;
}

sub alert_44 {
    writer("");
    my($Seconds_Behind_Master,$threshold_seconds_behind_master) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("44");
    writer("<alert id=\"44\">");
    writer("<name>$alert_name</name>");
    writer("<category>$alert_category</category>");

    writerx("Current Seconds_Behind_Master = $Seconds_Behind_Master");
    if($Seconds_Behind_Master >= $threshold_seconds_behind_master) {
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        $ALERT44=1;
    }
    else {
        $ALERT44=0;
    }
    writer("</alert>");
    return $ALERT44;
}

sub analyze_data {
    my($server_id,$server_client_name,$server_hostname)=@_;
    my $dbh = DBI->connect(
	"DBI:mysql:$mysql_r_db:$mysql_r_host",
	$mysql_r_user,
	$mysql_r_pass,
	{
            PrintError => 0,
            RaiseError => 0
	}
	) or error_report("$DBI::errstr");

    my $sql0 = "select t1.server_is_slave,t1.server_type,t1.threshold_queries_per_second, 1.threshold_seconds_behind_master, t2.* from server_list as t1, server_statistics as t2 where server_list_id = '$server_id' and t2.server_list_id = t1.id order by t2.id desc limit 1;";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
	my $server_statistics_id = $row->{'id'};
	my $server_is_slave = $row->{'server_is_slave'};
	my $threshold_queries_per_second = $row->{'threshold_queries_per_second'};
	my $threshold_seconds_behind_master = $row->{'threshold_seconds_behind_master'};
	my $server_type = $row->{'server_type'};
	my $server_list_id = $row->{'server_list_id'};
	my $cnf_file = $row->{'cnf_file'};
	my $os_load_1 = $row->{'os_load_1'};
	my $os_load_5 = $row->{'os_load_5'};
	my $os_load_15 = $row->{'os_load_15'};
	my $os_mem_total = $row->{'os_mem_total'};
	my $os_mem_used = $row->{'os_mem_used'};
	my $os_swap_total = $row->{'os_swap_total'};
	my $os_swap_free = $row->{'os_swap_free'};
	my $os_cpu_user = $row->{'os_cpu_user'};
	my $os_cpu_system = $row->{'os_cpu_system'};
	my $os_cpu_idle = $row->{'os_cpu_idle'};
	my $queries_per_second = $row->{'queries_per_second'};
	my $num_schema = $row->{'num_schema'};
	my $num_tables = $row->{'num_tables'};
	my $num_connections = $row->{'num_connections'};
	my $length_data = $row->{'length_data'};
	my $length_index = $row->{'length_index'};
	my $engine_count_innodb = $row->{'engine_count_innodb'};
	my $engine_count_myisam = $row->{'engine_count_myisam'};
	my $engine_myisam_size_data = $row->{'engine_myisam_size_data'};
	my $engine_myisam_size_index = $row->{'engine_myisam_size_index'};
	my $engine_innodb_size_data = $row->{'engine_innodb_size_data'};
	my $engine_innodb_size_index = $row->{'engine_innodb_size_index'},
	my $auto_increment_increment = $row->{'auto_increment_increment'};
	my $auto_increment_offset = $row->{'auto_increment_offset'};
	my $automatic_sp_privileges = $row->{'automatic_sp_privileges'};
	my $back_log = $row->{'back_log'};
	my $basedir = $row->{'basedir'};
	my $binlog_cache_size = $row->{'binlog_cache_size'};
	my $bulk_insert_buffer_size = $row->{'bulk_insert_buffer_size'};
	my $character_set_client = $row->{'character_set_client'};
	my $character_set_connection = $row->{'character_set_connection'};
	my $character_set_database = $row->{'character_set_database'};
	my $character_set_filesystem = $row->{'character_set_filesystem'};
	my $character_set_results = $row->{'character_set_results'};
	my $character_set_server = $row->{'character_set_server'};
	my $character_set_system = $row->{'character_set_system'};
	my $character_sets_dir = $row->{'character_sets_dir'};
	my $collation_connection = $row->{'collation_connection'};
	my $collation_database = $row->{'collation_database'};
	my $collation_server = $row->{'collation_server'};
	my $completion_type = $row->{'completion_type'};
	my $concurrent_insert = $row->{'concurrent_insert'};
	my $connect_timeout = $row->{'connect_timeout'};
	my $datadir = $row->{'datadir'};
	my $date_format = $row->{'date_format'};
	my $datetime_format = $row->{'datetime_format'};
	my $default_week_format = $row->{'default_week_format'};
	my $delay_key_write = $row->{'delay_key_write'};
	my $delayed_insert_limit = $row->{'delayed_insert_limit'};
	my $delayed_insert_timeout = $row->{'delayed_insert_timeout'};
	my $delayed_queue_size = $row->{'delayed_queue_size'};
	my $div_precision_increment = $row->{'div_precision_increment'};
	my $keep_files_on_create = $row->{'keep_files_on_create'};
	my $engine_condition_pushdown = $row->{'engine_condition_pushdown'};
	my $expire_logs_days = $row->{'expire_logs_days'};
	my $flush = $row->{'flush'};
	my $flush_time = $row->{'flush_time'};
	my $ft_boolean_syntax = $row->{'ft_boolean_syntax'};
	my $ft_max_word_len = $row->{'ft_max_word_len'};
	my $ft_min_word_len = $row->{'ft_min_word_len'};
	my $ft_query_expansion_limit = $row->{'ft_query_expansion_limit'};
	my $ft_stopword_file = $row->{'ft_stopword_file'};
	my $group_concat_max_len = $row->{'group_concat_max_len'};
	my $have_archive = $row->{'have_archive'};
	my $have_bdb = $row->{'have_bdb'};
	my $have_blackhole_engine = $row->{'have_blackhole_engine'};
	my $have_compress = $row->{'have_compress'};
	my $have_crypt = $row->{'have_crypt'};
	my $have_csv = $row->{'have_csv'};
	my $have_dynamic_loading = $row->{'have_dynamic_loading'};
	my $have_example_engine = $row->{'have_example_engine'};
	my $have_federated_engine = $row->{'have_federated_engine'};
	my $have_geometry = $row->{'have_geometry'};
	my $have_innodb = $row->{'have_innodb'};
	my $have_isam = $row->{'have_isam'};
	my $have_merge_engine = $row->{'have_merge_engine'};
	my $have_ndbcluster = $row->{'have_ndbcluster'};
	my $have_openssl = $row->{'have_openssl'};
	my $have_ssl = $row->{'have_ssl'};
	my $have_query_cache = $row->{'have_query_cache'};
	my $have_raid = $row->{'have_raid'};
	my $have_rtree_keys = $row->{'have_rtree_keys'};
	my $have_symlink = $row->{'have_symlink'};
	my $hostname = $row->{'hostname'};
	my $init_connect = $row->{'init_connect'};
	my $init_file = $row->{'init_file'};
	my $init_slave = $row->{'init_slave'};
	my $innodb_additional_mem_pool_size = $row->{'innodb_additional_mem_pool_size'};
	my $innodb_autoextend_increment = $row->{'innodb_autoextend_increment'};
	my $innodb_buffer_pool_awe_mem_mb = $row->{'innodb_buffer_pool_awe_mem_mb'};
	my $innodb_buffer_pool_size = $row->{'innodb_buffer_pool_size'};
	my $innodb_checksums = $row->{'innodb_checksums'};
	my $innodb_commit_concurrency = $row->{'innodb_commit_concurrency'};
	my $innodb_concurrency_tickets = $row->{'innodb_concurrency_tickets'};
	my $innodb_data_file_path = $row->{'innodb_data_file_path'};
	my $innodb_data_home_dir = $row->{'innodb_data_home_dir'};
	my $innodb_adaptive_hash_index = $row->{'innodb_adaptive_hash_index'};
	my $innodb_doublewrite = $row->{'innodb_doublewrite'};
	my $innodb_fast_shutdown = $row->{'innodb_fast_shutdown'};
	my $innodb_file_io_threads = $row->{'innodb_file_io_threads'};
	my $innodb_file_per_table = $row->{'innodb_file_per_table'};
	my $innodb_flush_log_at_trx_commit = $row->{'innodb_flush_log_at_trx_commit'};
	my $innodb_flush_method = $row->{'innodb_flush_method'};
	my $innodb_force_recovery = $row->{'innodb_force_recovery'};
	my $innodb_lock_wait_timeout = $row->{'innodb_lock_wait_timeout'};
	my $innodb_locks_unsafe_for_binlog = $row->{'innodb_locks_unsafe_for_binlog'};
	my $innodb_log_arch_dir = $row->{'innodb_log_arch_dir'};
	my $innodb_log_archive = $row->{'innodb_log_archive'};
	my $innodb_log_buffer_size = $row->{'innodb_log_buffer_size'};
	my $innodb_log_file_size = $row->{'innodb_log_file_size'};
	my $innodb_log_files_in_group = $row->{'innodb_log_files_in_group'};
	my $innodb_log_group_home_dir = $row->{'innodb_log_group_home_dir'};
	my $innodb_max_dirty_pages_pct = $row->{'innodb_max_dirty_pages_pct'};
	my $innodb_max_purge_lag = $row->{'innodb_max_purge_lag'};
	my $innodb_mirrored_log_groups = $row->{'innodb_mirrored_log_groups'};
	my $innodb_open_files = $row->{'innodb_open_files'};
	my $innodb_rollback_on_timeout = $row->{'innodb_rollback_on_timeout'};
	my $innodb_support_xa = $row->{'innodb_support_xa'};
	my $innodb_sync_spin_loops = $row->{'innodb_sync_spin_loops'};
	my $innodb_table_locks = $row->{'innodb_table_locks'};
	my $innodb_thread_concurrency = $row->{'innodb_thread_concurrency'};
	my $innodb_thread_sleep_delay = $row->{'innodb_thread_sleep_delay'};
	my $innodb_read_ahead = $row->{'innodb_read_ahead'};
	my $innodb_ibuf_contract_const = $row->{'innodb_ibuf_contract_const'};
	my $innodb_ibuf_contract_burst = $row->{'innodb_ibuf_contract_burst'};
	my $innodb_buf_flush_const = $row->{'innodb_buf_flush_const'};
	my $innodb_buf_flush_burst = $row->{'innodb_buf_flush_burst'};
	my $interactive_timeout = $row->{'interactive_timeout'};
	my $join_buffer_size = $row->{'join_buffer_size'};
	my $key_buffer_size = $row->{'key_buffer_size'};
	my $key_cache_age_threshold = $row->{'key_cache_age_threshold'};
	my $key_cache_block_size = $row->{'key_cache_block_size'};
	my $key_cache_division_limit = $row->{'key_cache_division_limit'};
	my $language = $row->{'language'};
	my $large_files_support = $row->{'large_files_support'};
	my $large_page_size = $row->{'large_page_size'};
	my $large_pages = $row->{'large_pages'};
	my $lc_time_names = $row->{'lc_time_names'};
	my $license = $row->{'license'};
	my $local_infile = $row->{'local_infile'};
	my $locked_in_memory = $row->{'locked_in_memory'};
	my $log = $row->{'log'};
	my $log_bin = $row->{'log_bin'};
	my $log_bin_trust_function_creators = $row->{'log_bin_trust_function_creators'};
	my $log_error = $row->{'log_error'};
	my $log_queries_not_using_indexes = $row->{'log_queries_not_using_indexes'};
	my $log_slave_updates = $row->{'log_slave_updates'};
	my $log_slow_queries = $row->{'log_slow_queries'};
	my $log_slow_filter = $row->{'log_slow_filter'};
	my $log_slow_verbosity = $row->{'log_slow_verbosity'};
	my $log_warnings = $row->{'log_warnings'};
	my $long_query_time = $row->{'long_query_time'};
	my $low_priority_updates = $row->{'low_priority_updates'};
	my $lower_case_file_system = $row->{'lower_case_file_system'};
	my $lower_case_table_names = $row->{'lower_case_table_names'};
	my $max_allowed_packet = $row->{'max_allowed_packet'};
	my $max_binlog_cache_size = $row->{'max_binlog_cache_size'};
	my $max_binlog_size = $row->{'max_binlog_size'};
	my $max_connect_errors = $row->{'max_connect_errors'};
	my $max_connections = $row->{'max_connections'};
	my $max_delayed_threads = $row->{'max_delayed_threads'};
	my $max_error_count = $row->{'max_error_count'};
	my $max_heap_table_size = $row->{'max_heap_table_size'};
	my $max_insert_delayed_threads = $row->{'max_insert_delayed_threads'};
	my $max_join_size = $row->{'max_join_size'};
	my $max_length_for_sort_data = $row->{'max_length_for_sort_data'};
	my $max_prepared_stmt_count = $row->{'max_prepared_stmt_count'};
	my $max_relay_log_size = $row->{'max_relay_log_size'};
	my $max_seeks_for_key = $row->{'max_seeks_for_key'};
	my $max_sort_length = $row->{'max_sort_length'};
	my $max_sp_recursion_depth = $row->{'max_sp_recursion_depth'};
	my $max_tmp_tables = $row->{'max_tmp_tables'};
	my $max_user_connections = $row->{'max_user_connections'};
	my $max_write_lock_count = $row->{'max_write_lock_count'};
	my $min_examined_row_limit = $row->{'min_examined_row_limit'};
	my $multi_range_count = $row->{'multi_range_count'};
	my $myisam_data_pointer_size = $row->{'myisam_data_pointer_size'};
	my $myisam_max_sort_file_size = $row->{'myisam_max_sort_file_size'};
	my $myisam_recover_options = $row->{'myisam_recover_options'};
	my $myisam_repair_threads = $row->{'myisam_repair_threads'};
	my $myisam_sort_buffer_size = $row->{'myisam_sort_buffer_size'};
	my $myisam_stats_method = $row->{'myisam_stats_method'};
	my $net_buffer_length = $row->{'net_buffer_length'};
	my $net_read_timeout = $row->{'net_read_timeout'};
	my $net_retry_count = $row->{'net_retry_count'};
	my $net_write_timeout = $row->{'net_write_timeout'};
	my $new = $row->{'new'};
	my $old_passwords = $row->{'old_passwords'};
	my $open_files_limit = $row->{'open_files_limit'};
	my $optimizer_prune_level = $row->{'optimizer_prune_level'};
	my $optimizer_search_depth = $row->{'optimizer_search_depth'};
	my $pid_file = $row->{'pid_file'};
	my $port = $row->{'port'};
	my $preload_buffer_size = $row->{'preload_buffer_size'};
	my $protocol_version = $row->{'protocol_version'};
	my $query_alloc_block_size = $row->{'query_alloc_block_size'};
	my $query_cache_limit = $row->{'query_cache_limit'};
	my $query_cache_min_res_unit = $row->{'query_cache_min_res_unit'};
	my $query_cache_size = $row->{'query_cache_size'};
	my $query_cache_type = $row->{'query_cache_type'};
	my $query_cache_wlock_invalidate = $row->{'query_cache_wlock_invalidate'};
	my $query_prealloc_size = $row->{'query_prealloc_size'};
	my $range_alloc_block_size = $row->{'range_alloc_block_size'};
	my $log_slow_rate_limit = $row->{'log_slow_rate_limit'};
	my $read_buffer_size = $row->{'read_buffer_size'};
	my $read_only = $row->{'read_only'};
	my $read_rnd_buffer_size = $row->{'read_rnd_buffer_size'};
	my $relay_log = $row->{'relay_log'};
	my $relay_log_index = $row->{'relay_log_index'};
	my $relay_log_info_file = $row->{'relay_log_info_file'};
	my $relay_log_purge = $row->{'relay_log_purge'};
	my $relay_log_space_limit = $row->{'relay_log_space_limit'};
	my $rpl_recovery_rank = $row->{'rpl_recovery_rank'};
	my $secure_auth = $row->{'secure_auth'};
	my $secure_file_priv = $row->{'secure_file_priv'};
	my $server_id = $row->{'server_id'};
	my $skip_external_locking = $row->{'skip_external_locking'};
	my $skip_networking = $row->{'skip_networking'};
	my $skip_show_database = $row->{'skip_show_database'};
	my $slave_compressed_protocol = $row->{'slave_compressed_protocol'};
	my $slave_load_tmpdir = $row->{'slave_load_tmpdir'};
	my $slave_net_timeout = $row->{'slave_net_timeout'};
	my $slave_skip_errors = $row->{'slave_skip_errors'};
	my $slave_transaction_retries = $row->{'slave_transaction_retries'};
	my $slow_launch_time = $row->{'slow_launch_time'};
	my $socket = $row->{'socket'};
	my $sort_buffer_size = $row->{'sort_buffer_size'};
	my $sql_big_selects = $row->{'sql_big_selects'};
	my $sql_mode = $row->{'sql_mode'};
	my $sql_notes = $row->{'sql_notes'};
	my $sql_warnings = $row->{'sql_warnings'};
	my $ssl_ca = $row->{'ssl_ca'};
	my $ssl_capath = $row->{'ssl_capath'};
	my $ssl_cert = $row->{'ssl_cert'};
	my $ssl_cipher = $row->{'ssl_cipher'};
	my $ssl_key = $row->{'ssl_key'};
	my $storage_engine = $row->{'storage_engine'};
	my $sync_binlog = $row->{'sync_binlog'};
	my $sync_frm = $row->{'sync_frm'};
	my $system_time_zone = $row->{'system_time_zone'};
	my $table_cache = $row->{'table_cache'};
	my $table_lock_wait_timeout = $row->{'table_lock_wait_timeout'};
	my $table_type = $row->{'table_type'};
	my $thread_cache_size = $row->{'thread_cache_size'};
	my $thread_stack = $row->{'thread_stack'};
	my $time_format = $row->{'time_format'};
	my $time_zone = $row->{'time_zone'};
	my $timed_mutexes = $row->{'timed_mutexes'};
	my $tmp_table_size = $row->{'tmp_table_size'};
	my $tmpdir = $row->{'tmpdir'};
	my $transaction_alloc_block_size = $row->{'transaction_alloc_block_size'};
	my $transaction_prealloc_size = $row->{'transaction_prealloc_size'};
	my $tx_isolation = $row->{'tx_isolation'};
	my $updatable_views_with_limit = $row->{'updatable_views_with_limit'};
	my $version = $row->{'version'};
	my $version_comment = $row->{'version_comment'};
	my $version_compile_machine = $row->{'version_compile_machine'};
	my $version_compile_os = $row->{'version_compile_os'};
	my $wait_timeout = $row->{'wait_timeout'};
	my $Aborted_clients = $row->{'Aborted_clients'};
	my $Aborted_connects = $row->{'Aborted_connects'};
	my $Binlog_cache_disk_use = $row->{'Binlog_cache_disk_use'};
	my $Binlog_cache_use = $row->{'Binlog_cache_use'};
	my $Bytes_received = $row->{'Bytes_received'};
	my $Bytes_sent = $row->{'Bytes_sent'};
	my $Com_admin_commands = $row->{'Com_admin_commands'};
	my $Com_alter_db = $row->{'Com_alter_db'};
	my $Com_alter_table = $row->{'Com_alter_table'};
	my $Com_analyze = $row->{'Com_analyze'};
	my $Com_backup_table = $row->{'Com_backup_table'};
	my $Com_begin = $row->{'Com_begin'};
	my $Com_call_procedure = $row->{'Com_call_procedure'};
	my $Com_change_db = $row->{'Com_change_db'};
	my $Com_change_master = $row->{'Com_change_master'};
	my $Com_check = $row->{'Com_check'};
	my $Com_checksum = $row->{'Com_checksum'};
	my $Com_commit = $row->{'Com_commit'};
	my $Com_create_db = $row->{'Com_create_db'};
	my $Com_create_function = $row->{'Com_create_function'};
	my $Com_create_index = $row->{'Com_create_index'};
	my $Com_create_table = $row->{'Com_create_table'};
	my $Com_create_user = $row->{'Com_create_user'};
	my $Com_dealloc_sql = $row->{'Com_dealloc_sql'};
	my $Com_delete = $row->{'Com_delete'};
	my $Com_delete_multi = $row->{'Com_delete_multi'};
	my $Com_do = $row->{'Com_do'};
	my $Com_drop_db = $row->{'Com_drop_db'};
	my $Com_drop_function = $row->{'Com_drop_function'};
	my $Com_drop_index = $row->{'Com_drop_index'};
	my $Com_drop_table = $row->{'Com_drop_table'};
	my $Com_drop_user = $row->{'Com_drop_user'};
	my $Com_execute_sql = $row->{'Com_execute_sql'};
	my $Com_flush = $row->{'Com_flush'};
	my $Com_grant = $row->{'Com_grant'};
	my $Com_ha_close = $row->{'Com_ha_close'};
	my $Com_ha_open = $row->{'Com_ha_open'};
	my $Com_ha_read = $row->{'Com_ha_read'};
	my $Com_help = $row->{'Com_help'};
	my $Com_insert = $row->{'Com_insert'};
	my $Com_insert_select = $row->{'Com_insert_select'};
	my $Com_kill = $row->{'Com_kill'};
	my $Com_load = $row->{'Com_load'};
	my $Com_load_master_data = $row->{'Com_load_master_data'};
	my $Com_load_master_table = $row->{'Com_load_master_table'};
	my $Com_lock_tables = $row->{'Com_lock_tables'};
	my $Com_optimize = $row->{'Com_optimize'};
	my $Com_preload_keys = $row->{'Com_preload_keys'};
	my $Com_prepare_sql = $row->{'Com_prepare_sql'};
	my $Com_purge = $row->{'Com_purge'};
	my $Com_purge_before_date = $row->{'Com_purge_before_date'};
	my $Com_rename_table = $row->{'Com_rename_table'};
	my $Com_repair = $row->{'Com_repair'};
	my $Com_replace = $row->{'Com_replace'};
	my $Com_replace_select = $row->{'Com_replace_select'};
	my $Com_reset = $row->{'Com_reset'};
	my $Com_restore_table = $row->{'Com_restore_table'};
	my $Com_revoke = $row->{'Com_revoke'};
	my $Com_revoke_all = $row->{'Com_revoke_all'};
	my $Com_rollback = $row->{'Com_rollback'};
	my $Com_savepoint = $row->{'Com_savepoint'};
	my $Com_select = $row->{'Com_select'};
	my $Com_set_option = $row->{'Com_set_option'};
	my $Com_show_binlog_events = $row->{'Com_show_binlog_events'};
	my $Com_show_binlogs = $row->{'Com_show_binlogs'};
	my $Com_show_charsets = $row->{'Com_show_charsets'};
	my $Com_show_collations = $row->{'Com_show_collations'};
	my $Com_show_column_types = $row->{'Com_show_column_types'};
	my $Com_show_create_db = $row->{'Com_show_create_db'};
	my $Com_show_create_table = $row->{'Com_show_create_table'};
	my $Com_show_databases = $row->{'Com_show_databases'};
	my $Com_show_errors = $row->{'Com_show_errors'};
	my $Com_show_fields = $row->{'Com_show_fields'};
	my $Com_show_grants = $row->{'Com_show_grants'};
	my $Com_show_innodb_status = $row->{'Com_show_innodb_status'};
	my $Com_show_keys = $row->{'Com_show_keys'};
	my $Com_show_logs = $row->{'Com_show_logs'};
	my $Com_show_master_status = $row->{'Com_show_master_status'};
	my $Com_show_ndb_status = $row->{'Com_show_ndb_status'};
	my $Com_show_new_master = $row->{'Com_show_new_master'};
	my $Com_show_open_tables = $row->{'Com_show_open_tables'};
	my $Com_show_privileges = $row->{'Com_show_privileges'};
	my $Com_show_processlist = $row->{'Com_show_processlist'};
	my $Com_show_slave_hosts = $row->{'Com_show_slave_hosts'};
	my $Com_show_slave_status = $row->{'Com_show_slave_status'};
	my $Com_show_status = $row->{'Com_show_status'};
	my $Com_show_storage_engines = $row->{'Com_show_storage_engines'};
	my $Com_show_tables = $row->{'Com_show_tables'};
	my $Com_show_triggers = $row->{'Com_show_triggers'};
	my $Com_show_variables = $row->{'Com_show_variables'};
	my $Com_show_warnings = $row->{'Com_show_warnings'};
	my $Com_slave_start = $row->{'Com_slave_start'};
	my $Com_slave_stop = $row->{'Com_slave_stop'};
	my $Com_stmt_close = $row->{'Com_stmt_close'};
	my $Com_stmt_execute = $row->{'Com_stmt_execute'};
	my $Com_stmt_fetch = $row->{'Com_stmt_fetch'};
	my $Com_stmt_prepare = $row->{'Com_stmt_prepare'};
	my $Com_stmt_reset = $row->{'Com_stmt_reset'};
	my $Com_stmt_send_long_data = $row->{'Com_stmt_send_long_data'};
	my $Com_truncate = $row->{'Com_truncate'};
	my $Com_unlock_tables = $row->{'Com_unlock_tables'};
	my $Com_update = $row->{'Com_update'};
	my $Com_update_multi = $row->{'Com_update_multi'};
	my $Com_xa_commit = $row->{'Com_xa_commit'};
	my $Com_xa_end = $row->{'Com_xa_end'};
	my $Com_xa_prepare = $row->{'Com_xa_prepare'};
	my $Com_xa_recover = $row->{'Com_xa_recover'};
	my $Com_xa_rollback = $row->{'Com_xa_rollback'};
	my $Com_xa_start = $row->{'Com_xa_start'};
	my $Compression = $row->{'Compression'};
	my $Connections = $row->{'Connections'};
	my $Created_tmp_disk_tables = $row->{'Created_tmp_disk_tables'};
	my $Created_tmp_files = $row->{'Created_tmp_files'};
	my $Created_tmp_tables = $row->{'Created_tmp_tables'};
	my $Delayed_errors = $row->{'Delayed_errors'};
	my $Delayed_insert_threads = $row->{'Delayed_insert_threads'};
	my $Delayed_writes = $row->{'Delayed_writes'};
	my $Flush_commands = $row->{'Flush_commands'};
	my $Handler_commit = $row->{'Handler_commit'};
	my $Handler_delete = $row->{'Handler_delete'};
	my $Handler_discover = $row->{'Handler_discover'};
	my $Handler_prepare = $row->{'Handler_prepare'};
	my $Handler_read_first = $row->{'Handler_read_first'};
	my $Handler_read_key = $row->{'Handler_read_key'};
	my $Handler_read_next = $row->{'Handler_read_next'};
	my $Handler_read_prev = $row->{'Handler_read_prev'};
	my $Handler_read_rnd = $row->{'Handler_read_rnd'};
	my $Handler_read_rnd_next = $row->{'Handler_read_rnd_next'};
	my $Handler_rollback = $row->{'Handler_rollback'};
	my $Handler_savepoint = $row->{'Handler_savepoint'};
	my $Handler_savepoint_rollback = $row->{'Handler_savepoint_rollback'};
	my $Handler_update = $row->{'Handler_update'};
	my $Handler_write = $row->{'Handler_write'};
	my $Innodb_buffer_pool_pages_data = $row->{'Innodb_buffer_pool_pages_data'};
	my $Innodb_buffer_pool_pages_dirty = $row->{'Innodb_buffer_pool_pages_dirty'};
	my $Innodb_buffer_pool_pages_flushed = $row->{'Innodb_buffer_pool_pages_flushed'};
	my $Innodb_buffer_pool_pages_free = $row->{'Innodb_buffer_pool_pages_free'};
	my $Innodb_buffer_pool_pages_misc = $row->{'Innodb_buffer_pool_pages_misc'};
	my $Innodb_buffer_pool_pages_total = $row->{'Innodb_buffer_pool_pages_total'};
	my $Innodb_buffer_pool_read_ahead_rnd = $row->{'Innodb_buffer_pool_read_ahead_rnd'};
	my $Innodb_buffer_pool_read_ahead_seq = $row->{'Innodb_buffer_pool_read_ahead_seq'};
	my $Innodb_buffer_pool_read_requests = $row->{'Innodb_buffer_pool_read_requests'};
	my $Innodb_buffer_pool_reads = $row->{'Innodb_buffer_pool_reads'};
	my $Innodb_buffer_pool_wait_free = $row->{'Innodb_buffer_pool_wait_free'};
	my $Innodb_buffer_pool_write_requests = $row->{'Innodb_buffer_pool_write_requests'};
	my $Innodb_data_fsyncs = $row->{'Innodb_data_fsyncs'};
	my $Innodb_data_pending_fsyncs = $row->{'Innodb_data_pending_fsyncs'};
	my $Innodb_data_pending_reads = $row->{'Innodb_data_pending_reads'};
	my $Innodb_data_pending_writes = $row->{'Innodb_data_pending_writes'};
	my $Innodb_data_read = $row->{'Innodb_data_read'};
	my $Innodb_data_reads = $row->{'Innodb_data_reads'};
	my $Innodb_data_writes = $row->{'Innodb_data_writes'};
	my $Innodb_data_written = $row->{'Innodb_data_written'};
	my $Innodb_dblwr_pages_written = $row->{'Innodb_dblwr_pages_written'};
	my $Innodb_dblwr_writes = $row->{'Innodb_dblwr_writes'};
	my $Innodb_log_waits = $row->{'Innodb_log_waits'};
	my $Innodb_log_write_requests = $row->{'Innodb_log_write_requests'};
	my $Innodb_log_writes = $row->{'Innodb_log_writes'};
	my $Innodb_os_log_fsyncs = $row->{'Innodb_os_log_fsyncs'};
	my $Innodb_os_log_pending_fsyncs = $row->{'Innodb_os_log_pending_fsyncs'};
	my $Innodb_os_log_pending_writes = $row->{'Innodb_os_log_pending_writes'};
	my $Innodb_os_log_written = $row->{'Innodb_os_log_written'};
	my $Innodb_page_size = $row->{'Innodb_page_size'};
	my $Innodb_pages_created = $row->{'Innodb_pages_created'};
	my $Innodb_pages_read = $row->{'Innodb_pages_read'};
	my $Innodb_pages_written = $row->{'Innodb_pages_written'};
	my $Innodb_row_lock_current_waits = $row->{'Innodb_row_lock_current_waits'};
	my $Innodb_row_lock_time = $row->{'Innodb_row_lock_time'};
	my $Innodb_row_lock_time_avg = $row->{'Innodb_row_lock_time_avg'};
	my $Innodb_row_lock_time_max = $row->{'Innodb_row_lock_time_max'};
	my $Innodb_row_lock_waits = $row->{'Innodb_row_lock_waits'};
	my $Innodb_rows_deleted = $row->{'Innodb_rows_deleted'};
	my $Innodb_rows_inserted = $row->{'Innodb_rows_inserted'};
	my $Innodb_rows_read = $row->{'Innodb_rows_read'};
	my $Innodb_rows_updated = $row->{'Innodb_rows_updated'};
	my $Key_blocks_not_flushed = $row->{'Key_blocks_not_flushed'};
	my $Key_blocks_unused = $row->{'Key_blocks_unused'};
	my $Key_blocks_used = $row->{'Key_blocks_used'};
	my $Key_read_requests = $row->{'Key_read_requests'};
	my $Key_reads = $row->{'Key_reads'};
	my $Key_write_requests = $row->{'Key_write_requests'};
	my $Key_writes = $row->{'Key_writes'};
	my $Last_query_cost = $row->{'Last_query_cost'};
	my $Max_used_connections = $row->{'Max_used_connections'};
	my $Not_flushed_delayed_rows = $row->{'Not_flushed_delayed_rows'};
	my $Open_files = $row->{'Open_files'};
	my $Open_streams = $row->{'Open_streams'};
	my $Open_tables = $row->{'Open_tables'};
	my $Opened_tables = $row->{'Opened_tables'};
	my $Prepared_stmt_count = $row->{'Prepared_stmt_count'};
	my $Qcache_free_blocks = $row->{'Qcache_free_blocks'};
	my $Qcache_free_memory = $row->{'Qcache_free_memory'};
	my $Qcache_hits = $row->{'Qcache_hits'};
	my $Qcache_inserts = $row->{'Qcache_inserts'};
	my $Qcache_lowmem_prunes = $row->{'Qcache_lowmem_prunes'};
	my $Qcache_not_cached = $row->{'Qcache_not_cached'};
	my $Qcache_queries_in_cache = $row->{'Qcache_queries_in_cache'};
	my $Qcache_total_blocks = $row->{'Qcache_total_blocks'};
	my $Questions = $row->{'Questions'};
	my $Rpl_status = $row->{'Rpl_status'};
	my $Select_full_join = $row->{'Select_full_join'};
	my $Select_full_range_join = $row->{'Select_full_range_join'};
	my $Select_range = $row->{'Select_range'};
	my $Select_range_check = $row->{'Select_range_check'};
	my $Select_scan = $row->{'Select_scan'};
	my $Slave_open_temp_tables = $row->{'Slave_open_temp_tables'};
	my $Slave_retried_transactions = $row->{'Slave_retried_transactions'};
	my $Slave_running = $row->{'Slave_running'};
	my $Slow_launch_threads = $row->{'Slow_launch_threads'};
	my $Slow_queries = $row->{'Slow_queries'};
	my $Sort_merge_passes = $row->{'Sort_merge_passes'};
	my $Sort_range = $row->{'Sort_range'};
	my $Sort_rows = $row->{'Sort_rows'};
	my $Sort_scan = $row->{'Sort_scan'};
	my $Table_locks_immediate = $row->{'Table_locks_immediate'};
	my $Table_locks_waited = $row->{'Table_locks_waited'};
	my $Tc_log_max_pages_used = $row->{'Tc_log_max_pages_used'};
	my $Tc_log_page_size = $row->{'Tc_log_page_size'};
	my $Tc_log_page_waits = $row->{'Tc_log_page_waits'};
	my $Threads_cached = $row->{'Threads_cached'};
	my $Threads_connected = $row->{'Threads_connected'};
	my $Threads_created = $row->{'Threads_created'};
	my $Threads_running = $row->{'Threads_running'};
	my $Uptime = $row->{'Uptime'};
	my $server_snmp_error_code = $row->{'server_snmp_error_code'};
	my $server_mysql_error_code = $row->{'server_mysql_error_code'};
	my $Slave_IO_Running = $row->{'Slave_IO_Running'};
	my $Slave_SQL_Running = $row->{'Slave_SQL_Running'};
	my $Seconds_Behind_Master = $row->{'Seconds_Behind_Master'};
	my $illegal_global_user = $row->{'illegal_global_user'};
	my $illegal_grant_user = $row->{'illegal_grant_user'};
	my $illegal_remote_root = $row->{'illegal_remote_root'};
	my $illegal_user_nopass = $row->{'illegal_user_nopass'};
	my $illegal_user_noname = $row->{'illegal_user_noname'};
	my $collection_time_elapse = $row->{'collection_time_elapse'};
	my $Creation_time = $row->{'Creation_time'};

	$os_mem_total = ($os_mem_total); # fix for bytes
	
	xml_head($hostname,$Creation_time);

	#loop through alerts ordered by category... enable this once we finish all of the alerts.
#	$sql1="select id from alerts_def order by alert_category asc;";
#	
	$ALERT00 = alert_00($Uptime);
	if($ALERT00 == 0) { 
	    $ALERT01 = alert_01($Aborted_connects);
	    $ALERT03 = alert_03($log_bin);
	    $ALERT04 = alert_04($sync_binlog);
	    $ALERT05 = alert_05($Max_used_connections,$max_connections,$Threads_connected);
	    $ALERT06 = alert_06($Qcache_lowmem_prunes,$query_cache_size,$Qcache_free_memory);
	    $ALERT07 = alert_07($query_cache_size,$Qcache_free_memory,$Qcache_lowmem_prunes);
	    $ALERT08 = alert_08($os_mem_total,$max_heap_table_size,$tmp_table_size,$read_buffer_size,$read_rnd_buffer_size,$sort_buffer_size,$thread_stack,$join_buffer_size,$binlog_cache_size,$max_connections,$Max_used_connections,$innodb_buffer_pool_size,$innodb_additional_mem_pool_size,$innodb_log_buffer_size,$key_buffer_size,$query_cache_size);
	    $ALERT09 = alert_09($read_buffer_size,$Handler_read_rnd_next,$Com_select);
	    $ALERT10 = alert_10($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size);
	    $ALERT11 = alert_11($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data);
	    $ALERT12 = alert_12($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data);
	    $ALERT13 = alert_13($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size);
	    $ALERT14 = alert_14($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size);
	    $ALERT15 = alert_15($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes);
	    $ALERT16 = alert_16($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes);
	    $ALERT17 = alert_17($join_buffer_size,$Select_range_check,$Select_full_join);
	    $ALERT18 = alert_18($join_buffer_size,$Select_range_check,$Select_full_join,$log_queries_not_using_indexes);
	    $ALERT19 = alert_19($Open_files,$open_files_limit);
	    $ALERT20 = alert_20($Table_locks_waited,$Table_locks_immediate,$concurrent_insert,$num_tables,$engine_count_innodb,$Questions);
	    $ALERT21 = alert_21($Opened_tables,$table_cache,$Open_tables);
	    $ALERT22 = alert_22($Opened_tables,$table_cache,$Open_tables);
	    $ALERT23 = alert_23($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections);
	    $ALERT24 = alert_24($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections);
	    $ALERT25 = alert_25($Binlog_cache_disk_use,$Binlog_cache_use,$binlog_cache_size);
	    $ALERT26 = alert_26($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime);
	    $ALERT27 = alert_27($flush_time);
	    $ALERT29 = alert_29($innodb_doublewrite);
	    $ALERT30 = alert_30($innodb_flush_method,$version_compile_os);
	    $ALERT31 = alert_31($tx_isolation);
	    $ALERT32 = alert_32($innodb_lock_wait_timeout);
	    $ALERT33 = alert_33($concurrent_insert);
	    $ALERT34 = alert_34($query_cache_type,$query_cache_size);
	    $ALERT37 = alert_37($thread_cache_size);
	    $ALERT38 = alert_38($queries_per_second,$threshold_queries_per_second);
	    $ALERT39 = alert_39($expire_logs_days);
	    $ALERT56 = alert_56($log,$server_type);
	    $ALERT57 = alert_57($log_warnings,$server_type);
	    $ALERT100 = alert_100($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime);
	    
# user account alerts
	    my $ALERT47 = alert_47($illegal_global_user);
	    my $ALERT48 = alert_48($old_passwords);
	    my $ALERT50 = alert_50($illegal_grant_user);
	    my $ALERT51 = alert_51($illegal_remote_root);
	    my $ALERT52 = alert_52($illegal_user_nopass);
	    my $ALERT53 = alert_53($illegal_user_noname);

# insert alert states to alerts_current table, 
# this would propbably be better served by some hash function but I'm lazy right now
## we're not running alert_clean since we added the ON DUPLICATE KEY UPDATE to the INSERT query on alert_insert
#alert_clean($server_list_id);
	    alert_insert(99,$ALERT00,$server_list_id);
	    alert_insert(1,$ALERT01,$server_list_id);
	    alert_insert(3,$ALERT03,$server_list_id);
	    alert_insert(4,$ALERT04,$server_list_id);
	    alert_insert(5,$ALERT05,$server_list_id);
	    alert_insert(6,$ALERT06,$server_list_id);
	    alert_insert(7,$ALERT07,$server_list_id);
	    alert_insert(8,$ALERT08,$server_list_id);
	    alert_insert(9,$ALERT09,$server_list_id);
	    alert_insert(10,$ALERT10,$server_list_id);
	    alert_insert(11,$ALERT11,$server_list_id);
	    alert_insert(12,$ALERT12,$server_list_id);
	    alert_insert(13,$ALERT13,$server_list_id);
	    alert_insert(14,$ALERT14,$server_list_id);
	    alert_insert(15,$ALERT15,$server_list_id);
	    alert_insert(16,$ALERT16,$server_list_id);
	    alert_insert(17,$ALERT17,$server_list_id);
	    alert_insert(18,$ALERT18,$server_list_id);
	    alert_insert(19,$ALERT19,$server_list_id);
	    alert_insert(20,$ALERT20,$server_list_id);
	    alert_insert(21,$ALERT21,$server_list_id);
	    alert_insert(22,$ALERT22,$server_list_id);
	    alert_insert(23,$ALERT23,$server_list_id);
	    alert_insert(24,$ALERT24,$server_list_id);
	    alert_insert(25,$ALERT25,$server_list_id);
	    alert_insert(26,$ALERT26,$server_list_id);
	    alert_insert(27,$ALERT27,$server_list_id);
	    alert_insert(29,$ALERT29,$server_list_id);
	    alert_insert(30,$ALERT30,$server_list_id);
	    alert_insert(31,$ALERT31,$server_list_id);
	    alert_insert(32,$ALERT32,$server_list_id);
	    alert_insert(33,$ALERT33,$server_list_id);
	    alert_insert(34,$ALERT34,$server_list_id);
	    alert_insert(37,$ALERT37,$server_list_id);
	    alert_insert(38,$ALERT38,$server_list_id);
	    alert_insert(39,$ALERT39,$server_list_id);
	    alert_insert(56,$ALERT56,$server_list_id);
	    alert_insert(57,$ALERT57,$server_list_id);
	    alert_insert(100,$ALERT100,$server_list_id);
	    alert_insert(47,$ALERT47,$server_list_id);
	    alert_insert(48,$ALERT48,$server_list_id);
	    alert_insert(50,$ALERT50,$server_list_id);
	    alert_insert(51,$ALERT51,$server_list_id);
	    alert_insert(52,$ALERT52,$server_list_id);
	    alert_insert(53,$ALERT53,$server_list_id);
	    
# slave/replication alerts
	    if($server_is_slave == 1) {
		my $ALERT42 = alert_42($Slave_SQL_Running);
		my $ALERT43 = alert_43($Slave_IO_Running);
		my $ALERT44 = alert_44($Seconds_Behind_Master,$threshold_seconds_behind_master);
		alert_insert(42,$ALERT42,$server_list_id);
		alert_insert(43,$ALERT43,$server_list_id);
		alert_insert(44,$ALERT44,$server_list_id);
	    }
	    
	    $ALERTSNMP = alert_snmp($server_snmp_error_code);
	    $ALERTMYSQL = alert_mysql($server_mysql_error_code);
	    
	    # Insert report data into database
	    xml_end();
	    insert_report($server_list_id,$server_statistics_id,$Creation_time);
	}
	else {
	    ## we're not running alert_clean since we added the ON DUPLICATE KEY UPDATE to the INSERT query on alert_insert
	    #alert_clean($server_list_id);
	    alert_insert(99,$ALERT00,$server_list_id);

	    $ALERTSNMP = alert_snmp($server_snmp_error_code);
            $ALERTMYSQL = alert_mysql($server_mysql_error_code);

            xml_end();
            insert_report($server_list_id,$server_statistics_id,$Creation_time);
	}
    }
    $sth->finish;
    $dbh->disconnect;
}

sub alert_clean {
    my $server_list_id = $_[0];
    my $dbh = DBI->connect(
        "DBI:mysql:$mysql_w_db:$mysql_w_host",
        $mysql_w_user,
        $mysql_w_pass,
	{
            PrintError => 0,
	        RaiseError => 0
        }
        ) or error_report("$DBI::errstr");

    my $sql0 = "DELETE FROM `alerts_current` WHERE server_list_id = '$server_list_id';";
    my $sth0 = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth0->execute or error_report("$DBI::errstr");
}

sub alert_insert {
    my($alerts_def_id,$alert_state,$server_list_id) = @_;
    open(DAT, $commit_report) || die ("Could not open report file ($commit_report)");
    my @data=<DAT>;
    close(DAT);

    my $dbh = DBI->connect(
        "DBI:mysql:$mysql_w_db:$mysql_w_host",
        $mysql_w_user,
        $mysql_w_pass,
        {
            PrintError => 0,
            RaiseError => 0
        }
        ) or error_report("$DBI::errstr");

    foreach my $entry(@data) {
        $dbh->quote($entry);
    }

    my $sql1 = "INSERT INTO `alerts_current` (
`id` ,
`server_list_id` ,
`alerts_def_id` ,
`alert_state` ,
`creation_time`
)
VALUES (
NULL , '$server_list_id', '$alerts_def_id', '$alert_state', NOW( )
) ON DUPLICATE KEY UPDATE renew_time=NOW();";
    my $sth1 = $dbh->prepare($sql1) or error_report("$DBI::errstr");
    $sth1->execute or error_report("$DBI::errstr");
}

sub insert_report {
    my($server_list_id,$server_statistics_id,$Creation_time) = @_;
    open(DAT, $commit_report) || die ("Could not open report file ($commit_report)");
    my @data=<DAT>;
    close(DAT);
    
    my $dbh = DBI->connect(
	"DBI:mysql:$mysql_w_db:$mysql_w_host",
        $mysql_w_user,
        $mysql_w_pass,
	{
            PrintError => 0,
            RaiseError => 0
	}
	) or error_report("$DBI::errstr");
    
    foreach my $entry(@data) { 
	$dbh->quote($entry);
    }
    my $sql0 = "INSERT INTO `server_report` (
`id` ,
`server_list_id`,
`server_statistics_id` ,
`server_report_document` ,
`creation_time`
)
VALUES (
NULL , '$server_list_id', '$server_statistics_id', '@data', '$Creation_time'
);";
    my $sth = $dbh->prepare($sql0) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");
    flush_writer();
    print "######################ENTERED report\n";
 
}

sub xml_head {
    my($hostname,$Creation_time) = @_;
    writer('<?xml version="1.0" encoding="UTF-8"?>');
    writer('<!-- generator="kontroll-reporter-5.0_linux-x86.pl" -->');
    writer('<!-- website="http://kontrollsoft.com" -->');
    writer('<!-- package_ver="2.0" -->');
    writer('<!-- copyright-notice "Copyright 2008, Matt Reid" -->');
    writer('<!-- license-type "BSD http://www.opensource.org/licenses/bsd-license.php" -->');
    writer(' <kontrollbase version="2.0">');
    writer("  <report date=\"$Creation_time\">");    
    writer("   <server hostname=\"$hostname\">");
}

sub xml_end {
    writer("   </server>");
    writer("  </report>");
    writer(" </kontrollbase>");
}

config_connect($config);
debug_report("#### reporter process start");
get_list();
system("rm -f $commit_report");
debug_report("#### reporter process end");
