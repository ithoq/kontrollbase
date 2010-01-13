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
#use warnings; #enable for debugging
use DBI;
use Fcntl; 
use POSIX qw(strftime ceil);
use Time::HiRes qw(gettimeofday tv_interval);
use Getopt::Long;
use Sys::Hostname;
use Net::SNMP;
use File::Find;
use XML::Parser;
use XML::SimpleObject;
use Math::Calc::Units qw(convert readable);

###################################################################
## ONLY EDIT THE FOLLOWING VARIABLES IF NECESSARY FOR HARDCODING ##
## IF YOU DON'T KNOW WHAT THEY DO OR WHAT THEY MEAN, DON'T TOUCH ##
my $server_snmp_local_address = 'localhost';
my $server_snmp_port = '161';
my $server_snmp_rocommunity = 'public';
my $server_snmp_version = '1';
my $snmp_timeout = 5;
my $snmp_retries = 2;
my $server_mysql_port = '3306';
my $server_mysql_socket = '/var/lib/mysql/mysql.sock';
my $server_mysql_db = 'mysql';
my $server_mysql_user = 'root';
my $server_mysql_pass = '';
my $server_mysql_host = 'localhost';
my $sqlite_file = './kontroll-reporter-cli_sqlite3-alerts_def.db';
my $output = 'XML';
my $server_host = hostname; #using Sys::Hostname
my $verbose = "0"; #'0' to turn verbose off (default), '1' to enable

# Date formats for filenames and processing, best to not chage them
my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
my $tmpfiletime = strftime "%Y-%m-%d%H%M%S", localtime;
my $datetimefile =  strftime "%Y-%m-%d_%H%M%S", localtime;

# Output and log files - needs to be writeable by script user
my $report_file = "/tmp/kontrollbase-reporter-$server_host-$tmpfiletime"; 
my $error_log = "/tmp/kbase-$datetimefile-sys_error.log"; 
my $debug_log = "/tmp/kbase-$datetimefile-sys_debug.log"; 
my $xml_log = "/tmp/kbase-$datetimefile-xml.log"; # 

## END HARDCODED VARIABLES - DO NOT EDIT BELOW HERE ###############
################################################################### 

my $name = "kontroll-reporter-cli.pl";
my $website = "http://kontrollsoft.com";
my $package_version = "2.1";
my $commit_report = $report_file.'.xml'; #add xml extension since its our default output before further processing
 
# this is really dirty but there are other things to fix first
my($ALERT00,$ALERT01,$ALERT02,$ALERT03,$ALERT04,$ALERT05,$ALERT06,$ALERT07,$ALERT08,$ALERT09,$ALERT10,$ALERT11,$ALERT12,$ALERT13,$ALERT14,$ALERT15,$ALERT16,$ALERT17,$ALERT18,$ALERT19,$ALERT20,$ALERT21,$ALERT22,$ALERT23,$ALERT24,$ALERT25,$ALERT26,$ALERT27,$ALERT28,$ALERT29,$ALERT30,$ALERT31,$ALERT32,$ALERT33,$ALERT34,$ALERT35,$ALERT36,$ALERT37,$ALERT38,$ALERT39,$ALERT40,$ALERT41,$ALERT42,$ALERT43,$ALERT44,$ALERT45,$ALERT46,$ALERT47,$ALERT48,$ALERT49,$ALERT50,$ALERT51,$ALERT52,$ALERT53,$ALERT54,$ALERT55,$ALERT56,$ALERT57,$ALERT58,$ALERT100,$ALERTSNMP,$ALERTMYSQL) = 0;

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

