#! /usr/bin/perl
################################################################################
## NAME: kontroll-reporter-cli.pl
## VERSION: 2.0.1
## DATE: 2010-01-08
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
use Getopt::Long;
use Sys::Hostname;
use Net::SNMP;
use File::Find;
use XML::Parser;
use XML::SimpleObject;

my $server_host = hostname; #using Sys::Hostname
my $name = "kontroll-reporter-cli.pl";
my $website = "http://kontrollsoft.com";
my $package_version = "2.1";

my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
my $datetimefile =  strftime "%Y-%m-%d_%H%M%S", localtime;

my $error_log = "/tmp/kbase-$datetimefile-sys_error.log";
my $debug_log = "/tmp/kbase-$datetimefile-sys_debug.log";
my $xml_log = "/tmp/kbase-$datetimefile-xml.log";

# database connection vars
my $server_mysql_user = undef;
my $server_mysql_pass = undef;
my $server_mysql_port = undef;
my $server_mysql_socket = undef;
my $server_mysql_db = undef;
my $server_mysql_host = undef;

# begin long list of variable definitions used in XML processing
my %varlist = (
    'server_list_id' => '0',
    'cnf_file' => '0',
    'os_load_1' => '0',
    'os_load_5' => '0',
    'os_load_15' => '0',
    'os_mem_total' => '0',
    'os_mem_used' => '0',
    'os_swap_total' => '0',
    'os_swap_free' => '0',
    'os_cpu_user' => '0',
    'os_cpu_system' => '0',
    'os_cpu_idle' => '0',
    'queries_per_second' => '0',
    'num_schema' => '0',
    'num_tables' => '0',
    'num_connections' => '0',
    'length_data' => '0',
    'length_index' => '0',
    'engine_count_innodb' => '0',
    'engine_count_myisam' => '0',
    'engine_myisam_size_data' => '0',
    'engine_myisam_size_index' => '0',
    'engine_innodb_size_data' => '0',
    'engine_innodb_size_index' => '0',
    'auto_increment_increment' => '0',
    'auto_increment_offset' => '0',
    'automatic_sp_privileges' => '0',
    'back_log' => '0',
    'basedir' => '0',
    'binlog_cache_size' => '0',
    'bulk_insert_buffer_size' => '0',
    'character_set_client' => '0',
    'character_set_connection' => '0',
    'character_set_database' => '0',
    'character_set_filesystem' => '0',
    'character_set_results' => '0',
    'character_set_server' => '0',
    'character_set_system' => '0',
    'character_sets_dir' => '0',
    'collation_connection' => '0',
    'collation_database' => '0',
    'collation_server' => '0',
    'completion_type' => '0',
    'concurrent_insert' => '0',
    'connect_timeout' => '0',
    'datadir' => '0',
    'date_format' => '0',
    'datetime_format' => '0',
    'default_week_format' => '0',
    'delay_key_write' => '0',
    'delayed_insert_limit' => '0',
    'delayed_insert_timeout' => '0',
    'delayed_queue_size' => '0',
    'div_precision_increment' => '0',
    'keep_files_on_create' => '0',
    'engine_condition_pushdown' => '0',
    'expire_logs_days' => '0',
    'flush' => '0',
    'flush_time' => '0',
    'ft_boolean_syntax' => '0',
    'ft_max_word_len' => '0',
    'ft_min_word_len' => '0',
    'ft_query_expansion_limit' => '0',
    'ft_stopword_file' => '0',
    'group_concat_max_len' => '0',
    'have_archive' => '0',
    'have_bdb' => '0',
    'have_blackhole_engine' => '0',
    'have_compress' => '0',
    'have_crypt' => '0',
    'have_csv' => '0',
    'have_dynamic_loading' => '0',
    'have_example_engine' => '0',
    'have_federated_engine' => '0',
    'have_geometry' => '0',
    'have_innodb' => '0',
    'have_isam' => '0',
    'have_merge_engine' => '0',
    'have_ndbcluster' => '0',
    'have_openssl' => '0',
    'have_ssl' => '0',
    'have_query_cache' => '0',
    'have_raid' => '0',
    'have_rtree_keys' => '0',
    'have_symlink' => '0',
    'hostname' => '0',
    'init_connect' => '0',
    'init_file' => '0',
    'init_slave' => '0',
    'innodb_additional_mem_pool_size' => '0',
    'innodb_autoextend_increment' => '0',
    'innodb_buffer_pool_awe_mem_mb' => '0',
    'innodb_buffer_pool_size' => '0',
    'innodb_checksums' => '0',
    'innodb_commit_concurrency' => '0',
    'innodb_concurrency_tickets' => '0',
    'innodb_data_file_path' => '0',
    'innodb_data_home_dir' => '0',
    'innodb_adaptive_hash_index' => '0',
    'innodb_doublewrite' => '0',
    'innodb_fast_shutdown' => '0',
    'innodb_file_io_threads' => '0',
    'innodb_file_per_table' => '0',
    'innodb_flush_log_at_trx_commit' => '0',
    'innodb_flush_method' => '0',
    'innodb_force_recovery' => '0',
    'innodb_lock_wait_timeout' => '0',
    'innodb_locks_unsafe_for_binlog' => '0',
    'innodb_log_arch_dir' => '0',
    'innodb_log_archive' => '0',
    'innodb_log_buffer_size' => '0',
    'innodb_log_file_size' => '0',
    'innodb_log_files_in_group' => '0',
    'innodb_log_group_home_dir' => '0',
    'innodb_max_dirty_pages_pct' => '0',
    'innodb_max_purge_lag' => '0',
    'innodb_mirrored_log_groups' => '0',
    'innodb_open_files' => '0',
    'innodb_rollback_on_timeout' => '0',
    'innodb_support_xa' => '0',
    'innodb_sync_spin_loops' => '0',
    'innodb_table_locks' => '0',
    'innodb_thread_concurrency' => '0',
    'innodb_thread_sleep_delay' => '0',
    'innodb_read_ahead' => '0',
    'innodb_ibuf_contract_const' => '0',
    'innodb_ibuf_contract_burst' => '0',
    'innodb_buf_flush_const' => '0',
    'innodb_buf_flush_burst' => '0',
    'interactive_timeout' => '0',
    'join_buffer_size' => '0',
    'key_buffer_size' => '0',
    'key_cache_age_threshold' => '0',
    'key_cache_block_size' => '0',
    'key_cache_division_limit' => '0',
    'language' => '0',
    'large_files_support' => '0',
    'large_page_size' => '0',
    'large_pages' => '0',
    'lc_time_names' => '0',
    'license' => '0',
    'local_infile' => '0',
    'locked_in_memory' => '0',
    'log' => '0',
    'log_bin' => '0',
    'log_bin_trust_function_creators' => '0',
    'log_error' => '0',
    'log_queries_not_using_indexes' => '0',
    'log_slave_updates' => '0',
    'log_slow_queries' => '0',
    'log_slow_filter' => '0',
    'log_slow_verbosity' => '0',
    'log_warnings' => '0',
    'long_query_time' => '0',
    'low_priority_updates' => '0',
    'lower_case_file_system' => '0',
    'lower_case_table_names' => '0',
    'max_allowed_packet' => '0',
    'max_binlog_cache_size' => '0',
    'max_binlog_size' => '0',
    'max_connect_errors' => '0',
    'max_connections' => '0',
    'max_delayed_threads' => '0',
    'max_error_count' => '0',
    'max_heap_table_size' => '0',
    'max_insert_delayed_threads' => '0',
    'max_join_size' => '0',
    'max_length_for_sort_data' => '0',
    'max_prepared_stmt_count' => '0',
    'max_relay_log_size' => '0',
    'max_seeks_for_key' => '0',
    'max_sort_length' => '0',
    'max_sp_recursion_depth' => '0',
    'max_tmp_tables' => '0',
    'max_user_connections' => '0',
    'max_write_lock_count' => '0',
    'min_examined_row_limit' => '0',
    'multi_range_count' => '0',
    'myisam_data_pointer_size' => '0',
    'myisam_max_sort_file_size' => '0',
    'myisam_recover_options' => '0',
    'myisam_repair_threads' => '0',
    'myisam_sort_buffer_size' => '0',
    'myisam_stats_method' => '0',
    'net_buffer_length' => '0',
    'net_read_timeout' => '0',
    'net_retry_count' => '0',
    'net_write_timeout' => '0',
    'new' => '0',
    'old_passwords' => '0',
    'open_files_limit' => '0',
    'optimizer_prune_level' => '0',
    'optimizer_search_depth' => '0',
    'pid_file' => '0',
    'port' => '0',
    'preload_buffer_size' => '0',
    'protocol_version' => '0',
    'query_alloc_block_size' => '0',
    'query_cache_limit' => '0',
    'query_cache_min_res_unit' => '0',
    'query_cache_size' => '0',
    'query_cache_type' => '0',
    'query_cache_wlock_invalidate' => '0',
    'query_prealloc_size' => '0',
    'range_alloc_block_size' => '0',
    'log_slow_rate_limit' => '0',
    'read_buffer_size' => '0',
    'read_only' => '0',
    'read_rnd_buffer_size' => '0',
    'relay_log' => '0',
    'relay_log_index' => '0',
    'relay_log_info_file' => '0',
    'relay_log_purge' => '0',
    'relay_log_space_limit' => '0',
    'rpl_recovery_rank' => '0',
    'secure_auth' => '0',
    'secure_file_priv' => '0',
    'server_id' => '0',
    'skip_external_locking' => '0',
    'skip_networking' => '0',
    'skip_show_database' => '0',
    'slave_compressed_protocol' => '0',
    'slave_load_tmpdir' => '0',
    'slave_net_timeout' => '0',
    'slave_skip_errors' => '0',
    'slave_transaction_retries' => '0',
    'slow_launch_time' => '0',
    'socket' => '0',
    'sort_buffer_size' => '0',
    'sql_big_selects' => '0',
    'sql_mode' => '0',
    'sql_notes' => '0',
    'sql_warnings' => '0',
    'ssl_ca' => '0',
    'ssl_capath' => '0',
    'ssl_cert' => '0',
    'ssl_cipher' => '0',
    'ssl_key' => '0',
    'storage_engine' => '0',
    'sync_binlog' => '0',
    'sync_frm' => '0',
    'system_time_zone' => '0',
    'table_cache' => '0',
    'table_lock_wait_timeout' => '0',
    'table_type' => '0',
    'thread_cache_size' => '0',
    'thread_stack' => '0',
    'time_format' => '0',
    'time_zone' => '0',
    'timed_mutexes' => '0',
    'tmp_table_size' => '0',
    'tmpdir' => '0',
    'transaction_alloc_block_size' => '0',
    'transaction_prealloc_size' => '0',
    'tx_isolation' => '0',
    'updatable_views_with_limit' => '0',
    'version' => '0',
    'version_comment' => '0',
    'version_compile_machine' => '0',
    'version_compile_os' => '0',
    'wait_timeout' => '0',
    'Aborted_clients' => '0',
    'Aborted_connects' => '0',
    'Binlog_cache_disk_use' => '0',
    'Binlog_cache_use' => '0',
    'Bytes_received' => '0',
    'Bytes_sent' => '0',
    'Com_admin_commands' => '0',
    'Com_alter_db' => '0',
    'Com_alter_table' => '0',
    'Com_analyze' => '0',
    'Com_backup_table' => '0',
    'Com_begin' => '0',
    'Com_call_procedure' => '0',
    'Com_change_db' => '0',
    'Com_change_master' => '0',
    'Com_check' => '0',
    'Com_checksum' => '0',
    'Com_commit' => '0',
    'Com_create_db' => '0',
    'Com_create_function' => '0',
    'Com_create_index' => '0',
    'Com_create_table' => '0',
    'Com_create_user' => '0',
    'Com_dealloc_sql' => '0',
    'Com_delete' => '0',
    'Com_delete_multi' => '0',
    'Com_do' => '0',
    'Com_drop_db' => '0',
    'Com_drop_function' => '0',
    'Com_drop_index' => '0',
    'Com_drop_table' => '0',
    'Com_drop_user' => '0',
    'Com_execute_sql' => '0',
    'Com_flush' => '0',
    'Com_grant' => '0',
    'Com_ha_close' => '0',
    'Com_ha_open' => '0',
    'Com_ha_read' => '0',
    'Com_help' => '0',
    'Com_insert' => '0',
    'Com_insert_select' => '0',
    'Com_kill' => '0',
    'Com_load' => '0',
    'Com_load_master_data' => '0',
    'Com_load_master_table' => '0',
    'Com_lock_tables' => '0',
    'Com_optimize' => '0',
    'Com_preload_keys' => '0',
    'Com_prepare_sql' => '0',
    'Com_purge' => '0',
    'Com_purge_before_date' => '0',
    'Com_rename_table' => '0',
    'Com_repair' => '0',
    'Com_replace' => '0',
    'Com_replace_select' => '0',
    'Com_reset' => '0',
    'Com_restore_table' => '0',
    'Com_revoke' => '0',
    'Com_revoke_all' => '0',
    'Com_rollback' => '0',
    'Com_savepoint' => '0',
    'Com_select' => '0',
    'Com_set_option' => '0',
    'Com_show_binlog_events' => '0',
    'Com_show_binlogs' => '0',
    'Com_show_charsets' => '0',
    'Com_show_collations' => '0',
    'Com_show_column_types' => '0',
    'Com_show_create_db' => '0',
    'Com_show_create_table' => '0',
    'Com_show_databases' => '0',
    'Com_show_errors' => '0',
    'Com_show_fields' => '0',
    'Com_show_grants' => '0',
    'Com_show_innodb_status' => '0',
    'Com_show_keys' => '0',
    'Com_show_logs' => '0',
    'Com_show_master_status' => '0',
    'Com_show_ndb_status' => '0',
    'Com_show_new_master' => '0',
    'Com_show_open_tables' => '0',
    'Com_show_privileges' => '0',
    'Com_show_processlist' => '0',
    'Com_show_slave_hosts' => '0',
    'Com_show_slave_status' => '0',
    'Com_show_status' => '0',
    'Com_show_storage_engines' => '0',
    'Com_show_tables' => '0',
    'Com_show_triggers' => '0',
    'Com_show_variables' => '0',
    'Com_show_warnings' => '0',
    'Com_slave_start' => '0',
    'Com_slave_stop' => '0',
    'Com_stmt_close' => '0',
    'Com_stmt_execute' => '0',
    'Com_stmt_fetch' => '0',
    'Com_stmt_prepare' => '0',
    'Com_stmt_reset' => '0',
    'Com_stmt_send_long_data' => '0',
    'Com_truncate' => '0',
    'Com_unlock_tables' => '0',
    'Com_update' => '0',
    'Com_update_multi' => '0',
    'Com_xa_commit' => '0',
    'Com_xa_end' => '0',
    'Com_xa_prepare' => '0',
    'Com_xa_recover' => '0',
    'Com_xa_rollback' => '0',
    'Com_xa_start' => '0',
    'Compression' => '0',
    'Connections' => '0',
    'Created_tmp_disk_tables' => '0',
    'Created_tmp_files' => '0',
    'Created_tmp_tables' => '0',
    'Delayed_errors' => '0',
    'Delayed_insert_threads' => '0',
    'Delayed_writes' => '0',
    'Flush_commands' => '0',
    'Handler_commit' => '0',
    'Handler_delete' => '0',
    'Handler_discover' => '0',
    'Handler_prepare' => '0',
    'Handler_read_first' => '0',
    'Handler_read_key' => '0',
    'Handler_read_next' => '0',
    'Handler_read_prev' => '0',
    'Handler_read_rnd' => '0',
    'Handler_read_rnd_next' => '0',
    'Handler_rollback' => '0',
    'Handler_savepoint' => '0',
    'Handler_savepoint_rollback' => '0',
    'Handler_update' => '0',
    'Handler_write' => '0',
    'Innodb_buffer_pool_pages_data' => '0',
    'Innodb_buffer_pool_pages_dirty' => '0',
    'Innodb_buffer_pool_pages_flushed' => '0',
    'Innodb_buffer_pool_pages_free' => '0',
    'Innodb_buffer_pool_pages_misc' => '0',
    'Innodb_buffer_pool_pages_total' => '0',
    'Innodb_buffer_pool_read_ahead_rnd' => '0',
    'Innodb_buffer_pool_read_ahead_seq' => '0',
    'Innodb_buffer_pool_read_requests' => '0',
    'Innodb_buffer_pool_reads' => '0',
    'Innodb_buffer_pool_wait_free' => '0',
    'Innodb_buffer_pool_write_requests' => '0',
    'Innodb_data_fsyncs' => '0',
    'Innodb_data_pending_fsyncs' => '0',
    'Innodb_data_pending_reads' => '0',
    'Innodb_data_pending_writes' => '0',
    'Innodb_data_read' => '0',
    'Innodb_data_reads' => '0',
    'Innodb_data_writes' => '0',
    'Innodb_data_written' => '0',
    'Innodb_dblwr_pages_written' => '0',
    'Innodb_dblwr_writes' => '0',
    'Innodb_log_waits' => '0',
    'Innodb_log_write_requests' => '0',
    'Innodb_log_writes' => '0',
    'Innodb_os_log_fsyncs' => '0',
    'Innodb_os_log_pending_fsyncs' => '0',
    'Innodb_os_log_pending_writes' => '0',
    'Innodb_os_log_written' => '0',
    'Innodb_page_size' => '0',
    'Innodb_pages_created' => '0',
    'Innodb_pages_read' => '0',
    'Innodb_pages_written' => '0',
    'Innodb_row_lock_current_waits' => '0',
    'Innodb_row_lock_time' => '0',
    'Innodb_row_lock_time_avg' => '0',
    'Innodb_row_lock_time_max' => '0',
    'Innodb_row_lock_waits' => '0',
    'Innodb_rows_deleted' => '0',
    'Innodb_rows_inserted' => '0',
    'Innodb_rows_read' => '0',
    'Innodb_rows_updated' => '0',
    'Key_blocks_not_flushed' => '0',
    'Key_blocks_unused' => '0',
    'Key_blocks_used' => '0',
    'Key_read_requests' => '0',
    'Key_reads' => '0',
    'Key_write_requests' => '0',
    'Key_writes' => '0',
    'Last_query_cost' => '0',
    'Max_used_connections' => '0',
    'Not_flushed_delayed_rows' => '0',
    'Open_files' => '0',
    'Open_streams' => '0',
    'Open_tables' => '0',
    'Opened_tables' => '0',
    'Prepared_stmt_count' => '0',
    'Qcache_free_blocks' => '0',
    'Qcache_free_memory' => '0',
    'Qcache_hits' => '0',
    'Qcache_inserts' => '0',
    'Qcache_lowmem_prunes' => '0',
    'Qcache_not_cached' => '0',
    'Qcache_queries_in_cache' => '0',
    'Qcache_total_blocks' => '0',
    'Questions' => '0',
    'Rpl_status' => '0',
    'Select_full_join' => '0',
    'Select_full_range_join' => '0',
    'Select_range' => '0',
    'Select_range_check' => '0',
    'Select_scan' => '0',
    'Slave_open_temp_tables' => '0',
    'Slave_retried_transactions' => '0',
    'Slave_running' => '0',
    'Slow_launch_threads' => '0',
    'Slow_queries' => '0',
    'Sort_merge_passes' => '0',
    'Sort_range' => '0',
    'Sort_rows' => '0',
    'Sort_scan' => '0',
    'Table_locks_immediate' => '0',
    'Table_locks_waited' => '0',
    'Tc_log_max_pages_used' => '0',
    'Tc_log_page_size' => '0',
    'Tc_log_page_waits' => '0',
    'Threads_cached' => '0',
    'Threads_connected' => '0',
    'Threads_created' => '0',
    'Threads_running' => '0',
    'Uptime' => '0',
    'server_snmp_error_code' => '0',
    'server_mysql_error_code' => '0',
    'Slave_SQL_Running' => '0',
    'Slave_IO_Running' => '0',
    'Seconds_Behind_Master' => '0',
    'illegal_global_user' => '0',
    'illegal_grant_user' => '0',
    'illegal_remote_root' => '0',
    'illegal_user_nopass' => '0',
    'illegal_user_noname' => '0',
    'collection_time_elapse' => '0');	       

