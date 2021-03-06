<?php
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @package Kontrollbase
   * ID: $Id$
   * @copyright Copyright (c) 2009 Matt Reid, Kontrollbase LLC
   * @license http://kontrollsoft.com/kontrollbase/userguide/general-LICENSE.php
   * @link http://kontrollbase.com
   */

$g['root'] = $root;
$this->load->view('header_js',$g);
$nroot = substr_replace($root,"",-1);

if($statistics) {
  $Aborted_clients = $statistics[0]['Aborted_clients'];
  $Aborted_connects = $statistics[0]['Aborted_connects'];
  $Binlog_cache_disk_use = $statistics[0]['Binlog_cache_disk_use'];
  $Binlog_cache_use = $statistics[0]['Binlog_cache_use'];
  $Bytes_received = $statistics[0]['Bytes_received'];
  $Bytes_sent = $statistics[0]['Bytes_sent'];
  $Com_admin_commands = $statistics[0]['Com_admin_commands'];
  $Com_alter_db = $statistics[0]['Com_alter_db'];
  $Com_alter_table = $statistics[0]['Com_alter_table'];
  $Com_analyze = $statistics[0]['Com_analyze'];
  $Com_backup_table = $statistics[0]['Com_backup_table'];
  $Com_begin = $statistics[0]['Com_begin'];
  $Com_call_procedure = $statistics[0]['Com_call_procedure'];
  $Com_change_db = $statistics[0]['Com_change_db'];
  $Com_change_master = $statistics[0]['Com_change_master'];
  $Com_check = $statistics[0]['Com_check'];
  $Com_checksum = $statistics[0]['Com_checksum'];
  $Com_commit = $statistics[0]['Com_commit'];
  $Com_create_db = $statistics[0]['Com_create_db'];
  $Com_create_function = $statistics[0]['Com_create_function'];
  $Com_create_index = $statistics[0]['Com_create_index'];
  $Com_create_table = $statistics[0]['Com_create_table'];
  $Com_create_user = $statistics[0]['Com_create_user'];
  $Com_dealloc_sql = $statistics[0]['Com_dealloc_sql'];
  $Com_delete = $statistics[0]['Com_delete'];
  $Com_delete_multi = $statistics[0]['Com_delete_multi'];
  $Com_do = $statistics[0]['Com_do'];
  $Com_drop_db = $statistics[0]['Com_drop_db'];
  $Com_drop_function = $statistics[0]['Com_drop_function'];
  $Com_drop_index = $statistics[0]['Com_drop_index'];
  $Com_drop_table = $statistics[0]['Com_drop_table'];
  $Com_drop_user = $statistics[0]['Com_drop_user'];
  $Com_execute_sql = $statistics[0]['Com_execute_sql'];
  $Com_flush = $statistics[0]['Com_flush'];
  $Com_grant = $statistics[0]['Com_grant'];
  $Com_ha_close = $statistics[0]['Com_ha_close'];
  $Com_ha_open = $statistics[0]['Com_ha_open'];
  $Com_ha_read = $statistics[0]['Com_ha_read'];
  $Com_help = $statistics[0]['Com_help'];
  $Com_insert = $statistics[0]['Com_insert'];
  $Com_insert_select = $statistics[0]['Com_insert_select'];
  $Com_kill = $statistics[0]['Com_kill'];
  $Com_load = $statistics[0]['Com_load'];
  $Com_load_master_data = $statistics[0]['Com_load_master_data'];
  $Com_load_master_table = $statistics[0]['Com_load_master_table'];
  $Com_lock_tables = $statistics[0]['Com_lock_tables'];
  $Com_optimize = $statistics[0]['Com_optimize'];
  $Com_preload_keys = $statistics[0]['Com_preload_keys'];
  $Com_prepare_sql = $statistics[0]['Com_prepare_sql'];
  $Com_purge = $statistics[0]['Com_purge'];
  $Com_purge_before_date = $statistics[0]['Com_purge_before_date'];
  $Com_rename_table = $statistics[0]['Com_rename_table'];
  $Com_repair = $statistics[0]['Com_repair'];
  $Com_replace = $statistics[0]['Com_replace'];
  $Com_replace_select = $statistics[0]['Com_replace_select'];
  $Com_reset = $statistics[0]['Com_reset'];
  $Com_restore_table = $statistics[0]['Com_restore_table'];
  $Com_revoke = $statistics[0]['Com_revoke'];
  $Com_revoke_all = $statistics[0]['Com_revoke_all'];
  $Com_rollback = $statistics[0]['Com_rollback'];
  $Com_savepoint = $statistics[0]['Com_savepoint'];
  $Com_select = $statistics[0]['Com_select'];
  $Com_set_option = $statistics[0]['Com_set_option'];
  $Com_show_binlog_events = $statistics[0]['Com_show_binlog_events'];
  $Com_show_binlogs = $statistics[0]['Com_show_binlogs'];
  $Com_show_charsets = $statistics[0]['Com_show_charsets'];
  $Com_show_collations = $statistics[0]['Com_show_collations'];
  $Com_show_column_types = $statistics[0]['Com_show_column_types'];
  $Com_show_create_db = $statistics[0]['Com_show_create_db'];
  $Com_show_create_table = $statistics[0]['Com_show_create_table'];
  $Com_show_databases = $statistics[0]['Com_show_databases'];
  $Com_show_errors = $statistics[0]['Com_show_errors'];
  $Com_show_fields = $statistics[0]['Com_show_fields'];
  $Com_show_grants = $statistics[0]['Com_show_grants'];
  $Com_show_innodb_status = $statistics[0]['Com_show_innodb_status'];
  $Com_show_keys = $statistics[0]['Com_show_keys'];
  $Com_show_logs = $statistics[0]['Com_show_logs'];
  $Com_show_master_status = $statistics[0]['Com_show_master_status'];
  $Com_show_ndb_status = $statistics[0]['Com_show_ndb_status'];
  $Com_show_new_master = $statistics[0]['Com_show_new_master'];
  $Com_show_open_tables = $statistics[0]['Com_show_open_tables'];
  $Com_show_privileges = $statistics[0]['Com_show_privileges'];
  $Com_show_processlist = $statistics[0]['Com_show_processlist'];
  $Com_show_slave_hosts = $statistics[0]['Com_show_slave_hosts'];
  $Com_show_slave_status = $statistics[0]['Com_show_slave_status'];
  $Com_show_status = $statistics[0]['Com_show_status'];
  $Com_show_storage_engines = $statistics[0]['Com_show_storage_engines'];
  $Com_show_tables = $statistics[0]['Com_show_tables'];
  $Com_show_triggers = $statistics[0]['Com_show_triggers'];
  $Com_show_variables = $statistics[0]['Com_show_variables'];
  $Com_show_warnings = $statistics[0]['Com_show_warnings'];
  $Com_slave_start = $statistics[0]['Com_slave_start'];
  $Com_slave_stop = $statistics[0]['Com_slave_stop'];
  $Com_stmt_close = $statistics[0]['Com_stmt_close'];
  $Com_stmt_execute = $statistics[0]['Com_stmt_execute'];
  $Com_stmt_fetch = $statistics[0]['Com_stmt_fetch'];
  $Com_stmt_prepare = $statistics[0]['Com_stmt_prepare'];
  $Com_stmt_reset = $statistics[0]['Com_stmt_reset'];
  $Com_stmt_send_long_data = $statistics[0]['Com_stmt_send_long_data'];
  $Com_truncate = $statistics[0]['Com_truncate'];
  $Com_unlock_tables = $statistics[0]['Com_unlock_tables'];
  $Com_update = $statistics[0]['Com_update'];
  $Com_update_multi = $statistics[0]['Com_update_multi'];
  $Com_xa_commit = $statistics[0]['Com_xa_commit'];
  $Com_xa_end = $statistics[0]['Com_xa_end'];
  $Com_xa_prepare = $statistics[0]['Com_xa_prepare'];
  $Com_xa_recover = $statistics[0]['Com_xa_recover'];
  $Com_xa_rollback = $statistics[0]['Com_xa_rollback'];
  $Com_xa_start = $statistics[0]['Com_xa_start'];
  $Compression = $statistics[0]['Compression'];
  $Connections = $statistics[0]['Connections'];
  $Created_tmp_disk_tables = $statistics[0]['Created_tmp_disk_tables'];
  $Created_tmp_files = $statistics[0]['Created_tmp_files'];
  $Created_tmp_tables = $statistics[0]['Created_tmp_tables'];
  $Delayed_errors = $statistics[0]['Delayed_errors'];
  $Delayed_insert_threads = $statistics[0]['Delayed_insert_threads'];
  $Delayed_writes = $statistics[0]['Delayed_writes'];
  $Flush_commands = $statistics[0]['Flush_commands'];
  $Handler_commit = $statistics[0]['Handler_commit'];
  $Handler_delete = $statistics[0]['Handler_delete'];
  $Handler_discover = $statistics[0]['Handler_discover'];
  $Handler_prepare = $statistics[0]['Handler_prepare'];
  $Handler_read_first = $statistics[0]['Handler_read_first'];
  $Handler_read_key = $statistics[0]['Handler_read_key'];
  $Handler_read_next = $statistics[0]['Handler_read_next'];
  $Handler_read_prev = $statistics[0]['Handler_read_prev'];
  $Handler_read_rnd = $statistics[0]['Handler_read_rnd'];
  $Handler_read_rnd_next = $statistics[0]['Handler_read_rnd_next'];
  $Handler_rollback = $statistics[0]['Handler_rollback'];
  $Handler_savepoint = $statistics[0]['Handler_savepoint'];
  $Handler_savepoint_rollback = $statistics[0]['Handler_savepoint_rollback'];
  $Handler_update = $statistics[0]['Handler_update'];
  $Handler_write = $statistics[0]['Handler_write'];
  $Innodb_buffer_pool_pages_data = $statistics[0]['Innodb_buffer_pool_pages_data'];
  $Innodb_buffer_pool_pages_dirty = $statistics[0]['Innodb_buffer_pool_pages_dirty'];
  $Innodb_buffer_pool_pages_flushed = $statistics[0]['Innodb_buffer_pool_pages_flushed'];
  $Innodb_buffer_pool_pages_free = $statistics[0]['Innodb_buffer_pool_pages_free'];
  $Innodb_buffer_pool_pages_misc = $statistics[0]['Innodb_buffer_pool_pages_misc'];
  $Innodb_buffer_pool_pages_total = $statistics[0]['Innodb_buffer_pool_pages_total'];
  $Innodb_buffer_pool_read_ahead_rnd = $statistics[0]['Innodb_buffer_pool_read_ahead_rnd'];
  $Innodb_buffer_pool_read_ahead_seq = $statistics[0]['Innodb_buffer_pool_read_ahead_seq'];
  $Innodb_buffer_pool_read_requests = $statistics[0]['Innodb_buffer_pool_read_requests'];
  $Innodb_buffer_pool_reads = $statistics[0]['Innodb_buffer_pool_reads'];
  $Innodb_buffer_pool_wait_free = $statistics[0]['Innodb_buffer_pool_wait_free'];
  $Innodb_buffer_pool_write_requests = $statistics[0]['Innodb_buffer_pool_write_requests'];
  $Innodb_data_fsyncs = $statistics[0]['Innodb_data_fsyncs'];
  $Innodb_data_pending_fsyncs = $statistics[0]['Innodb_data_pending_fsyncs'];
  $Innodb_data_pending_reads = $statistics[0]['Innodb_data_pending_reads'];
  $Innodb_data_pending_writes = $statistics[0]['Innodb_data_pending_writes'];
  $Innodb_data_read = $statistics[0]['Innodb_data_read'];
  $Innodb_data_reads = $statistics[0]['Innodb_data_reads'];
  $Innodb_data_writes = $statistics[0]['Innodb_data_writes'];
  $Innodb_data_written = $statistics[0]['Innodb_data_written'];
  $Innodb_dblwr_pages_written = $statistics[0]['Innodb_dblwr_pages_written'];
  $Innodb_dblwr_writes = $statistics[0]['Innodb_dblwr_writes'];
  $Innodb_log_waits = $statistics[0]['Innodb_log_waits'];
  $Innodb_log_write_requests = $statistics[0]['Innodb_log_write_requests'];
  $Innodb_log_writes = $statistics[0]['Innodb_log_writes'];
  $Innodb_os_log_fsyncs = $statistics[0]['Innodb_os_log_fsyncs'];
  $Innodb_os_log_pending_fsyncs = $statistics[0]['Innodb_os_log_pending_fsyncs'];
  $Innodb_os_log_pending_writes = $statistics[0]['Innodb_os_log_pending_writes'];
  $Innodb_os_log_written = $statistics[0]['Innodb_os_log_written'];
  $Innodb_page_size = $statistics[0]['Innodb_page_size'];
  $Innodb_pages_created = $statistics[0]['Innodb_pages_created'];
  $Innodb_pages_read = $statistics[0]['Innodb_pages_read'];
  $Innodb_pages_written = $statistics[0]['Innodb_pages_written'];
  $Innodb_row_lock_current_waits = $statistics[0]['Innodb_row_lock_current_waits'];
  $Innodb_row_lock_time = $statistics[0]['Innodb_row_lock_time'];
  $Innodb_row_lock_time_avg = $statistics[0]['Innodb_row_lock_time_avg'];
  $Innodb_row_lock_time_max = $statistics[0]['Innodb_row_lock_time_max'];
  $Innodb_row_lock_waits = $statistics[0]['Innodb_row_lock_waits'];
  $Innodb_rows_deleted = $statistics[0]['Innodb_rows_deleted'];
  $Innodb_rows_inserted = $statistics[0]['Innodb_rows_inserted'];
  $Innodb_rows_read = $statistics[0]['Innodb_rows_read'];
  $Innodb_rows_updated = $statistics[0]['Innodb_rows_updated'];
  $Key_blocks_not_flushed = $statistics[0]['Key_blocks_not_flushed'];
  $Key_blocks_unused = $statistics[0]['Key_blocks_unused'];
  $Key_blocks_used = $statistics[0]['Key_blocks_used'];
  $Key_read_requests = $statistics[0]['Key_read_requests'];
  $Key_reads = $statistics[0]['Key_reads'];
  $Key_write_requests = $statistics[0]['Key_write_requests'];
  $Key_writes = $statistics[0]['Key_writes'];
  $Last_query_cost = $statistics[0]['Last_query_cost'];
  $Max_used_connections = $statistics[0]['Max_used_connections'];
  $Not_flushed_delayed_rows = $statistics[0]['Not_flushed_delayed_rows'];
  $Open_files = $statistics[0]['Open_files'];
  $Open_streams = $statistics[0]['Open_streams'];
  $Open_tables = $statistics[0]['Open_tables'];
  $Opened_tables = $statistics[0]['Opened_tables'];
  $Prepared_stmt_count = $statistics[0]['Prepared_stmt_count'];
  $Qcache_free_blocks = $statistics[0]['Qcache_free_blocks'];
  $Qcache_free_memory = $statistics[0]['Qcache_free_memory'];
  $Qcache_hits = $statistics[0]['Qcache_hits'];
  $Qcache_inserts = $statistics[0]['Qcache_inserts'];
  $Qcache_lowmem_prunes = $statistics[0]['Qcache_lowmem_prunes'];
  $Qcache_not_cached = $statistics[0]['Qcache_not_cached'];
  $Qcache_queries_in_cache = $statistics[0]['Qcache_queries_in_cache'];
  $Qcache_total_blocks = $statistics[0]['Qcache_total_blocks'];
  $Questions = $statistics[0]['Questions'];
  $Rpl_status = $statistics[0]['Rpl_status'];
  $Select_full_join = $statistics[0]['Select_full_join'];
  $Select_full_range_join = $statistics[0]['Select_full_range_join'];
  $Select_range = $statistics[0]['Select_range'];
  $Select_range_check = $statistics[0]['Select_range_check'];
  $Select_scan = $statistics[0]['Select_scan'];
  $Slave_open_temp_tables = $statistics[0]['Slave_open_temp_tables'];
  $Slave_retried_transactions = $statistics[0]['Slave_retried_transactions'];
  $Slave_running = $statistics[0]['Slave_running'];
  $Slow_launch_threads = $statistics[0]['Slow_launch_threads'];
  $Slow_queries = $statistics[0]['Slow_queries'];
  $Sort_merge_passes = $statistics[0]['Sort_merge_passes'];
  $Sort_range = $statistics[0]['Sort_range'];
  $Sort_rows = $statistics[0]['Sort_rows'];
  $Sort_scan = $statistics[0]['Sort_scan'];
  $Table_locks_immediate = $statistics[0]['Table_locks_immediate'];
  $Table_locks_waited = $statistics[0]['Table_locks_waited'];
  $Tc_log_max_pages_used = $statistics[0]['Tc_log_max_pages_used'];
  $Tc_log_page_size = $statistics[0]['Tc_log_page_size'];
  $Tc_log_page_waits = $statistics[0]['Tc_log_page_waits'];
  $Threads_cached = $statistics[0]['Threads_cached'];
  $Threads_connected = $statistics[0]['Threads_connected'];
  $Threads_created = $statistics[0]['Threads_created'];
  $Threads_running = $statistics[0]['Threads_running'];
  $Uptime = $statistics[0]['Uptime'];
 }

