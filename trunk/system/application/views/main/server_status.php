<?php
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @package Kontrollbase
   * @author Matt Reid
   * @copyright Copyright (c) 2009 Matt Reid, Kontrollbase LLC
   * @license http://kontrollsoft.com/kontrollbase/userguide/general-LICENSE.php
   * @link http://kontrollbase.com
   */

$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

// start the right table
print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';

if($data) {
  $Aborted_clients = $data[0]['Aborted_clients'];
  $Aborted_connects = $data[0]['Aborted_connects'];
  $Binlog_cache_disk_use = $data[0]['Binlog_cache_disk_use'];
  $Binlog_cache_use = $data[0]['Binlog_cache_use'];
  $Bytes_received = $data[0]['Bytes_received'];
  $Bytes_sent = $data[0]['Bytes_sent'];
  $Com_admin_commands = $data[0]['Com_admin_commands'];
  $Com_alter_db = $data[0]['Com_alter_db'];
  $Com_alter_table = $data[0]['Com_alter_table'];
  $Com_analyze = $data[0]['Com_analyze'];
  $Com_backup_table = $data[0]['Com_backup_table'];
  $Com_begin = $data[0]['Com_begin'];
  $Com_call_procedure = $data[0]['Com_call_procedure'];
  $Com_change_db = $data[0]['Com_change_db'];
  $Com_change_master = $data[0]['Com_change_master'];
  $Com_check = $data[0]['Com_check'];
  $Com_checksum = $data[0]['Com_checksum'];
  $Com_commit = $data[0]['Com_commit'];
  $Com_create_db = $data[0]['Com_create_db'];
  $Com_create_function = $data[0]['Com_create_function'];
  $Com_create_index = $data[0]['Com_create_index'];
  $Com_create_table = $data[0]['Com_create_table'];
  $Com_create_user = $data[0]['Com_create_user'];
  $Com_dealloc_sql = $data[0]['Com_dealloc_sql'];
  $Com_delete = $data[0]['Com_delete'];
  $Com_delete_multi = $data[0]['Com_delete_multi'];
  $Com_do = $data[0]['Com_do'];
  $Com_drop_db = $data[0]['Com_drop_db'];
  $Com_drop_function = $data[0]['Com_drop_function'];
  $Com_drop_index = $data[0]['Com_drop_index'];
  $Com_drop_table = $data[0]['Com_drop_table'];
  $Com_drop_user = $data[0]['Com_drop_user'];
  $Com_execute_sql = $data[0]['Com_execute_sql'];
  $Com_flush = $data[0]['Com_flush'];
  $Com_grant = $data[0]['Com_grant'];
  $Com_ha_close = $data[0]['Com_ha_close'];
  $Com_ha_open = $data[0]['Com_ha_open'];
  $Com_ha_read = $data[0]['Com_ha_read'];
  $Com_help = $data[0]['Com_help'];
  $Com_insert = $data[0]['Com_insert'];
  $Com_insert_select = $data[0]['Com_insert_select'];
  $Com_kill = $data[0]['Com_kill'];
  $Com_load = $data[0]['Com_load'];
  $Com_load_master_data = $data[0]['Com_load_master_data'];
  $Com_load_master_table = $data[0]['Com_load_master_table'];
  $Com_lock_tables = $data[0]['Com_lock_tables'];
  $Com_optimize = $data[0]['Com_optimize'];
  $Com_preload_keys = $data[0]['Com_preload_keys'];
  $Com_prepare_sql = $data[0]['Com_prepare_sql'];
  $Com_purge = $data[0]['Com_purge'];
  $Com_purge_before_date = $data[0]['Com_purge_before_date'];
  $Com_rename_table = $data[0]['Com_rename_table'];
  $Com_repair = $data[0]['Com_repair'];
  $Com_replace = $data[0]['Com_replace'];
  $Com_replace_select = $data[0]['Com_replace_select'];
  $Com_reset = $data[0]['Com_reset'];
  $Com_restore_table = $data[0]['Com_restore_table'];
  $Com_revoke = $data[0]['Com_revoke'];
  $Com_revoke_all = $data[0]['Com_revoke_all'];
  $Com_rollback = $data[0]['Com_rollback'];
  $Com_savepoint = $data[0]['Com_savepoint'];
  $Com_select = $data[0]['Com_select'];
  $Com_set_option = $data[0]['Com_set_option'];
  $Com_show_binlog_events = $data[0]['Com_show_binlog_events'];
  $Com_show_binlogs = $data[0]['Com_show_binlogs'];
  $Com_show_charsets = $data[0]['Com_show_charsets'];
  $Com_show_collations = $data[0]['Com_show_collations'];
  $Com_show_column_types = $data[0]['Com_show_column_types'];
  $Com_show_create_db = $data[0]['Com_show_create_db'];
  $Com_show_create_table = $data[0]['Com_show_create_table'];
  $Com_show_databases = $data[0]['Com_show_databases'];
  $Com_show_errors = $data[0]['Com_show_errors'];
  $Com_show_fields = $data[0]['Com_show_fields'];
  $Com_show_grants = $data[0]['Com_show_grants'];
  $Com_show_innodb_status = $data[0]['Com_show_innodb_status'];
  $Com_show_keys = $data[0]['Com_show_keys'];
  $Com_show_logs = $data[0]['Com_show_logs'];
  $Com_show_master_status = $data[0]['Com_show_master_status'];
  $Com_show_ndb_status = $data[0]['Com_show_ndb_status'];
  $Com_show_new_master = $data[0]['Com_show_new_master'];
  $Com_show_open_tables = $data[0]['Com_show_open_tables'];
  $Com_show_privileges = $data[0]['Com_show_privileges'];
  $Com_show_processlist = $data[0]['Com_show_processlist'];
  $Com_show_slave_hosts = $data[0]['Com_show_slave_hosts'];
  $Com_show_slave_status = $data[0]['Com_show_slave_status'];
  $Com_show_status = $data[0]['Com_show_status'];
  $Com_show_storage_engines = $data[0]['Com_show_storage_engines'];
  $Com_show_tables = $data[0]['Com_show_tables'];
  $Com_show_triggers = $data[0]['Com_show_triggers'];
  $Com_show_variables = $data[0]['Com_show_variables'];
  $Com_show_warnings = $data[0]['Com_show_warnings'];
  $Com_slave_start = $data[0]['Com_slave_start'];
  $Com_slave_stop = $data[0]['Com_slave_stop'];
  $Com_stmt_close = $data[0]['Com_stmt_close'];
  $Com_stmt_execute = $data[0]['Com_stmt_execute'];
  $Com_stmt_fetch = $data[0]['Com_stmt_fetch'];
  $Com_stmt_prepare = $data[0]['Com_stmt_prepare'];
  $Com_stmt_reset = $data[0]['Com_stmt_reset'];
  $Com_stmt_send_long_data = $data[0]['Com_stmt_send_long_data'];
  $Com_truncate = $data[0]['Com_truncate'];
  $Com_unlock_tables = $data[0]['Com_unlock_tables'];
  $Com_update = $data[0]['Com_update'];
  $Com_update_multi = $data[0]['Com_update_multi'];
  $Com_xa_commit = $data[0]['Com_xa_commit'];
  $Com_xa_end = $data[0]['Com_xa_end'];
  $Com_xa_prepare = $data[0]['Com_xa_prepare'];
  $Com_xa_recover = $data[0]['Com_xa_recover'];
  $Com_xa_rollback = $data[0]['Com_xa_rollback'];
  $Com_xa_start = $data[0]['Com_xa_start'];
  $Compression = $data[0]['Compression'];
  $Connections = $data[0]['Connections'];
  $Created_tmp_disk_tables = $data[0]['Created_tmp_disk_tables'];
  $Created_tmp_files = $data[0]['Created_tmp_files'];
  $Created_tmp_tables = $data[0]['Created_tmp_tables'];
  $Delayed_errors = $data[0]['Delayed_errors'];
  $Delayed_insert_threads = $data[0]['Delayed_insert_threads'];
  $Delayed_writes = $data[0]['Delayed_writes'];
  $Flush_commands = $data[0]['Flush_commands'];
  $Handler_commit = $data[0]['Handler_commit'];
  $Handler_delete = $data[0]['Handler_delete'];
  $Handler_discover = $data[0]['Handler_discover'];
  $Handler_prepare = $data[0]['Handler_prepare'];
  $Handler_read_first = $data[0]['Handler_read_first'];
  $Handler_read_key = $data[0]['Handler_read_key'];
  $Handler_read_next = $data[0]['Handler_read_next'];
  $Handler_read_prev = $data[0]['Handler_read_prev'];
  $Handler_read_rnd = $data[0]['Handler_read_rnd'];
  $Handler_read_rnd_next = $data[0]['Handler_read_rnd_next'];
  $Handler_rollback = $data[0]['Handler_rollback'];
  $Handler_savepoint = $data[0]['Handler_savepoint'];
  $Handler_savepoint_rollback = $data[0]['Handler_savepoint_rollback'];
  $Handler_update = $data[0]['Handler_update'];
  $Handler_write = $data[0]['Handler_write'];
  $Innodb_buffer_pool_pages_data = $data[0]['Innodb_buffer_pool_pages_data'];
  $Innodb_buffer_pool_pages_dirty = $data[0]['Innodb_buffer_pool_pages_dirty'];
  $Innodb_buffer_pool_pages_flushed = $data[0]['Innodb_buffer_pool_pages_flushed'];
  $Innodb_buffer_pool_pages_free = $data[0]['Innodb_buffer_pool_pages_free'];
  $Innodb_buffer_pool_pages_misc = $data[0]['Innodb_buffer_pool_pages_misc'];
  $Innodb_buffer_pool_pages_total = $data[0]['Innodb_buffer_pool_pages_total'];
  $Innodb_buffer_pool_read_ahead_rnd = $data[0]['Innodb_buffer_pool_read_ahead_rnd'];
  $Innodb_buffer_pool_read_ahead_seq = $data[0]['Innodb_buffer_pool_read_ahead_seq'];
  $Innodb_buffer_pool_read_requests = $data[0]['Innodb_buffer_pool_read_requests'];
  $Innodb_buffer_pool_reads = $data[0]['Innodb_buffer_pool_reads'];
  $Innodb_buffer_pool_wait_free = $data[0]['Innodb_buffer_pool_wait_free'];
  $Innodb_buffer_pool_write_requests = $data[0]['Innodb_buffer_pool_write_requests'];
  $Innodb_data_fsyncs = $data[0]['Innodb_data_fsyncs'];
  $Innodb_data_pending_fsyncs = $data[0]['Innodb_data_pending_fsyncs'];
  $Innodb_data_pending_reads = $data[0]['Innodb_data_pending_reads'];
  $Innodb_data_pending_writes = $data[0]['Innodb_data_pending_writes'];
  $Innodb_data_read = $data[0]['Innodb_data_read'];
  $Innodb_data_reads = $data[0]['Innodb_data_reads'];
  $Innodb_data_writes = $data[0]['Innodb_data_writes'];
  $Innodb_data_written = $data[0]['Innodb_data_written'];
  $Innodb_dblwr_pages_written = $data[0]['Innodb_dblwr_pages_written'];
  $Innodb_dblwr_writes = $data[0]['Innodb_dblwr_writes'];
  $Innodb_log_waits = $data[0]['Innodb_log_waits'];
  $Innodb_log_write_requests = $data[0]['Innodb_log_write_requests'];
  $Innodb_log_writes = $data[0]['Innodb_log_writes'];
  $Innodb_os_log_fsyncs = $data[0]['Innodb_os_log_fsyncs'];
  $Innodb_os_log_pending_fsyncs = $data[0]['Innodb_os_log_pending_fsyncs'];
  $Innodb_os_log_pending_writes = $data[0]['Innodb_os_log_pending_writes'];
  $Innodb_os_log_written = $data[0]['Innodb_os_log_written'];
  $Innodb_page_size = $data[0]['Innodb_page_size'];
  $Innodb_pages_created = $data[0]['Innodb_pages_created'];
  $Innodb_pages_read = $data[0]['Innodb_pages_read'];
  $Innodb_pages_written = $data[0]['Innodb_pages_written'];
  $Innodb_row_lock_current_waits = $data[0]['Innodb_row_lock_current_waits'];
  $Innodb_row_lock_time = $data[0]['Innodb_row_lock_time'];
  $Innodb_row_lock_time_avg = $data[0]['Innodb_row_lock_time_avg'];
  $Innodb_row_lock_time_max = $data[0]['Innodb_row_lock_time_max'];
  $Innodb_row_lock_waits = $data[0]['Innodb_row_lock_waits'];
  $Innodb_rows_deleted = $data[0]['Innodb_rows_deleted'];
  $Innodb_rows_inserted = $data[0]['Innodb_rows_inserted'];
  $Innodb_rows_read = $data[0]['Innodb_rows_read'];
  $Innodb_rows_updated = $data[0]['Innodb_rows_updated'];
  $Key_blocks_not_flushed = $data[0]['Key_blocks_not_flushed'];
  $Key_blocks_unused = $data[0]['Key_blocks_unused'];
  $Key_blocks_used = $data[0]['Key_blocks_used'];
  $Key_read_requests = $data[0]['Key_read_requests'];
  $Key_reads = $data[0]['Key_reads'];
  $Key_write_requests = $data[0]['Key_write_requests'];
  $Key_writes = $data[0]['Key_writes'];
  $Last_query_cost = $data[0]['Last_query_cost'];
  $Max_used_connections = $data[0]['Max_used_connections'];
  $Not_flushed_delayed_rows = $data[0]['Not_flushed_delayed_rows'];
  $Open_files = $data[0]['Open_files'];
  $Open_streams = $data[0]['Open_streams'];
  $Open_tables = $data[0]['Open_tables'];
  $Opened_tables = $data[0]['Opened_tables'];
  $Prepared_stmt_count = $data[0]['Prepared_stmt_count'];
  $Qcache_free_blocks = $data[0]['Qcache_free_blocks'];
  $Qcache_free_memory = $data[0]['Qcache_free_memory'];
  $Qcache_hits = $data[0]['Qcache_hits'];
  $Qcache_inserts = $data[0]['Qcache_inserts'];
  $Qcache_lowmem_prunes = $data[0]['Qcache_lowmem_prunes'];
  $Qcache_not_cached = $data[0]['Qcache_not_cached'];
  $Qcache_queries_in_cache = $data[0]['Qcache_queries_in_cache'];
  $Qcache_total_blocks = $data[0]['Qcache_total_blocks'];
  $Questions = $data[0]['Questions'];
  $Rpl_status = $data[0]['Rpl_status'];
  $Select_full_join = $data[0]['Select_full_join'];
  $Select_full_range_join = $data[0]['Select_full_range_join'];
  $Select_range = $data[0]['Select_range'];
  $Select_range_check = $data[0]['Select_range_check'];
  $Select_scan = $data[0]['Select_scan'];
  $Slave_open_temp_tables = $data[0]['Slave_open_temp_tables'];
  $Slave_retried_transactions = $data[0]['Slave_retried_transactions'];
  $Slave_running = $data[0]['Slave_running'];
  $Slow_launch_threads = $data[0]['Slow_launch_threads'];
  $Slow_queries = $data[0]['Slow_queries'];
  $Sort_merge_passes = $data[0]['Sort_merge_passes'];
  $Sort_range = $data[0]['Sort_range'];
  $Sort_rows = $data[0]['Sort_rows'];
  $Sort_scan = $data[0]['Sort_scan'];
  $Table_locks_immediate = $data[0]['Table_locks_immediate'];
  $Table_locks_waited = $data[0]['Table_locks_waited'];
  $Tc_log_max_pages_used = $data[0]['Tc_log_max_pages_used'];
  $Tc_log_page_size = $data[0]['Tc_log_page_size'];
  $Tc_log_page_waits = $data[0]['Tc_log_page_waits'];
  $Threads_cached = $data[0]['Threads_cached'];
  $Threads_connected = $data[0]['Threads_connected'];
  $Threads_created = $data[0]['Threads_created'];
  $Threads_running = $data[0]['Threads_running'];
  $Uptime = $data[0]['Uptime'];
  $Creation_time = $data[0]['Creation_time'];

  print "<div id='content'>
<h2>Collected on: $Creation_time</h2>
<table class='tableborder'>
<tr><td>Aborted_clients</td><td>$Aborted_clients</td></tr>
<tr><td>Aborted_connects</td><td>$Aborted_connects</td></tr>
<tr><td>Binlog_cache_disk_use</td><td>$Binlog_cache_disk_use</td></tr>
<tr><td>Binlog_cache_use</td><td>$Binlog_cache_use</td></tr>
<tr><td>Bytes_received</td><td>$Bytes_received</td></tr>
<tr><td>Bytes_sent</td><td>$Bytes_sent</td></tr>
<tr><td>Com_admin_commands</td><td>$Com_admin_commands</td></tr>
<tr><td>Com_alter_db</td><td>$Com_alter_db</td></tr>
<tr><td>Com_alter_table</td><td>$Com_alter_table</td></tr>
<tr><td>Com_analyze</td><td>$Com_analyze</td></tr>
<tr><td>Com_backup_table</td><td>$Com_backup_table</td></tr>
<tr><td>Com_begin</td><td>$Com_begin</td></tr>
<tr><td>Com_call_procedure</td><td>$Com_call_procedure</td></tr>
<tr><td>Com_change_db</td><td>$Com_change_db</td></tr>
<tr><td>Com_change_master</td><td>$Com_change_master</td></tr>
<tr><td>Com_check</td><td>$Com_check</td></tr>
<tr><td>Com_checksum</td><td>$Com_checksum</td></tr>
<tr><td>Com_commit</td><td>$Com_commit</td></tr>
<tr><td>Com_create_db</td><td>$Com_create_db</td></tr>
<tr><td>Com_create_function</td><td>$Com_create_function</td></tr>
<tr><td>Com_create_index</td><td>$Com_create_index</td></tr>
<tr><td>Com_create_table</td><td>$Com_create_table</td></tr>
<tr><td>Com_create_user</td><td>$Com_create_user</td></tr>
<tr><td>Com_dealloc_sql</td><td>$Com_dealloc_sql</td></tr>
<tr><td>Com_delete</td><td>$Com_delete</td></tr>
<tr><td>Com_delete_multi</td><td>$Com_delete_multi</td></tr>
<tr><td>Com_do</td><td>$Com_do</td></tr>
<tr><td>Com_drop_db</td><td>$Com_drop_db</td></tr>
<tr><td>Com_drop_function</td><td>$Com_drop_function</td></tr>
<tr><td>Com_drop_index</td><td>$Com_drop_index</td></tr>
<tr><td>Com_drop_table</td><td>$Com_drop_table</td></tr>
<tr><td>Com_drop_user</td><td>$Com_drop_user</td></tr>
<tr><td>Com_execute_sql</td><td>$Com_execute_sql</td></tr>
<tr><td>Com_flush</td><td>$Com_flush</td></tr>
<tr><td>Com_grant</td><td>$Com_grant</td></tr>
<tr><td>Com_ha_close</td><td>$Com_ha_close</td></tr>
<tr><td>Com_ha_open</td><td>$Com_ha_open</td></tr>
<tr><td>Com_ha_read</td><td>$Com_ha_read</td></tr>
<tr><td>Com_help</td><td>$Com_help</td></tr>
<tr><td>Com_insert</td><td>$Com_insert</td></tr>
<tr><td>Com_insert_select</td><td>$Com_insert_select</td></tr>
<tr><td>Com_kill</td><td>$Com_kill</td></tr>
<tr><td>Com_load</td><td>$Com_load</td></tr>
<tr><td>Com_load_master_data</td><td>$Com_load_master_data</td></tr>
<tr><td>Com_load_master_table</td><td>$Com_load_master_table</td></tr>
<tr><td>Com_lock_tables</td><td>$Com_lock_tables</td></tr>
<tr><td>Com_optimize</td><td>$Com_optimize</td></tr>
<tr><td>Com_preload_keys</td><td>$Com_preload_keys</td></tr>
<tr><td>Com_prepare_sql</td><td>$Com_prepare_sql</td></tr>
<tr><td>Com_purge</td><td>$Com_purge</td></tr>
<tr><td>Com_purge_before_date</td><td>$Com_purge_before_date</td></tr>
<tr><td>Com_rename_table</td><td>$Com_rename_table</td></tr>
<tr><td>Com_repair</td><td>$Com_repair</td></tr>
<tr><td>Com_replace</td><td>$Com_replace</td></tr>
<tr><td>Com_replace_select</td><td>$Com_replace_select</td></tr>
<tr><td>Com_reset</td><td>$Com_reset</td></tr>
<tr><td>Com_restore_table</td><td>$Com_restore_table</td></tr>
<tr><td>Com_revoke</td><td>$Com_revoke</td></tr>
<tr><td>Com_revoke_all</td><td>$Com_revoke_all</td></tr>
<tr><td>Com_rollback</td><td>$Com_rollback</td></tr>
<tr><td>Com_savepoint</td><td>$Com_savepoint</td></tr>
<tr><td>Com_select</td><td>$Com_select</td></tr>
<tr><td>Com_set_option</td><td>$Com_set_option</td></tr>
<tr><td>Com_show_binlog_events</td><td>$Com_show_binlog_events</td></tr>
<tr><td>Com_show_binlogs</td><td>$Com_show_binlogs</td></tr>
<tr><td>Com_show_charsets</td><td>$Com_show_charsets</td></tr>
<tr><td>Com_show_collations</td><td>$Com_show_collations</td></tr>
<tr><td>Com_show_column_types</td><td>$Com_show_column_types</td></tr>
<tr><td>Com_show_create_db</td><td>$Com_show_create_db</td></tr>
<tr><td>Com_show_create_table</td><td>$Com_show_create_table</td></tr>
<tr><td>Com_show_databases</td><td>$Com_show_databases</td></tr>
<tr><td>Com_show_errors</td><td>$Com_show_errors</td></tr>
<tr><td>Com_show_fields</td><td>$Com_show_fields</td></tr>
<tr><td>Com_show_grants</td><td>$Com_show_grants</td></tr>
<tr><td>Com_show_innodb_status</td><td>$Com_show_innodb_status</td></tr>
<tr><td>Com_show_keys</td><td>$Com_show_keys</td></tr>
<tr><td>Com_show_logs</td><td>$Com_show_logs</td></tr>
<tr><td>Com_show_master_status</td><td>$Com_show_master_status</td></tr>
<tr><td>Com_show_ndb_status</td><td>$Com_show_ndb_status</td></tr>
<tr><td>Com_show_new_master</td><td>$Com_show_new_master</td></tr>
<tr><td>Com_show_open_tables</td><td>$Com_show_open_tables</td></tr>
<tr><td>Com_show_privileges</td><td>$Com_show_privileges</td></tr>
<tr><td>Com_show_processlist</td><td>$Com_show_processlist</td></tr>
<tr><td>Com_show_slave_hosts</td><td>$Com_show_slave_hosts</td></tr>
<tr><td>Com_show_slave_status</td><td>$Com_show_slave_status</td></tr>
<tr><td>Com_show_status</td><td>$Com_show_status</td></tr>
<tr><td>Com_show_storage_engines</td><td>$Com_show_storage_engines</td></tr>
<tr><td>Com_show_tables</td><td>$Com_show_tables</td></tr>
<tr><td>Com_show_triggers</td><td>$Com_show_triggers</td></tr>
<tr><td>Com_show_variables</td><td>$Com_show_variables</td></tr>
<tr><td>Com_show_warnings</td><td>$Com_show_warnings</td></tr>
<tr><td>Com_slave_start</td><td>$Com_slave_start</td></tr>
<tr><td>Com_slave_stop</td><td>$Com_slave_stop</td></tr>
<tr><td>Com_stmt_close</td><td>$Com_stmt_close</td></tr>
<tr><td>Com_stmt_execute</td><td>$Com_stmt_execute</td></tr>
<tr><td>Com_stmt_fetch</td><td>$Com_stmt_fetch</td></tr>
<tr><td>Com_stmt_prepare</td><td>$Com_stmt_prepare</td></tr>
<tr><td>Com_stmt_reset</td><td>$Com_stmt_reset</td></tr>
<tr><td>Com_stmt_send_long_data</td><td>$Com_stmt_send_long_data</td></tr>
<tr><td>Com_truncate</td><td>$Com_truncate</td></tr>
<tr><td>Com_unlock_tables</td><td>$Com_unlock_tables</td></tr>
<tr><td>Com_update</td><td>$Com_update</td></tr>
<tr><td>Com_update_multi</td><td>$Com_update_multi</td></tr>
<tr><td>Com_xa_commit</td><td>$Com_xa_commit</td></tr>
<tr><td>Com_xa_end</td><td>$Com_xa_end</td></tr>
<tr><td>Com_xa_prepare</td><td>$Com_xa_prepare</td></tr>
<tr><td>Com_xa_recover</td><td>$Com_xa_recover</td></tr>
<tr><td>Com_xa_rollback</td><td>$Com_xa_rollback</td></tr>
<tr><td>Com_xa_start</td><td>$Com_xa_start</td></tr>
<tr><td>Compression</td><td>$Compression</td></tr>
<tr><td>Connections</td><td>$Connections</td></tr>
<tr><td>Created_tmp_disk_tables</td><td>$Created_tmp_disk_tables</td></tr>
<tr><td>Created_tmp_files</td><td>$Created_tmp_files</td></tr>
<tr><td>Created_tmp_tables</td><td>$Created_tmp_tables</td></tr>
<tr><td>Delayed_errors</td><td>$Delayed_errors</td></tr>
<tr><td>Delayed_insert_threads</td><td>$Delayed_insert_threads</td></tr>
<tr><td>Delayed_writes</td><td>$Delayed_writes</td></tr>
<tr><td>Flush_commands</td><td>$Flush_commands</td></tr>
<tr><td>Handler_commit</td><td>$Handler_commit</td></tr>
<tr><td>Handler_delete</td><td>$Handler_delete</td></tr>
<tr><td>Handler_discover</td><td>$Handler_discover</td></tr>
<tr><td>Handler_prepare</td><td>$Handler_prepare</td></tr>
<tr><td>Handler_read_first</td><td>$Handler_read_first</td></tr>
<tr><td>Handler_read_key</td><td>$Handler_read_key</td></tr>
<tr><td>Handler_read_next</td><td>$Handler_read_next</td></tr>
<tr><td>Handler_read_prev</td><td>$Handler_read_prev</td></tr>
<tr><td>Handler_read_rnd</td><td>$Handler_read_rnd</td></tr>
<tr><td>Handler_read_rnd_next</td><td>$Handler_read_rnd_next</td></tr>
<tr><td>Handler_rollback</td><td>$Handler_rollback</td></tr>
<tr><td>Handler_savepoint</td><td>$Handler_savepoint</td></tr>
<tr><td>Handler_savepoint_rollback</td><td>$Handler_savepoint_rollback</td></tr>
<tr><td>Handler_update</td><td>$Handler_update</td></tr>
<tr><td>Handler_write</td><td>$Handler_write</td></tr>
<tr><td>Innodb_buffer_pool_pages_data</td><td>$Innodb_buffer_pool_pages_data</td></tr>
<tr><td>Innodb_buffer_pool_pages_dirty</td><td>$Innodb_buffer_pool_pages_dirty</td></tr>
<tr><td>Innodb_buffer_pool_pages_flushed</td><td>$Innodb_buffer_pool_pages_flushed</td></tr>
<tr><td>Innodb_buffer_pool_pages_free</td><td>$Innodb_buffer_pool_pages_free</td></tr>
<tr><td>Innodb_buffer_pool_pages_misc</td><td>$Innodb_buffer_pool_pages_misc</td></tr>
<tr><td>Innodb_buffer_pool_pages_total</td><td>$Innodb_buffer_pool_pages_total</td></tr>
<tr><td>Innodb_buffer_pool_read_ahead_rnd</td><td>$Innodb_buffer_pool_read_ahead_rnd</td></tr>
<tr><td>Innodb_buffer_pool_read_ahead_seq</td><td>$Innodb_buffer_pool_read_ahead_seq</td></tr>
<tr><td>Innodb_buffer_pool_read_requests</td><td>$Innodb_buffer_pool_read_requests</td></tr>
<tr><td>Innodb_buffer_pool_reads</td><td>$Innodb_buffer_pool_reads</td></tr>
<tr><td>Innodb_buffer_pool_wait_free</td><td>$Innodb_buffer_pool_wait_free</td></tr>
<tr><td>Innodb_buffer_pool_write_requests</td><td>$Innodb_buffer_pool_write_requests</td></tr>
<tr><td>Innodb_data_fsyncs</td><td>$Innodb_data_fsyncs</td></tr>
<tr><td>Innodb_data_pending_fsyncs</td><td>$Innodb_data_pending_fsyncs</td></tr>
<tr><td>Innodb_data_pending_reads</td><td>$Innodb_data_pending_reads</td></tr>
<tr><td>Innodb_data_pending_writes</td><td>$Innodb_data_pending_writes</td></tr>
<tr><td>Innodb_data_read</td><td>$Innodb_data_read</td></tr>
<tr><td>Innodb_data_reads</td><td>$Innodb_data_reads</td></tr>
<tr><td>Innodb_data_writes</td><td>$Innodb_data_writes</td></tr>
<tr><td>Innodb_data_written</td><td>$Innodb_data_written</td></tr>
<tr><td>Innodb_dblwr_pages_written</td><td>$Innodb_dblwr_pages_written</td></tr>
<tr><td>Innodb_dblwr_writes</td><td>$Innodb_dblwr_writes</td></tr>
<tr><td>Innodb_log_waits</td><td>$Innodb_log_waits</td></tr>
<tr><td>Innodb_log_write_requests</td><td>$Innodb_log_write_requests</td></tr>
<tr><td>Innodb_log_writes</td><td>$Innodb_log_writes</td></tr>
<tr><td>Innodb_os_log_fsyncs</td><td>$Innodb_os_log_fsyncs</td></tr>
<tr><td>Innodb_os_log_pending_fsyncs</td><td>$Innodb_os_log_pending_fsyncs</td></tr>
<tr><td>Innodb_os_log_pending_writes</td><td>$Innodb_os_log_pending_writes</td></tr>
<tr><td>Innodb_os_log_written</td><td>$Innodb_os_log_written</td></tr>
<tr><td>Innodb_page_size</td><td>$Innodb_page_size</td></tr>
<tr><td>Innodb_pages_created</td><td>$Innodb_pages_created</td></tr>
<tr><td>Innodb_pages_read</td><td>$Innodb_pages_read</td></tr>
<tr><td>Innodb_pages_written</td><td>$Innodb_pages_written</td></tr>
<tr><td>Innodb_row_lock_current_waits</td><td>$Innodb_row_lock_current_waits</td></tr>
<tr><td>Innodb_row_lock_time</td><td>$Innodb_row_lock_time</td></tr>
<tr><td>Innodb_row_lock_time_avg</td><td>$Innodb_row_lock_time_avg</td></tr>
<tr><td>Innodb_row_lock_time_max</td><td>$Innodb_row_lock_time_max</td></tr>
<tr><td>Innodb_row_lock_waits</td><td>$Innodb_row_lock_waits</td></tr>
<tr><td>Innodb_rows_deleted</td><td>$Innodb_rows_deleted</td></tr>
<tr><td>Innodb_rows_inserted</td><td>$Innodb_rows_inserted</td></tr>
<tr><td>Innodb_rows_read</td><td>$Innodb_rows_read</td></tr>
<tr><td>Innodb_rows_updated</td><td>$Innodb_rows_updated</td></tr>
<tr><td>Key_blocks_not_flushed</td><td>$Key_blocks_not_flushed</td></tr>
<tr><td>Key_blocks_unused</td><td>$Key_blocks_unused</td></tr>
<tr><td>Key_blocks_used</td><td>$Key_blocks_used</td></tr>
<tr><td>Key_read_requests</td><td>$Key_read_requests</td></tr>
<tr><td>Key_reads</td><td>$Key_reads</td></tr>
<tr><td>Key_write_requests</td><td>$Key_write_requests</td></tr>
<tr><td>Key_writes</td><td>$Key_writes</td></tr>
<tr><td>Last_query_cost</td><td>$Last_query_cost</td></tr>
<tr><td>Max_used_connections</td><td>$Max_used_connections</td></tr>
<tr><td>Not_flushed_delayed_rows</td><td>$Not_flushed_delayed_rows</td></tr>
<tr><td>Open_files</td><td>$Open_files</td></tr>
<tr><td>Open_streams</td><td>$Open_streams</td></tr>
<tr><td>Open_tables</td><td>$Open_tables</td></tr>
<tr><td>Opened_tables</td><td>$Opened_tables</td></tr>
<tr><td>Prepared_stmt_count</td><td>$Prepared_stmt_count</td></tr>
<tr><td>Qcache_free_blocks</td><td>$Qcache_free_blocks</td></tr>
<tr><td>Qcache_free_memory</td><td>$Qcache_free_memory</td></tr>
<tr><td>Qcache_hits</td><td>$Qcache_hits</td></tr>
<tr><td>Qcache_inserts</td><td>$Qcache_inserts</td></tr>
<tr><td>Qcache_lowmem_prunes</td><td>$Qcache_lowmem_prunes</td></tr>
<tr><td>Qcache_not_cached</td><td>$Qcache_not_cached</td></tr>
<tr><td>Qcache_queries_in_cache</td><td>$Qcache_queries_in_cache</td></tr>
<tr><td>Qcache_total_blocks</td><td>$Qcache_total_blocks</td></tr>
<tr><td>Questions</td><td>$Questions</td></tr>
<tr><td>Rpl_status</td><td>$Rpl_status</td></tr>
<tr><td>Select_full_join</td><td>$Select_full_join</td></tr>
<tr><td>Select_full_range_join</td><td>$Select_full_range_join</td></tr>
<tr><td>Select_range</td><td>$Select_range</td></tr>
<tr><td>Select_range_check</td><td>$Select_range_check</td></tr>
<tr><td>Select_scan</td><td>$Select_scan</td></tr>
<tr><td>Slave_open_temp_tables</td><td>$Slave_open_temp_tables</td></tr>
<tr><td>Slave_retried_transactions</td><td>$Slave_retried_transactions</td></tr>
<tr><td>Slave_running</td><td>$Slave_running</td></tr>
<tr><td>Slow_launch_threads</td><td>$Slow_launch_threads</td></tr>
<tr><td>Slow_queries</td><td>$Slow_queries</td></tr>
<tr><td>Sort_merge_passes</td><td>$Sort_merge_passes</td></tr>
<tr><td>Sort_range</td><td>$Sort_range</td></tr>
<tr><td>Sort_rows</td><td>$Sort_rows</td></tr>
<tr><td>Sort_scan</td><td>$Sort_scan</td></tr>
<tr><td>Table_locks_immediate</td><td>$Table_locks_immediate</td></tr>
<tr><td>Table_locks_waited</td><td>$Table_locks_waited</td></tr>
<tr><td>Tc_log_max_pages_used</td><td>$Tc_log_max_pages_used</td></tr>
<tr><td>Tc_log_page_size</td><td>$Tc_log_page_size</td></tr>
<tr><td>Tc_log_page_waits</td><td>$Tc_log_page_waits</td></tr>
<tr><td>Threads_cached</td><td>$Threads_cached</td></tr>
<tr><td>Threads_connected</td><td>$Threads_connected</td></tr>
<tr><td>Threads_created</td><td>$Threads_created</td></tr>
<tr><td>Threads_running</td><td>$Threads_running</td></tr>
<tr><td>Uptime</td><td>$Uptime</td></tr>
</table></div>";
 }
 else {
   print "<div id='content'>
<h1>CNF Files Contents</h1>
<h2>0000-00-00</h2>
<table class='tableborder'>
<tr><td>No Contents</td></td>
</table></div>";
 }

?>
<body>
</body>
</html>