sub log_clear {
    if (-e "$error_log") { system("rm -f $error_log"); }
    if (-e "$debug_log") { system("rm -f $debug_log"); }
    if (-e "$xml_log") { system("rm -f $xml_log"); }
}

sub debug_report {
    my $note = $_[0];
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | reporter-cli: ".$note."\n";
    print $note;
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$debug_log" or die $!;
    print FILE $note;
    close FILE;
}

sub error_report {
    my $err = $_[0];
    my $errtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $err = $errtime." | ERROR | reporter-cli: ".$err."\n";
    print $err."\n";
    sysopen(FILE, $error_log, O_RDWR|O_EXCL|O_CREAT, 0644);    
    open FILE, ">>$error_log" or die $!; 
    print FILE $err; 
    close FILE;   
    exit 1;
}

sub writexml {
    my $note = $_[0];
    sysopen(FILE, $xml_log, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$xml_log" or die $!;
    print FILE $note;
    close FILE;
}

sub get_cnf {
    my $cnf = "/etc/my.cnf";    
    my $debcnf = "/etc/mysql/my.cnf";
    open(DAT, $cnf) || open(DAT, $debcnf) || print "<error type=\"mysql\"><![CDATA[Could not open cnf file $cnf]]></error>\n";
    my @data=<DAT>;
    close(DAT);
    writexml("   <item name=\"cnf_file\"><![CDATA[");    
    foreach my $item(@data) { chomp($item);} #remove carriage returns
    foreach my $item(@data) { 
        writexml("$item\n");
    } 
    writexml("]]></item>\n");
}


sub start_xml {
    writexml("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!-- generator=\"$name\" -->
<!-- website=\"$website\" -->
<!-- package_ver=\"$package_version\" -->
<!-- copyright-notice \"Copyright 2010 to present, Matt Reid\" -->
<!-- license-type \"BSD http://www.opensource.org/licenses/bsd-license.php\" -->
 <kontrollbase version=\"2.1\">
  <server hostname=\"$server_host\">
   <datetime>$datetime</datetime>
");
    return 0;
}

sub end_xml {
    writexml("</server>
 </kontrollbase>");
    return 0;
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
	writexml("<error type=\"snmp\"><![CDATA[$error]]></error>");
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
	    writexml("<error type=\"snmp\"><![CDATA[SNMP: $error]]></error>\n");
	}

        # start making our nested array. 
        # ie: $vars[0][0]='$os_swap_total' 
        # and $vars[0][1]='$result->{$request} for result of $sysSwapTotal_OID'

        $vars[$count][0] = $identifiers[$count];
        $vars[$count][1] = $result->{$request};

        if($count < 4) {
            $vars[$count][1] = ($vars[$count][1] * 1024);
        }

        my $n = "   ".$vars[$count][0].$vars[$count][1]."]]></item>\n";
	writexml("$n");
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
    my $sql14 = "select User,Host from mysql.user where Select_priv='Y' and Insert_priv='Y' and Update_priv='Y' and Delete_priv='Y' and Create_priv='Y' and Drop_priv='Y' and Reload_priv='Y' and Shutdown_priv='Y' and Process_priv='Y' and File_priv='Y' and References_priv='Y' and Index_priv='Y' and Alter_priv='Y' and Show_db_priv='Y' and Super_priv='Y' and Create_tmp_table_priv='Y' and Lock_tables_priv='Y' and Execute_priv='Y' and Repl_slave_priv='Y' and Repl_client_priv='Y' and Create_view_priv='Y' and Show_view_priv='Y' and Create_routine_priv='Y' and Alter_routine_priv='Y' and Create_user_priv='Y' and Host != 'localhost' AND Host != '127.0.0.1';";
    my $sql15 = "select * from mysql.user where Grant_priv='Y' and User != 'root';";
    my $sql16 = "select * from mysql.user where User='root' and Host != 'localhost' AND Host != '127.0.0.1';";
    my $sql17 = "select * from mysql.user where Password='';";
    my $sql18 = "select * from mysql.user where User='';";

    my $dsn = "DBI:mysql:database=$server_mysql_db;host=$server_mysql_host;port=$server_mysql_port;mysql_socket=$server_mysql_socket";
    my $dbh = DBI->connect(
        $dsn, 
        $server_mysql_user, 
        $server_mysql_pass,
			   {
            PrintError => 0,
            RaiseError => 0
	    })
        or error_report("mysql connection error: $DBI::errstr");
    
    my $sth = $dbh->prepare($sql0) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'Variable_name'};
        my $varvalue = $row->{'Value'};
        writexml('   <item name="'.$varname.'"><![CDATA['.$varvalue."]]></item>\n");
    }

    $sth = $dbh->prepare($sql1) or error_report("<error type=\"mysql\"><![CDATA[$DBI::errstr ]]></error>\n");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'Variable_name'};
        my $varvalue = $row->{'Value'};
        writexml('   <item name="'.$varname.'"><![CDATA['.$varvalue."]]></item>\n");
    }

    $sth = $dbh->prepare($sql2) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(SCHEMA_NAME)'};
        writexml('   <item name="num_schema"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql3) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(TABLE_NAME)'};
        writexml('   <item name="num_tables"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql4) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(DATA_LENGTH)'};
        writexml('   <item name="length_data"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql5) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(INDEX_LENGTH)'};
        writexml('   <item name="length_index"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql6) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(ENGINE)'};
        writexml('   <item name="engine_count_innodb"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql7) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'count(ENGINE)'};
        writexml('   <item name="engine_count_myisam"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql8) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    my $proc_count = 0;
    while(my $row = $sth->fetchrow_hashref) {
        $proc_count++;
    }

    $sth = $dbh->prepare($sql9) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(INDEX_LENGTH)'};
        writexml('   <item name="engine_innodb_size_index"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql10) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(INDEX_LENGTH)'};
        writexml('   <item name="engine_myisam_size_index"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql11) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(DATA_LENGTH)'};
        writexml('   <item name="engine_innodb_size_data"><![CDATA['.$varname."]]></item>\n");
    }

    $sth = $dbh->prepare($sql12) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    while(my $row = $sth->fetchrow_hashref) {
        my $varname = $row->{'sum(DATA_LENGTH)'};
        writexml('   <item name="engine_myisam_size_data"><![CDATA['.$varname."]]></item>\n");
    }

    # Replication checks
    my $Slave_IO_Running = "NULL";
    my $Slave_SQL_Running = "NULL";
    my $Seconds_Behind_Master = "NULL";

    $sth = $dbh->prepare($sql13) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) { #if slave is configured/started we get numbers
        while(my $row = $sth->fetchrow_hashref) {
            $Slave_IO_Running = $row->{'Slave_IO_Running'};
            $Slave_SQL_Running = $row->{'Slave_SQL_Running'};
            $Seconds_Behind_Master = $row->{'Seconds_Behind_Master'};
            writexml('   <item name="Slave_IO_Running"><![CDATA['.$Slave_IO_Running."]]></item>\n");
            writexml('   <item name="Slave_SQL_Running"><![CDATA['.$Slave_SQL_Running."]]></item>\n");
            writexml('   <item name="Seconds_Behind_Master"><![CDATA['.$Seconds_Behind_Master."]]></item>\n");
        }
    }
    else {
        writexml('   <item name="Slave_IO_Running"><![CDATA['.$Slave_IO_Running."]]></item>\n");
        writexml('   <item name="Slave_SQL_Running"><![CDATA['.$Slave_SQL_Running."]]></item>\n");
        writexml('   <item name="Seconds_Behind_Master"><![CDATA['.$Seconds_Behind_Master."]]></item>\n");
    }
    $sth = $dbh->prepare($sql14) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) { 
        writexml('   <item name="illegal_global_user"><![CDATA[');
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
            writexml('Host: '.$IllegalHost.' User:'.$IllegalUser.",");
        }
        writexml("]]></item>\n");
    }
    else {
        writexml('   <item name="illegal_global_user"><![CDATA[0]]></item>\n');
    }
    
    $sth = $dbh->prepare($sql15) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) {
        writexml('   <item name="illegal_grant_user"><![CDATA[');
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
            writexml('Host: '.$IllegalHost.' User:'.$IllegalUser.",");
        }
        writexml("]]></item>\n");
    }
    else {
        writexml("   <item name=\"illegal_grant_user\"><![CDATA[0]]></item>\n");
    }

    $sth = $dbh->prepare($sql16) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) {
        writexml('   <item name="illegal_remote_root"><![CDATA[');
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
            writexml('Host: '.$IllegalHost.' User:'.$IllegalUser.",");
        }
        writexml("]]></item>\n");
    }
    else {
        writexml("   <item name=\"illegal_remote_root\"><![CDATA[0]]></item>\n");
    }
    $sth = $dbh->prepare($sql17) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) {
	writexml('   <item name="illegal_user_nopass"><![CDATA[');
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
	    writexml('Host: '.$IllegalHost.' User:'.$IllegalUser.",");
        }
        writexml("]]></item>\n");
    }
    else {
        writexml("   <item name=\"illegal_user_nopass\"><![CDATA[0]]></item>\n");
    }

    $sth = $dbh->prepare($sql18) or error_report("mysql connection error: $DBI::errstr");
    $sth->execute or error_report("mysql connection error: $DBI::errstr");
    if($sth->fetchrow_hashref) {
        writexml('   <item name="illegal_user_noname"><![CDATA[');
        while(my $row = $sth->fetchrow_hashref) {
            my $IllegalUser = $row->{'User'};
            my $IllegalHost = $row->{'Host'};
            writexml('Host: '.$IllegalHost.' User:'.$IllegalUser.",");
        }
        writexml("]]></item>\n");
    }
    else {
        writexml("   <item name=\"illegal_user_noname\"><![CDATA[0]]></item>\n");
    }

    writexml('   <item name="num_connections"><![CDATA['.$proc_count."]]></item>\n");    
    $sth->finish;
    $dbh->disconnect;
}