if($variables) {  
  $os_load_1 = $variables[0]['os_load_1'];
  $os_load_5 = $variables[0]['os_load_5'];
  $os_load_15 = $variables[0]['os_load_15'];
  $os_mem_total = $variables[0]['os_mem_total'];
  $os_mem_used = $variables[0]['os_mem_used'];
  $os_swap_total = $variables[0]['os_swap_total'];
  $os_swap_free = $variables[0]['os_swap_free'];
  $os_cpu_user = $variables[0]['os_cpu_user'];
  $os_cpu_system = $variables[0]['os_cpu_system'];
  $os_cpu_idle = $variables[0]['os_cpu_idle'];
  $queries_per_second = $variables[0]['queries_per_second'];
  $num_schema = $variables[0]['num_schema'];
  $num_tables = $variables[0]['num_tables'];
  $num_connections = $variables[0]['num_connections'];
  $length_data = $variables[0]['length_data'];
  $length_index = $variables[0]['length_index'];
  $engine_count_innodb = $variables[0]['engine_count_innodb'];
  $engine_count_myisam = $variables[0]['engine_count_myisam'];
  $engine_myisam_size_data = $variables[0]['engine_myisam_size_data'];
  $engine_myisam_size_index = $variables[0]['engine_myisam_size_index'];
  $engine_innodb_size_data = $variables[0]['engine_innodb_size_data'];
  $engine_innodb_size_index = $variables[0]['engine_innodb_size_index'];
  $auto_increment_increment = $variables[0]['auto_increment_increment'];
  $auto_increment_offset = $variables[0]['auto_increment_offset'];
  $automatic_sp_privileges = $variables[0]['automatic_sp_privileges'];
  $back_log = $variables[0]['back_log'];
  $basedir = $variables[0]['basedir'];
  $binlog_cache_size = $variables[0]['binlog_cache_size'];
  $bulk_insert_buffer_size = $variables[0]['bulk_insert_buffer_size'];
  $character_set_client = $variables[0]['character_set_client'];
  $character_set_connection = $variables[0]['character_set_connection'];
  $character_set_database = $variables[0]['character_set_database'];
  $character_set_filesystem = $variables[0]['character_set_filesystem'];
  $character_set_results = $variables[0]['character_set_results'];
  $character_set_server = $variables[0]['character_set_server'];
  $character_set_system = $variables[0]['character_set_system'];
  $character_sets_dir = $variables[0]['character_sets_dir'];
  $collation_connection = $variables[0]['collation_connection'];
  $collation_database = $variables[0]['collation_database'];
  $collation_server = $variables[0]['collation_server'];
  $completion_type = $variables[0]['completion_type'];
  $concurrent_insert = $variables[0]['concurrent_insert'];
  $connect_timeout = $variables[0]['connect_timeout'];
  $variablesdir = $variables[0]['datadir'];
  $date_format = $variables[0]['date_format'];
  $datetime_format = $variables[0]['datetime_format'];
  $default_week_format = $variables[0]['default_week_format'];
  $delay_key_write = $variables[0]['delay_key_write'];
  $delayed_insert_limit = $variables[0]['delayed_insert_limit'];
  $delayed_insert_timeout = $variables[0]['delayed_insert_timeout'];
  $delayed_queue_size = $variables[0]['delayed_queue_size'];
  $div_precision_increment = $variables[0]['div_precision_increment'];
  $keep_files_on_create = $variables[0]['keep_files_on_create'];
  $engine_condition_pushdown = $variables[0]['engine_condition_pushdown'];
  $expire_logs_days = $variables[0]['expire_logs_days'];
  $flush = $variables[0]['flush'];
  $flush_time = $variables[0]['flush_time'];
  $ft_boolean_syntax = $variables[0]['ft_boolean_syntax'];
  $ft_max_word_len = $variables[0]['ft_max_word_len'];
  $ft_min_word_len = $variables[0]['ft_min_word_len'];
  $ft_query_expansion_limit = $variables[0]['ft_query_expansion_limit'];
  $ft_stopword_file = $variables[0]['ft_stopword_file'];
  $group_concat_max_len = $variables[0]['group_concat_max_len'];
  $have_archive = $variables[0]['have_archive'];
  $have_bdb = $variables[0]['have_bdb'];
  $have_blackhole_engine = $variables[0]['have_blackhole_engine'];
  $have_compress = $variables[0]['have_compress'];
  $have_crypt = $variables[0]['have_crypt'];
  $have_csv = $variables[0]['have_csv'];
  $have_dynamic_loading = $variables[0]['have_dynamic_loading'];
  $have_example_engine = $variables[0]['have_example_engine'];
  $have_federated_engine = $variables[0]['have_federated_engine'];
  $have_geometry = $variables[0]['have_geometry'];
  $have_innodb = $variables[0]['have_innodb'];
  $have_isam = $variables[0]['have_isam'];
  $have_merge_engine = $variables[0]['have_merge_engine'];
  $have_ndbcluster = $variables[0]['have_ndbcluster'];
  $have_openssl = $variables[0]['have_openssl'];
  $have_ssl = $variables[0]['have_ssl'];
  $have_query_cache = $variables[0]['have_query_cache'];
  $have_raid = $variables[0]['have_raid'];
  $have_rtree_keys = $variables[0]['have_rtree_keys'];
  $have_symlink = $variables[0]['have_symlink'];
  $hostname = $variables[0]['hostname'];
  $init_connect = $variables[0]['init_connect'];
  $init_file = $variables[0]['init_file'];
  $init_slave = $variables[0]['init_slave'];
  $innodb_additional_mem_pool_size = $variables[0]['innodb_additional_mem_pool_size'];
  $innodb_autoextend_increment = $variables[0]['innodb_autoextend_increment'];
  $innodb_buffer_pool_awe_mem_mb = $variables[0]['innodb_buffer_pool_awe_mem_mb'];
  $innodb_buffer_pool_size = $variables[0]['innodb_buffer_pool_size'];
  $innodb_checksums = $variables[0]['innodb_checksums'];
  $innodb_commit_concurrency = $variables[0]['innodb_commit_concurrency'];
  $innodb_concurrency_tickets = $variables[0]['innodb_concurrency_tickets'];
  $innodb_data_file_path = $variables[0]['innodb_data_file_path'];
  $innodb_data_home_dir = $variables[0]['innodb_data_home_dir'];
  $innodb_adaptive_hash_index = $variables[0]['innodb_adaptive_hash_index'];
  $innodb_doublewrite = $variables[0]['innodb_doublewrite'];
  $innodb_fast_shutdown = $variables[0]['innodb_fast_shutdown'];
  $innodb_file_io_threads = $variables[0]['innodb_file_io_threads'];
  $innodb_file_per_table = $variables[0]['innodb_file_per_table'];
  $innodb_flush_log_at_trx_commit = $variables[0]['innodb_flush_log_at_trx_commit'];
  $innodb_flush_method = $variables[0]['innodb_flush_method'];
  $innodb_force_recovery = $variables[0]['innodb_force_recovery'];
  $innodb_lock_wait_timeout = $variables[0]['innodb_lock_wait_timeout'];
  $innodb_locks_unsafe_for_binlog = $variables[0]['innodb_locks_unsafe_for_binlog'];
  $innodb_log_arch_dir = $variables[0]['innodb_log_arch_dir'];
  $innodb_log_archive = $variables[0]['innodb_log_archive'];
  $innodb_log_buffer_size = $variables[0]['innodb_log_buffer_size'];
  $innodb_log_file_size = $variables[0]['innodb_log_file_size'];
  $innodb_log_files_in_group = $variables[0]['innodb_log_files_in_group'];
  $innodb_log_group_home_dir = $variables[0]['innodb_log_group_home_dir'];
  $innodb_max_dirty_pages_pct = $variables[0]['innodb_max_dirty_pages_pct'];
  $innodb_max_purge_lag = $variables[0]['innodb_max_purge_lag'];
  $innodb_mirrored_log_groups = $variables[0]['innodb_mirrored_log_groups'];
  $innodb_open_files = $variables[0]['innodb_open_files'];
  $innodb_rollback_on_timeout = $variables[0]['innodb_rollback_on_timeout'];
  $innodb_support_xa = $variables[0]['innodb_support_xa'];
  $innodb_sync_spin_loops = $variables[0]['innodb_sync_spin_loops'];
  $innodb_table_locks = $variables[0]['innodb_table_locks'];
  $innodb_thread_concurrency = $variables[0]['innodb_thread_concurrency'];
  $innodb_thread_sleep_delay = $variables[0]['innodb_thread_sleep_delay'];
  $innodb_read_ahead = $variables[0]['innodb_read_ahead'];
  $innodb_ibuf_contract_const = $variables[0]['innodb_ibuf_contract_const'];
  $innodb_ibuf_contract_burst = $variables[0]['innodb_ibuf_contract_burst'];
  $innodb_buf_flush_const = $variables[0]['innodb_buf_flush_const'];
  $innodb_buf_flush_burst = $variables[0]['innodb_buf_flush_burst'];
  $interactive_timeout = $variables[0]['interactive_timeout'];
  $join_buffer_size = $variables[0]['join_buffer_size'];
  $key_buffer_size = $variables[0]['key_buffer_size'];
  $key_cache_age_threshold = $variables[0]['key_cache_age_threshold'];
  $key_cache_block_size = $variables[0]['key_cache_block_size'];
  $key_cache_division_limit = $variables[0]['key_cache_division_limit'];
  $language = $variables[0]['language'];
  $large_files_support = $variables[0]['large_files_support'];
  $large_page_size = $variables[0]['large_page_size'];
  $large_pages = $variables[0]['large_pages'];
  $lc_time_names = $variables[0]['lc_time_names'];
  $license = $variables[0]['license'];
  $local_infile = $variables[0]['local_infile'];
  $locked_in_memory = $variables[0]['locked_in_memory'];
  $log = $variables[0]['log'];
  $log_bin = $variables[0]['log_bin'];
  $log_bin_trust_function_creators = $variables[0]['log_bin_trust_function_creators'];
  $log_error = $variables[0]['log_error'];
  $log_queries_not_using_indexes = $variables[0]['log_queries_not_using_indexes'];
  $log_slave_updates = $variables[0]['log_slave_updates'];
  $log_slow_queries = $variables[0]['log_slow_queries'];
  $log_slow_filter = $variables[0]['log_slow_filter'];
  $log_slow_verbosity = $variables[0]['log_slow_verbosity'];
  $log_warnings = $variables[0]['log_warnings'];
  $long_query_time = $variables[0]['long_query_time'];
  $low_priority_updates = $variables[0]['low_priority_updates'];
  $lower_case_file_system = $variables[0]['lower_case_file_system'];
  $lower_case_table_names = $variables[0]['lower_case_table_names'];
  $max_allowed_packet = $variables[0]['max_allowed_packet'];
  $max_binlog_cache_size = $variables[0]['max_binlog_cache_size'];
  $max_binlog_size = $variables[0]['max_binlog_size'];
  $max_connect_errors = $variables[0]['max_connect_errors'];
  $max_connections = $variables[0]['max_connections'];
  $max_delayed_threads = $variables[0]['max_delayed_threads'];
  $max_error_count = $variables[0]['max_error_count'];
  $max_heap_table_size = $variables[0]['max_heap_table_size'];
  $max_insert_delayed_threads = $variables[0]['max_insert_delayed_threads'];
  $max_join_size = $variables[0]['max_join_size'];
  $max_length_for_sort_data = $variables[0]['max_length_for_sort_data'];
  $max_prepared_stmt_count = $variables[0]['max_prepared_stmt_count'];
  $max_relay_log_size = $variables[0]['max_relay_log_size'];
  $max_seeks_for_key = $variables[0]['max_seeks_for_key'];
  $max_sort_length = $variables[0]['max_sort_length'];
  $max_sp_recursion_depth = $variables[0]['max_sp_recursion_depth'];
  $max_tmp_tables = $variables[0]['max_tmp_tables'];
  $max_user_connections = $variables[0]['max_user_connections'];
  $max_write_lock_count = $variables[0]['max_write_lock_count'];
  $min_examined_row_limit = $variables[0]['min_examined_row_limit'];
  $multi_range_count = $variables[0]['multi_range_count'];
  $myisam_data_pointer_size = $variables[0]['myisam_data_pointer_size'];
  $myisam_max_sort_file_size = $variables[0]['myisam_max_sort_file_size'];
  $myisam_recover_options = $variables[0]['myisam_recover_options'];
  $myisam_repair_threads = $variables[0]['myisam_repair_threads'];
  $myisam_sort_buffer_size = $variables[0]['myisam_sort_buffer_size'];
  $myisam_stats_method = $variables[0]['myisam_stats_method'];
  $net_buffer_length = $variables[0]['net_buffer_length'];
  $net_read_timeout = $variables[0]['net_read_timeout'];
  $net_retry_count = $variables[0]['net_retry_count'];
  $net_write_timeout = $variables[0]['net_write_timeout'];
  $new = $variables[0]['new'];
  $old_passwords = $variables[0]['old_passwords'];
  $open_files_limit = $variables[0]['open_files_limit'];
  $optimizer_prune_level = $variables[0]['optimizer_prune_level'];
  $optimizer_search_depth = $variables[0]['optimizer_search_depth'];
  $pid_file = $variables[0]['pid_file'];
  $port = $variables[0]['port'];
  $preload_buffer_size = $variables[0]['preload_buffer_size'];
  $protocol_version = $variables[0]['protocol_version'];
  $query_alloc_block_size = $variables[0]['query_alloc_block_size'];
  $query_cache_limit = $variables[0]['query_cache_limit'];
  $query_cache_min_res_unit = $variables[0]['query_cache_min_res_unit'];
  $query_cache_size = $variables[0]['query_cache_size'];
  $query_cache_type = $variables[0]['query_cache_type'];
  $query_cache_wlock_invalidate = $variables[0]['query_cache_wlock_invalidate'];
  $query_prealloc_size = $variables[0]['query_prealloc_size'];
  $range_alloc_block_size = $variables[0]['range_alloc_block_size'];
  $log_slow_rate_limit = $variables[0]['log_slow_rate_limit'];
  $read_buffer_size = $variables[0]['read_buffer_size'];
  $read_only = $variables[0]['read_only'];
  $read_rnd_buffer_size = $variables[0]['read_rnd_buffer_size'];
  $relay_log = $variables[0]['relay_log'];
  $relay_log_index = $variables[0]['relay_log_index'];
  $relay_log_info_file = $variables[0]['relay_log_info_file'];
  $relay_log_purge = $variables[0]['relay_log_purge'];
  $relay_log_space_limit = $variables[0]['relay_log_space_limit'];
  $rpl_recovery_rank = $variables[0]['rpl_recovery_rank'];
  $secure_auth = $variables[0]['secure_auth'];
  $secure_file_priv = $variables[0]['secure_file_priv'];
  $server_id = $variables[0]['server_id'];
  $skip_external_locking = $variables[0]['skip_external_locking'];
  $skip_networking = $variables[0]['skip_networking'];
  $skip_show_database = $variables[0]['skip_show_database'];
  $slave_compressed_protocol = $variables[0]['slave_compressed_protocol'];
  $slave_load_tmpdir = $variables[0]['slave_load_tmpdir'];
  $slave_net_timeout = $variables[0]['slave_net_timeout'];
  $slave_skip_errors = $variables[0]['slave_skip_errors'];
  $slave_transaction_retries = $variables[0]['slave_transaction_retries'];
  $slow_launch_time = $variables[0]['slow_launch_time'];
  $socket = $variables[0]['socket'];
  $sort_buffer_size = $variables[0]['sort_buffer_size'];
  $sql_big_selects = $variables[0]['sql_big_selects'];
  $sql_mode = $variables[0]['sql_mode'];
  $sql_notes = $variables[0]['sql_notes'];
  $sql_warnings = $variables[0]['sql_warnings'];
  $ssl_ca = $variables[0]['ssl_ca'];
  $ssl_capath = $variables[0]['ssl_capath'];
  $ssl_cert = $variables[0]['ssl_cert'];
  $ssl_cipher = $variables[0]['ssl_cipher'];
  $ssl_key = $variables[0]['ssl_key'];
  $storage_engine = $variables[0]['storage_engine'];
  $sync_binlog = $variables[0]['sync_binlog'];
  $sync_frm = $variables[0]['sync_frm'];
  $system_time_zone = $variables[0]['system_time_zone'];
  $table_cache = $variables[0]['table_cache'];
  $table_lock_wait_timeout = $variables[0]['table_lock_wait_timeout'];
  $table_type = $variables[0]['table_type'];
  $thread_cache_size = $variables[0]['thread_cache_size'];
  $thread_stack = $variables[0]['thread_stack'];
  $time_format = $variables[0]['time_format'];
  $time_zone = $variables[0]['time_zone'];
  $timed_mutexes = $variables[0]['timed_mutexes'];
  $tmp_table_size = $variables[0]['tmp_table_size'];
  $tmpdir = $variables[0]['tmpdir'];
  $transaction_alloc_block_size = $variables[0]['transaction_alloc_block_size'];
  $transaction_prealloc_size = $variables[0]['transaction_prealloc_size'];
  $tx_isolation = $variables[0]['tx_isolation'];
  $updatable_views_with_limit = $variables[0]['updatable_views_with_limit'];
  $version = $variables[0]['version'];
  $version_comment = $variables[0]['version_comment'];
  $version_compile_machine = $variables[0]['version_compile_machine'];
  $version_compile_os = $variables[0]['version_compile_os'];
  $wait_timeout = $variables[0]['wait_timeout'];
 }

