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
use Math::Calc::Units qw(convert readable);

my $server_host = hostname; #using Sys::Hostname
my $name = "kontroll-reporter-cli.pl";
my $website = "http://kontrollsoft.com";
my $package_version = "2.1";

my $datetime =  strftime "%Y-%m-%d %H:%M:%S", localtime;
my $datetimefile =  strftime "%Y-%m-%d_%H%M%S", localtime;
my $tmpfiletime = strftime "%Y-%m-%d%H%M%S", localtime;
my $commit_report = "tmp/kontrollbase-reporter-$tmpfiletime.log";
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

# this is really dirty
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
    print $note;
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;
    close FILE;
}

sub writerx {
    my $note = $_[0];
    $note = "<detail>".$note."</detail>\n";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">>$commit_report" or die $!;
    print FILE $note;
    close FILE;
}

sub flush_writer {
    debug_report("truncating $commit_report");
    my $note = "";
    sysopen(FILE, $commit_report, O_RDWR|O_EXCL|O_CREAT, 0644);
    open FILE, ">$commit_report" or die $!;
    print FILE $note;
    close FILE;
    return;
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

sub get_info {
    my $id = $_[0];
    my $dbfile = './kontroll-reporter-cli_sqlite3-alerts_def.db';
my $dbh = DBI->connect( 
    "dbi:SQLite:dbname=$dbfile", # DSN: dbi, driver, database file
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
    #If we're generating an XML report for some reason then we would work with the sub call below but..
    #    xml_head($hostname,$Creation_time);

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

	$ALERTSNMP = alert_snmp($server_snmp_error_code);
	$ALERTMYSQL = alert_mysql($server_mysql_error_code);
            
	# Insert report data into database
	xml_end();
	#insert_report($server_list_id,$server_statistics_id,$Creation_time);
    }
    else {
	alert_insert(99,$ALERT00,$server_list_id);
	$ALERTSNMP = alert_snmp($server_snmp_error_code);
	$ALERTMYSQL = alert_mysql($server_mysql_error_code);
	xml_end();
	insert_report($server_list_id,$server_statistics_id,$Creation_time);
    }    
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