#populate all of the variables in the query list with their values from the xml file processing below
sub parse_data {    
    # we connect to mysql so that we can use the perl database function variable quotations (like mysql_real_escape_string in PHP)
    my $dbh = DBI->connect(
			   "DBI:mysql:mysql:$server_mysql_host",
			   $server_mysql_user,
			   $server_mysql_pass,
			   { PrintError => 0, RaiseError => 0 }
			   ) or error_report("$DBI::errstr");
    
    my $parser = XML::Parser->new(ErrorContext => 2, Style => "Tree");
    my $xso = XML::SimpleObject->new( $parser->parsefile($xml_log));
    my $h = $server_host;
    
    foreach my $server ($xso->child('kontrollbase')->children('server')) {    
        $h = $server->attribute('hostname');
        debug_report("$h XML data processing: [starting]");
	
        # we get the time of the dataset 
        foreach my $datetime($server->child('datetime')) {
            my $dt = $datetime->value;
            debug_report("$h XML datetime = $dt");
            $varlist{'datetime'} = $datetime->value;
        }
	
        # we find errors!
        if($server->child('error')) {
            foreach my $error($server->child('error')) {
                my $error_type = $error->attribute('type');
                my $error_value = $dbh->quote($error->value);
		
                debug_report("error = $error_value");
                debug_report("error type = $error_type");
		
                if($error_type eq "snmp") {
                    $varlist{'server_snmp_error_code'} = $error_value;
		    return 1;
                }
                if($error_type eq "mysql") {
                    $varlist{'server_mysql_error_code'} = $error_value;
		    return 1;
                }
                if($error_type eq "mysql-connection-error") {
                    $varlist{'server_mysql_error_code'} = $error_value;
		    error_report("mysql connection error occured - please check connection settings.");
		    return 1;
                }
            }
        }
        else {
            debug_report("$h OS SNMP status: [OK]");
        }
        # we assign values to hash
        while (my($key,$value) = each(%varlist)) {
            foreach my $item($server->child('item')) {
                my $item_name = $item->attribute('name');
                my $item_value = '0';
                if($item->value) { $item_value = $item->value; }
                if($item_name eq $key) {
                    $value = $dbh->quote($item_value);
                    #print "$key => $value: ";
                    $varlist{$key} = $value;
                    #print $varlist{$key}."\n";
                }
            }
        }
	
        #do some variable cleaning and math for queries/sec
        my $Questions = $varlist{'Questions'};
        my $Uptime = $varlist{'Uptime'};
        $Questions =~ s/'//g;
        $Uptime =~ s/'//g;
        my $qsec = ($Questions/$Uptime);
        $varlist{'queries_per_second'}=$qsec;
        my $os_mem_total = $varlist{'os_mem_total'};
        debug_report("$h MySQL Connection status: [OK]");
	
        #print compute time from xml
        my $time = $varlist{'collection_time_elapse'};
        $time =~ s/'//g; ##' just need to complete the single quote - take it out and see what happens 
        debug_report("$h Collection time: $time seconds");
    }
    debug_report("$h XML data processing: [success]");
    return 0;
}