$table_cache = check_var($table_cache);
$Open_tables = check_var($Open_tables);
$Opened_tables = check_var($Opened_tables);
$Uptime = check_var($Uptime);

$_tableCacheAllowable = $table_cache;
$_tableCacheOpen = $Open_tables;
$_tableCacheOpenP = round((($table_cache / $Open_tables)*100),2);
$_tableCacheAvgSec = round(($Opened_tables / $Uptime),1);
$_tableCacheMissesP = round((($Open_tables / $Opened_tables)*100),2);

print<<<HEAD
</head>
<div>
<script type="text/javascript">
  Ext.onReady(function(){
                Ext.QuickTips.init();
                Ext.form.Field.prototype.msgTarget = 'side';

                var login = new Ext.FormPanel({ 
                  renderTo: document.body,
                      buttonAlign: 'left',
                      width:320,
                      labelWidth:200,
                      frame:true, 
                      title:'Table Cache Information', 
                      defaultType:'textfield',
                      monitorValid:true,
                      items:[
			     {
			     fieldLabel:'Table cache size',
				 name:'',
				 inputType: 'text',
				 width:100,
				 value: '$_tableCacheAllowable',
				 disabled: true,
				 allowBlank:true
				 },
			     
			     {
			     fieldLabel:'Current open tables',
				 name:'',
				 inputType: 'text',
				 width:100,
				 value: '$_tableCacheOpen',
				 disabled: true,
				 allowBlank:true
				 },
			     
			     {
			     fieldLabel:'Table cache utilization',
				 name:'',
				 inputType: 'text',
				 width:100,
				 value: '$_tableCacheOpenP%',
				 disabled: true,
				 allowBlank:true
				 },
			     
			     {
			     fieldLabel:'Average tables open per/sec',
				 name:'',
				 inputType: 'text',
				 width:100,
				 value: '$_tableCacheAvgSec',
				 disabled: true,
				 allowBlank:true
				 },
			     
			     {
			     fieldLabel:'Percentage cache misses',
				 name:'',
				 inputType: 'text',
				 width:100,
				 value: '$_tableCacheMissesP%',
				 disabled: true,
				 allowBlank:true
				 }
			     ]
		      })
		  });
</script>
</div>
</body>
</html>
HEAD;


?>