#Check variables to see if they are 0 so that we do not get division by zero errors                                   
sub check_var {
    my $var = $_[0];
    #$var = chomp($var); #chomp was destroying our values..
    debug_report("exceptionhandler: check_var($var)");
    if($var eq "YES") { return $var; }
    elsif($var eq "NO") { return $var; }
    elsif($var eq "ON") { return $var; }
    elsif($var eq "OFF") { return $var; }
    else {
	$var = sprintf("%d", $var);
	#debug_report("exceptionhandler: check_var($var)");
	if($var == 0) {
	    $var = .01;
	    debug_report("exceptionhandler: check_var new value: $var");
	    return $var;
	}
	else {
	    debug_report("exceptionhandler: ($var > 0) continuing...");
	    return $var;
	}
    }
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

sub round {
    my($number) = shift;
    return int($number + .5 * ($number <=> 0));
}

sub log_clear {
    if (-e "$error_log") { system("rm -f $error_log"); }
    if (-e "$debug_log") { system("rm -f $debug_log"); }
    if (-e "$xml_log") { system("rm -f $xml_log"); }
}

sub writer {
    my $note = $_[0];
    $note = $note."\n";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;    
    close FILE;
    return 0;
}

sub writerx {
    my $note = $_[0];
    $note = "<detail>".$note."</detail>\n";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;
    close FILE;
    return 0;
}
sub wfile {
    my $file = $_[0];
    my $note = $_[1];
    $note = "<analytics>".$note."</analytics>\n";
    sysopen(FILE, $file, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$file" or die $!;
    print FILE $note;
    close FILE;
    return 0;
}

sub flush_writer {
    debug_report("truncating $commit_report");
    my $note = "";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">$commit_report" or die $!;
    print FILE $note;
    close FILE;
    return 0;
}

sub debug_report {
    my $note = $_[0];
    my $debugtime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
    $note = $debugtime." | DEBUG | reporter-cli: ".$note."\n";
    sysopen(FILE, $debug_log, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$debug_log" or die $!;
    print FILE $note;
    if($verbose eq 1) {
        print $note;
    }
    close FILE;
    return 0;
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
    return 0;
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

sub analyze_analytics {
    debug_report("analyze_analytics: [starting]");
    my   $Aborted_clients = $varlist{'Aborted_clients'};
    my   $Aborted_connects = $varlist{'Aborted_connects'};
    my   $Binlog_cache_disk_use = $varlist{'Binlog_cache_disk_use'};
    my   $Binlog_cache_use = $varlist{'Binlog_cache_use'};
    my   $Bytes_received = $varlist{'Bytes_received'};
    my   $Bytes_sent = $varlist{'Bytes_sent'};
    my   $Com_admin_commands = $varlist{'Com_admin_commands'};
    my   $Com_alter_db = $varlist{'Com_alter_db'};
    my   $Com_alter_table = $varlist{'Com_alter_table'};
    my   $Com_analyze = $varlist{'Com_analyze'};
    my   $Com_backup_table = $varlist{'Com_backup_table'};
    my   $Com_begin = $varlist{'Com_begin'};
    my   $Com_call_procedure = $varlist{'Com_call_procedure'};
    my   $Com_change_db = $varlist{'Com_change_db'};
    my   $Com_change_master = $varlist{'Com_change_master'};
    my   $Com_check = $varlist{'Com_check'};
    my   $Com_checksum = $varlist{'Com_checksum'};
    my   $Com_commit = $varlist{'Com_commit'};
    my   $Com_create_db = $varlist{'Com_create_db'};
    my   $Com_create_function = $varlist{'Com_create_function'};
    my   $Com_create_index = $varlist{'Com_create_index'};
    my   $Com_create_table = $varlist{'Com_create_table'};
    my   $Com_create_user = $varlist{'Com_create_user'};
    my   $Com_dealloc_sql = $varlist{'Com_dealloc_sql'};
    my   $Com_delete = $varlist{'Com_delete'};
    my   $Com_delete_multi = $varlist{'Com_delete_multi'};
    my   $Com_do = $varlist{'Com_do'};
    my   $Com_drop_db = $varlist{'Com_drop_db'};
    my   $Com_drop_function = $varlist{'Com_drop_function'};
    my   $Com_drop_index = $varlist{'Com_drop_index'};
    my   $Com_drop_table = $varlist{'Com_drop_table'};
    my   $Com_drop_user = $varlist{'Com_drop_user'};
    my   $Com_execute_sql = $varlist{'Com_execute_sql'};
    my   $Com_flush = $varlist{'Com_flush'};
    my   $Com_grant = $varlist{'Com_grant'};
    my   $Com_ha_close = $varlist{'Com_ha_close'};
    my   $Com_ha_open = $varlist{'Com_ha_open'};
    my   $Com_ha_read = $varlist{'Com_ha_read'};
    my   $Com_help = $varlist{'Com_help'};
    my   $Com_insert = $varlist{'Com_insert'};
    my   $Com_insert_select = $varlist{'Com_insert_select'};
    my   $Com_kill = $varlist{'Com_kill'};
    my   $Com_load = $varlist{'Com_load'};
    my   $Com_load_master_data = $varlist{'Com_load_master_data'};
    my   $Com_load_master_table = $varlist{'Com_load_master_table'};
    my   $Com_lock_tables = $varlist{'Com_lock_tables'};
    my   $Com_optimize = $varlist{'Com_optimize'};
    my   $Com_preload_keys = $varlist{'Com_preload_keys'};
    my   $Com_prepare_sql = $varlist{'Com_prepare_sql'};
    my   $Com_purge = $varlist{'Com_purge'};
    my   $Com_purge_before_date = $varlist{'Com_purge_before_date'};
    my   $Com_rename_table = $varlist{'Com_rename_table'};
    my   $Com_repair = $varlist{'Com_repair'};
    my   $Com_replace = $varlist{'Com_replace'};
    my   $Com_replace_select = $varlist{'Com_replace_select'};
    my   $Com_reset = $varlist{'Com_reset'};
    my   $Com_restore_table = $varlist{'Com_restore_table'};
    my   $Com_revoke = $varlist{'Com_revoke'};
    my   $Com_revoke_all = $varlist{'Com_revoke_all'};
    my   $Com_rollback = $varlist{'Com_rollback'};
    my   $Com_savepoint = $varlist{'Com_savepoint'};
    my   $Com_select = $varlist{'Com_select'};
    my   $Com_set_option = $varlist{'Com_set_option'};
    my   $Com_show_binlog_events = $varlist{'Com_show_binlog_events'};
    my   $Com_show_binlogs = $varlist{'Com_show_binlogs'};
    my   $Com_show_charsets = $varlist{'Com_show_charsets'};
    my   $Com_show_collations = $varlist{'Com_show_collations'};
    my   $Com_show_column_types = $varlist{'Com_show_column_types'};
    my   $Com_show_create_db = $varlist{'Com_show_create_db'};
    my   $Com_show_create_table = $varlist{'Com_show_create_table'};
    my   $Com_show_databases = $varlist{'Com_show_databases'};
    my   $Com_show_errors = $varlist{'Com_show_errors'};
    my   $Com_show_fields = $varlist{'Com_show_fields'};
    my   $Com_show_grants = $varlist{'Com_show_grants'};
    my   $Com_show_innodb_status = $varlist{'Com_show_innodb_status'};
    my   $Com_show_keys = $varlist{'Com_show_keys'};
    my   $Com_show_logs = $varlist{'Com_show_logs'};
    my   $Com_show_master_status = $varlist{'Com_show_master_status'};
    my   $Com_show_ndb_status = $varlist{'Com_show_ndb_status'};
    my   $Com_show_new_master = $varlist{'Com_show_new_master'};
    my   $Com_show_open_tables = $varlist{'Com_show_open_tables'};
    my   $Com_show_privileges = $varlist{'Com_show_privileges'};
    my   $Com_show_processlist = $varlist{'Com_show_processlist'};
    my   $Com_show_slave_hosts = $varlist{'Com_show_slave_hosts'};
    my   $Com_show_slave_status = $varlist{'Com_show_slave_status'};
    my   $Com_show_status = $varlist{'Com_show_status'};
    my   $Com_show_storage_engines = $varlist{'Com_show_storage_engines'};
    my   $Com_show_tables = $varlist{'Com_show_tables'};
    my   $Com_show_triggers = $varlist{'Com_show_triggers'};
    my   $Com_show_variables = $varlist{'Com_show_variables'};
    my   $Com_show_warnings = $varlist{'Com_show_warnings'};
    my   $Com_slave_start = $varlist{'Com_slave_start'};
    my   $Com_slave_stop = $varlist{'Com_slave_stop'};
    my   $Com_stmt_close = $varlist{'Com_stmt_close'};
    my   $Com_stmt_execute = $varlist{'Com_stmt_execute'};
    my   $Com_stmt_fetch = $varlist{'Com_stmt_fetch'};
    my   $Com_stmt_prepare = $varlist{'Com_stmt_prepare'};
    my   $Com_stmt_reset = $varlist{'Com_stmt_reset'};
    my   $Com_stmt_send_long_data = $varlist{'Com_stmt_send_long_data'};
    my   $Com_truncate = $varlist{'Com_truncate'};
    my   $Com_unlock_tables = $varlist{'Com_unlock_tables'};
    my   $Com_update = $varlist{'Com_update'};
    my   $Com_update_multi = $varlist{'Com_update_multi'};
    my   $Com_xa_commit = $varlist{'Com_xa_commit'};
    my   $Com_xa_end = $varlist{'Com_xa_end'};
    my   $Com_xa_prepare = $varlist{'Com_xa_prepare'};
    my   $Com_xa_recover = $varlist{'Com_xa_recover'};
    my   $Com_xa_rollback = $varlist{'Com_xa_rollback'};
    my   $Com_xa_start = $varlist{'Com_xa_start'};
    my   $Compression = $varlist{'Compression'};
    my   $Connections = $varlist{'Connections'};
    my   $Created_tmp_disk_tables = $varlist{'Created_tmp_disk_tables'};
    my   $Created_tmp_files = $varlist{'Created_tmp_files'};
    my   $Created_tmp_tables = $varlist{'Created_tmp_tables'};
    my   $Delayed_errors = $varlist{'Delayed_errors'};
    my   $Delayed_insert_threads = $varlist{'Delayed_insert_threads'};
    my   $Delayed_writes = $varlist{'Delayed_writes'};
    my   $Flush_commands = $varlist{'Flush_commands'};
    my   $Handler_commit = $varlist{'Handler_commit'};
    my   $Handler_delete = $varlist{'Handler_delete'};
    my   $Handler_discover = $varlist{'Handler_discover'};
    my   $Handler_prepare = $varlist{'Handler_prepare'};
    my   $Handler_read_first = $varlist{'Handler_read_first'};
    my   $Handler_read_key = $varlist{'Handler_read_key'};
    my   $Handler_read_next = $varlist{'Handler_read_next'};
    my   $Handler_read_prev = $varlist{'Handler_read_prev'};
    my   $Handler_read_rnd = $varlist{'Handler_read_rnd'};
    my   $Handler_read_rnd_next = $varlist{'Handler_read_rnd_next'};
    my   $Handler_rollback = $varlist{'Handler_rollback'};
    my   $Handler_savepoint = $varlist{'Handler_savepoint'};
    my   $Handler_savepoint_rollback = $varlist{'Handler_savepoint_rollback'};
    my   $Handler_update = $varlist{'Handler_update'};
    my   $Handler_write = $varlist{'Handler_write'};
    my   $Innodb_buffer_pool_pages_data = $varlist{'Innodb_buffer_pool_pages_data'};
    my   $Innodb_buffer_pool_pages_dirty = $varlist{'Innodb_buffer_pool_pages_dirty'};
    my   $Innodb_buffer_pool_pages_flushed = $varlist{'Innodb_buffer_pool_pages_flushed'};
    my   $Innodb_buffer_pool_pages_free = $varlist{'Innodb_buffer_pool_pages_free'};
    my   $Innodb_buffer_pool_pages_misc = $varlist{'Innodb_buffer_pool_pages_misc'};
    my   $Innodb_buffer_pool_pages_total = $varlist{'Innodb_buffer_pool_pages_total'};
    my   $Innodb_buffer_pool_read_ahead_rnd = $varlist{'Innodb_buffer_pool_read_ahead_rnd'};
    my   $Innodb_buffer_pool_read_ahead_seq = $varlist{'Innodb_buffer_pool_read_ahead_seq'};
    my   $Innodb_buffer_pool_read_requests = $varlist{'Innodb_buffer_pool_read_requests'};
    my   $Innodb_buffer_pool_reads = $varlist{'Innodb_buffer_pool_reads'};
    my   $Innodb_buffer_pool_wait_free = $varlist{'Innodb_buffer_pool_wait_free'};
    my   $Innodb_buffer_pool_write_requests = $varlist{'Innodb_buffer_pool_write_requests'};
    my   $Innodb_data_fsyncs = $varlist{'Innodb_data_fsyncs'};
    my   $Innodb_data_pending_fsyncs = $varlist{'Innodb_data_pending_fsyncs'};
    my   $Innodb_data_pending_reads = $varlist{'Innodb_data_pending_reads'};
    my   $Innodb_data_pending_writes = $varlist{'Innodb_data_pending_writes'};
    my   $Innodb_data_read = $varlist{'Innodb_data_read'};
    my   $Innodb_data_reads = $varlist{'Innodb_data_reads'};
    my   $Innodb_data_writes = $varlist{'Innodb_data_writes'};
    my   $Innodb_data_written = $varlist{'Innodb_data_written'};
    my   $Innodb_dblwr_pages_written = $varlist{'Innodb_dblwr_pages_written'};
    my   $Innodb_dblwr_writes = $varlist{'Innodb_dblwr_writes'};
    my   $Innodb_log_waits = $varlist{'Innodb_log_waits'};
    my   $Innodb_log_write_requests = $varlist{'Innodb_log_write_requests'};
    my   $Innodb_log_writes = $varlist{'Innodb_log_writes'};
    my   $Innodb_os_log_fsyncs = $varlist{'Innodb_os_log_fsyncs'};
    my   $Innodb_os_log_pending_fsyncs = $varlist{'Innodb_os_log_pending_fsyncs'};
    my   $Innodb_os_log_pending_writes = $varlist{'Innodb_os_log_pending_writes'};
    my   $Innodb_os_log_written = $varlist{'Innodb_os_log_written'};
    my   $Innodb_page_size = $varlist{'Innodb_page_size'};
    my   $Innodb_pages_created = $varlist{'Innodb_pages_created'};
    my   $Innodb_pages_read = $varlist{'Innodb_pages_read'};
    my   $Innodb_pages_written = $varlist{'Innodb_pages_written'};
    my   $Innodb_row_lock_current_waits = $varlist{'Innodb_row_lock_current_waits'};
    my   $Innodb_row_lock_time = $varlist{'Innodb_row_lock_time'};
    my   $Innodb_row_lock_time_avg = $varlist{'Innodb_row_lock_time_avg'};
    my   $Innodb_row_lock_time_max = $varlist{'Innodb_row_lock_time_max'};
    my   $Innodb_row_lock_waits = $varlist{'Innodb_row_lock_waits'};
    my   $Innodb_rows_deleted = $varlist{'Innodb_rows_deleted'};
    my   $Innodb_rows_inserted = $varlist{'Innodb_rows_inserted'};
    my   $Innodb_rows_read = $varlist{'Innodb_rows_read'};
    my   $Innodb_rows_updated = $varlist{'Innodb_rows_updated'};
    my   $Key_blocks_not_flushed = $varlist{'Key_blocks_not_flushed'};
    my   $Key_blocks_unused = $varlist{'Key_blocks_unused'};
    my   $Key_blocks_used = $varlist{'Key_blocks_used'};
    my   $Key_read_requests = $varlist{'Key_read_requests'};
    my   $Key_reads = $varlist{'Key_reads'};
    my   $Key_write_requests = $varlist{'Key_write_requests'};
    my   $Key_writes = $varlist{'Key_writes'};
    my   $Last_query_cost = $varlist{'Last_query_cost'};
    my   $Max_used_connections = $varlist{'Max_used_connections'};
    my   $Not_flushed_delayed_rows = $varlist{'Not_flushed_delayed_rows'};
    my   $Open_files = $varlist{'Open_files'};
    my   $Open_streams = $varlist{'Open_streams'};
    my   $Open_tables = $varlist{'Open_tables'};
    my   $Opened_tables = $varlist{'Opened_tables'};
    my   $Prepared_stmt_count = $varlist{'Prepared_stmt_count'};
    my   $Qcache_free_blocks = $varlist{'Qcache_free_blocks'};
    my   $Qcache_free_memory = $varlist{'Qcache_free_memory'};
    my   $Qcache_hits = $varlist{'Qcache_hits'};
    my   $Qcache_inserts = $varlist{'Qcache_inserts'};
    my   $Qcache_lowmem_prunes = $varlist{'Qcache_lowmem_prunes'};
    my   $Qcache_not_cached = $varlist{'Qcache_not_cached'};
    my   $Qcache_queries_in_cache = $varlist{'Qcache_queries_in_cache'};
    my   $Qcache_total_blocks = $varlist{'Qcache_total_blocks'};
    my   $Questions = $varlist{'Questions'};
    my   $Rpl_status = $varlist{'Rpl_status'};
    my   $Select_full_join = $varlist{'Select_full_join'};
    my   $Select_full_range_join = $varlist{'Select_full_range_join'};
    my   $Select_range = $varlist{'Select_range'};
    my   $Select_range_check = $varlist{'Select_range_check'};
    my   $Select_scan = $varlist{'Select_scan'};
    my   $Slave_open_temp_tables = $varlist{'Slave_open_temp_tables'};
    my   $Slave_retried_transactions = $varlist{'Slave_retried_transactions'};
    my   $Slave_running = $varlist{'Slave_running'};
    my   $Slow_launch_threads = $varlist{'Slow_launch_threads'};
    my   $Slow_queries = $varlist{'Slow_queries'};
    my   $Sort_merge_passes = $varlist{'Sort_merge_passes'};
    my   $Sort_range = $varlist{'Sort_range'};
    my   $Sort_rows = $varlist{'Sort_rows'};
    my   $Sort_scan = $varlist{'Sort_scan'};
    my   $Table_locks_immediate = $varlist{'Table_locks_immediate'};
    my   $Table_locks_waited = $varlist{'Table_locks_waited'};
    my   $Tc_log_max_pages_used = $varlist{'Tc_log_max_pages_used'};
    my   $Tc_log_page_size = $varlist{'Tc_log_page_size'};
    my   $Tc_log_page_waits = $varlist{'Tc_log_page_waits'};
    my   $Threads_cached = $varlist{'Threads_cached'};
    my   $Threads_connected = $varlist{'Threads_connected'};
    my   $Threads_created = $varlist{'Threads_created'};
    my   $Threads_running = $varlist{'Threads_running'};
    my   $Uptime = $varlist{'Uptime'};
    my   $os_load_1 = $varlist{'os_load_1'};
    my   $os_load_5 = $varlist{'os_load_5'};
    my   $os_load_15 = $varlist{'os_load_15'};
    my   $os_mem_total = $varlist{'os_mem_total'};
    my   $os_mem_used = $varlist{'os_mem_used'};
    my   $os_swap_total = $varlist{'os_swap_total'};
    my   $os_swap_free = $varlist{'os_swap_free'};
    my   $os_cpu_user = $varlist{'os_cpu_user'};
    my   $os_cpu_system = $varlist{'os_cpu_system'};
    my   $os_cpu_idle = $varlist{'os_cpu_idle'};
    my   $queries_per_second = $varlist{'queries_per_second'};
    my   $num_schema = $varlist{'num_schema'};
    my   $num_tables = $varlist{'num_tables'};
    my   $num_connections = $varlist{'num_connections'};
    my   $length_data = $varlist{'length_data'};
    my   $length_index = $varlist{'length_index'};
    my   $engine_count_innodb = $varlist{'engine_count_innodb'};
    my   $engine_count_myisam = $varlist{'engine_count_myisam'};
    my   $engine_myisam_size_data = $varlist{'engine_myisam_size_data'};
    my   $engine_myisam_size_index = $varlist{'engine_myisam_size_index'};
    my   $engine_innodb_size_data = $varlist{'engine_innodb_size_data'};
    my   $engine_innodb_size_index = $varlist{'engine_innodb_size_index'};
    my   $auto_increment_increment = $varlist{'auto_increment_increment'};
    my   $auto_increment_offset = $varlist{'auto_increment_offset'};
    my   $automatic_sp_privileges = $varlist{'automatic_sp_privileges'};
    my   $back_log = $varlist{'back_log'};
    my   $basedir = $varlist{'basedir'};
    my   $binlog_cache_size = $varlist{'binlog_cache_size'};
    my   $bulk_insert_buffer_size = $varlist{'bulk_insert_buffer_size'};
    my   $character_set_client = $varlist{'character_set_client'};
    my   $character_set_connection = $varlist{'character_set_connection'};
    my   $character_set_database = $varlist{'character_set_database'};
    my   $character_set_filesystem = $varlist{'character_set_filesystem'};
    my   $character_set_results = $varlist{'character_set_results'};
    my   $character_set_server = $varlist{'character_set_server'};
    my   $character_set_system = $varlist{'character_set_system'};
    my   $character_sets_dir = $varlist{'character_sets_dir'};
    my   $collation_connection = $varlist{'collation_connection'};
    my   $collation_database = $varlist{'collation_database'};
    my   $collation_server = $varlist{'collation_server'};
    my   $completion_type = $varlist{'completion_type'};
    my   $concurrent_insert = $varlist{'concurrent_insert'};
    my   $connect_timeout = $varlist{'connect_timeout'};
    my   $variablesdir = $varlist{'datadir'};
    my   $date_format = $varlist{'date_format'};
    my   $datetime_format = $varlist{'datetime_format'};
    my   $default_week_format = $varlist{'default_week_format'};
    my   $delay_key_write = $varlist{'delay_key_write'};
    my   $delayed_insert_limit = $varlist{'delayed_insert_limit'};
    my   $delayed_insert_timeout = $varlist{'delayed_insert_timeout'};
    my   $delayed_queue_size = $varlist{'delayed_queue_size'};
    my   $div_precision_increment = $varlist{'div_precision_increment'};
    my   $keep_files_on_create = $varlist{'keep_files_on_create'};
    my   $engine_condition_pushdown = $varlist{'engine_condition_pushdown'};
    my   $expire_logs_days = $varlist{'expire_logs_days'};
    my   $flush = $varlist{'flush'};
    my   $flush_time = $varlist{'flush_time'};
    my   $ft_boolean_syntax = $varlist{'ft_boolean_syntax'};
    my   $ft_max_word_len = $varlist{'ft_max_word_len'};
    my   $ft_min_word_len = $varlist{'ft_min_word_len'};
    my   $ft_query_expansion_limit = $varlist{'ft_query_expansion_limit'};
    my   $ft_stopword_file = $varlist{'ft_stopword_file'};
    my   $group_concat_max_len = $varlist{'group_concat_max_len'};
    my   $have_archive = $varlist{'have_archive'};
    my   $have_bdb = $varlist{'have_bdb'};
    my   $have_blackhole_engine = $varlist{'have_blackhole_engine'};
    my   $have_compress = $varlist{'have_compress'};
    my   $have_crypt = $varlist{'have_crypt'};
    my   $have_csv = $varlist{'have_csv'};
    my   $have_dynamic_loading = $varlist{'have_dynamic_loading'};
    my   $have_example_engine = $varlist{'have_example_engine'};
    my   $have_federated_engine = $varlist{'have_federated_engine'};
    my   $have_geometry = $varlist{'have_geometry'};
    my   $have_innodb = $varlist{'have_innodb'};
    my   $have_isam = $varlist{'have_isam'};
    my   $have_merge_engine = $varlist{'have_merge_engine'};
    my   $have_ndbcluster = $varlist{'have_ndbcluster'};
    my   $have_openssl = $varlist{'have_openssl'};
    my   $have_ssl = $varlist{'have_ssl'};
    my   $have_query_cache = $varlist{'have_query_cache'};
    my   $have_raid = $varlist{'have_raid'};
    my   $have_rtree_keys = $varlist{'have_rtree_keys'};
    my   $have_symlink = $varlist{'have_symlink'};
    my   $hostname = $varlist{'hostname'};
    my   $init_connect = $varlist{'init_connect'};
    my   $init_file = $varlist{'init_file'};
    my   $init_slave = $varlist{'init_slave'};
    my   $innodb_additional_mem_pool_size = $varlist{'innodb_additional_mem_pool_size'};
    my   $innodb_autoextend_increment = $varlist{'innodb_autoextend_increment'};
    my   $innodb_buffer_pool_awe_mem_mb = $varlist{'innodb_buffer_pool_awe_mem_mb'};
    my   $innodb_buffer_pool_size = $varlist{'innodb_buffer_pool_size'};
    my   $innodb_checksums = $varlist{'innodb_checksums'};
    my   $innodb_commit_concurrency = $varlist{'innodb_commit_concurrency'};
    my   $innodb_concurrency_tickets = $varlist{'innodb_concurrency_tickets'};
    my   $innodb_data_file_path = $varlist{'innodb_data_file_path'};
    my   $innodb_data_home_dir = $varlist{'innodb_data_home_dir'};
    my   $innodb_adaptive_hash_index = $varlist{'innodb_adaptive_hash_index'};
    my   $innodb_doublewrite = $varlist{'innodb_doublewrite'};
    my   $innodb_fast_shutdown = $varlist{'innodb_fast_shutdown'};
    my   $innodb_file_io_threads = $varlist{'innodb_file_io_threads'};
    my   $innodb_file_per_table = $varlist{'innodb_file_per_table'};
    my   $innodb_flush_log_at_trx_commit = $varlist{'innodb_flush_log_at_trx_commit'};
    my   $innodb_flush_method = $varlist{'innodb_flush_method'};
    my   $innodb_force_recovery = $varlist{'innodb_force_recovery'};
    my   $innodb_lock_wait_timeout = $varlist{'innodb_lock_wait_timeout'};
    my   $innodb_locks_unsafe_for_binlog = $varlist{'innodb_locks_unsafe_for_binlog'};
    my   $innodb_log_arch_dir = $varlist{'innodb_log_arch_dir'};
    my   $innodb_log_archive = $varlist{'innodb_log_archive'};
    my   $innodb_log_buffer_size = $varlist{'innodb_log_buffer_size'};
    my   $innodb_log_file_size = $varlist{'innodb_log_file_size'};
    my   $innodb_log_files_in_group = $varlist{'innodb_log_files_in_group'};
    my   $innodb_log_group_home_dir = $varlist{'innodb_log_group_home_dir'};
    my   $innodb_max_dirty_pages_pct = $varlist{'innodb_max_dirty_pages_pct'};
    my   $innodb_max_purge_lag = $varlist{'innodb_max_purge_lag'};
    my   $innodb_mirrored_log_groups = $varlist{'innodb_mirrored_log_groups'};
    my   $innodb_open_files = $varlist{'innodb_open_files'};
    my   $innodb_rollback_on_timeout = $varlist{'innodb_rollback_on_timeout'};
    my   $innodb_support_xa = $varlist{'innodb_support_xa'};
    my   $innodb_sync_spin_loops = $varlist{'innodb_sync_spin_loops'};
    my   $innodb_table_locks = $varlist{'innodb_table_locks'};
    my   $innodb_thread_concurrency = $varlist{'innodb_thread_concurrency'};
    my   $innodb_thread_sleep_delay = $varlist{'innodb_thread_sleep_delay'};
    my   $innodb_read_ahead = $varlist{'innodb_read_ahead'};
    my   $innodb_ibuf_contract_const = $varlist{'innodb_ibuf_contract_const'};
    my   $innodb_ibuf_contract_burst = $varlist{'innodb_ibuf_contract_burst'};
    my   $innodb_buf_flush_const = $varlist{'innodb_buf_flush_const'};
    my   $innodb_buf_flush_burst = $varlist{'innodb_buf_flush_burst'};
    my   $interactive_timeout = $varlist{'interactive_timeout'};
    my   $join_buffer_size = $varlist{'join_buffer_size'};
    my   $key_buffer_size = $varlist{'key_buffer_size'};
    my   $key_cache_age_threshold = $varlist{'key_cache_age_threshold'};
    my   $key_cache_block_size = $varlist{'key_cache_block_size'};
    my   $key_cache_division_limit = $varlist{'key_cache_division_limit'};
    my   $language = $varlist{'language'};
    my   $large_files_support = $varlist{'large_files_support'};
    my   $large_page_size = $varlist{'large_page_size'};
    my   $large_pages = $varlist{'large_pages'};
    my   $lc_time_names = $varlist{'lc_time_names'};
    my   $license = $varlist{'license'};
    my   $local_infile = $varlist{'local_infile'};
    my   $locked_in_memory = $varlist{'locked_in_memory'};
    my   $log = $varlist{'log'};
    my   $log_bin = $varlist{'log_bin'};
    my   $log_bin_trust_function_creators = $varlist{'log_bin_trust_function_creators'};
    my   $log_error = $varlist{'log_error'};
    my   $log_queries_not_using_indexes = $varlist{'log_queries_not_using_indexes'};
    my   $log_slave_updates = $varlist{'log_slave_updates'};
    my   $log_slow_queries = $varlist{'log_slow_queries'};
    my   $log_slow_filter = $varlist{'log_slow_filter'};
    my   $log_slow_verbosity = $varlist{'log_slow_verbosity'};
    my   $log_warnings = $varlist{'log_warnings'};
    my   $long_query_time = $varlist{'long_query_time'};
    my   $low_priority_updates = $varlist{'low_priority_updates'};
    my   $lower_case_file_system = $varlist{'lower_case_file_system'};
    my   $lower_case_table_names = $varlist{'lower_case_table_names'};
    my   $max_allowed_packet = $varlist{'max_allowed_packet'};
    my   $max_binlog_cache_size = $varlist{'max_binlog_cache_size'};
    my   $max_binlog_size = $varlist{'max_binlog_size'};
    my   $max_connect_errors = $varlist{'max_connect_errors'};
    my   $max_connections = $varlist{'max_connections'};
    my   $max_delayed_threads = $varlist{'max_delayed_threads'};
    my   $max_error_count = $varlist{'max_error_count'};
    my   $max_heap_table_size = $varlist{'max_heap_table_size'};
    my   $max_insert_delayed_threads = $varlist{'max_insert_delayed_threads'};
    my   $max_join_size = $varlist{'max_join_size'};
    my   $max_length_for_sort_data = $varlist{'max_length_for_sort_data'};
    my   $max_prepared_stmt_count = $varlist{'max_prepared_stmt_count'};
    my   $max_relay_log_size = $varlist{'max_relay_log_size'};
    my   $max_seeks_for_key = $varlist{'max_seeks_for_key'};
    my   $max_sort_length = $varlist{'max_sort_length'};
    my   $max_sp_recursion_depth = $varlist{'max_sp_recursion_depth'};
    my   $max_tmp_tables = $varlist{'max_tmp_tables'};
    my   $max_user_connections = $varlist{'max_user_connections'};
    my   $max_write_lock_count = $varlist{'max_write_lock_count'};
    my   $min_examined_row_limit = $varlist{'min_examined_row_limit'};
    my   $multi_range_count = $varlist{'multi_range_count'};
    my   $myisam_data_pointer_size = $varlist{'myisam_data_pointer_size'};
    my   $myisam_max_sort_file_size = $varlist{'myisam_max_sort_file_size'};
    my   $myisam_recover_options = $varlist{'myisam_recover_options'};
    my   $myisam_repair_threads = $varlist{'myisam_repair_threads'};
    my   $myisam_sort_buffer_size = $varlist{'myisam_sort_buffer_size'};
    my   $myisam_stats_method = $varlist{'myisam_stats_method'};
    my   $net_buffer_length = $varlist{'net_buffer_length'};
    my   $net_read_timeout = $varlist{'net_read_timeout'};
    my   $net_retry_count = $varlist{'net_retry_count'};
    my   $net_write_timeout = $varlist{'net_write_timeout'};
    my   $new = $varlist{'new'};
    my   $old_passwords = $varlist{'old_passwords'};
    my   $open_files_limit = $varlist{'open_files_limit'};
    my   $optimizer_prune_level = $varlist{'optimizer_prune_level'};
    my   $optimizer_search_depth = $varlist{'optimizer_search_depth'};
    my   $pid_file = $varlist{'pid_file'};
    my   $port = $varlist{'port'};
    my   $preload_buffer_size = $varlist{'preload_buffer_size'};
    my   $protocol_version = $varlist{'protocol_version'};
    my   $query_alloc_block_size = $varlist{'query_alloc_block_size'};
    my   $query_cache_limit = $varlist{'query_cache_limit'};
    my   $query_cache_min_res_unit = $varlist{'query_cache_min_res_unit'};
    my   $query_cache_size = $varlist{'query_cache_size'};
    my   $query_cache_type = $varlist{'query_cache_type'};
    my   $query_cache_wlock_invalidate = $varlist{'query_cache_wlock_invalidate'};
    my   $query_prealloc_size = $varlist{'query_prealloc_size'};
    my   $range_alloc_block_size = $varlist{'range_alloc_block_size'};
    my   $log_slow_rate_limit = $varlist{'log_slow_rate_limit'};
    my   $read_buffer_size = $varlist{'read_buffer_size'};
    my   $read_only = $varlist{'read_only'};
    my   $read_rnd_buffer_size = $varlist{'read_rnd_buffer_size'};
    my   $relay_log = $varlist{'relay_log'};
    my   $relay_log_index = $varlist{'relay_log_index'};
    my   $relay_log_info_file = $varlist{'relay_log_info_file'};
    my   $relay_log_purge = $varlist{'relay_log_purge'};
    my   $relay_log_space_limit = $varlist{'relay_log_space_limit'};
    my   $rpl_recovery_rank = $varlist{'rpl_recovery_rank'};
    my   $secure_auth = $varlist{'secure_auth'};
    my   $secure_file_priv = $varlist{'secure_file_priv'};
    my   $server_id = $varlist{'server_id'};
    my   $skip_external_locking = $varlist{'skip_external_locking'};
    my   $skip_networking = $varlist{'skip_networking'};
    my   $skip_show_database = $varlist{'skip_show_database'};
    my   $slave_compressed_protocol = $varlist{'slave_compressed_protocol'};
    my   $slave_load_tmpdir = $varlist{'slave_load_tmpdir'};
    my   $slave_net_timeout = $varlist{'slave_net_timeout'};
    my   $slave_skip_errors = $varlist{'slave_skip_errors'};
    my   $slave_transaction_retries = $varlist{'slave_transaction_retries'};
    my   $slow_launch_time = $varlist{'slow_launch_time'};
    my   $socket = $varlist{'socket'};
    my   $sort_buffer_size = $varlist{'sort_buffer_size'};
    my   $sql_big_selects = $varlist{'sql_big_selects'};
    my   $sql_mode = $varlist{'sql_mode'};
    my   $sql_notes = $varlist{'sql_notes'};
    my   $sql_warnings = $varlist{'sql_warnings'};
    my   $ssl_ca = $varlist{'ssl_ca'};
    my   $ssl_capath = $varlist{'ssl_capath'};
    my   $ssl_cert = $varlist{'ssl_cert'};
    my   $ssl_cipher = $varlist{'ssl_cipher'};
    my   $ssl_key = $varlist{'ssl_key'};
    my   $storage_engine = $varlist{'storage_engine'};
    my   $sync_binlog = $varlist{'sync_binlog'};
    my   $sync_frm = $varlist{'sync_frm'};
    my   $system_time_zone = $varlist{'system_time_zone'};
    my   $table_cache = $varlist{'table_cache'};
    my   $table_lock_wait_timeout = $varlist{'table_lock_wait_timeout'};
    my   $table_type = $varlist{'table_type'};
    my   $thread_cache_size = $varlist{'thread_cache_size'};
    my   $thread_stack = $varlist{'thread_stack'};
    my   $time_format = $varlist{'time_format'};
    my   $time_zone = $varlist{'time_zone'};
    my   $timed_mutexes = $varlist{'timed_mutexes'};
    my   $tmp_table_size = $varlist{'tmp_table_size'};
    my   $tmpdir = $varlist{'tmpdir'};
    my   $transaction_alloc_block_size = $varlist{'transaction_alloc_block_size'};
    my   $transaction_prealloc_size = $varlist{'transaction_prealloc_size'};
    my   $tx_isolation = $varlist{'tx_isolation'};
    my   $updatable_views_with_limit = $varlist{'updatable_views_with_limit'};
    my   $version = $varlist{'version'};
    my   $version_comment = $varlist{'version_comment'};
    my   $version_compile_machine = $varlist{'version_compile_machine'};
    my   $version_compile_os = $varlist{'version_compile_os'};
    my   $wait_timeout = $varlist{'wait_timeout'};   

    #query analysis
    my $Questions=check_var($Questions);
    my $Com_select=check_var($Com_select);
    my $Uptime=check_var($Uptime);
    my $Com_delete=check_var($Com_delete);
    my $Com_insert=check_var($Com_insert);
    my $Com_insert_select=check_var($Com_insert_select);
    my $Com_update=check_var($Com_update);
    my $Com_update_multi=check_var($Com_update_multi);
    my $Com_commit=check_var($Com_commit);
    my $Com_select=check_var($Com_select);

    my $_Questions=substr(human($Questions),0,-1);
    my $_reads=$Com_select;
    my $_readsR=substr(human($Com_select),0,-1);
    my $_readsP=((round(($Com_select/$Questions),4))*100);
    my $_readsS=round(($Com_select/$Uptime),4);
    my $_writes = ($Com_delete + $Com_delete_multi + $Com_insert + $Com_insert_select + $Com_update + $Com_update_multi);
    my $_writesR=substr(human(($_writes)),0,-1);
    my $_writesP=((round(($_writes/$Questions),4))*100);
    my $_writesS=round(($_writes/$Uptime),4);
    $_writesP=check_var($_writesP);
    $_readsP=check_var($_readsP);

    my $_inserts=($Com_insert+$Com_insert_select);
    my $_insertsR=substr(human(($_inserts)),0,-1);
    my $_insertsP=((round(($_inserts/$Questions),4))*100);
    my $_updates=($Com_update+$Com_update_multi);
    my $_updatesR=substr(human(($_updates)),0,-1);
    my $_updatesP=((round(($_updates/$Questions),4))*100);
    my $_deletes=($Com_delete+$Com_delete_multi);
    my $_deletesR=substr(human(($_deletes)),0,-1);
    my $_deletesP=((round(($_deletes/$Questions),4))*100);
    my $_selects=($Com_select+$Com_insert_select);
    my $_selectsR=substr(human(($_selects)),0,-1);
    my $_selectsP=((round(($_selects/$Questions),4))*100);
    my $_readVSwrite=round(($_readsP/$_writesP),1);
    my $_writeVSread=round(($_writesP/$_readsP),1);
    my $_txS=round(($Com_commit/$Uptime),4);
    
#connections
    my $Connections=check_var($Connections);
    my $Aborted_connects=check_var($Aborted_connects);
    my $Threads_connected=check_var($Threads_connected);
    my $max_connections=check_var($max_connections);
    my $Max_used_connections=check_var($Max_used_connections);
    my $Uptime=check_var($Uptime);
    my $_ConnectionsR=substr(human($Connections),0,-1);
    my $_connSucR=substr(human(($Connections-$Aborted_connects)),0,-1);
    my $_connSuc=($Connections-$Aborted_connects);
    my $_connSucP=round(((($Connections-$Aborted_connects)/$Connections)*100),2);
    my $_connU=round((($Threads_connected/$max_connections)*100),2);
    my $_connAbortR=substr(human($Aborted_connects),0,-1);
    my $_connAbortP=round((($Aborted_connects/$Connections)*100),2);
    my $_connMaxUsage=round((($Max_used_connections/$max_connections)*100),2);
    my $_connAvgConSec=round(($Threads_connected/$Uptime),2);
    
#myisamstats
    my $key_buffer_size=check_var($key_buffer_size);
    my $key_cache_block_size=check_var($key_cache_block_size);
    my $Key_blocks_unused=check_var($Key_blocks_unused);
    my $Key_read_requests=check_var($Key_read_requests);
    my $Key_writes=check_var($Key_writes);
    my $Key_reads=check_var($Key_reads);
    my $Key_write_requests=check_var($Key_write_requests);
    my $delay_key_write=check_var($delay_key_write);
    
    my $_myisamAllocatedMemR=substr(human($key_buffer_size),0,-1);
    my $_myisamAllocatedMem=$key_buffer_size;
    my $_myisamBlockSizeR=substr(human($key_cache_block_size),0,-1);
    my $_myisamBlockSize=$key_cache_block_size;
    my $_myisamCurrentBlocksR=substr(human(round(($key_buffer_size/$key_cache_block_size),4)),0,-1);
    my $_myisamCurrentBlocks=round(($key_buffer_size/$key_cache_block_size),4);
    my $_myisamUsedBlocksR=substr(human(round((($key_buffer_size/$key_cache_block_size)-$Key_blocks_unused),4)),0,-1);
    my $_myisamUsedBlocks=round((($key_buffer_size/$key_cache_block_size)-$Key_blocks_unused),4);
    my $_myisamUsedBlocksP=round((($_myisamUsedBlocks/$_myisamCurrentBlocks)*100),2);
    my $_myisamCacheHitRate=round(($Key_reads/$Key_read_requests),4);
    my $_myisamBlocksToDiskR=substr(human($Key_writes),0,-1);
    my $_myisamBlocksToDisk=$Key_writes;
    my $_myisamCacheWritesDisk=round(($Key_write_requests/$Key_writes),1);
    my $_myisamCacheWritesDiskP=round(((($Key_write_requests/$Key_writes)/($Key_writes+$Key_write_requests))*100),2);
    my $_myisamIndexDelayUpdate= $delay_key_write; # (0/1) 1=enable, sometimes mysql has it set as ON/OFF
    
#innodbstats
    my $innodb_buffer_pool_size=check_var($innodb_buffer_pool_size);
    my $os_mem_total=check_var($os_mem_total);
    my $Innodb_buffer_pool_pages_free=check_var($Innodb_buffer_pool_pages_free);
    my $Innodb_buffer_pool_read_requests=check_var($Innodb_buffer_pool_read_requests);
    my $Innodb_buffer_pool_reads=check_var($Innodb_buffer_pool_reads);
    my $Innodb_buffer_pool_wait_free=check_var($Innodb_buffer_pool_wait_free);
    my $Innodb_buffer_pool_write_requests=check_var($Innodb_buffer_pool_write_requests);
    my $innodb_additional_mem_pool_size=check_var($innodb_additional_mem_pool_size);
    my $innodb_log_buffer_size=check_var($innodb_log_buffer_size);
    my $Innodb_log_waits=check_var($Innodb_log_waits);
    my $Innodb_log_writes=check_var($Innodb_log_writes);
    
    my $_innodbAllocatedMemR=substr(human($innodb_buffer_pool_size),0,-1);
    my $_innodbAllocatedMem=$innodb_buffer_pool_size;
    my $_innodballocatedMemP=round((($innodb_buffer_pool_size/$os_mem_total)*100),2);
    my $_innodbFreeMem=$Innodb_buffer_pool_pages_free;
    my $_innodbBlocksFromCacheR=substr(human($Innodb_buffer_pool_read_requests),0,-1);
    my $_innodbBlocksFromCache=$Innodb_buffer_pool_read_requests;
    my $_innodbBlocksFromDiskR=substr(human($Innodb_buffer_pool_reads),0,-1);
    my $_innodbBlocksFromDisk=$Innodb_buffer_pool_reads;
    my $_innodbCacheHitRate=round(($Innodb_buffer_pool_reads/$Innodb_buffer_pool_read_requests),2);
    
    if($Innodb_buffer_pool_wait_free==0){$Innodb_buffer_pool_wait_free=1;}
    if($Innodb_buffer_pool_write_requests==0){$Innodb_buffer_pool_write_requests=1;}
    
    my $_innodbCacheWriteWaitRequired=round(($Innodb_buffer_pool_wait_free/$Innodb_buffer_pool_write_requests),2);
    my $_innodbAdditionalMemoryAllowedR=substr(human($innodb_additional_mem_pool_size),0,-1);
    my $_innodbAdditionalMemoryAllowed=$innodb_additional_mem_pool_size;
    my $_innodbFreePageWaits=$Innodb_buffer_pool_wait_free;
    my $_innodbLogBufferSizeR=substr(human($innodb_log_buffer_size),0,-1);
    my $_innodbLogBufferSize=$innodb_log_buffer_size;
    my $_innodbLogWaitsRequired=round(($Innodb_log_waits/$Innodb_log_writes),2);
    my $_innodbFreePageWaits=$Innodb_log_waits;
    
#tablecache
    my $table_cache=check_var($table_cache);
    my $Open_tables=check_var($Open_tables);
    my $Opened_tables=check_var($Opened_tables);
    my $Uptime=check_var($Uptime);
    
    my $_tableCacheAllowable=$table_cache;
    my $_tableCacheOpen=$Open_tables;
    my $_tableCacheOpenP=round((($table_cache/$Open_tables)*100),2);
    my $_tableCacheAvgSec=round(($Opened_tables/$Uptime),1);
    my $_tableCacheMissesP=round((($Open_tables/$Opened_tables)*100),2);
#querycache
    my $have_query_cache=check_var($have_query_cache);
    my $query_cache_size=check_var($query_cache_size);
    my $query_cache_min_res_unit=check_var($query_cache_min_res_unit);
    my $Qcache_total_blocks=check_var($Qcache_total_blocks);
    my $query_cache_limit=check_var($query_cache_limit);
    my $Qcache_free_memory=check_var($Qcache_free_memory);
    my $Qcache_hits=check_var($Qcache_hits);
    my $Qcache_inserts=check_var($Qcache_inserts);
    my $query_prealloc_size=check_var($query_prealloc_size);
    my $Qcache_free_blocks=check_var($Qcache_free_blocks);
    my $Qcache_total_blocks=check_var($Qcache_total_blocks);
    my $Qcache_queries_in_cache=check_var($Qcache_queries_in_cache);
    my $Qcache_not_cached=check_var($Qcache_not_cached);
    my $Qcache_lowmem_prunes=check_var($Qcache_lowmem_prunes);
    
    my $_qcacheEnabled=$have_query_cache;
    my $_qcacheSizeR=substr(human($query_cache_size),0,-1);
    my $_qcacheSize=$query_cache_size;
    my $_qcacheBlockSize=$query_cache_min_res_unit;
    my $_qcacheTotalBlocks=$Qcache_total_blocks;
    my $_qcacheMaxQuerySizeR=substr(human($query_cache_limit),0,-1);
    my $_qcacheMaxQuerySize=$query_cache_limit;
    my $_qcacheFreeMemR=substr(human($Qcache_free_memory),0,-1);
    my $_qcacheFreeMem=$Qcache_free_memory;
    my $_qcacheUtilized=round(($Qcache_free_memory/$query_cache_size),4);
    my $_qcacheHitRate=round(($Qcache_hits/($Qcache_inserts+$Qcache_hits)),4);
    my $_qcacheParsingBufferR=substr(human($query_prealloc_size),0,-1);
    my $_qcacheParsingBuffer=$query_prealloc_size;
    my $_qcacheFragmentation=round(($Qcache_free_blocks/ceil($Qcache_total_blocks/2)),4);
    my $_qcacheQuestionsInCacheR=substr(human($Qcache_queries_in_cache),0,-1);
    my $_qcacheQuestionsInCache=$Qcache_queries_in_cache;
    my $_qcacheQuestionsAbleToBeCachedR=substr(human($Qcache_inserts),0,-1);
    my $_qcacheQuestionsAbleToBeCached=$Qcache_inserts;
    my $_qcacheQuestionsNotCachedR=substr(human($Qcache_not_cached),0,-1);
    my $_qcacheQuestionsNotCached=$Qcache_not_cached;
    my $_qcacheHitsTotalR=substr(human($Qcache_hits),0,-1);
    my $_qcacheHitsTotal=$Qcache_hits;
    my $_qcacheQuestionsServedFromCacheP=round((($Qcache_hits/$Qcache_queries_in_cache)/100),4);
    my $_qcacheQuestionsRemovedR=substr(human($Qcache_lowmem_prunes),0,-1);
    my $_qcacheQuestionsRemoved=$Qcache_lowmem_prunes;
    my $_qcacheQuestionsRemovedP=round(($Qcache_lowmem_prunes/$Qcache_inserts),4);
    
#sortbuffer
    my $sort_buffer_size=check_var($sort_buffer_size);
    my $Sort_range=check_var($Sort_range);
    my $Questions=check_var($Questions);
    my $Sort_scan=check_var($Sort_scan);
    my $Sort_rows=check_var($Sort_rows);
    my $Sort_merge_passes=check_var($Sort_merge_passes);
    
    my $_sortSizeR=substr(human($sort_buffer_size),0,-1);
    my $_sortSize=$sort_buffer_size;
    my $_sortRange=round((($Sort_range/$Questions)*100),2);
    my $_sortScanP=round((($Sort_scan/$Questions)*100),2);
    my $_SortMergePassesP=round((($Sort_merge_passes/$Questions)*100),2);
    my $_SortRows=$Sort_rows;
    my $_sortMaxRamAllowedR=substr(human(($sort_buffer_size*$max_connections)),0,-1);
    my $_sortSelectRange=round(($Sort_range/$Questions),4);
    
#tablelocks
    my $Table_locks_immediate=check_var($Table_locks_immediate);
    my $Table_locks_waited=check_var($Table_locks_waited);
    
    my $_tableLocksNonWaitingR=substr(human($Table_locks_immediate),0,-1);
    my $_tableLocksNonWaiting=$Table_locks_immediate;
    my $_tableLocksWaitingR=substr(human($Table_locks_waited),0,-1);
    my $_tableLocksWaiting=$Table_locks_waited;
    my $_tableLocksContention=round(($Table_locks_waited/($Table_locks_waited+$Table_locks_immediate)),4);
    
#tmptable
    my $tmp_table_size=check_var($tmp_table_size);
    my $max_heap_table_size=check_var($max_heap_table_size);
    my $Created_tmp_tables=check_var($Created_tmp_tables);
    my $Created_tmp_disk_tables=check_var($Created_tmp_disk_tables);
    
    my $_tmpTableSizeR=substr(human($tmp_table_size),0,-1);
    my $_tmpTableSize=$tmp_table_size;
    my $_tmpTableHeapSizeR=substr(human($max_heap_table_size),0,-1);
    my $_tmpTableHeapSize=$max_heap_table_size;
    my $_tmpTableCreatedR=substr(human($Created_tmp_tables),0,-1);
    my $_tmpTableCreated=$Created_tmp_tables;
    my $_tmpTablecreatedOnDiskR=substr(human($Created_tmp_disk_tables),0,-1);
    my $_tmpTablecreatedOnDisk=$Created_tmp_disk_tables;
    my $_tmpTablecreatedOnDiskP=round((($Created_tmp_disk_tables/$Created_tmp_tables)*100),2);
    
#indexes
    my $Handler_read_rnd_next=check_var($Handler_read_rnd_next);
    my $Handler_read_rnd=check_var($Handler_read_rnd);
    my $Handler_read_first=check_var($Handler_read_first);
    my $Handler_read_next=check_var($Handler_read_next);
    my $Handler_read_key=check_var($Handler_read_key);
    my $Handler_read_prev=check_var($Handler_read_prev);
    my $_indexUsageP = round(((($Handler_read_rnd_next + $Handler_read_rnd) / ($Handler_read_rnd_next + $Handler_read_rnd + $Handler_read_first + $Handler_read_next + $Handler_read_key + $Handler_read_prev))*100),2);
    
    my $_indexSelectsFullTableScanR=substr(human($Select_scan),0,-1);
    my $_indexSelectsFullTableScan=$Select_scan;
    my $_indexJoinsFullTableScanR=substr(human($Select_full_join),0,-1);
    my $_indexJoinsFullTableScan=$Select_full_join;
    
#joinbuffer
    my $join_buffer_size=check_var($join_buffer_size);
    my $Sort_range=check_var($Sort_range);
    my $Questions=check_var($Questions);
    my $Sort_scan=check_var($Sort_scan);
    
    my $_joinSizeR=substr(human($join_buffer_size),0,-1);
    my $_joinSize=$join_buffer_size;
    my $_joinScanP=round(((($Select_full_join+$Select_full_range_join)/$Questions)*100),2);
    my $_SelectFullJoin=$Select_full_join;
    my $_SelectFullRangeJoin=$Select_full_range_join;
    my $_joinMaxMemUsage=substr(human($join_buffer_size*$max_connections),0,-1);
    
#threadstatus
    my $thread_cache_size=check_var($thread_cache_size);
    my $Threads_connected=check_var($Threads_connected);
    my $Threads_created=check_var($Threads_created);
    my $Threads_running=check_var($Threads_running);
    my $Threads_cached=check_var($Threads_cached);
    my $Delayed_insert_threads=check_var($Delayed_insert_threads);
    my $Slow_launch_threads=check_var($Slow_launch_threads);

    my $file = $commit_report; #swap variables for this sub

    my $xstart = "<analytics_report>\n";
    my $xend = "</analytics_report>\n";

    # Start the XML section for analytics
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $xstart;
    close FILE;
    
    wfile($file,"QueryTrafficStats");
    wfile($file,"totalqueries,$_Questions");
    wfile($file,"totalreadqueries,$_readsR");
    wfile($file,"totalwritequeries,$_writesR");
    wfile($file,"totalinsertqueries,$_insertsR");
    wfile($file,"insertqueriestototal,$_insertsP%");
    wfile($file,"totalselectqueries,$_selectsR");
    wfile($file,"selectqueriestototal,$_selectsP%");
    wfile($file,"totalupdatequeries,$_updatesR");
    wfile($file,"updatequeriestototal,$_updatesP%");
    wfile($file,"totaldeletequeries,$_deletesR");
    wfile($file,"deletequeriestototal,$_deletesP%");
    wfile($file,"percentageorreadstototal,$_readsP%");
    wfile($file,"percentageofwritestototal,$_writesP%");
    wfile($file,"ratioofreadstowrites,$_readVSwrite");
    wfile($file,"ratioofwritestoreads,$_writeVSread");
    wfile($file,"readqueriesper/sec,$_readsS");
    wfile($file,"writequeriesper/sec,$_writesS");
    wfile($file,"transactioncommits,$Com_commit");
    wfile($file,"transactioncommitsper/sec,$_txS");
    wfile($file,"QueryCacheStats");
    wfile($file,"Enabled,$_qcacheEnabled");
    wfile($file,"Cachesize,$_qcacheSizeR");
    wfile($file,"BlockSize,$_qcacheBlockSize");
    wfile($file,"TotalBlocks,$_qcacheTotalBlocks");
    wfile($file,"Maxquerysizeincache,$_qcacheMaxQuerySizeR");
    wfile($file,"Freecachememory,$_qcacheFreeMemR");
    wfile($file,"Cacheutilization,$_qcacheUtilized%");
    wfile($file,"Cachetotalhits,$_qcacheHitsTotalR");
    wfile($file,"Cachehitrate,$_qcacheHitRate%");
    wfile($file,"Parsingbuffer,$_qcacheParsingBufferR");
    wfile($file,"CacheFragmentation,$_qcacheFragmentation%");
    wfile($file,"Questionsincache,$_qcacheQuestionsInCacheR");
    wfile($file,"Questionsabletobecached,$_qcacheQuestionsAbleToBeCachedR");
    wfile($file,"Questionsnotabletobecached,$_qcacheQuestionsNotCachedR");
    wfile($file,"Questionsservedfromcachepercentage,$_qcacheQuestionsServedFromCacheP%");
    wfile($file,"Questionsprunedfromcache,$_qcacheQuestionsRemovedR");
    wfile($file,"Percentagequestionspurgedfromcache,$_qcacheQuestionsRemovedP%");
    wfile($file,"totalconnectionsmade,$_ConnectionsR");
    wfile($file,"ConnectionStats");
    wfile($file,"successfulconnectionstotal,$_connSucR");
    wfile($file,"successfulconnections,$_connSucP%");
    wfile($file,"abortedconnectionstotal,$_connAbortR");
    wfile($file,"abortedconnections,$_connAbortP%");
    wfile($file,"averageconnectionspersecond,$_connAvgConSec/sec");
    wfile($file,"maxallowedconnections,$max_connections");
    wfile($file,"currentopenconnections,$Threads_connected");
    wfile($file,"currentconnectionsusage,$_connU%");
    wfile($file,"maxconnectionusage,$_connMaxUsage%");
    wfile($file,"maxconnectionerrorsallowable,$max_connect_errors");
    wfile($file,"connectiontimeoutvalue,$connect_timeout");
    wfile($file,"ThreadStats");
    wfile($file,"Threadcachesize,$thread_cache_size");
    wfile($file,"Threadsconnected,$Threads_connected");
    wfile($file,"Threadscreated,$Threads_created");
    wfile($file,"Threadsrunning,$Threads_running");
    wfile($file,"Threadscached,$Threads_cached");
    wfile($file,"Delayedinsertthreads,$Delayed_insert_threads");
    wfile($file,"Slowlaunchthreads,$Slow_launch_threads");
    wfile($file,"IndexUsageStats");
    wfile($file,"queriesutilizingindexes,$_indexUsageP%");
    wfile($file,"selectqueriesusingfulltablescan,$_indexSelectsFullTableScanR");
    wfile($file,"joinsqueriesusingfulltablescan,$_indexJoinsFullTableScanR");
    wfile($file,"TableLockingStats");
    wfile($file,"Tableswithnon-waitinglocks,$_tableLocksNonWaitingR");
    wfile($file,"Tableswaitingforlocks,$_tableLocksWaitingR");
    wfile($file,"Tablesthathadlockingcontention,$_tableLocksContention");
    wfile($file,"TableCacheStats");
    wfile($file,"Tablecachesize,$_tableCacheAllowable");
    wfile($file,"Currentopentables,$_tableCacheOpen");
    wfile($file,"Tablecacheutilization,$_tableCacheOpenP%");
    wfile($file,"Averagetablesopenper/sec,$_tableCacheAvgSec");
    wfile($file,"Percentagecachemisses,$_tableCacheMissesP%");
    wfile($file,"TempTableStats");
    wfile($file,"Sizeofconnectionbasedtmptable,$_tmpTableSizeR");
    wfile($file,"Sizeofmemorybasedtmptable,$_tmpTableHeapSizeR");
    wfile($file,"Temptablescreatedtotal,$_tmpTableCreatedR");
    wfile($file,"Temptablescreatedondisk,$_tmpTablecreatedOnDiskR");
    wfile($file,"Percentoftemptablescreatedondisk,$_tmpTablecreatedOnDiskP%");
    wfile($file,"Sort Buffer Stats");
    wfile($file,"Sort buffer size, $_sortSizeR");
    wfile($file,"Percentage of sort range scan, $_sortRange%");
    wfile($file,"Percentage of sort scan, $_sortScanP%");
    wfile($file,"Percentage of sort merge passes, $_SortMergePassesP%");
    wfile($file,"Rows sorted, $_SortRows");
    wfile($file,"Maximum RAM consumable by sort buffer, $_sortMaxRamAllowedR");
    wfile($file,"Join Buffer Stats");
    wfile($file,"Join buffer size, $_joinSizeR");
    wfile($file,"Max memory available to JOINs, $_joinMaxMemUsage");
    wfile($file,"Select Full Joins, $_SelectFullJoin");
    wfile($file,"Select Full Range Joins, $_SelectFullRangeJoin");
    wfile($file,"Percentage of join scan, $_joinScanP%");
    wfile($file,"MyISAM Stats");
    wfile($file,"allocated cache memory, $_myisamAllocatedMemR");
    wfile($file,"block size, $_myisamBlockSizeR");
    wfile($file,"current blocks, $_myisamCurrentBlocksR");
    wfile($file,"used blocks, $_myisamUsedBlocksR");
    wfile($file,"used blocks percent, $_myisamUsedBlocksP%");
    wfile($file,"cache hit rate, $_myisamCacheHitRate");
    wfile($file,"blocks written to disk, $_myisamBlocksToDiskR");
    wfile($file,"cache writes to disk, $_myisamCacheWritesDisk");
    wfile($file,"cache writes to disks percent, $_myisamCacheWritesDiskP%");
    wfile($file,"index delay update, $_myisamIndexDelayUpdate");
    wfile($file,"InnoDB Stats");
    wfile($file,"allocated memory buffer pool size, $_innodbAllocatedMemR");
    wfile($file,"allocated innodb-mem to os-mem, $_innodballocatedMemP%");
    wfile($file,"free innodb memory, $_innodbFreeMem");
    wfile($file,"blocks served from cache, $_innodbBlocksFromCacheR");
    wfile($file,"blocks served from disk, $_innodbBlocksFromDiskR");
    wfile($file,"cache hit rate, $_innodbCacheHitRate");
    wfile($file,"cache write wait required, $_innodbCacheWriteWaitRequired");
    wfile($file,"additional memory allowed, $_innodbAdditionalMemoryAllowedR");
    wfile($file,"free page waits, $_innodbFreePageWaits");
    wfile($file,"log buffer size, $_innodbLogBufferSizeR");
    wfile($file,"log waits required, $_innodbLogWaitsRequired%");
    wfile($file,"number of free page waits, $_innodbFreePageWaits");

    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $xend;
    close FILE;
    
    debug_report("analyze_analytics: [finish]");
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

sub get_info {
    my $id = $_[0];
    my $dbh = DBI->connect( 
    "dbi:SQLite:dbname=$sqlite_file", # DSN: dbi, driver, database file
    "",                          # no user
    "",                          # no password
			{ RaiseError => 1 },
			) or die $DBI::errstr;
    
    my $alert_name = undef;
    my $alert_desc = undef;
    my $alert_links = undef;
    my $alert_solution = undef;
    my $alert_function = undef;
    my $alert_category = undef;
    
    my $sql0 = "select * from alerts_def where id = '$id';";
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
                    #$value = $dbh->quote($item_value); # this was removed because we're operating directly on the values, unlike the standard process where we want to quote the values so they will go into the DB without issue. If this quote method is used on the CLI reporter all of the math breaks.
		    $value = $item_value;
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
        $time =~ s/'//g; ##' just need to complete the single quote - take it out and see what happens ;)
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
	my $state = parse_data(); #XML file data is parsed
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

sub alert_01 {
    my $Aborted_connects = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("1");

    if($Aborted_connects > 999) {
        $ALERT01=1; 
	writer("<alert id=\"1\">");
	writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
    } 
    else {
        $ALERT01 =0;
    }
    return $ALERT01;
}

sub alert_03 {
    my $log_bin = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("3");

    if($log_bin eq "OFF") {
	writer("<alert id=\"3\">");
	writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT03=1;
    } 
    else {
        $ALERT03=0;
    }
    return $ALERT03;
}

sub alert_04 {
    my $sync_binlog = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("4");

    if($sync_binlog == 0) {
	writer("<alert id=\"4\">");
	writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT04=1;
    } 
    else {
        $ALERT04=0;
    }
    return $ALERT04;
}
sub alert_05 {
    my($Max_used_connections,$max_connections,$Threads_connected) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("5");

    my $connections_ratio = round((($Max_used_connections * 100)/$max_connections),2);

    if($connections_ratio > 85) { 
	writer("<alert id=\"5\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writerx("Current max_connections = $max_connections");
	writerx("Current Threads_connected = $Threads_connected");
	writerx("Historic Max_used_connections = $Max_used_connections");
	writerx("The number of used connections is: $connections_ratio% of the maximum configured.");
	writer("</alert>");
        $ALERT05 = 1; 
    } 
    elsif($connections_ratio <= 10) {
	writer("<alert id=\"5\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writerx("Current max_connections = $max_connections");
	writerx("Current Threads_connected = $Threads_connected");
	writerx("Historic Max_used_connections = $Max_used_connections");
	writerx("The number of used connections is: $connections_ratio% of the maximum configured.");
        writerx("Currently using less than 10% of your max_connections. Lowering your max_connections can help avoid an over allocation of memory resources.");
        writerx("Decrease the max_connections variable - server is using $connections_ratio% of current max");
	writer("</alert>");
        $ALERT05 = 1;
    }
    
    else {
        $ALERT05 = 0;
    }    
    return $ALERT05;
}

sub alert_06 {
    my($Qcache_lowmem_prunes,$query_cache_size,$Qcache_free_memory) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("6");
    if($query_cache_size == 0) {
        writer("<alert id=\"6\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
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
        my $query_cache_size_HR = human($query_cache_size);
        my $Qcache_free_memory_HR = human($Qcache_free_memory);

        if(($Qcache_lowmem_prunes >= 50) && ((($query_cache_size - $Qcache_free_memory) / $query_cache_size) >= .85)) {
            my $query_cache_size_R = human(($query_cache_size - $Qcache_free_memory) * 1.25);
	    writer("<alert id=\"6\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current Qcache_lowmem_prunes = $Qcache_lowmem_prunes");
	    writerx("Current Qcache_free_memory = $Qcache_free_memory_HR");
	    writerx("Current query_cache size = $query_cache_size_HR");
	    writerx("Current query cache usage ratio = $Qratio%");
            writerx("query cache size recommended size = $query_cache_size_R");
            
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
            $ALERT06=1;
        } 
        else {
            $ALERT06=0;
        }
        return $ALERT06;
    }
}

sub alert_07 {
    my($query_cache_size,$Qcache_free_memory,$Qcache_lowmem_prunes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("7");
    if($query_cache_size == 0) {
        writer("<alert id=\"7\">");
	writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Query cache NOT enabled. Please enable.");
        writer("</alert>");
        $ALERT07=1;
        return $ALERT07;
    }
    else {
        my$Qratio = round((($query_cache_size - $Qcache_free_memory) * 100) / $query_cache_size);

        my $query_cache_size_HR = human($query_cache_size);
        my $Qcache_free_memory_HR = human($Qcache_free_memory);

        if((($query_cache_size - $Qcache_free_memory) / $query_cache_size) <= .25) {
            my $query_cache_size_R = human(($query_cache_size - $Qcache_free_memory) * 1.25);
	    writer("<alert id=\"7\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writerx("Current Qcache_lowmem_prunes = $Qcache_lowmem_prunes");
	    writerx("Current Qcache_free_memory = $Qcache_free_memory_HR");
	    writerx("Current query_cache size = $query_cache_size_HR");
	    writerx("Current query cache usage ratio = $Qratio%");
            writerx("query cache size recommended size = $query_cache_size_R");    
	    writer("</alert>");
            $ALERT07=1;
        }
        else {
            $ALERT07=0;
        }
        return $ALERT07;
    }
}

sub alert_08 {
    my($os_mem_total,$max_heap_table_size,$tmp_table_size,$read_buffer_size,$read_rnd_buffer_size,$sort_buffer_size,$thread_stack,$join_buffer_size,$binlog_cache_size,$max_connections,$Max_used_connections,$innodb_buffer_pool_size,$innodb_additional_mem_pool_size,$innodb_log_buffer_size,$key_buffer_size,$query_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("8");

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

    if($pct_of_sys_mem > 85) {
	writer("<alert id=\"8\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Per-Thread buffers: $per_thread_buffers_HR");
	writerx("Per-Thread max allocated: $per_thread_max_buffers_HR");
	writerx("Global buffers: $global_buffers_HR");
	writerx("Max memory ever allocated: $max_memory_HR");
	writerx("Max memory possible by configuration: $total_memory_HR");
	writerx("Available system memory: $total_system_memory_HR");
	writerx("Memory allocation ratio to available system memory: $pct_of_sys_mem %");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT08=1;
    }
    else {
        $ALERT08=0;
    }
    return $ALERT08;
}

sub alert_09 {
    my($read_buffer_size,$Handler_read_rnd_next,$Com_select)= @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("9");

    my $full_table_scans=($Handler_read_rnd_next/$Com_select);
    if($Com_select > 0) {
        if(($full_table_scans >= 4000) && ($read_buffer_size >= 2097152)) {
            $ALERT09=1; 
	    writer("<alert id=\"9\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
            writerx("You have a high ratio of sequential access requests to SELECTs.");
            writerx("You may benefit from raising the read_buffer_size and/or improving your use of indexes.");
            writerx("Increase read_buffer_size, Current size is $read_buffer_size.");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
            $ALERT09=1;
        }
        elsif($read_buffer_size > 8388608) {
	    writer("<alert id=\"9\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
            writerx("read_buffer_size is over 8 MB");
            writerx("Decrease read_buffer_size, Current size is $read_buffer_size");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
            $ALERT09=1;
        }
        else {
            $ALERT09=0;
        }
    }
    else {
        $ALERT09=0;
    }
    return $ALERT09;    
}

sub alert_10 {
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("10");

    my $tmp_disk_tables=undef;
    if($Created_tmp_tables == 0) {
        $tmp_disk_tables=0;
    }
    else {
        $tmp_disk_tables=round((($Created_tmp_disk_tables*100)/$Created_tmp_tables));
    }

    if($tmp_table_size > $max_heap_table_size) {
	writer("<alert id=\"10\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current max_heap_table_size = $max_heap_table_size");
	writerx("Current tmp_table_size = $tmp_table_size");
	writerx("Of $Created_tmp_tables temp tables, $tmp_disk_tables % were created on disk");
        writerx("Effective in-memory tmp_table_size is limited to max_heap_table_size.");
        writerx("Increase the size of max_heap_table_size.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT10=1;
    }
    elsif($tmp_disk_tables >= 25) {
	writer("<alert id=\"10\">");
        writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
        writerx("Increase tmp_table_size, Current size is $tmp_table_size");
        writerx("Increase max_heap_table_size, Current size is $max_heap_table_size.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT10=1;
    }
    else {
        $ALERT10=0;
    }
    return $ALERT10;
}

sub alert_11 {
    my($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("11");
    
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
    my $Innodb_buffer_pool_pages_ratio = round($Innodb_buffer_pool_pages_free/$Innodb_buffer_pool_pages_total);
    
    if($innodb_buffer_pool_size < $needed_innodb_buffer_size) {
	writer("<alert id=\"11\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
	writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
	writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
	writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR");
	writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
	writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
	writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
	writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");
	writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT11=1;
    }
    else {
        $ALERT11=0;
    }

    if($Innodb_buffer_pool_pages_ratio > .995) {
	writer("<alert id=\"11\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
	writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
	writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
	writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR");
	writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
	writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
	writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
	writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");
	writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");
        writerx("You may want to consider increasing the innodb_buffer_pool_size based on the Innodb_buffer_pool_pages_ratio.");
	writer("</alert>");
        $ALERT11=1;
    }
    else  {
        $ALERT11=0;
    }
    return $ALERT11;
}

sub alert_12 {
    my($innodb_buffer_pool_size,$engine_innodb_size_index,$Innodb_buffer_pool_pages_free,$Innodb_buffer_pool_pages_total,$innodb_file_per_table,$innodb_commit_concurrency,$innodb_thread_concurrency,$os_mem_total,$engine_innodb_size_data) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("12");

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

    if($innodb_buffer_pool_size > $needed_innodb_buffer_size) {
	writer("<alert id=\"12\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
	writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
	writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
	writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR");
	writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
	writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
	writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
	writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");
	writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT12=1;
    }
    else {
        $ALERT12=0;
    }
    
    if($Innodb_buffer_pool_pages_ratio < .995) {
	writer("<alert id=\"12\">");
        writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
        writerx("Current innodb aggregate index space: $engine_innodb_size_indexHR");
        writerx("Current innodb aggregate data space: $engine_innodb_size_dataHR");
        writerx("Current innodb_buffer_pool_size = $innodb_buffer_pool_sizeHR.");
        writerx("Total needed for innodb index+data space: $needed_innodb_buffer_sizeHR");
        writerx("Allowable MAX for innodb_buffer_pool_size (85% of OS mem total): $allowed_innodb_buffer_sizeHR");
        writerx("Recommended size of innodb_buffer_pool size for 85% fill: $innodb_recommend");
        writerx("Innodb_buffer_pool_pages_free: $Innodb_buffer_pool_pages_free");
        writerx("Innodb_buffer_pool_pages_total: $Innodb_buffer_pool_pages_total");
        writerx("Current Innodb_buffer_pool_pages_ratio = $Innodb_buffer_pool_pages_ratio : 1");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("You may want to consider decreasing the innodb_buffer_pool_size based on the Innodb_buffer_pool_pages_ratio.");
	writer("</alert>");
        $ALERT12=1;
    }
    else  {
        $ALERT12=0;
    }
    return $ALERT12;
}

sub alert_13 {
    my($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("13");

    my $key_cache_miss_rate = undef;
    my $key_buffer_ratio = undef;
    my $key_buffer_ratioRND = undef;
    my $key_buffer_fill = undef;
    my $key_blocks_total = undef;

    if($Key_blocks_used == 0) {
        $Key_blocks_unused = 1;
    }
    if($Key_blocks_used == 0) {
        $Key_blocks_unused = 1;
    }


    if($Key_reads == 0) {
	writer("<alert id=\"13\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("No Key_reads. Use some indexes please.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
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
            $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
            $key_buffer_fill = ($Key_blocks_used / $key_blocks_total);
            $key_blocks_total=($Key_blocks_used+$Key_blocks_unused);
            $key_buffer_ratio = (100 * ($Key_blocks_used / $key_blocks_total));
            $key_buffer_ratioRND = round($key_buffer_ratio);
        }
    }    

    my $key_buffer_sizeHR = human($key_buffer_size);
    my $key_blocks_totalHR = human($key_blocks_total);

    if($Key_blocks_used == 0) { $Key_blocks_used = 1;}
    if($key_blocks_total == 0) { $key_blocks_total = 1;}
    #print "kbu: $Key_blocks_used mul kbs: $key_buffer_size div by kbt: $key_blocks_total mul 100 div 95";
    my $key_recommend = human((((($Key_blocks_used * $key_buffer_size) / $key_blocks_total) * 100) / 95));
   
    if(($key_cache_miss_rate >= 1000) || ($key_buffer_ratio <= 50)) {
        my $key_buffer_sizeC = human($key_buffer_size / 2);
	writer("<alert id=\"13\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current Key_reads = $Key_reads");
	writerx("Current Key_read_requests = $Key_read_requests");
	writerx("Current Key_blocks_used = $Key_blocks_used");
	writerx("Current Key_blocks_unused = $Key_blocks_unused");
	writerx("Current key_blocks_total: $key_blocks_total");
	writerx("Current buffer fill ratio = $key_buffer_ratio%");
	writerx("Current cache miss rate is 1:$key_cache_miss_rate");
	writerx("Current key_buffer_size = $key_buffer_sizeHR");
	writerx("Recommended key_buffer_size for 95% fill = $key_recommend");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        if($key_buffer_ratio <= 50) {
            writerx("Your key_buffer_size is too large, less than 50% utilized,");
            writerx("Recommended key_buffer_size = $key_recommend");
        }
        if($key_cache_miss_rate >= 1000) {
            writerx("Your key_buffer_size miss rate is higher than 1:1000");
            writerx("If you are getting a fill rate over 95% but have a miss rate of over 1:1000 then you probably want to look into optimizing your indexes. See Key_read_requests/Key_reads.");
        }
	writer("</alert>");
        $ALERT13=1;
    }
    else {
        $ALERT13=0;
    }
    return $ALERT13;
}

sub alert_14 {
    my($Key_reads,$Key_read_requests,$Key_blocks_used,$Key_blocks_unused,$key_buffer_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("14");
    
    my $key_cache_miss_rate = undef;
    my $key_buffer_ratio = undef;
    my $key_buffer_ratioRND = undef;
    my $key_buffer_fill = undef;
    my $key_blocks_total = undef;

    if($Key_blocks_used == 0) {
        $Key_blocks_unused = 1;
    }
    if($Key_blocks_used == 0) {
        $Key_blocks_unused = 1;
    }
    
    if($Key_reads == 0) {
	writer("<alert id=\"14\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("No Key_reads. Use some indexes please.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
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
            $key_buffer_ratio = 100;
            $key_buffer_ratioRND = 75;
        }
    }

    my $key_buffer_sizeHR = human($key_buffer_size);
    my $key_blocks_totalHR = human($key_blocks_total);

    if($Key_blocks_used == 0) { $Key_blocks_used = 1;}
    if($key_blocks_total == 0) { $key_blocks_total = 1;}
    my $key_recommend = human((((($Key_blocks_used * $key_buffer_size) / $key_blocks_total) * 100) / 95));

#    if(($key_cache_miss_rate <= 100) && ($key_cache_miss_rate >= 0) && ($key_buffer_ratioRND >= 80)) {
    if(($Key_blocks_unused == 0) || ($key_buffer_ratioRND >= 85)) {
        my $key_buffer_sizeC = human($key_buffer_size * 2);
	writer("<alert id=\"14\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current Key_reads = $Key_reads");
	writerx("Current Key_read_requests = $Key_read_requests");
	writerx("Current Key_blocks_used = $Key_blocks_used");
	writerx("Current Key_blocks_unused = $Key_blocks_unused");
	writerx("Current key_blocks_total: $key_blocks_total");
	writerx("Current buffer fill ratio = $key_buffer_ratio%");
	writerx("Current cache miss rate is 1:$key_cache_miss_rate");
	writerx("Current key_buffer_size = $key_buffer_sizeHR");
	writerx("Recommended key_buffer_size for 95% fill = $key_recommend");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Increase the key_buffer_size (we want between 75-90% buffer fill ratio)");
        writerx("Recommended key_buffer_size = $key_recommend");
#        writerx("Recommend incremental increase: change to $key_buffer_sizeC");
	writer("</alert>");
        $ALERT14=1;
    }
    else {
        $ALERT14=0;
    }
    return $ALERT14;
}

sub alert_15 {
    my($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("15");

    my $total_sorts=($Sort_scan+$Sort_range);
    $sort_buffer_size=($sort_buffer_size+8);
    $read_rnd_buffer_size=($read_rnd_buffer_size+8);
    my $sort_buffer_sizeHR = human($sort_buffer_size);
    my $read_rnd_buffer_sizeHR = human($read_rnd_buffer_size);
    my $passes_per_sort = undef;

    if($total_sorts == 0) {
        $passes_per_sort=0;
    }
    if($Sort_merge_passes != 0) {
        $passes_per_sort=($Sort_merge_passes/$total_sorts);
    }
    else {
        $passes_per_sort=0;
        writerx("Current passes_per_sort = $passes_per_sort");
    }
    if($passes_per_sort >= 2) {
        my $sort_buffer_size_R = human($sort_buffer_size * 2);
        my $read_rnd_buffer_size_R = human($read_rnd_buffer_size * 2);
	writer("<alert id=\"15\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current passes_per_sort = $passes_per_sort");
	writerx("Current sort_buffer_size = $sort_buffer_sizeHR");
	writerx("Current read_rnd_buffer_size = $read_rnd_buffer_sizeHR");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("# Increase sort_buffer_size, Current size is $sort_buffer_sizeHR");
        writerx("# Recommend: sort_buffer_size = $sort_buffer_size_R");
        writerx("# Increase read_rnd_buffer_size, Current size is $read_rnd_buffer_sizeHR");
        writerx("# Recommend: read_rnd_buffer_size = $read_rnd_buffer_size_R");
	writer("</alert>");
        $ALERT15=1;
    }
    else {
        $ALERT15=0;
    }
    return $ALERT15;
}

sub alert_16 {
    my($Sort_scan,$Sort_range,$sort_buffer_size,$read_rnd_buffer_size,$Sort_merge_passes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("16");

    my $total_sorts=($Sort_scan+$Sort_range);
    $sort_buffer_size=($sort_buffer_size+8);
    $read_rnd_buffer_size=($read_rnd_buffer_size+8);
    my $sort_buffer_sizeHR=human($sort_buffer_size);
    my $read_rnd_buffer_sizeHR=human($read_rnd_buffer_size);
    my $passes_per_sort = undef;

    if($total_sorts == 0) {
        $passes_per_sort=0;
    }
    if($Sort_merge_passes != 0) {
        $passes_per_sort=($Sort_merge_passes/$total_sorts);
    }
    else {
        $passes_per_sort=0;
    }
    if($passes_per_sort < 2) {
        my $sort_buffer_size_R = human($sort_buffer_size / 2);
        my $read_rnd_buffer_size_R = human($read_rnd_buffer_size / 2);
	writer("<alert id=\"16\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current passes_per_sort = $passes_per_sort");
	writerx("Current sort_buffer_size = $sort_buffer_sizeHR");
	writerx("Current read_rnd_buffer_size = $read_rnd_buffer_sizeHR");
	writerx("# Decrease sort_buffer_size, Current size is $sort_buffer_sizeHR");
        writerx("# Recommend: sort_buffer_size = $sort_buffer_size_R");
        writerx("# Decrease read_rnd_buffer_size, Current size is $read_rnd_buffer_sizeHR");
        writerx("# Recommend: read_rnd_buffer_size = $read_rnd_buffer_size_R");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT16=1;
    }
    else {
        $ALERT16=0;
    }
    return $ALERT16;
}

sub alert_17 {
    my($join_buffer_size,$Select_range_check,$Select_full_join) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("17");

    $join_buffer_size=($join_buffer_size+4096);
    my $join_buffer_sizeHR=human($join_buffer_size);

    if(($Select_range_check == 0) && ($Select_full_join == 0)) {
        $ALERT17=0;
    }
    if($Select_full_join > 0) {
        $ALERT17=1;
    }
    if($Select_range_check > 0) {
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
	    writer("<alert id=\"17\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("You have had $Select_range_check joins without keys that check for key usage after each row.");
	    writerx("Current join_buffer_size = $join_buffer_sizeHR");
	    writerx("Current Select_full_join = $Select_full_join");
	    writerx("Current Select_range_check = $Select_range_check");
	    writerx("You have had $Select_full_join queries where a join could not use an index properly.");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
            writerx("# Recommend a starting point of $join_buffer_size_R_HR");
	    writer("</alert>");
        }
        elsif($warn == 1) {
	    writer("<alert id=\"17\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("You have had $Select_range_check joins without keys that check for key usage after each row.");
	    writerx("Current join_buffer_size = $join_buffer_sizeHR");
	    writerx("Current Select_full_join = $Select_full_join");
	    writerx("Current Select_range_check = $Select_range_check");
	    writerx("You have had $Select_full_join queries where a join could not use an index properly.");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");

            $join_buffer_size_R = ($join_buffer_size * 1.5);
            $join_buffer_size_R_HR = human($join_buffer_size_R);
            writerx("# Recommend a starting point of $join_buffer_size_R_HR");      
	    writer("</alert>");
        }
    }
    return $ALERT17;
}

sub alert_18 {
    my($join_buffer_size,$Select_range_check,$Select_full_join,$log_queries_not_using_indexes) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("18");

    $join_buffer_size=($join_buffer_size+4096);
    my $join_buffer_sizeHR=human($join_buffer_size);
    
    if($join_buffer_size > 4194304) {
        $ALERT18 = 1;
        my $join_buffer_size_R = 4194303;
        $join_buffer_size_R = ($join_buffer_size_R - 8192);
        my $join_buffer_size_R_HR = human($join_buffer_size_R);
	writer("<alert id=\"18\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current join_buffer_size = $join_buffer_sizeHR");
	writerx("Current Select_full_join = $Select_full_join");
	writerx("Current Select_range_check = $Select_range_check");
	writerx("You have had $Select_full_join queries where a join could not use an index properly.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("# Recommend a starting point of $join_buffer_size_R_HR");
	writer("</alert>");
    }
    else {
        $ALERT18=0;
    }
    return $ALERT18;
}

sub alert_19 {
    my($Open_files,$open_files_limit,$table_cache) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("19");
    
    my $thresh = 75;
    my $open_files_ratio = round(($Open_files / $open_files_limit) * 100);

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
	    writer("<alert id=\"19\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current open_files_limit = $open_files_limit");
	    writerx("Current Open_files = $Open_files");
	    writerx("Current usage ration = $open_files_ratio %");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
            writerx("# Recommend a starting point of open_files_limit = $open_files_limit_R");
	    writer("</alert>");
            $ALERT19=1;
        }
	else {
	    $ALERT19=0;
	}
    }
    else {
        $ALERT19=0;
    }
    return $ALERT19;
}

sub alert_20 {
    my($Table_locks_waited,$Table_locks_immediate,$concurrent_insert,$num_tables,$engine_count_innodb,$Questions) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("20");

    my $immediate_locks_miss_rate = undef;
    my $innodb_ratio = round(($engine_count_innodb / $num_tables) * 100);
    $immediate_locks_miss_rate=round(($Table_locks_immediate/$Table_locks_waited),2);
 
    if(($immediate_locks_miss_rate < 5000) && ($innodb_ratio <= 66)) {
	writer("<alert id=\"20\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current table lock wait ratio = $immediate_locks_miss_rate:$Questions");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("You may want to consider migrating your high-use tables to InnoDB as your table lock ratio is too high.");
        writerx("Your ratio of InnoDB tables to total tables = $innodb_ratio%");
	writer("</alert>");
        $ALERT20 = 1;
    }
    else {
        $ALERT20=0;
    }
    return $ALERT20;
}

sub alert_21 {
    my($Opened_tables,$table_cache,$Open_tables) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("21");

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
        if(($table_cache_hit_rate >= 95) && ($table_cache_fill >= 95)) {
            $ALERT21=1;
            my $table_cache_R = round($Open_tables * 1.6);
	    writer("<alert id=\"21\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    writerx("Current table_cache value = $table_cache tables");
	    writerx("Current Open_tables = $Open_tables tables.");
	    writerx("Current table_cache_fill_ratio is: $table_cache_fill %");
	    writerx("Current table_cache_hit_rate is: $table_cache_hit_rate %");
            writerx("# Increase the table_cache, Current size is $table_cache. Recommend table_cache=$table_cache_R");
	    writer("</alert>");
        }
        else {
            $ALERT21=0;
        }
    }
    else {
        my $table_cache_R = round($Open_tables * 1.6);
	writer("<alert id=\"21\">");
        writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
        writerx("Current table_cache value = $table_cache tables");
        writerx("Current Open_tables = $Open_tables tables.");
        writerx("Current table_cache_fill_ratio is: $table_cache_fill %");
        writerx("Current table_cache_hit_rate is: $table_cache_hit_rate %");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("Table cache is set to 0 size.");
        writerx("# Enable a value for table_cache, Current value is $table_cache. Recommend table_cache=$table_cache_R");
	writer("</alert>");
        $ALERT21=1;
    }
    return $ALERT21;
}

sub alert_22 {
    my($Opened_tables,$table_cache,$Open_tables) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("22");

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
	writer("<alert id=\"22\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Current table_cache value = $table_cache tables");
        writerx("Current Open_tables = $Open_tables tables.");
        writerx("Current table_cache_fill_ratio is: $table_cache_fill %");
        writerx("Current table_cache_hit_rate is: $table_cache_hit_rate %");

        if(($table_cache_hit_rate <= 75) && ($table_cache_fill <= 75)) {
            $ALERT22=1;
            my $table_cache_R = round($Open_tables * 1.6);
            writerx("# Decrease the table_cache, Current size is $table_cache. Recommend table_cache=$table_cache_R");
	    writer("</alert>");
        }
        else {
            $ALERT22=0;
        }
    }
    else {
        my $table_cache_R = round($Open_tables * 1.6);
	writer("<alert id=\"22\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");

        writerx("Table cache is set to 0 size.");
        writerx("# Enable a value for table_cache, Current value is $table_cache. Recommend table_cache=$table_cache_R");
	writer("</alert>");
        $ALERT22=1;
    }
    return $ALERT22;
}

sub alert_23 {
    my($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("23");
    
    my $Conn_global = $num_connections;
    my $Historic_threads_per_second=round($Threads_created/$Uptime);

    if($Threads_cached == 0 ) {
	writer("<alert id=\"23\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Thread_cache disabled. Please enable thread caching.");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writer("</alert>");
        $ALERT23 = 1;
        return $ALERT23;
    }
    else {
        my $Thread_hit_ratio = round((100 - ($Threads_created/$Threads_cached)),2);
        my $warn=0;
        if($Historic_threads_per_second >= 2) {
            my $thread_cache_R = ($Max_used_connections * 1.1);
	    writer("<alert id=\"23\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current thread_cache_size: $thread_cache_size");
	    writerx("Current Threads_cached: $Threads_cached");
	    writerx("Current Threads_connected: $Threads_connected");
	    writerx("Current Threads_created: $Threads_created");
	    writerx("Current Global connections: $Conn_global");
	    writerx("Historic Max_used_connections: $Max_used_connections");
	    writerx("Historic_threads_per_second: $Historic_threads_per_second");
	    writerx("Thread_hit_ratio: $Thread_hit_ratio%");
	    writerx("Threads created per second are overrunning threads_cached.");
            writerx("# Recommend thread_cache_size = $thread_cache_R");
            $warn=1;
            $ALERT23=1;
        }
        if($Threads_created > $Threads_cached) {            
	    writer("<alert id=\"23\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current thread_cache_size: $thread_cache_size");
	    writerx("Current Threads_cached: $Threads_cached");
	    writerx("Current Threads_connected: $Threads_connected");
	    writerx("Current Threads_created: $Threads_created");
	    writerx("Current Global connections: $Conn_global");
	    writerx("Historic Max_used_connections: $Max_used_connections");
	    writerx("Historic_threads_per_second: $Historic_threads_per_second");
	    writerx("Thread_hit_ratio: $Thread_hit_ratio%");
            writerx("You need to change the thread_cache_size.");
            my $thread_cache_R = ($Threads_created +1);
            writerx("# Recommend thread_cache_size = $thread_cache_R");
            $warn=1;
            $ALERT23=1;
        }
        else { 
            $ALERT23=0;
        }
        if($warn==1) {
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
        }
        return $ALERT23;
    }
}

sub alert_24 {
    my($Threads_created,$Uptime,$num_connections,$thread_cache_size,$Threads_connected,$Threads_cached,$Max_used_connections) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("24");

    my $Conn_global = $num_connections;
    my $Historic_threads_per_second=round($Threads_created/$Uptime);
    if($Threads_cached == 0 ) {
	writer("<alert id=\"24\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Threads_cached = 0 or not enabled. Please enable thread caching.");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writer("</alert>");
        $ALERT24 = 1;
        return $ALERT24;
    }
    else {
        my $Thread_hit_ratio = round((100 - ($Threads_created/$Threads_cached)),2);

        if($Thread_hit_ratio > 99.0) {
	    writer("<alert id=\"24\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current thread_cache_size: $thread_cache_size");
	    writerx("Current Threads_cached: $Threads_cached");
	    writerx("Current Threads_connected: $Threads_connected");
	    writerx("Current Threads_created: $Threads_created");
	    writerx("Current Global connections: $Conn_global");
	    writerx("Historic Max_used_connections: $Max_used_connections");
	    writerx("Historic_threads_per_second: $Historic_threads_per_second");
	    writerx("Thread_hit_ratio: $Thread_hit_ratio%");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
            
            writerx("Thread_hit_ratio is more than 99%.");
            writerx("You need to change the thread_cache_size.");
            my $thread_cache_R = ($Threads_created +1);
            writerx("# Decrease the thread_cache_size, recommend thread_cache_size = $thread_cache_R");
	    writer("</alert>");
            $ALERT24=1;
        }
        else {
            $ALERT24=0;
        }
        return $ALERT24;
    }
}

sub alert_25 {
    my($Binlog_cache_disk_use,$Binlog_cache_use,$binlog_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("25");
    
    if($Binlog_cache_disk_use == 0 ) { $Binlog_cache_disk_use = 1;}
    if($Binlog_cache_use == 0 ) {$Binlog_cache_use = 1;}
    my $bcache_tmp_ratio = ($Binlog_cache_disk_use / $Binlog_cache_use);
    my $binlog_cache_size_HR = human($binlog_cache_size);
    my $binlog_total_usage = ($Binlog_cache_disk_use + $Binlog_cache_use);
    my $warn=0;

    if($bcache_tmp_ratio < 25) {
        if($Binlog_cache_disk_use > 1024) {
            my $binlog_cache_size_R = ($binlog_cache_size * 1.5);
	    writer("<alert id=\"25\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
	    writerx("Your binlog_cache has less than 25% utilization.");
	    writerx("Current binlog_cache_size = $binlog_cache_size_HR");
	    writerx("Current binlog cache usage by transactions: $Binlog_cache_use");
	    writerx("Current tmp files created for binlog usage: $Binlog_cache_disk_use");
	    writerx("Out of $binlog_total_usage writes, $Binlog_cache_disk_use have been to tmp disk files.");
	    writerx("Your binlog_cache utilization ratio: $bcache_tmp_ratio%");
            writerx("Your binlog_cache has failed to buffer more than 1024 transactions.");
            writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");
            $warn=1;
            $ALERT25=1;
        }
        else {
            $ALERT25=0;
        }
    }
    else {
        if($Binlog_cache_disk_use > 1024) {
            my $binlog_cache_size_R = ($binlog_cache_size * 1.5);
	    writer("<alert id=\"25\">");
            writer("<name>$alert_name</name>");
            writer("<category>$alert_category</category>");
	    writerx("Your binlog_cache utilization exceeds 25% utilization.");
            writerx("Your binlog_cache has failed to buffer more than 1024 transactions.");
            writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
            $warn=1;
            $ALERT25=1;
        }
        else {
            $Binlog_cache_disk_use = 1024;
            my $binlog_cache_size_R = ($binlog_cache_size + $Binlog_cache_disk_use);
	    writer("<alert id=\"25\">");
            writer("<name>$alert_name</name>");
            writer("<category>$alert_category</category>");
            writerx("Your binlog_cache_size exceeds 25% utilization");
            writerx("# increase binlog_cache_size, recommend binlog_cache_size = $binlog_cache_size_R");
	    writer("<description>$alert_desc</description>");
	    writer("<links>$alert_links</links>");
	    writer("<solution>$alert_solution</solution>");
            $warn=1;
            $ALERT25=1;
        }
    }    
    if($warn==1) {
	writer("</alert>");
    }
    return $ALERT25;
}

sub alert_26 {
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("26");

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

    if($max_tmp_tables > 32){
	writer("<alert id=\"26\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current max_tmp_tables = $max_tmp_tables");
	writerx("Current max_heap_table_size = $max_heap_table_sizeHR");
	writerx("Current tmp_table_size = $tmp_table_sizeHR");
	writerx("Current Created_tmp_tables = $Created_tmp_tables");
	writerx("Current Created_tmp_disk_tables = $Created_tmp_disk_tables");
	writerx("Currently $tmp_disk_ratio% of tmp tables were created on disk");
	writerx("Ratio of tmp_table_size to in-memory allowance: $heap_to_tmp%");
	writerx("Average usage = $tmp_per_sec tmp tables/sec");
        writerx("Your max_tmp_tables is set to a greater value than default.");
        writerx("If you consistently need more tmp tables you probably would be better off adding more RAM.");
	writerx("Note: Effective in-memory tmp_table_size is limited to max_heap_table_size.");
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
        $ALERT26=0;
    }
    if($warn==1) {
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
    }
    return $ALERT26;
}

sub alert_27 {
    my($flush_time) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("27");

    if($flush_time > 0) {
	writer("<alert id=\"27\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT27=1;
    }
    else {
        $ALERT27=0;
    }
    return $ALERT27;
}

sub alert_29 {
    my($innodb_doublewrite) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("29");

    if($innodb_doublewrite eq "ON") {
        $ALERT29=0;
    }
    else {
	writer("<alert id=\"29\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT29=1;
    }
    return $ALERT29;
}

sub alert_30 {
    my($innodb_flush_method,$version_compile_os) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("30");

    if ($version_compile_os =~ /win/) {
        $ALERT30=0;
    }
    else {
        if($innodb_flush_method ne "O_DIRECT") {
	    writer("<alert id=\"30\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current innodb_flush_method = $innodb_flush_method");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
            $ALERT30=1;
        }
        else {
            $ALERT30=0;
        }
    }
    return $ALERT30;
}

sub alert_31 {
    my($tx_isolation) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("31");

    if(($tx_isolation =~ /REPEATABLE-READ/) || ($tx_isolation =~ /SERIALIZABLE/)) {
        $ALERT31=0;
    }
    else {
	writer("<alert id=\"31\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current transaction-isolation (tx-isolation) = $tx_isolation");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT31=1;
    }    
    return $ALERT31;
}

sub alert_32 {
    my($innodb_lock_wait_timeout) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("32");

    if($innodb_lock_wait_timeout > 50) {
	writer("<alert id=\"32\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current innodb_lock_wait_timeout = $innodb_lock_wait_timeout");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT32=1;
    }
    else {
        $ALERT32=0;
    }
    return $ALERT32;
}

sub alert_33 {
    my($concurrent_insert) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("33");

    if(($concurrent_insert eq "OFF") || ($concurrent_insert == 0)) {
	writer("<alert id=\"33\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current concurrent_insert value = $concurrent_insert");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT33=1;
    }
    else {
        $ALERT33=0;
    }
    return $ALERT33;
}

sub alert_34 {
    my($query_cache_type,$query_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("34");

    if($query_cache_type eq "OFF") { $query_cache_type = 0;}
    if($query_cache_type eq "ON") { $query_cache_type= 1;}
    if(($query_cache_type == 0) || ($query_cache_size == 0)) {
	writer("<alert id=\"34\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current query_cache_type = $query_cache_type");
	writerx("Current query_cache_size = $query_cache_size");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT34=1;
    }
    else {
        $ALERT34=0;
    }
    return $ALERT34;
}

sub alert_37 {
    my($thread_cache_size) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("37");

    if($thread_cache_size == 0) {
	writer("<alert id=\"37\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current thread_cache_size = $thread_cache_size");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT37=1;
    }
    else {
        $ALERT37=0;
    }
    return $ALERT37;
}

sub alert_38 {
    my($queries_per_second,$threshold_queries_per_second) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("38");

    if($queries_per_second >= $threshold_queries_per_second) {
	writer("<alert id=\"38\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current queries_per_second = $queries_per_second/sec");
	writerx("Configured threshold = $threshold_queries_per_second/sec");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT38=1;
    }
    else {
        $ALERT38=0;
    }
    return $ALERT38;
}

sub alert_39 {
    my($expire_logs_days) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("39");

    if($expire_logs_days > 0) {
        $ALERT39=0;
    }
    else {
	writer("<alert id=\"39\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current binary log rotation = $expire_logs_days");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT39=1;
    }
    return $ALERT39;
}

sub alert_56 {
    my($log,$server_type) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("56");

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

    if($log eq "ON") {
        if(($server_type eq 0) || ($server_type = 1)) {
	    writer("<alert id=\"56\">");
	    writer("<name>$alert_name</name>");
	    writer("<category>$alert_category</category>");
	    writerx("Current general log setting = $log");
	    writerx("Current server type = $S");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
	    writer("</alert>");
            $ALERT56=1;
        }
        elsif($server_type eq 2) {
            $ALERT56=0;
        }
        else {
	    writer("<alert id=\"56\">");
            writer("<name>$alert_name</name>");
            writer("<category>$alert_category</category>");
            writerx("Current general log setting = $log");
            writerx("Current server type = $S");
            writer("<description>$alert_desc</description>");
            writer("<links>$alert_links</links>");
            writer("<solution>$alert_solution</solution>");
            writerx("Server type set incorrectly. Please address.");
	    writer("</alert>");
            $ALERT56=1;
        }
    }
    else {
        $ALERT56=0;
    }
    return $ALERT56;
}

sub alert_57 {
    my($log_warnings,$server_type) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("57");

    if(($log_warnings eq "OFF") || ($log_warnings == 0)) {
	writer("<alert id=\"57\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
	writerx("Current warning log setting = $log_warnings");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT57=1;
    }
    else {
        $ALERT57=0;
    }
    return $ALERT57;
}

sub alert_100 {
    my($Created_tmp_tables,$Created_tmp_disk_tables,$max_heap_table_size,$tmp_table_size,$max_tmp_tables,$Uptime) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("100");

    my $warn=0;
    my $max_heap_table_size_HR = human(round($max_heap_table_size));
    my $max_heap_table_size_R = ($tmp_table_size * .8);
    my $tmp_table_size_R = human($max_heap_table_size_R * 1.2);
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

    if($heap_to_tmp < 75) {
        $warn=1;
    }
    else {
        $ALERT100=0;
    }
    if($warn==1) {
	writer("<alert id=\"100\">");
        writer("<name>$alert_name</name>");
        writer("<category>$alert_category</category>");
        writerx("Current max_heap_table_size = $max_heap_table_sizeHR");
        writerx("Current tmp_table_size = $tmp_table_sizeHR");
        writerx("Currently $tmp_disk_ratio% of tmp tables were created on disk");
        writerx("Ratio of tmp_table_size to in-memory allowance: $heap_to_tmp%");
        writerx("Note: Effective in-memory tmp_table_size is limited to max_heap_table_size.");
        writerx("Temporary tables larger than $max_heap_table_size_HR will not be allowed into ram.");
        writerx("# If your memory-usage will allow it, increase max_heap_table_size to $max_heap_table_size_HR");
        writerx("# Otherwise, decrease tmp_table_size to $tmp_table_size_R");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
    }
    return $ALERT100;
}

sub alert_00 {
    my $Uptime = $_[0];
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("99");

    if($Uptime < 172800) {
        $Uptime = round($Uptime / 3600); #fix for hours
	writer("<alert id=\"99\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Current Uptime = $Uptime hours");
	writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT00=1;
    }
    else {
        $Uptime = round($Uptime / 3600); #fix for hours
        $ALERT00=0;
    }
    return $ALERT00;
}

# user account checks
sub alert_47 {
    my($illegal_global_user) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("47");

    if(!$illegal_global_user) {
        $ALERT47=0;
    }
    else {
	writer("<alert id=\"47\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Illegal global users found: $illegal_global_user");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT47=1;
    }
    return $ALERT47;
}

sub alert_48 {
    my($old_passwords) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("48");
    
    if($old_passwords eq "0") {
        $old_passwords = "OFF";
    }
    if($old_passwords eq "OFF") {
        $ALERT48=0;
    }
    else {
	writer("<alert id=\"48\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Old password hashing is enabled!");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT48=1;
    }
    return $ALERT48;
}

sub alert_50 {
    my($illegal_grant_user) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("50");

    if($illegal_grant_user == 0) {
        $ALERT50=0;
    }
    else {
	writer("<alert id=\"50\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Illegal grant users found: $illegal_grant_user");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT50=1;
    }
    return $ALERT50;
}

sub alert_51 {
    my($illegal_remote_root) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("51");

    if(!$illegal_remote_root) {
        $ALERT51=0;
    }
    else {
	writer("<alert id=\"51\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writerx("Illegal remote root users found: $illegal_remote_root");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
	writer("</alert>");
        $ALERT51=1;
    }
    return $ALERT51;
}

sub alert_52 {
    my($illegal_user_nopass) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("52");

    if($illegal_user_nopass = 0) {
        $ALERT52=0;
    }
    else {
	writer("<alert id=\"52\">");
	writer("<name>$alert_name</name>");
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Empty passwords found for users: $illegal_user_nopass");
	writer("</alert>");
        $ALERT52=1;
    }
    return $ALERT52;
}

sub alert_53 {
    my($illegal_user_noname) = @_;
    my($alert_name,$alert_desc,$alert_links,$alert_solution,$alert_function,$alert_category) = get_info("53");

    if($illegal_user_noname = 0) {
        $ALERT53=0;
    }
    else {
	writer("<alert id=\"53\">");
	writer("<name>$alert_name</name>");                                                                     
	writer("<category>$alert_category</category>");
        writer("<description>$alert_desc</description>");
        writer("<links>$alert_links</links>");
        writer("<solution>$alert_solution</solution>");
        writerx("Found empty username for these entries: $illegal_user_noname");
	writer("</alert>");
        $ALERT53=1;
    }
    return $ALERT53;
}

# error code alerts
sub alert_snmp {
    my($server_snmp_error_code) = @_;    
    if($server_snmp_error_code == 0) {
        $ALERTSNMP=0;
    }
    else {
	writer("<alert id=\"00\">");
	writer("<name>SNMP client error codes</name>");
	writer("<category>client errors</category>");
        writerx("Current snmp error for server: $server_snmp_error_code");
	writer("</alert>");
        $ALERTSNMP=1;
    }
    return $ALERTSNMP;
}

sub alert_mysql {
    my($server_mysql_error_code) = @_;
    if($server_mysql_error_code== 0) {
        $ALERTMYSQL=0;
    }
    else {
	writer("<alert id=\"00\">");
	writer("<name>MySQL client error codes</name>");
	writer("<category>client errors</category>");
        writerx("Current snmp error for server: $server_mysql_error_code");
	writer("</alert>");
        $ALERTMYSQL=1;
    }
    return $ALERTMYSQL;
}

sub analyze_data {
    debug_report("analyze_data process: [starting]");
    my $server_list_id = $varlist{'server_list_id'};
    my $cnf_file = $varlist{'cnf_file'};
    my $os_load_1 = $varlist{'os_load_1'};
    my $os_load_5 = $varlist{'os_load_5'};
    my $os_load_15 = $varlist{'os_load_15'};
    my $os_mem_total = $varlist{'os_mem_total'};
    my $os_mem_used = $varlist{'os_mem_used'};
    my $os_swap_total = $varlist{'os_swap_total'};
    my $os_swap_free = $varlist{'os_swap_free'};
    my $os_cpu_user = $varlist{'os_cpu_user'};
    my $os_cpu_system = $varlist{'os_cpu_system'};
    my $os_cpu_idle = $varlist{'os_cpu_idle'};
    my $queries_per_second = $varlist{'queries_per_second'};
    my $num_schema = $varlist{'num_schema'};
    my $num_tables = $varlist{'num_tables'};
    my $num_connections = $varlist{'num_connections'};
    my $length_data = $varlist{'length_data'};
    my $length_index = $varlist{'length_index'};
    my $engine_count_innodb = $varlist{'engine_count_innodb'};
    my $engine_count_myisam = $varlist{'engine_count_myisam'};
    my $engine_myisam_size_data = $varlist{'engine_myisam_size_data'};
    my $engine_myisam_size_index = $varlist{'engine_myisam_size_index'};
    my $engine_innodb_size_data = $varlist{'engine_innodb_size_data'};
    my $engine_innodb_size_index = $varlist{'engine_innodb_size_index'};
    my $auto_increment_increment = $varlist{'auto_increment_increment'};
    my $auto_increment_offset = $varlist{'auto_increment_offset'};
    my $automatic_sp_privileges = $varlist{'automatic_sp_privileges'};
    my $back_log = $varlist{'back_log'};
    my $basedir = $varlist{'basedir'};
    my $binlog_cache_size = $varlist{'binlog_cache_size'};
    my $bulk_insert_buffer_size = $varlist{'bulk_insert_buffer_size'};
    my $character_set_client = $varlist{'character_set_client'};
    my $character_set_connection = $varlist{'character_set_connection'};
    my $character_set_database = $varlist{'character_set_database'};
    my $character_set_filesystem = $varlist{'character_set_filesystem'};
    my $character_set_results = $varlist{'character_set_results'};
    my $character_set_server = $varlist{'character_set_server'};
    my $character_set_system = $varlist{'character_set_system'};
    my $character_sets_dir = $varlist{'character_sets_dir'};
    my $collation_connection = $varlist{'collation_connection'};
    my $collation_database = $varlist{'collation_database'};
    my $collation_server = $varlist{'collation_server'};
    my $completion_type = $varlist{'completion_type'};
    my $concurrent_insert = $varlist{'concurrent_insert'};
    my $connect_timeout = $varlist{'connect_timeout'};
    my $datadir = $varlist{'datadir'};
    my $date_format = $varlist{'date_format'};
    my $datetime_format = $varlist{'datetime_format'};
    my $default_week_format = $varlist{'default_week_format'};
    my $delay_key_write = $varlist{'delay_key_write'};
    my $delayed_insert_limit = $varlist{'delayed_insert_limit'};
    my $delayed_insert_timeout = $varlist{'delayed_insert_timeout'};
    my $delayed_queue_size = $varlist{'delayed_queue_size'};
    my $div_precision_increment = $varlist{'div_precision_increment'};
    my $keep_files_on_create = $varlist{'keep_files_on_create'};
    my $engine_condition_pushdown = $varlist{'engine_condition_pushdown'};
    my $expire_logs_days = $varlist{'expire_logs_days'};
    my $flush = $varlist{'flush'};
    my $flush_time = $varlist{'flush_time'};
    my $ft_boolean_syntax = $varlist{'ft_boolean_syntax'};
    my $ft_max_word_len = $varlist{'ft_max_word_len'};
    my $ft_min_word_len = $varlist{'ft_min_word_len'};
    my $ft_query_expansion_limit = $varlist{'ft_query_expansion_limit'};
    my $ft_stopword_file = $varlist{'ft_stopword_file'};
    my $group_concat_max_len = $varlist{'group_concat_max_len'};
    my $have_archive = $varlist{'have_archive'};
    my $have_bdb = $varlist{'have_bdb'};
    my $have_blackhole_engine = $varlist{'have_blackhole_engine'};
    my $have_compress = $varlist{'have_compress'};
    my $have_crypt = $varlist{'have_crypt'};
    my $have_csv = $varlist{'have_csv'};
    my $have_dynamic_loading = $varlist{'have_dynamic_loading'};
    my $have_example_engine = $varlist{'have_example_engine'};
    my $have_federated_engine = $varlist{'have_federated_engine'};
    my $have_geometry = $varlist{'have_geometry'};
    my $have_innodb = $varlist{'have_innodb'};
    my $have_isam = $varlist{'have_isam'};
    my $have_merge_engine = $varlist{'have_merge_engine'};
    my $have_ndbcluster = $varlist{'have_ndbcluster'};
    my $have_openssl = $varlist{'have_openssl'};
    my $have_ssl = $varlist{'have_ssl'};
    my $have_query_cache = $varlist{'have_query_cache'};
    my $have_raid = $varlist{'have_raid'};
    my $have_rtree_keys = $varlist{'have_rtree_keys'};
    my $have_symlink = $varlist{'have_symlink'};
    my $hostname = $varlist{'hostname'};
    my $init_connect = $varlist{'init_connect'};
    my $init_file = $varlist{'init_file'};
    my $init_slave = $varlist{'init_slave'};
    my $innodb_additional_mem_pool_size = $varlist{'innodb_additional_mem_pool_size'};
    my $innodb_autoextend_increment = $varlist{'innodb_autoextend_increment'};
    my $innodb_buffer_pool_awe_mem_mb = $varlist{'innodb_buffer_pool_awe_mem_mb'};
    my $innodb_buffer_pool_size = $varlist{'innodb_buffer_pool_size'};
    my $innodb_checksums = $varlist{'innodb_checksums'};
    my $innodb_commit_concurrency = $varlist{'innodb_commit_concurrency'};
    my $innodb_concurrency_tickets = $varlist{'innodb_concurrency_tickets'};
    my $innodb_data_file_path = $varlist{'innodb_data_file_path'};
    my $innodb_data_home_dir = $varlist{'innodb_data_home_dir'};
    my $innodb_adaptive_hash_index = $varlist{'innodb_adaptive_hash_index'};
    my $innodb_doublewrite = $varlist{'innodb_doublewrite'};
    my $innodb_fast_shutdown = $varlist{'innodb_fast_shutdown'};
    my $innodb_file_io_threads = $varlist{'innodb_file_io_threads'};
    my $innodb_file_per_table = $varlist{'innodb_file_per_table'};
    my $innodb_flush_log_at_trx_commit = $varlist{'innodb_flush_log_at_trx_commit'};
    my $innodb_flush_method = $varlist{'innodb_flush_method'};
    my $innodb_force_recovery = $varlist{'innodb_force_recovery'};
    my $innodb_lock_wait_timeout = $varlist{'innodb_lock_wait_timeout'};
    my $innodb_locks_unsafe_for_binlog = $varlist{'innodb_locks_unsafe_for_binlog'};
    my $innodb_log_arch_dir = $varlist{'innodb_log_arch_dir'};
    my $innodb_log_archive = $varlist{'innodb_log_archive'};
    my $innodb_log_buffer_size = $varlist{'innodb_log_buffer_size'};
    my $innodb_log_file_size = $varlist{'innodb_log_file_size'};
    my $innodb_log_files_in_group = $varlist{'innodb_log_files_in_group'};
    my $innodb_log_group_home_dir = $varlist{'innodb_log_group_home_dir'};
    my $innodb_max_dirty_pages_pct = $varlist{'innodb_max_dirty_pages_pct'};
    my $innodb_max_purge_lag = $varlist{'innodb_max_purge_lag'};
    my $innodb_mirrored_log_groups = $varlist{'innodb_mirrored_log_groups'};
    my $innodb_open_files = $varlist{'innodb_open_files'};
    my $innodb_rollback_on_timeout = $varlist{'innodb_rollback_on_timeout'};
    my $innodb_support_xa = $varlist{'innodb_support_xa'};
    my $innodb_sync_spin_loops = $varlist{'innodb_sync_spin_loops'};
    my $innodb_table_locks = $varlist{'innodb_table_locks'};
    my $innodb_thread_concurrency = $varlist{'innodb_thread_concurrency'};
    my $innodb_thread_sleep_delay = $varlist{'innodb_thread_sleep_delay'};
    my $innodb_read_ahead = $varlist{'innodb_read_ahead'};
    my $innodb_ibuf_contract_const = $varlist{'innodb_ibuf_contract_const'};
    my $innodb_ibuf_contract_burst = $varlist{'innodb_ibuf_contract_burst'};
    my $innodb_buf_flush_const = $varlist{'innodb_buf_flush_const'};
    my $innodb_buf_flush_burst = $varlist{'innodb_buf_flush_burst'};
    my $interactive_timeout = $varlist{'interactive_timeout'};
    my $join_buffer_size = $varlist{'join_buffer_size'};
    my $key_buffer_size = $varlist{'key_buffer_size'};
    my $key_cache_age_threshold = $varlist{'key_cache_age_threshold'};
    my $key_cache_block_size = $varlist{'key_cache_block_size'};
    my $key_cache_division_limit = $varlist{'key_cache_division_limit'};
    my $language = $varlist{'language'};
    my $large_files_support = $varlist{'large_files_support'};
    my $large_page_size = $varlist{'large_page_size'};
    my $large_pages = $varlist{'large_pages'};
    my $lc_time_names = $varlist{'lc_time_names'};
    my $license = $varlist{'license'};
    my $local_infile = $varlist{'local_infile'};
    my $locked_in_memory = $varlist{'locked_in_memory'};
    my $log = $varlist{'log'};
    my $log_bin = $varlist{'log_bin'};
    my $log_bin_trust_function_creators = $varlist{'log_bin_trust_function_creators'};
    my $log_error = $varlist{'log_error'};
    my $log_queries_not_using_indexes = $varlist{'log_queries_not_using_indexes'};
    my $log_slave_updates = $varlist{'log_slave_updates'};
    my $log_slow_queries = $varlist{'log_slow_queries'};
    my $log_slow_filter = $varlist{'log_slow_filter'};
    my $log_slow_verbosity = $varlist{'log_slow_verbosity'};
    my $log_warnings = $varlist{'log_warnings'};
    my $long_query_time = $varlist{'long_query_time'};
    my $low_priority_updates = $varlist{'low_priority_updates'};
    my $lower_case_file_system = $varlist{'lower_case_file_system'};
    my $lower_case_table_names = $varlist{'lower_case_table_names'};
    my $max_allowed_packet = $varlist{'max_allowed_packet'};
    my $max_binlog_cache_size = $varlist{'max_binlog_cache_size'};
    my $max_binlog_size = $varlist{'max_binlog_size'};
    my $max_connect_errors = $varlist{'max_connect_errors'};
    my $max_connections = $varlist{'max_connections'};
    my $max_delayed_threads = $varlist{'max_delayed_threads'};
    my $max_error_count = $varlist{'max_error_count'};
    my $max_heap_table_size = $varlist{'max_heap_table_size'};
    my $max_insert_delayed_threads = $varlist{'max_insert_delayed_threads'};
    my $max_join_size = $varlist{'max_join_size'};
    my $max_length_for_sort_data = $varlist{'max_length_for_sort_data'};
    my $max_prepared_stmt_count = $varlist{'max_prepared_stmt_count'};
    my $max_relay_log_size = $varlist{'max_relay_log_size'};
    my $max_seeks_for_key = $varlist{'max_seeks_for_key'};
    my $max_sort_length = $varlist{'max_sort_length'};
    my $max_sp_recursion_depth = $varlist{'max_sp_recursion_depth'};
    my $max_tmp_tables = $varlist{'max_tmp_tables'};
    my $max_user_connections = $varlist{'max_user_connections'};
    my $max_write_lock_count = $varlist{'max_write_lock_count'};
    my $min_examined_row_limit = $varlist{'min_examined_row_limit'};
    my $multi_range_count = $varlist{'multi_range_count'};
    my $myisam_data_pointer_size = $varlist{'myisam_data_pointer_size'};
    my $myisam_max_sort_file_size = $varlist{'myisam_max_sort_file_size'};
    my $myisam_recover_options = $varlist{'myisam_recover_options'};
    my $myisam_repair_threads = $varlist{'myisam_repair_threads'};
    my $myisam_sort_buffer_size = $varlist{'myisam_sort_buffer_size'};
    my $myisam_stats_method = $varlist{'myisam_stats_method'};
    my $net_buffer_length = $varlist{'net_buffer_length'};
    my $net_read_timeout = $varlist{'net_read_timeout'};
    my $net_retry_count = $varlist{'net_retry_count'};
    my $net_write_timeout = $varlist{'net_write_timeout'};
    my $new = $varlist{'new'};
    my $old_passwords = $varlist{'old_passwords'};
    my $open_files_limit = $varlist{'open_files_limit'};
    my $optimizer_prune_level = $varlist{'optimizer_prune_level'};
    my $optimizer_search_depth = $varlist{'optimizer_search_depth'};
    my $pid_file = $varlist{'pid_file'};
    my $port = $varlist{'port'};
    my $preload_buffer_size = $varlist{'preload_buffer_size'};
    my $protocol_version = $varlist{'protocol_version'};
    my $query_alloc_block_size = $varlist{'query_alloc_block_size'};
    my $query_cache_limit = $varlist{'query_cache_limit'};
    my $query_cache_min_res_unit = $varlist{'query_cache_min_res_unit'};
    my $query_cache_size = $varlist{'query_cache_size'};
    my $query_cache_type = $varlist{'query_cache_type'};
    my $query_cache_wlock_invalidate = $varlist{'query_cache_wlock_invalidate'};
    my $query_prealloc_size = $varlist{'query_prealloc_size'};
    my $range_alloc_block_size = $varlist{'range_alloc_block_size'};
    my $log_slow_rate_limit = $varlist{'log_slow_rate_limit'};
    my $read_buffer_size = $varlist{'read_buffer_size'};
    my $read_only = $varlist{'read_only'};
    my $read_rnd_buffer_size = $varlist{'read_rnd_buffer_size'};
    my $relay_log = $varlist{'relay_log'};
    my $relay_log_index = $varlist{'relay_log_index'};
    my $relay_log_info_file = $varlist{'relay_log_info_file'};
    my $relay_log_purge = $varlist{'relay_log_purge'};
    my $relay_log_space_limit = $varlist{'relay_log_space_limit'};
    my $rpl_recovery_rank = $varlist{'rpl_recovery_rank'};
    my $secure_auth = $varlist{'secure_auth'};
    my $secure_file_priv = $varlist{'secure_file_priv'};
    my $server_id = $varlist{'server_id'};
    my $skip_external_locking = $varlist{'skip_external_locking'};
    my $skip_networking = $varlist{'skip_networking'};
    my $skip_show_database = $varlist{'skip_show_database'};
    my $slave_compressed_protocol = $varlist{'slave_compressed_protocol'};
    my $slave_load_tmpdir = $varlist{'slave_load_tmpdir'};
    my $slave_net_timeout = $varlist{'slave_net_timeout'};
    my $slave_skip_errors = $varlist{'slave_skip_errors'};
    my $slave_transaction_retries = $varlist{'slave_transaction_retries'};
    my $slow_launch_time = $varlist{'slow_launch_time'};
    my $socket = $varlist{'socket'};
    my $sort_buffer_size = $varlist{'sort_buffer_size'};
    my $sql_big_selects = $varlist{'sql_big_selects'};
    my $sql_mode = $varlist{'sql_mode'};
    my $sql_notes = $varlist{'sql_notes'};
    my $sql_warnings = $varlist{'sql_warnings'};
    my $ssl_ca = $varlist{'ssl_ca'};
    my $ssl_capath = $varlist{'ssl_capath'};
    my $ssl_cert = $varlist{'ssl_cert'};
    my $ssl_cipher = $varlist{'ssl_cipher'};
    my $ssl_key = $varlist{'ssl_key'};
    my $storage_engine = $varlist{'storage_engine'};
    my $sync_binlog = $varlist{'sync_binlog'};
    my $sync_frm = $varlist{'sync_frm'};
    my $system_time_zone = $varlist{'system_time_zone'};
    my $table_cache = $varlist{'table_cache'};
    my $table_lock_wait_timeout = $varlist{'table_lock_wait_timeout'};
    my $table_type = $varlist{'table_type'};
    my $thread_cache_size = $varlist{'thread_cache_size'};
    my $thread_stack = $varlist{'thread_stack'};
    my $time_format = $varlist{'time_format'};
    my $time_zone = $varlist{'time_zone'};
    my $timed_mutexes = $varlist{'timed_mutexes'};
    my $tmp_table_size = $varlist{'tmp_table_size'};
    my $tmpdir = $varlist{'tmpdir'};
    my $transaction_alloc_block_size = $varlist{'transaction_alloc_block_size'};
    my $transaction_prealloc_size = $varlist{'transaction_prealloc_size'};
    my $tx_isolation = $varlist{'tx_isolation'};
    my $updatable_views_with_limit = $varlist{'updatable_views_with_limit'};
    my $version = $varlist{'version'};
    my $version_comment = $varlist{'version_comment'};
    my $version_compile_machine = $varlist{'version_compile_machine'};
    my $version_compile_os = $varlist{'version_compile_os'};
    my $wait_timeout = $varlist{'wait_timeout'};
    my $Aborted_clients = $varlist{'Aborted_clients'};
    my $Aborted_connects = $varlist{'Aborted_connects'};
    my $Binlog_cache_disk_use = $varlist{'Binlog_cache_disk_use'};
    my $Binlog_cache_use = $varlist{'Binlog_cache_use'};
    my $Bytes_received = $varlist{'Bytes_received'};
    my $Bytes_sent = $varlist{'Bytes_sent'};
    my $Com_admin_commands = $varlist{'Com_admin_commands'};
    my $Com_alter_db = $varlist{'Com_alter_db'};
    my $Com_alter_table = $varlist{'Com_alter_table'};
    my $Com_analyze = $varlist{'Com_analyze'};
    my $Com_backup_table = $varlist{'Com_backup_table'};
    my $Com_begin = $varlist{'Com_begin'};
    my $Com_call_procedure = $varlist{'Com_call_procedure'};
    my $Com_change_db = $varlist{'Com_change_db'};
    my $Com_change_master = $varlist{'Com_change_master'};
    my $Com_check = $varlist{'Com_check'};
    my $Com_checksum = $varlist{'Com_checksum'};
    my $Com_commit = $varlist{'Com_commit'};
    my $Com_create_db = $varlist{'Com_create_db'};
    my $Com_create_function = $varlist{'Com_create_function'};
    my $Com_create_index = $varlist{'Com_create_index'};
    my $Com_create_table = $varlist{'Com_create_table'};
    my $Com_create_user = $varlist{'Com_create_user'};
    my $Com_dealloc_sql = $varlist{'Com_dealloc_sql'};
    my $Com_delete = $varlist{'Com_delete'};
    my $Com_delete_multi = $varlist{'Com_delete_multi'};
    my $Com_do = $varlist{'Com_do'};
    my $Com_drop_db = $varlist{'Com_drop_db'};
    my $Com_drop_function = $varlist{'Com_drop_function'};
    my $Com_drop_index = $varlist{'Com_drop_index'};
    my $Com_drop_table = $varlist{'Com_drop_table'};
    my $Com_drop_user = $varlist{'Com_drop_user'};
    my $Com_execute_sql = $varlist{'Com_execute_sql'};
    my $Com_flush = $varlist{'Com_flush'};
    my $Com_grant = $varlist{'Com_grant'};
    my $Com_ha_close = $varlist{'Com_ha_close'};
    my $Com_ha_open = $varlist{'Com_ha_open'};
    my $Com_ha_read = $varlist{'Com_ha_read'};
    my $Com_help = $varlist{'Com_help'};
    my $Com_insert = $varlist{'Com_insert'};
    my $Com_insert_select = $varlist{'Com_insert_select'};
    my $Com_kill = $varlist{'Com_kill'};
    my $Com_load = $varlist{'Com_load'};
    my $Com_load_master_data = $varlist{'Com_load_master_data'};
    my $Com_load_master_table = $varlist{'Com_load_master_table'};
    my $Com_lock_tables = $varlist{'Com_lock_tables'};
    my $Com_optimize = $varlist{'Com_optimize'};
    my $Com_preload_keys = $varlist{'Com_preload_keys'};
    my $Com_prepare_sql = $varlist{'Com_prepare_sql'};
    my $Com_purge = $varlist{'Com_purge'};
    my $Com_purge_before_date = $varlist{'Com_purge_before_date'};
    my $Com_rename_table = $varlist{'Com_rename_table'};
    my $Com_repair = $varlist{'Com_repair'};
    my $Com_replace = $varlist{'Com_replace'};
    my $Com_replace_select = $varlist{'Com_replace_select'};
    my $Com_reset = $varlist{'Com_reset'};
    my $Com_restore_table = $varlist{'Com_restore_table'};
    my $Com_revoke = $varlist{'Com_revoke'};
    my $Com_revoke_all = $varlist{'Com_revoke_all'};
    my $Com_rollback = $varlist{'Com_rollback'};
    my $Com_savepoint = $varlist{'Com_savepoint'};
    my $Com_select = $varlist{'Com_select'};
    my $Com_set_option = $varlist{'Com_set_option'};
    my $Com_show_binlog_events = $varlist{'Com_show_binlog_events'};
    my $Com_show_binlogs = $varlist{'Com_show_binlogs'};
    my $Com_show_charsets = $varlist{'Com_show_charsets'};
    my $Com_show_collations = $varlist{'Com_show_collations'};
    my $Com_show_column_types = $varlist{'Com_show_column_types'};
    my $Com_show_create_db = $varlist{'Com_show_create_db'};
    my $Com_show_create_table = $varlist{'Com_show_create_table'};
    my $Com_show_databases = $varlist{'Com_show_databases'};
    my $Com_show_errors = $varlist{'Com_show_errors'};
    my $Com_show_fields = $varlist{'Com_show_fields'};
    my $Com_show_grants = $varlist{'Com_show_grants'};
    my $Com_show_innodb_status = $varlist{'Com_show_innodb_status'};
    my $Com_show_keys = $varlist{'Com_show_keys'};
    my $Com_show_logs = $varlist{'Com_show_logs'};
    my $Com_show_master_status = $varlist{'Com_show_master_status'};
    my $Com_show_ndb_status = $varlist{'Com_show_ndb_status'};
    my $Com_show_new_master = $varlist{'Com_show_new_master'};
    my $Com_show_open_tables = $varlist{'Com_show_open_tables'};
    my $Com_show_privileges = $varlist{'Com_show_privileges'};
    my $Com_show_processlist = $varlist{'Com_show_processlist'};
    my $Com_show_slave_hosts = $varlist{'Com_show_slave_hosts'};
    my $Com_show_slave_status = $varlist{'Com_show_slave_status'};
    my $Com_show_status = $varlist{'Com_show_status'};
    my $Com_show_storage_engines = $varlist{'Com_show_storage_engines'};
    my $Com_show_tables = $varlist{'Com_show_tables'};
    my $Com_show_triggers = $varlist{'Com_show_triggers'};
    my $Com_show_variables = $varlist{'Com_show_variables'};
    my $Com_show_warnings = $varlist{'Com_show_warnings'};
    my $Com_slave_start = $varlist{'Com_slave_start'};
    my $Com_slave_stop = $varlist{'Com_slave_stop'};
    my $Com_stmt_close = $varlist{'Com_stmt_close'};
    my $Com_stmt_execute = $varlist{'Com_stmt_execute'};
    my $Com_stmt_fetch = $varlist{'Com_stmt_fetch'};
    my $Com_stmt_prepare = $varlist{'Com_stmt_prepare'};
    my $Com_stmt_reset = $varlist{'Com_stmt_reset'};
    my $Com_stmt_send_long_data = $varlist{'Com_stmt_send_long_data'};
    my $Com_truncate = $varlist{'Com_truncate'};
    my $Com_unlock_tables = $varlist{'Com_unlock_tables'};
    my $Com_update = $varlist{'Com_update'};
    my $Com_update_multi = $varlist{'Com_update_multi'};
    my $Com_xa_commit = $varlist{'Com_xa_commit'};
    my $Com_xa_end = $varlist{'Com_xa_end'};
    my $Com_xa_prepare = $varlist{'Com_xa_prepare'};
    my $Com_xa_recover = $varlist{'Com_xa_recover'};
    my $Com_xa_rollback = $varlist{'Com_xa_rollback'};
    my $Com_xa_start = $varlist{'Com_xa_start'};
    my $Compression = $varlist{'Compression'};
    my $Connections = $varlist{'Connections'};
    my $Created_tmp_disk_tables = $varlist{'Created_tmp_disk_tables'};
    my $Created_tmp_files = $varlist{'Created_tmp_files'};
    my $Created_tmp_tables = $varlist{'Created_tmp_tables'};
    my $Delayed_errors = $varlist{'Delayed_errors'};
    my $Delayed_insert_threads = $varlist{'Delayed_insert_threads'};
    my $Delayed_writes = $varlist{'Delayed_writes'};
    my $Flush_commands = $varlist{'Flush_commands'};
    my $Handler_commit = $varlist{'Handler_commit'};
    my $Handler_delete = $varlist{'Handler_delete'};
    my $Handler_discover = $varlist{'Handler_discover'};
    my $Handler_prepare = $varlist{'Handler_prepare'};
    my $Handler_read_first = $varlist{'Handler_read_first'};
    my $Handler_read_key = $varlist{'Handler_read_key'};
    my $Handler_read_next = $varlist{'Handler_read_next'};
    my $Handler_read_prev = $varlist{'Handler_read_prev'};
    my $Handler_read_rnd = $varlist{'Handler_read_rnd'};
    my $Handler_read_rnd_next = $varlist{'Handler_read_rnd_next'};
    my $Handler_rollback = $varlist{'Handler_rollback'};
    my $Handler_savepoint = $varlist{'Handler_savepoint'};
    my $Handler_savepoint_rollback = $varlist{'Handler_savepoint_rollback'};
    my $Handler_update = $varlist{'Handler_update'};
    my $Handler_write = $varlist{'Handler_write'};
    my $Innodb_buffer_pool_pages_data = $varlist{'Innodb_buffer_pool_pages_data'};
    my $Innodb_buffer_pool_pages_dirty = $varlist{'Innodb_buffer_pool_pages_dirty'};
    my $Innodb_buffer_pool_pages_flushed = $varlist{'Innodb_buffer_pool_pages_flushed'};
    my $Innodb_buffer_pool_pages_free = $varlist{'Innodb_buffer_pool_pages_free'};
    my $Innodb_buffer_pool_pages_misc = $varlist{'Innodb_buffer_pool_pages_misc'};
    my $Innodb_buffer_pool_pages_total = $varlist{'Innodb_buffer_pool_pages_total'};
    my $Innodb_buffer_pool_read_ahead_rnd = $varlist{'Innodb_buffer_pool_read_ahead_rnd'};
    my $Innodb_buffer_pool_read_ahead_seq = $varlist{'Innodb_buffer_pool_read_ahead_seq'};
    my $Innodb_buffer_pool_read_requests = $varlist{'Innodb_buffer_pool_read_requests'};
    my $Innodb_buffer_pool_reads = $varlist{'Innodb_buffer_pool_reads'};
    my $Innodb_buffer_pool_wait_free = $varlist{'Innodb_buffer_pool_wait_free'};
    my $Innodb_buffer_pool_write_requests = $varlist{'Innodb_buffer_pool_write_requests'};
    my $Innodb_data_fsyncs = $varlist{'Innodb_data_fsyncs'};
    my $Innodb_data_pending_fsyncs = $varlist{'Innodb_data_pending_fsyncs'};
    my $Innodb_data_pending_reads = $varlist{'Innodb_data_pending_reads'};
    my $Innodb_data_pending_writes = $varlist{'Innodb_data_pending_writes'};
    my $Innodb_data_read = $varlist{'Innodb_data_read'};
    my $Innodb_data_reads = $varlist{'Innodb_data_reads'};
    my $Innodb_data_writes = $varlist{'Innodb_data_writes'};
    my $Innodb_data_written = $varlist{'Innodb_data_written'};
    my $Innodb_dblwr_pages_written = $varlist{'Innodb_dblwr_pages_written'};
    my $Innodb_dblwr_writes = $varlist{'Innodb_dblwr_writes'};
    my $Innodb_log_waits = $varlist{'Innodb_log_waits'};
    my $Innodb_log_write_requests = $varlist{'Innodb_log_write_requests'};
    my $Innodb_log_writes = $varlist{'Innodb_log_writes'};
    my $Innodb_os_log_fsyncs = $varlist{'Innodb_os_log_fsyncs'};
    my $Innodb_os_log_pending_fsyncs = $varlist{'Innodb_os_log_pending_fsyncs'};
    my $Innodb_os_log_pending_writes = $varlist{'Innodb_os_log_pending_writes'};
    my $Innodb_os_log_written = $varlist{'Innodb_os_log_written'};
    my $Innodb_page_size = $varlist{'Innodb_page_size'};
    my $Innodb_pages_created = $varlist{'Innodb_pages_created'};
    my $Innodb_pages_read = $varlist{'Innodb_pages_read'};
    my $Innodb_pages_written = $varlist{'Innodb_pages_written'};
    my $Innodb_row_lock_current_waits = $varlist{'Innodb_row_lock_current_waits'};
    my $Innodb_row_lock_time = $varlist{'Innodb_row_lock_time'};
    my $Innodb_row_lock_time_avg = $varlist{'Innodb_row_lock_time_avg'};
    my $Innodb_row_lock_time_max = $varlist{'Innodb_row_lock_time_max'};
    my $Innodb_row_lock_waits = $varlist{'Innodb_row_lock_waits'};
    my $Innodb_rows_deleted = $varlist{'Innodb_rows_deleted'};
    my $Innodb_rows_inserted = $varlist{'Innodb_rows_inserted'};
    my $Innodb_rows_read = $varlist{'Innodb_rows_read'};
    my $Innodb_rows_updated = $varlist{'Innodb_rows_updated'};
    my $Key_blocks_not_flushed = $varlist{'Key_blocks_not_flushed'};
    my $Key_blocks_unused = $varlist{'Key_blocks_unused'};
    my $Key_blocks_used = $varlist{'Key_blocks_used'};
    my $Key_read_requests = $varlist{'Key_read_requests'};
    my $Key_reads = $varlist{'Key_reads'};
    my $Key_write_requests = $varlist{'Key_write_requests'};
    my $Key_writes = $varlist{'Key_writes'};
    my $Last_query_cost = $varlist{'Last_query_cost'};
    my $Max_used_connections = $varlist{'Max_used_connections'};
    my $Not_flushed_delayed_rows = $varlist{'Not_flushed_delayed_rows'};
    my $Open_files = $varlist{'Open_files'};
    my $Open_streams = $varlist{'Open_streams'};
    my $Open_tables = $varlist{'Open_tables'};
    my $Opened_tables = $varlist{'Opened_tables'};
    my $Prepared_stmt_count = $varlist{'Prepared_stmt_count'};
    my $Qcache_free_blocks = $varlist{'Qcache_free_blocks'};
    my $Qcache_free_memory = $varlist{'Qcache_free_memory'};
    my $Qcache_hits = $varlist{'Qcache_hits'};
    my $Qcache_inserts = $varlist{'Qcache_inserts'};
    my $Qcache_lowmem_prunes = $varlist{'Qcache_lowmem_prunes'};
    my $Qcache_not_cached = $varlist{'Qcache_not_cached'};
    my $Qcache_queries_in_cache = $varlist{'Qcache_queries_in_cache'};
    my $Qcache_total_blocks = $varlist{'Qcache_total_blocks'};
    my $Questions = $varlist{'Questions'};
    my $Rpl_status = $varlist{'Rpl_status'};
    my $Select_full_join = $varlist{'Select_full_join'};
    my $Select_full_range_join = $varlist{'Select_full_range_join'};
    my $Select_range = $varlist{'Select_range'};
    my $Select_range_check = $varlist{'Select_range_check'};
    my $Select_scan = $varlist{'Select_scan'};
    my $Slave_open_temp_tables = $varlist{'Slave_open_temp_tables'};
    my $Slave_retried_transactions = $varlist{'Slave_retried_transactions'};
    my $Slave_running = $varlist{'Slave_running'};
    my $Slow_launch_threads = $varlist{'Slow_launch_threads'};
    my $Slow_queries = $varlist{'Slow_queries'};
    my $Sort_merge_passes = $varlist{'Sort_merge_passes'};
    my $Sort_range = $varlist{'Sort_range'};
    my $Sort_rows = $varlist{'Sort_rows'};
    my $Sort_scan = $varlist{'Sort_scan'};
    my $Table_locks_immediate = $varlist{'Table_locks_immediate'};
    my $Table_locks_waited = $varlist{'Table_locks_waited'};
    my $Tc_log_max_pages_used = $varlist{'Tc_log_max_pages_used'};
    my $Tc_log_page_size = $varlist{'Tc_log_page_size'};
    my $Tc_log_page_waits = $varlist{'Tc_log_page_waits'};
    my $Threads_cached = $varlist{'Threads_cached'};
    my $Threads_connected = $varlist{'Threads_connected'};
    my $Threads_created = $varlist{'Threads_created'};
    my $Threads_running = $varlist{'Threads_running'};
    my $Uptime = $varlist{'Uptime'};
    my $server_snmp_error_code = $varlist{'server_snmp_error_code'};
    my $server_mysql_error_code = $varlist{'server_mysql_error_code'};
    my $Slave_SQL_Running = $varlist{'Slave_SQL_Running'};
    my $Slave_IO_Running = $varlist{'Slave_IO_Running'};
    my $Seconds_Behind_Master = $varlist{'Seconds_Behind_Master'};
    my $illegal_global_user = $varlist{'illegal_global_user'};
    my $illegal_grant_user = $varlist{'illegal_grant_user'};
    my $illegal_remote_root = $varlist{'illegal_remote_root'};
    my $illegal_user_nopass = $varlist{'illegal_user_nopass'};
    my $illegal_user_noname = $varlist{'illegal_user_noname'};
    my $collection_time_elapse = $varlist{'collection_time_elapse'};

    #added because they are from the kbase server_type table but we're working without that db
    my $threshold_queries_per_second = '0';
    my $server_type = '0'; #0=production
    my $server_statistics_id = '0'; #Null
    my $Creation_time = $datetime;    

    $os_mem_total = ($os_mem_total); # fix for bytes
    xml_head($hostname,$Creation_time); #we're creating an XML document by default

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
	$ALERT47 = alert_47($illegal_global_user);
	$ALERT48 = alert_48($old_passwords);
	$ALERT50 = alert_50($illegal_grant_user);
	$ALERT51 = alert_51($illegal_remote_root);
	#$ALERT52 = alert_52($illegal_user_nopass);
	#$ALERT53 = alert_53($illegal_user_noname);
	
	#we're not writing out SNMP or MySQL errors to XML because if those alerted at all we wouldn't have gotten here.
	#$ALERTSNMP = alert_snmp($server_snmp_error_code);
	#$ALERTMYSQL = alert_mysql($server_mysql_error_code);
	
	#start the analytics reporting process
	analyze_analytics();

	# Insert report data into database	
	debug_report("insert current alerts: [starting]");
	alert_insert(99,$ALERT00);
	alert_insert(1,$ALERT01);
	alert_insert(3,$ALERT03);
	alert_insert(4,$ALERT04);
	alert_insert(5,$ALERT05);
	alert_insert(6,$ALERT06);
	alert_insert(7,$ALERT07);
	alert_insert(8,$ALERT08);
	alert_insert(9,$ALERT09);
	alert_insert(10,$ALERT10);
	alert_insert(11,$ALERT11);
	alert_insert(12,$ALERT12);
	alert_insert(13,$ALERT13);
	alert_insert(14,$ALERT14);
	alert_insert(15,$ALERT15);
	alert_insert(16,$ALERT16);
	alert_insert(17,$ALERT17);
	alert_insert(18,$ALERT18);
	alert_insert(19,$ALERT19);
	alert_insert(20,$ALERT20);
	alert_insert(21,$ALERT21);
	alert_insert(22,$ALERT22);
	alert_insert(23,$ALERT23);
	alert_insert(24,$ALERT24);
	alert_insert(25,$ALERT25);
	alert_insert(26,$ALERT26);
	alert_insert(27,$ALERT27);
	alert_insert(29,$ALERT29);
	alert_insert(30,$ALERT30);
	alert_insert(31,$ALERT31);
	alert_insert(32,$ALERT32);
	alert_insert(33,$ALERT33);
	alert_insert(34,$ALERT34);
	alert_insert(37,$ALERT37);
	alert_insert(38,$ALERT38);
	alert_insert(39,$ALERT39);
	alert_insert(56,$ALERT56);
	alert_insert(57,$ALERT57);
	alert_insert(100,$ALERT100);
	alert_insert(47,$ALERT47);
	alert_insert(48,$ALERT48);
	alert_insert(50,$ALERT50);
	alert_insert(51,$ALERT51);
	#alert_insert(52,$ALERT52);
	#alert_insert(53,$ALERT53);
	debug_report("insert current alerts: [finish]");
	debug_report("analyze_data process: [finish]");            
	xml_end(); #end of XML document
	#we're not inserting the report to SQLite because, well, there's no need to. Keeping for future need if needed for some reason.
	#insert_report($server_list_id,$server_statistics_id,$Creation_time);
    }
}

sub xml_head {
    my($hostname,$Creation_time) = @_;
    writer('<?xml version="1.0" encoding="UTF-8"?>');
    writer('<!-- generator="kontroll-reporter-cli.pl" -->');
    writer('<!-- website="http://kontrollsoft.com" -->');
    writer('<!-- package_ver="2.0" -->');
    writer('<!-- copyright-notice "Copyright 2010-present, Matt Reid" -->');
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

sub export_file {
    my($note,$export_file) = @_;
    $note = $note."\n";

    sysopen(FILE, $export_file, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$export_file" or die $!;
    #if($verbose eq '1') {
    #    print $note;
    #}
    print FILE $note;    
    close FILE;
    return 0;
}

sub export_txt {

    my $export_file = $commit_report;
    $export_file =~ s/.xml//g;
    $export_file = $export_file.".$output";    

    ## SQLite data select... NOT IN USE but keep it for later use somewhere else. 
    # We have <details> in the XML file that are not in the database that we need to process, 
    # so no SQLite select for out reporting needs here.
    my $dbh = DBI->connect(
    "dbi:SQLite:dbname=$sqlite_file", 
                           "",
                           "",
                           { RaiseError => 1 },
                           ) or die $DBI::errstr;

    my $sql1 = "select * from alerts_current, alerts_def where alerts_current.alert_state=1 and alerts_current.alerts_def_id = alerts_def.id;";
    my $sth = $dbh->prepare($sql1) or error_report("$DBI::errstr");
    $sth->execute or error_report("$DBI::errstr");        
    while(my $row = $sth->fetchrow_hashref) {
        my $id = $row->{'alerts_def_id'};
        my $alert_name = $row->{'alert_name'};
        my $alert_desc = $row->{'alert_desc'};
        my $alert_links = $row->{'alert_links'};
        my $alert_solution = $row->{'alert_solution'};
        my $alert_function = $row->{'alert_function'};
        my $alert_category = $row->{'alert_category'};
        my $alert_level = $row->{'alert_level'};
	
    }
    #END SQLite 
    ###########
    debug_report("operating on XML file: $commit_report");
    my $parser = XML::Parser->new(ErrorContext => 2, Style => "Tree");
    my $xso = XML::SimpleObject->new( $parser->parsefile($commit_report));

    foreach my $report ($xso->child('kontrollbase')->children('report')) {    
        my $report_date = $report->attribute('date');
        debug_report("export_txt XML processing: [starting]");

        foreach my $server($report->child('server')) {
	    my $server_hostname = $server->attribute('hostname');
	    
	    export_file("#########################################################",$export_file);
	    export_file("Filename: $name",$export_file);
	    export_file("Kontrollbase Reporter CLI version",$export_file);
	    export_file("Copyright 2010-present Matt Reid - $website",$export_file);
	    export_file("Kontrollbase package version: $package_version",$export_file);
	    export_file("#########################################################",$export_file);

	    #process alerts
	    if($server->child('alert')) {
		foreach my $alert($server->child('alert')) {
		    my $alert_id = $alert->attribute('id');
		    my $alert_name = undef;
		    my $alert_cat = undef;
		    my $alert_desc = undef;
		    my $alert_solution = undef;
		    my $alert_links = undef;

		    if($alert->child('name')) { $alert_name = $alert->child('name')->value; }
		    if($alert->child('category')) { $alert_cat = $alert->child('category')->value; }
		    if($alert->child('description')) { $alert_desc = $alert->child('description')->value; }
		    if($alert->child('solution')) { $alert_solution = $alert->child('solution')->value; }
		    if($alert->child('links')) { $alert_links = $alert->child('links')->value; }
		    
		    #export_file("$alert_id",$export_file);
		    export_file("Alert: $alert_name",$export_file);
		    export_file("Category: $alert_cat",$export_file);
		    export_file("Description: $alert_desc",$export_file);
		    export_file("Solution: $alert_solution",$export_file);
		    export_file("Links: $alert_links",$export_file); ##LINKS ARE NOT BEING POPULATED? 		    

		    if($alert->child('detail')) {
			foreach my $details($alert->child('detail')) {
			    my $detail = $details->value;
			    export_file("$detail",$export_file);
			}
		    }
		    #write A Line break after each alert
		    export_file("--------",$export_file);
		}
	    }
	    export_file("Analytics Report",$export_file);
	    export_file("--------",$export_file);
	    if($server->child('analytics_report')) {
		foreach my $analytics_report($server->child('analytics_report')) {
		    if($analytics_report->child('analytics')) {
                        foreach my $analytics($analytics_report->child('analytics')) {
                            my $value = $analytics->value;
                            export_file("$value",$export_file);
                        }
                    }
		    
		}
	    }
	    export_file("--------",$export_file);
	}
    }
    debug_report("export_txt XML processing: [finish]");
    if($verbose eq '0') {
        print "Final report available in file: $export_file\n";
    }
    debug_report("Final report available in file: $export_file");
}

sub export_html {
    my $export_file = $commit_report;
    $export_file =~ s/.xml//g;
    $export_file = $export_file.".$output";

    debug_report("operating on XML file: $commit_report");
    my $parser = XML::Parser->new(ErrorContext => 2, Style => "Tree");
    my $xso = XML::SimpleObject->new( $parser->parsefile($commit_report));

    foreach my $report ($xso->child('kontrollbase')->children('report')) {    
        my $report_date = $report->attribute('date');
        debug_report("export_html XML processing: [starting]");

        foreach my $server($report->child('server')) {
            my $server_hostname = $server->attribute('hostname');
            
	    export_file('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">',$export_file);
	    export_file('<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">',$export_file);
	    export_file('<head>',$export_file);
	    export_file('<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />',$export_file);
	    export_file('<title>Kontrollbase Reporter-CLI report for $hostname</title>',$export_file);
	    export_file('<style type="text/css">body {font-family: Helvetica, sans-serif; font-size: 10px;}</style>',$export_file);
	    export_file("</head><body>",$export_file);
            export_file("<h2>Kontrollbase Reporter CLI version</h2>",$export_file);
	    export_file("<b>MySQL server tuning and analytics report for server: $server_host<br>",$export_file);
	    export_file("Report generated on date: $datetime<br>",$export_file);
	    export_file("Filename: $name<br>",$export_file);
            export_file("Copyright 2010-present Matt Reid<br>$website | contact\@kontrollsoft.com<br>",$export_file);
	    export_file("License: New-BSD license.<br>See LICENSE.txt that is bundled with this application.<br>",$export_file);
            export_file("Kontrollbase package version: $package_version</b><br>",$export_file);

	    ##process alerts
            if($server->child('alert')) {
                foreach my $alert($server->child('alert')) {
                    my $alert_id = $alert->attribute('id');
                    my $alert_name = undef;
                    my $alert_cat = undef;
                    my $alert_desc = undef;
                    my $alert_solution = undef;
                    my $alert_links = undef;

                    if($alert->child('name')) { $alert_name = $alert->child('name')->value; }
                    if($alert->child('category')) { $alert_cat = $alert->child('category')->value; }
                    if($alert->child('description')) { $alert_desc = $alert->child('description')->value; }
                    if($alert->child('solution')) { $alert_solution = $alert->child('solution')->value; }
                    if($alert->child('links')) { $alert_links = $alert->child('links')->value; }

                    export_file("<h3>Alert: $alert_name</h3>",$export_file);
                    export_file("<em><b>Category:</b> $alert_cat</em><br>",$export_file);
                    export_file("<b>Description:</b> $alert_desc<br>",$export_file);
                    export_file("<b>Solution:</b> $alert_solution<br>",$export_file);
		    if($alert_links) { export_file("<b>Links</b> $alert_links<br>",$export_file); }
                    
                    if($alert->child('detail')) {
                        foreach my $details($alert->child('detail')) {
                            my $detail = $details->value;
                            export_file("<em>$detail</em><br>",$export_file);
                        }
                    }
                    #write a line break after each alert
                    export_file("<br><br>",$export_file);
                }
            }
	    export_file("<h3>Analytics Report</h3>",$export_file);
	    if($server->child('analytics_report')) {
                foreach my $analytics_report($server->child('analytics_report')) {
                    if($analytics_report->child('analytics')) {
                        foreach my $analytics($analytics_report->child('analytics')) {
                            my $value = $analytics->value;
                            export_file("$value<br>",$export_file);
                        }
                    }
                    
                }
            }
	    export_file("</body></html>",$export_file);
        }
    }
    debug_report("export_html XML processing: [finish]");
    if($verbose eq '0') {
        print "Final report available in file: $export_file\n";
    }
    debug_report("Final report available in file: $export_file");
}

sub export_xml {
    #XML report is easy, we are saving everything as XML data in the $commit_report so just refer user to that file
    my $export_file = $commit_report;
    if($verbose eq '0') {
	print "Final report available in file: $export_file\n";
    }
    debug_report("Final report available in file: $export_file");
}

# Not exporting PDF just yet... none of the perl pdf modules are available on Yum for redhat/centos/fedora yet and the goal is portability. 
# Keeping the routine here until I decide to support it. Might be able to include the support from one module and paste it in-line 
sub export_pdf{
    my $export_file = $commit_report;
    $export_file =~ s/.xml//g;
    $export_file = $export_file.".$output";

    debug_report("Final report available in file: $export_file");
}

sub export_report {
    #defaults to XML    
    $output = lc($output); #make string lowercase
    if($output) {
	debug_report("Report export in $output format: [starting]");
	if($output eq "xml") { export_xml(); }
	elsif($output eq "html") { export_html(); }
	elsif($output eq "txt") { export_txt(); }
	elsif($output eq "pdf") { export_pdf(); }
	else { error_report("Unsupported report type. Exiting."); }	
    }
    else { #else it's XML by default
	debug_report("export_report starting for default method.");
	export_xml();
    }    
}

sub alert_insert {
    my($alerts_def_id,$alert_state) = @_;
    my $dbh = DBI->connect(
    "dbi:SQLite:dbname=$sqlite_file", 
			   "",
			   "",
			   { RaiseError => 1 },
			   ) or die $DBI::errstr;

    $alerts_def_id =~ s/'//g; #remove quotes
    $alert_state =~ s/'//g;

    my $sql1 = "INSERT INTO `alerts_current` (
`alerts_def_id` ,
`alert_state` 
)
VALUES (
'$alerts_def_id', '$alert_state');";
    my $sth1 = $dbh->prepare($sql1) or error_report("$DBI::errstr");
    $sth1->execute or error_report("$DBI::errstr");
}

sub alerts_truncate {
    debug_report("truncating table alerts_current from sqlite: [starting]");
    my $dbh = DBI->connect(
    "dbi:SQLite:dbname=$sqlite_file", 
                           "",
                           "",
                           { RaiseError => 1 },
                           ) or die $DBI::errstr;

    my $sql1 = "delete from alerts_current;";
    my $sth1 = $dbh->prepare($sql1) or error_report("$DBI::errstr");
    $sth1->execute or error_report("$DBI::errstr");
    debug_report("truncating table alerts_current from sqlite: [finish]");
}

#something is odd and not working here - needs to be debugged
sub check_perl_prerequisites {
    no warnings 'File::Find';
    my @lm;
    find({wanted => sub { push @lm, $File::Find::name}, follow =>1}, @INC);


    print<<PREREQ;
############################################
$name
Kontrollbase Reporter CLI version
$website
package version: $package_version

!! Requires SQLite database file !!
kontroll-reporter-cli_sqlite3-alerts_def.db
############################################ 

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

#    @match = grep(m/\/Fcntl/is, @lm);
#    if (@match) {
#        print "Fcntl.pm           FOUND.\n";
#    }
#    else {print "Fcntl.pm            NOT FOUND.\n";}

#    @match = grep(m/\/XML\/Parser.pm/is, @lm);
#    if (@match) {
#        print "XML/Parser.pm           FOUND.\n";
#    }
#    else {print "XML/Parser.pm            NOT FOUND.\n";}

#    @match = grep(m/\/XML\/SimpleObject.pm/is, @lm);
#    if (@match) {
#        print "XML/SimpleObject.pm           FOUND.\n";
#    }
#    else {print "XML/SimpleObject.pm            NOT FOUND.\n";}

#    @match = grep(m/\/Math\/Calc\/Units.pm/is, @lm);
#    if (@match) {
#        print "Math/Calc/Units.pm           FOUND.\n";
#    }
#    else {print "Math/Calc/Units.pm            NOT FOUND.\n";}

}

#### BEGIN OPERATIONS 
log_clear();
my $help = undef;
my $prereq = undef;
my $sqlite_file_argv = undef;
my $verbose_mode = undef;

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
    'sqlite-file=s' => \$sqlite_file_argv,
    'output=s' => \$output,
    'verbose' => \$verbose_mode,
    'help' => \$help,
    'prereq' => \$prereq
	    );

# Leaving out "--prereq      = prerequisite checks" from below until that is fixed. 
# Keep getting the following errors
# Found = in conditional, should be == at ./kontroll-reporter-cli.pl line 2902.
# Found = in conditional, should be == at ./kontroll-reporter-cli.pl line 2923.

if(!$ARGV[0]) { $ARGV[0] = '';}
if($help || $ARGV[0] eq "help" || $ARGV[0] eq "?" || $ARGV[0] eq "h") {
    print<<HELP;
#########################################################
Filename: $name
Kontrollbase Reporter CLI version
Copyright 2010-present Matt Reid - $website
Kontrollbase package version: $package_version
#########################################################
!! Requires SQLite database application !!
!! Requires SQLite database file to run !!
SQLite file: kontroll-reporter-cli_sqlite3-alerts_def.db
#########################################################
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
--sqlite-file      = SQLite DB file

--output           = output style for report
                     [XML,HTML,TXT]

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
sqlite-file:      ./kontroll-reporter-cli_sqlite3-alerts_def.db
output:           XML report output 

HELP
}

else {
    if($prereq) {
	check_perl_prerequisites();
	exit;
    }

    print<<GO;
#########################################################
Filename: $name
Kontrollbase Reporter CLI version
Copyright 2010-present Matt Reid - $website
Kontrollbase package version: $package_version
#########################################################
!! Requires SQLite database application !!
!! Requires SQLite database file to run !!
SQLite file: kontroll-reporter-cli_sqlite3-alerts_def.db
#########################################################
Current Variable Settings 
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
sqlite-file:      $sqlite_file
output:           $output
######################################################### 
GO

    debug_report("reporter-cli process start");
    my $t0 = [gettimeofday]; #start timer

    if(!$sqlite_file_argv) { 
        # we require the sqlite_file variable set as an ARGV so that we don't start processing
        # without it existing, cuts down on errors and makes the user aware that the file exists
        error_report("SQLite file not specified as argument. Please set --sqlite-file to continue.");
	exit 1;
    }
    else {
	debug_report("--sqlite-file specified as $sqlite_file_argv");
        $sqlite_file = $sqlite_file_argv;
	alerts_truncate();
    }

    if(-e $sqlite_file) {
        if(-z $sqlite_file) {
            error_report("SQLite file ($sqlite_file) specified is 0 bytes. Exiting.");
            exit 1;
        }
    }
    else {
	error_report("SQLite file ($sqlite_file) specified does not exist. Exiting.");
    }    

    if($verbose_mode) { $verbose = '1'; } 
    
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
    #get_cnf(); #don't need to collect cnf file now - maybe later
    my $t1 = [gettimeofday]; #end timer
    my $elapse = tv_interval $t0, $t1; #calculate time
    writexml("   <item name=\"collection_time_elapse\"><![CDATA[$elapse]]></item>\n");
    end_xml();
    my $xml_state = xml_data_process(); # stats-gather process
    if($xml_state == 0) {
	analyze_data(); #reporting code, where we actually generate results.
    }
    else {
	debug_report("reporter-cli process end: [failure]");
	exit 1;
    }
    export_report(); #export report in required format
    debug_report("removing temporary files: [start]");
    log_clear(); #delete debug, error, xml_log files 
    debug_report("temporary files removed: [success]");
    alerts_truncate();
    debug_report("reporter-cli process end: [success]");
}