# parse XML data items and assign to variables
sub xml_data_process {
    if(-e $xml_log) {
	if(-z $xml_log) { 
	    error_report("XML File is 0 size.");
	    return 1;
	}	
	my $state = parse_data();
	if($state == 1) { 
	    error_report("XML data processing: [failed]"); 
	    return 1;
	}
	else {
	    return 0;	    
	}
    }
    else {
	debug_report("XML data file does not exist, processing: [failed]");
	return 1;
    }
}

sub analyze_data {
    $os_mem_total = ($os_mem_total); # fix for bytes

    xml_head($hostname,$Creation_time);

        #loop through alerts ordered by category... enable this once we finish all of the alerts.
#       $sql1="select id from alerts_def order by alert_category asc;";
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

# we have more pre-reqs to add... but these are from the client script as of now
sub check_perl_prerequisites {
    no warnings 'File::Find';
    my @lm;
    find({wanted => sub { push @lm, $File::Find::name}, follow =>1}, @INC);


    print<<PREREQ;
####################################
$name
Kontrollbase Reporter CLI version
$website
package version: $package_version
####################################

PREREQUISITE            STATUS

PREREQ

my @match = grep(m/\/Net\/SNMP.pm/is, @lm);
    if (@match) {
	print "SNMP.pm                 FOUND.\n";
    }
    else {print "SNMP.pm                 NOT FOUND.\n";}

    @match = grep(m/\/Getopt\/Long.pm/is, @lm);
    if (@match) {
	print "Getopt/Long.pm          FOUND.\n";
    }
    else {print "Getopt/Long.pm          NOT FOUND.\n";}

    @match = grep(m/POSIX.pm/is, @lm);
    if (@match) {
	print "POSIX.pm                FOUND.\n";
    }
    else {print "POSIX.pm                NOT FOUND.\n";}

    @match = grep(m/\/Sys\/Hostname.pm/is, @lm);
    if (@match) {
	print "Sys/Hostname.pm         FOUND.\n";
    }
    else {print "Sys/Hostname.pm         NOT FOUND.\n";}

    @match = grep(m/DBI.pm/is, @lm);
    if (@match) {
	print "DBI.pm                  FOUND.\n";
    }
    else {print "DBI.pm                  NOT FOUND.\n";}

    @match = grep(m/\/Time\/HiRes.pm/is, @lm);
    if (@match) {
	print "Time/HiRes.pm           FOUND.\n";
    }
    else {print "Time/HiRes.pm            NOT FOUND.\n";}

}

#### BEGIN OPERATIONS 
log_clear();

my $server_snmp_local_address = 'localhost';
my $server_snmp_port = '161';
my $server_snmp_rocommunity = 'public';
my $server_snmp_version = '1';
$server_mysql_port = '3306';
$server_mysql_socket = '/var/lib/mysql/mysql.sock';
$server_mysql_db = 'mysql';
$server_mysql_user = 'root';
$server_mysql_pass = '';
$server_mysql_host = 'localhost';
my $snmp_timeout = 5;
my $snmp_retries = 2;
my $help = undef;
my $prereq = undef;
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
    'help' => \$help,
    'prereq' => \$prereq
	    );

if(!$ARGV[0]) { $ARGV[0] = '';}
if($help || $ARGV[0] eq "help" || $ARGV[0] eq "?") {
    print<<HELP;
####################################
$name
Kontrollbase Reporter CLI version
$website
package version: $package_version
####################################
--help        = this message
--prereq      = prerequisite checks

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
mysql-socket:     /var/lib/mysql/mysql.sock
mysql-db:         mysql
mysql-host:       localhost

HELP
}

else {
    if($verbose) {
	print<<GO;
####################################
$name
Kontrollbase Reporter CLI version
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
mysql socket:     $server_mysql_socket
mysql db:         $server_mysql_db
mysql host:       $server_mysql_host

GO
}
    else {
	if($prereq) {
	    check_perl_prerequisites();
	    exit;
	}
    }
    debug_report("reporter-cli process start");
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
    writexml("   <item name=\"collection_time_elapse\"><![CDATA[$elapse]]></item>\n");
    end_xml();
    my $xml_state = xml_data_process(); # stats-gather process
    if($xml_state == 0) {
	analyze_data(); #reporting code, where we actually generate results.
    }
    else {
	exit 1;
	debug_report("reporter-cli process end: [failure]");
    }
    debug_report("reporter-cli process end: [success]");
#    system("rm -f $debug_log");
#    system("rm -f $error_log");
#    system("rm -f $xml_log");
}


