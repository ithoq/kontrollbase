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
  $os_load_1 = $data[0]['os_load_1'];
  $os_load_5 = $data[0]['os_load_5'];
  $os_load_15 = $data[0]['os_load_15'];
  $os_mem_total = $data[0]['os_mem_total'];
  $os_mem_used = $data[0]['os_mem_used'];
  $os_swap_total = $data[0]['os_swap_total'];
  $os_swap_free = $data[0]['os_swap_free'];
  $os_cpu_user = $data[0]['os_cpu_user'];
  $os_cpu_system = $data[0]['os_cpu_system'];
  $os_cpu_idle = $data[0]['os_cpu_idle'];
  $queries_per_second = $data[0]['queries_per_second'];
  $num_schema = $data[0]['num_schema'];
  $num_tables = $data[0]['num_tables'];
  $num_connections = $data[0]['num_connections'];
  $length_data = $data[0]['length_data'];
  $length_index = $data[0]['length_index'];
  $engine_count_innodb = $data[0]['engine_count_innodb'];
  $engine_count_myisam = $data[0]['engine_count_myisam'];
  $engine_myisam_size_data = $data[0]['engine_myisam_size_data'];
  $engine_myisam_size_index = $data[0]['engine_myisam_size_index'];
  $engine_innodb_size_data = $data[0]['engine_innodb_size_data'];
  $engine_innodb_size_index = $data[0]['engine_innodb_size_index'];
  $auto_increment_increment = $data[0]['auto_increment_increment'];
  $auto_increment_offset = $data[0]['auto_increment_offset'];
  $automatic_sp_privileges = $data[0]['automatic_sp_privileges'];
  $back_log = $data[0]['back_log'];
  $basedir = $data[0]['basedir'];
  $binlog_cache_size = $data[0]['binlog_cache_size'];
  $bulk_insert_buffer_size = $data[0]['bulk_insert_buffer_size'];
  $character_set_client = $data[0]['character_set_client'];
  $character_set_connection = $data[0]['character_set_connection'];
  $character_set_database = $data[0]['character_set_database'];
  $character_set_filesystem = $data[0]['character_set_filesystem'];
  $character_set_results = $data[0]['character_set_results'];
  $character_set_server = $data[0]['character_set_server'];
  $character_set_system = $data[0]['character_set_system'];
  $character_sets_dir = $data[0]['character_sets_dir'];
  $collation_connection = $data[0]['collation_connection'];
  $collation_database = $data[0]['collation_database'];
  $collation_server = $data[0]['collation_server'];
  $completion_type = $data[0]['completion_type'];
  $concurrent_insert = $data[0]['concurrent_insert'];
  $connect_timeout = $data[0]['connect_timeout'];
  $datadir = $data[0]['datadir'];
  $date_format = $data[0]['date_format'];
  $datetime_format = $data[0]['datetime_format'];
  $default_week_format = $data[0]['default_week_format'];
  $delay_key_write = $data[0]['delay_key_write'];
  $delayed_insert_limit = $data[0]['delayed_insert_limit'];
  $delayed_insert_timeout = $data[0]['delayed_insert_timeout'];
  $delayed_queue_size = $data[0]['delayed_queue_size'];
  $div_precision_increment = $data[0]['div_precision_increment'];
  $keep_files_on_create = $data[0]['keep_files_on_create'];
  $engine_condition_pushdown = $data[0]['engine_condition_pushdown'];
  $expire_logs_days = $data[0]['expire_logs_days'];
  $flush = $data[0]['flush'];
  $flush_time = $data[0]['flush_time'];
  $ft_boolean_syntax = $data[0]['ft_boolean_syntax'];
  $ft_max_word_len = $data[0]['ft_max_word_len'];
  $ft_min_word_len = $data[0]['ft_min_word_len'];
  $ft_query_expansion_limit = $data[0]['ft_query_expansion_limit'];
  $ft_stopword_file = $data[0]['ft_stopword_file'];
  $group_concat_max_len = $data[0]['group_concat_max_len'];
  $have_archive = $data[0]['have_archive'];
  $have_bdb = $data[0]['have_bdb'];
  $have_blackhole_engine = $data[0]['have_blackhole_engine'];
  $have_compress = $data[0]['have_compress'];
  $have_crypt = $data[0]['have_crypt'];
  $have_csv = $data[0]['have_csv'];
  $have_dynamic_loading = $data[0]['have_dynamic_loading'];
  $have_example_engine = $data[0]['have_example_engine'];
  $have_federated_engine = $data[0]['have_federated_engine'];
  $have_geometry = $data[0]['have_geometry'];
  $have_innodb = $data[0]['have_innodb'];
  $have_isam = $data[0]['have_isam'];
  $have_merge_engine = $data[0]['have_merge_engine'];
  $have_ndbcluster = $data[0]['have_ndbcluster'];
  $have_openssl = $data[0]['have_openssl'];
  $have_ssl = $data[0]['have_ssl'];
  $have_query_cache = $data[0]['have_query_cache'];
  $have_raid = $data[0]['have_raid'];
  $have_rtree_keys = $data[0]['have_rtree_keys'];
  $have_symlink = $data[0]['have_symlink'];
  $hostname = $data[0]['hostname'];
  $init_connect = $data[0]['init_connect'];
  $init_file = $data[0]['init_file'];
  $init_slave = $data[0]['init_slave'];
  $innodb_additional_mem_pool_size = $data[0]['innodb_additional_mem_pool_size'];
  $innodb_autoextend_increment = $data[0]['innodb_autoextend_increment'];
  $innodb_buffer_pool_awe_mem_mb = $data[0]['innodb_buffer_pool_awe_mem_mb'];
  $innodb_buffer_pool_size = $data[0]['innodb_buffer_pool_size'];
  $innodb_checksums = $data[0]['innodb_checksums'];
  $innodb_commit_concurrency = $data[0]['innodb_commit_concurrency'];
  $innodb_concurrency_tickets = $data[0]['innodb_concurrency_tickets'];
  $innodb_data_file_path = $data[0]['innodb_data_file_path'];
  $innodb_data_home_dir = $data[0]['innodb_data_home_dir'];
  $innodb_adaptive_hash_index = $data[0]['innodb_adaptive_hash_index'];
  $innodb_doublewrite = $data[0]['innodb_doublewrite'];
  $innodb_fast_shutdown = $data[0]['innodb_fast_shutdown'];
  $innodb_file_io_threads = $data[0]['innodb_file_io_threads'];
  $innodb_file_per_table = $data[0]['innodb_file_per_table'];
  $innodb_flush_log_at_trx_commit = $data[0]['innodb_flush_log_at_trx_commit'];
  $innodb_flush_method = $data[0]['innodb_flush_method'];
  $innodb_force_recovery = $data[0]['innodb_force_recovery'];
  $innodb_lock_wait_timeout = $data[0]['innodb_lock_wait_timeout'];
  $innodb_locks_unsafe_for_binlog = $data[0]['innodb_locks_unsafe_for_binlog'];
  $innodb_log_arch_dir = $data[0]['innodb_log_arch_dir'];
  $innodb_log_archive = $data[0]['innodb_log_archive'];
  $innodb_log_buffer_size = $data[0]['innodb_log_buffer_size'];
  $innodb_log_file_size = $data[0]['innodb_log_file_size'];
  $innodb_log_files_in_group = $data[0]['innodb_log_files_in_group'];
  $innodb_log_group_home_dir = $data[0]['innodb_log_group_home_dir'];
  $innodb_max_dirty_pages_pct = $data[0]['innodb_max_dirty_pages_pct'];
  $innodb_max_purge_lag = $data[0]['innodb_max_purge_lag'];
  $innodb_mirrored_log_groups = $data[0]['innodb_mirrored_log_groups'];
  $innodb_open_files = $data[0]['innodb_open_files'];
  $innodb_rollback_on_timeout = $data[0]['innodb_rollback_on_timeout'];
  $innodb_support_xa = $data[0]['innodb_support_xa'];
  $innodb_sync_spin_loops = $data[0]['innodb_sync_spin_loops'];
  $innodb_table_locks = $data[0]['innodb_table_locks'];
  $innodb_thread_concurrency = $data[0]['innodb_thread_concurrency'];
  $innodb_thread_sleep_delay = $data[0]['innodb_thread_sleep_delay'];
  $innodb_read_ahead = $data[0]['innodb_read_ahead'];
  $innodb_ibuf_contract_const = $data[0]['innodb_ibuf_contract_const'];
  $innodb_ibuf_contract_burst = $data[0]['innodb_ibuf_contract_burst'];
  $innodb_buf_flush_const = $data[0]['innodb_buf_flush_const'];
  $innodb_buf_flush_burst = $data[0]['innodb_buf_flush_burst'];
  $interactive_timeout = $data[0]['interactive_timeout'];
  $join_buffer_size = $data[0]['join_buffer_size'];
  $key_buffer_size = $data[0]['key_buffer_size'];
  $key_cache_age_threshold = $data[0]['key_cache_age_threshold'];
  $key_cache_block_size = $data[0]['key_cache_block_size'];
  $key_cache_division_limit = $data[0]['key_cache_division_limit'];
  $language = $data[0]['language'];
  $large_files_support = $data[0]['large_files_support'];
  $large_page_size = $data[0]['large_page_size'];
  $large_pages = $data[0]['large_pages'];
  $lc_time_names = $data[0]['lc_time_names'];
  $license = $data[0]['license'];
  $local_infile = $data[0]['local_infile'];
  $locked_in_memory = $data[0]['locked_in_memory'];
  $log = $data[0]['log'];
  $log_bin = $data[0]['log_bin'];
  $log_bin_trust_function_creators = $data[0]['log_bin_trust_function_creators'];
  $log_error = $data[0]['log_error'];
  $log_queries_not_using_indexes = $data[0]['log_queries_not_using_indexes'];
  $log_slave_updates = $data[0]['log_slave_updates'];
  $log_slow_queries = $data[0]['log_slow_queries'];
  $log_slow_filter = $data[0]['log_slow_filter'];
  $log_slow_verbosity = $data[0]['log_slow_verbosity'];
  $log_warnings = $data[0]['log_warnings'];
  $long_query_time = $data[0]['long_query_time'];
  $low_priority_updates = $data[0]['low_priority_updates'];
  $lower_case_file_system = $data[0]['lower_case_file_system'];
  $lower_case_table_names = $data[0]['lower_case_table_names'];
  $max_allowed_packet = $data[0]['max_allowed_packet'];
  $max_binlog_cache_size = $data[0]['max_binlog_cache_size'];
  $max_binlog_size = $data[0]['max_binlog_size'];
  $max_connect_errors = $data[0]['max_connect_errors'];
  $max_connections = $data[0]['max_connections'];
  $max_delayed_threads = $data[0]['max_delayed_threads'];
  $max_error_count = $data[0]['max_error_count'];
  $max_heap_table_size = $data[0]['max_heap_table_size'];
  $max_insert_delayed_threads = $data[0]['max_insert_delayed_threads'];
  $max_join_size = $data[0]['max_join_size'];
  $max_length_for_sort_data = $data[0]['max_length_for_sort_data'];
  $max_prepared_stmt_count = $data[0]['max_prepared_stmt_count'];
  $max_relay_log_size = $data[0]['max_relay_log_size'];
  $max_seeks_for_key = $data[0]['max_seeks_for_key'];
  $max_sort_length = $data[0]['max_sort_length'];
  $max_sp_recursion_depth = $data[0]['max_sp_recursion_depth'];
  $max_tmp_tables = $data[0]['max_tmp_tables'];
  $max_user_connections = $data[0]['max_user_connections'];
  $max_write_lock_count = $data[0]['max_write_lock_count'];
  $min_examined_row_limit = $data[0]['min_examined_row_limit'];
  $multi_range_count = $data[0]['multi_range_count'];
  $myisam_data_pointer_size = $data[0]['myisam_data_pointer_size'];
  $myisam_max_sort_file_size = $data[0]['myisam_max_sort_file_size'];
  $myisam_recover_options = $data[0]['myisam_recover_options'];
  $myisam_repair_threads = $data[0]['myisam_repair_threads'];
  $myisam_sort_buffer_size = $data[0]['myisam_sort_buffer_size'];
  $myisam_stats_method = $data[0]['myisam_stats_method'];
  $net_buffer_length = $data[0]['net_buffer_length'];
  $net_read_timeout = $data[0]['net_read_timeout'];
  $net_retry_count = $data[0]['net_retry_count'];
  $net_write_timeout = $data[0]['net_write_timeout'];
  $new = $data[0]['new'];
  $old_passwords = $data[0]['old_passwords'];
  $open_files_limit = $data[0]['open_files_limit'];
  $optimizer_prune_level = $data[0]['optimizer_prune_level'];
  $optimizer_search_depth = $data[0]['optimizer_search_depth'];
  $pid_file = $data[0]['pid_file'];
  $port = $data[0]['port'];
  $preload_buffer_size = $data[0]['preload_buffer_size'];
  $protocol_version = $data[0]['protocol_version'];
  $query_alloc_block_size = $data[0]['query_alloc_block_size'];
  $query_cache_limit = $data[0]['query_cache_limit'];
  $query_cache_min_res_unit = $data[0]['query_cache_min_res_unit'];
  $query_cache_size = $data[0]['query_cache_size'];
  $query_cache_type = $data[0]['query_cache_type'];
  $query_cache_wlock_invalidate = $data[0]['query_cache_wlock_invalidate'];
  $query_prealloc_size = $data[0]['query_prealloc_size'];
  $range_alloc_block_size = $data[0]['range_alloc_block_size'];
  $log_slow_rate_limit = $data[0]['log_slow_rate_limit'];
  $read_buffer_size = $data[0]['read_buffer_size'];
  $read_only = $data[0]['read_only'];
  $read_rnd_buffer_size = $data[0]['read_rnd_buffer_size'];
  $relay_log = $data[0]['relay_log'];
  $relay_log_index = $data[0]['relay_log_index'];
  $relay_log_info_file = $data[0]['relay_log_info_file'];
  $relay_log_purge = $data[0]['relay_log_purge'];
  $relay_log_space_limit = $data[0]['relay_log_space_limit'];
  $rpl_recovery_rank = $data[0]['rpl_recovery_rank'];
  $secure_auth = $data[0]['secure_auth'];
  $secure_file_priv = $data[0]['secure_file_priv'];
  $server_id = $data[0]['server_id'];
  $skip_external_locking = $data[0]['skip_external_locking'];
  $skip_networking = $data[0]['skip_networking'];
  $skip_show_database = $data[0]['skip_show_database'];
  $slave_compressed_protocol = $data[0]['slave_compressed_protocol'];
  $slave_load_tmpdir = $data[0]['slave_load_tmpdir'];
  $slave_net_timeout = $data[0]['slave_net_timeout'];
  $slave_skip_errors = $data[0]['slave_skip_errors'];
  $slave_transaction_retries = $data[0]['slave_transaction_retries'];
  $slow_launch_time = $data[0]['slow_launch_time'];
  $socket = $data[0]['socket'];
  $sort_buffer_size = $data[0]['sort_buffer_size'];
  $sql_big_selects = $data[0]['sql_big_selects'];
  $sql_mode = $data[0]['sql_mode'];
  $sql_notes = $data[0]['sql_notes'];
  $sql_warnings = $data[0]['sql_warnings'];
  $ssl_ca = $data[0]['ssl_ca'];
  $ssl_capath = $data[0]['ssl_capath'];
  $ssl_cert = $data[0]['ssl_cert'];
  $ssl_cipher = $data[0]['ssl_cipher'];
  $ssl_key = $data[0]['ssl_key'];
  $storage_engine = $data[0]['storage_engine'];
  $sync_binlog = $data[0]['sync_binlog'];
  $sync_frm = $data[0]['sync_frm'];
  $system_time_zone = $data[0]['system_time_zone'];
  $table_cache = $data[0]['table_cache'];
  $table_lock_wait_timeout = $data[0]['table_lock_wait_timeout'];
  $table_type = $data[0]['table_type'];
  $thread_cache_size = $data[0]['thread_cache_size'];
  $thread_stack = $data[0]['thread_stack'];
  $time_format = $data[0]['time_format'];
  $time_zone = $data[0]['time_zone'];
  $timed_mutexes = $data[0]['timed_mutexes'];
  $tmp_table_size = $data[0]['tmp_table_size'];
  $tmpdir = $data[0]['tmpdir'];
  $transaction_alloc_block_size = $data[0]['transaction_alloc_block_size'];
  $transaction_prealloc_size = $data[0]['transaction_prealloc_size'];
  $tx_isolation = $data[0]['tx_isolation'];
  $updatable_views_with_limit = $data[0]['updatable_views_with_limit'];
  $version = $data[0]['version'];
  $version_comment = $data[0]['version_comment'];
  $version_compile_machine = $data[0]['version_compile_machine'];
  $version_compile_os = $data[0]['version_compile_os'];
  $wait_timeout = $data[0]['wait_timeout'];
  $Creation_time = $data[0]['Creation_time'];

  print "<div id='content'>
<h2>Collected on: $Creation_time</h2>
<table class='tableborder'>
<tr><td>os_load_1</td><td>$os_load_1</td></tr>
<tr><td>os_load_5</td><td>$os_load_5</td></tr>
<tr><td>os_load_15</td><td>$os_load_15</td></tr>
<tr><td>os_mem_total</td><td>$os_mem_total</td></tr>
<tr><td>os_mem_used</td><td>$os_mem_used</td></tr>
<tr><td>os_swap_total</td><td>$os_swap_total</td></tr>
<tr><td>os_swap_free</td><td>$os_swap_free</td></tr>
<tr><td>os_cpu_user</td><td>$os_cpu_user</td></tr>
<tr><td>os_cpu_system</td><td>$os_cpu_system</td></tr>
<tr><td>os_cpu_idle</td><td>$os_cpu_idle</td></tr>
<tr><td>queries_per_second</td><td>$queries_per_second</td></tr>
<tr><td>num_schema</td><td>$num_schema</td></tr>
<tr><td>num_tables</td><td>$num_tables</td></tr>
<tr><td>num_connections</td><td>$num_connections</td></tr>
<tr><td>length_data</td><td>$length_data</td></tr>
<tr><td>length_index</td><td>$length_index</td></tr>
<tr><td>engine_count_innodb</td><td>$engine_count_innodb</td></tr>
<tr><td>engine_count_myisam</td><td>$engine_count_myisam</td></tr>
<tr><td>engine_myisam_size_data</td><td>$engine_myisam_size_data</td></tr>
<tr><td>engine_myisam_size_index</td><td>$engine_myisam_size_index</td></tr>
<tr><td>engine_innodb_size_data</td><td>$engine_innodb_size_data</td></tr>
<tr><td>engine_innodb_size_index</td><td>$engine_innodb_size_index</td></tr>
<tr><td>auto_increment_increment</td><td>$auto_increment_increment</td></tr>
<tr><td>auto_increment_offset</td><td>$auto_increment_offset</td></tr>
<tr><td>automatic_sp_privileges</td><td>$automatic_sp_privileges</td></tr>
<tr><td>back_log</td><td>$back_log</td></tr>
<tr><td>basedir</td><td>$basedir</td></tr>
<tr><td>binlog_cache_size</td><td>$binlog_cache_size</td></tr>
<tr><td>bulk_insert_buffer_size</td><td>$bulk_insert_buffer_size</td></tr>
<tr><td>character_set_client</td><td>$character_set_client</td></tr>
<tr><td>character_set_connection</td><td>$character_set_connection</td></tr>
<tr><td>character_set_database</td><td>$character_set_database</td></tr>
<tr><td>character_set_filesystem</td><td>$character_set_filesystem</td></tr>
<tr><td>character_set_results</td><td>$character_set_results</td></tr>
<tr><td>character_set_server</td><td>$character_set_server</td></tr>
<tr><td>character_set_system</td><td>$character_set_system</td></tr>
<tr><td>character_sets_dir</td><td>$character_sets_dir</td></tr>
<tr><td>collation_connection</td><td>$collation_connection</td></tr>
<tr><td>collation_database</td><td>$collation_database</td></tr>
<tr><td>collation_server</td><td>$collation_server</td></tr>
<tr><td>completion_type</td><td>$completion_type</td></tr>
<tr><td>concurrent_insert</td><td>$concurrent_insert</td></tr>
<tr><td>connect_timeout</td><td>$connect_timeout</td></tr>
<tr><td>datadir</td><td>$datadir</td></tr>
<tr><td>date_format</td><td>$date_format</td></tr>
<tr><td>datetime_format</td><td>$datetime_format</td></tr>
<tr><td>default_week_format</td><td>$default_week_format</td></tr>
<tr><td>delay_key_write</td><td>$delay_key_write</td></tr>
<tr><td>delayed_insert_limit</td><td>$delayed_insert_limit</td></tr>
<tr><td>delayed_insert_timeout</td><td>$delayed_insert_timeout</td></tr>
<tr><td>delayed_queue_size</td><td>$delayed_queue_size</td></tr>
<tr><td>div_precision_increment</td><td>$div_precision_increment</td></tr>
<tr><td>keep_files_on_create</td><td>$keep_files_on_create</td></tr>
<tr><td>engine_condition_pushdown</td><td>$engine_condition_pushdown</td></tr>
<tr><td>expire_logs_days</td><td>$expire_logs_days</td></tr>
<tr><td>flush</td><td>$flush</td></tr>
<tr><td>flush_time</td><td>$flush_time</td></tr>
<tr><td>ft_boolean_syntax</td><td>$ft_boolean_syntax</td></tr>
<tr><td>ft_max_word_len</td><td>$ft_max_word_len</td></tr>
<tr><td>ft_min_word_len</td><td>$ft_min_word_len</td></tr>
<tr><td>ft_query_expansion_limit</td><td>$ft_query_expansion_limit</td></tr>
<tr><td>ft_stopword_file</td><td>$ft_stopword_file</td></tr>
<tr><td>group_concat_max_len</td><td>$group_concat_max_len</td></tr>
<tr><td>have_archive</td><td>$have_archive</td></tr>
<tr><td>have_bdb</td><td>$have_bdb</td></tr>
<tr><td>have_blackhole_engine</td><td>$have_blackhole_engine</td></tr>
<tr><td>have_compress</td><td>$have_compress</td></tr>
<tr><td>have_crypt</td><td>$have_crypt</td></tr>
<tr><td>have_csv</td><td>$have_csv</td></tr>
<tr><td>have_dynamic_loading</td><td>$have_dynamic_loading</td></tr>
<tr><td>have_example_engine</td><td>$have_example_engine</td></tr>
<tr><td>have_federated_engine</td><td>$have_federated_engine</td></tr>
<tr><td>have_geometry</td><td>$have_geometry</td></tr>
<tr><td>have_innodb</td><td>$have_innodb</td></tr>
<tr><td>have_isam</td><td>$have_isam</td></tr>
<tr><td>have_merge_engine</td><td>$have_merge_engine</td></tr>
<tr><td>have_ndbcluster</td><td>$have_ndbcluster</td></tr>
<tr><td>have_openssl</td><td>$have_openssl</td></tr>
<tr><td>have_ssl</td><td>$have_ssl</td></tr>
<tr><td>have_query_cache</td><td>$have_query_cache</td></tr>
<tr><td>have_raid</td><td>$have_raid</td></tr>
<tr><td>have_rtree_keys</td><td>$have_rtree_keys</td></tr>
<tr><td>have_symlink</td><td>$have_symlink</td></tr>
<tr><td>hostname</td><td>$hostname</td></tr>
<tr><td>init_connect</td><td>$init_connect</td></tr>
<tr><td>init_file</td><td>$init_file</td></tr>
<tr><td>init_slave</td><td>$init_slave</td></tr>
<tr><td>innodb_additional_mem_pool_size</td><td>$innodb_additional_mem_pool_size</td></tr>
<tr><td>innodb_autoextend_increment</td><td>$innodb_autoextend_increment</td></tr>
<tr><td>innodb_buffer_pool_awe_mem_mb</td><td>$innodb_buffer_pool_awe_mem_mb</td></tr>
<tr><td>innodb_buffer_pool_size</td><td>$innodb_buffer_pool_size</td></tr>
<tr><td>innodb_checksums</td><td>$innodb_checksums</td></tr>
<tr><td>innodb_commit_concurrency</td><td>$innodb_commit_concurrency</td></tr>
<tr><td>innodb_concurrency_tickets</td><td>$innodb_concurrency_tickets</td></tr>
<tr><td>innodb_data_file_path</td><td>$innodb_data_file_path</td></tr>
<tr><td>innodb_data_home_dir</td><td>$innodb_data_home_dir</td></tr>
<tr><td>innodb_adaptive_hash_index</td><td>$innodb_adaptive_hash_index</td></tr>
<tr><td>innodb_doublewrite</td><td>$innodb_doublewrite</td></tr>
<tr><td>innodb_fast_shutdown</td><td>$innodb_fast_shutdown</td></tr>
<tr><td>innodb_file_io_threads</td><td>$innodb_file_io_threads</td></tr>
<tr><td>innodb_file_per_table</td><td>$innodb_file_per_table</td></tr>
<tr><td>innodb_flush_log_at_trx_commit</td><td>$innodb_flush_log_at_trx_commit</td></tr>
<tr><td>innodb_flush_method</td><td>$innodb_flush_method</td></tr>
<tr><td>innodb_force_recovery</td><td>$innodb_force_recovery</td></tr>
<tr><td>innodb_lock_wait_timeout</td><td>$innodb_lock_wait_timeout</td></tr>
<tr><td>innodb_locks_unsafe_for_binlog</td><td>$innodb_locks_unsafe_for_binlog</td></tr>
<tr><td>innodb_log_arch_dir</td><td>$innodb_log_arch_dir</td></tr>
<tr><td>innodb_log_archive</td><td>$innodb_log_archive</td></tr>
<tr><td>innodb_log_buffer_size</td><td>$innodb_log_buffer_size</td></tr>
<tr><td>innodb_log_file_size</td><td>$innodb_log_file_size</td></tr>
<tr><td>innodb_log_files_in_group</td><td>$innodb_log_files_in_group</td></tr>
<tr><td>innodb_log_group_home_dir</td><td>$innodb_log_group_home_dir</td></tr>
<tr><td>innodb_max_dirty_pages_pct</td><td>$innodb_max_dirty_pages_pct</td></tr>
<tr><td>innodb_max_purge_lag</td><td>$innodb_max_purge_lag</td></tr>
<tr><td>innodb_mirrored_log_groups</td><td>$innodb_mirrored_log_groups</td></tr>
<tr><td>innodb_open_files</td><td>$innodb_open_files</td></tr>
<tr><td>innodb_rollback_on_timeout</td><td>$innodb_rollback_on_timeout</td></tr>
<tr><td>innodb_support_xa</td><td>$innodb_support_xa</td></tr>
<tr><td>innodb_sync_spin_loops</td><td>$innodb_sync_spin_loops</td></tr>
<tr><td>innodb_table_locks</td><td>$innodb_table_locks</td></tr>
<tr><td>innodb_thread_concurrency</td><td>$innodb_thread_concurrency</td></tr>
<tr><td>innodb_thread_sleep_delay</td><td>$innodb_thread_sleep_delay</td></tr>
<tr><td>innodb_read_ahead</td><td>$innodb_read_ahead</td></tr>
<tr><td>innodb_ibuf_contract_const</td><td>$innodb_ibuf_contract_const</td></tr>
<tr><td>innodb_ibuf_contract_burst</td><td>$innodb_ibuf_contract_burst</td></tr>
<tr><td>innodb_buf_flush_const</td><td>$innodb_buf_flush_const</td></tr>
<tr><td>innodb_buf_flush_burst</td><td>$innodb_buf_flush_burst</td></tr>
<tr><td>interactive_timeout</td><td>$interactive_timeout</td></tr>
<tr><td>join_buffer_size</td><td>$join_buffer_size</td></tr>
<tr><td>key_buffer_size</td><td>$key_buffer_size</td></tr>
<tr><td>key_cache_age_threshold</td><td>$key_cache_age_threshold</td></tr>
<tr><td>key_cache_block_size</td><td>$key_cache_block_size</td></tr>
<tr><td>key_cache_division_limit</td><td>$key_cache_division_limit</td></tr>
<tr><td>language</td><td>$language</td></tr>
<tr><td>large_files_support</td><td>$large_files_support</td></tr>
<tr><td>large_page_size</td><td>$large_page_size</td></tr>
<tr><td>large_pages</td><td>$large_pages</td></tr>
<tr><td>lc_time_names</td><td>$lc_time_names</td></tr>
<tr><td>license</td><td>$license</td></tr>
<tr><td>local_infile</td><td>$local_infile</td></tr>
<tr><td>locked_in_memory</td><td>$locked_in_memory</td></tr>
<tr><td>log</td><td>$log</td></tr>
<tr><td>log_bin</td><td>$log_bin</td></tr>
<tr><td>log_bin_trust_function_creators</td><td>$log_bin_trust_function_creators</td></tr>
<tr><td>log_error</td><td>$log_error</td></tr>
<tr><td>log_queries_not_using_indexes</td><td>$log_queries_not_using_indexes</td></tr>
<tr><td>log_slave_updates</td><td>$log_slave_updates</td></tr>
<tr><td>log_slow_queries</td><td>$log_slow_queries</td></tr>
<tr><td>log_slow_filter</td><td>$log_slow_filter</td></tr>
<tr><td>log_slow_verbosity</td><td>$log_slow_verbosity</td></tr>
<tr><td>log_warnings</td><td>$log_warnings</td></tr>
<tr><td>long_query_time</td><td>$long_query_time</td></tr>
<tr><td>low_priority_updates</td><td>$low_priority_updates</td></tr>
<tr><td>lower_case_file_system</td><td>$lower_case_file_system</td></tr>
<tr><td>lower_case_table_names</td><td>$lower_case_table_names</td></tr>
<tr><td>max_allowed_packet</td><td>$max_allowed_packet</td></tr>
<tr><td>max_binlog_cache_size</td><td>$max_binlog_cache_size</td></tr>
<tr><td>max_binlog_size</td><td>$max_binlog_size</td></tr>
<tr><td>max_connect_errors</td><td>$max_connect_errors</td></tr>
<tr><td>max_connections</td><td>$max_connections</td></tr>
<tr><td>max_delayed_threads</td><td>$max_delayed_threads</td></tr>
<tr><td>max_error_count</td><td>$max_error_count</td></tr>
<tr><td>max_heap_table_size</td><td>$max_heap_table_size</td></tr>
<tr><td>max_insert_delayed_threads</td><td>$max_insert_delayed_threads</td></tr>
<tr><td>max_join_size</td><td>$max_join_size</td></tr>
<tr><td>max_length_for_sort_data</td><td>$max_length_for_sort_data</td></tr>
<tr><td>max_prepared_stmt_count</td><td>$max_prepared_stmt_count</td></tr>
<tr><td>max_relay_log_size</td><td>$max_relay_log_size</td></tr>
<tr><td>max_seeks_for_key</td><td>$max_seeks_for_key</td></tr>
<tr><td>max_sort_length</td><td>$max_sort_length</td></tr>
<tr><td>max_sp_recursion_depth</td><td>$max_sp_recursion_depth</td></tr>
<tr><td>max_tmp_tables</td><td>$max_tmp_tables</td></tr>
<tr><td>max_user_connections</td><td>$max_user_connections</td></tr>
<tr><td>max_write_lock_count</td><td>$max_write_lock_count</td></tr>
<tr><td>min_examined_row_limit</td><td>$min_examined_row_limit</td></tr>
<tr><td>multi_range_count</td><td>$multi_range_count</td></tr>
<tr><td>myisam_data_pointer_size</td><td>$myisam_data_pointer_size</td></tr>
<tr><td>myisam_max_sort_file_size</td><td>$myisam_max_sort_file_size</td></tr>
<tr><td>myisam_recover_options</td><td>$myisam_recover_options</td></tr>
<tr><td>myisam_repair_threads</td><td>$myisam_repair_threads</td></tr>
<tr><td>myisam_sort_buffer_size</td><td>$myisam_sort_buffer_size</td></tr>
<tr><td>myisam_stats_method</td><td>$myisam_stats_method</td></tr>
<tr><td>net_buffer_length</td><td>$net_buffer_length</td></tr>
<tr><td>net_read_timeout</td><td>$net_read_timeout</td></tr>
<tr><td>net_retry_count</td><td>$net_retry_count</td></tr>
<tr><td>net_write_timeout</td><td>$net_write_timeout</td></tr>
<tr><td>new</td><td>$new</td></tr>
<tr><td>old_passwords</td><td>$old_passwords</td></tr>
<tr><td>open_files_limit</td><td>$open_files_limit</td></tr>
<tr><td>optimizer_prune_level</td><td>$optimizer_prune_level</td></tr>
<tr><td>optimizer_search_depth</td><td>$optimizer_search_depth</td></tr>
<tr><td>pid_file</td><td>$pid_file</td></tr>
<tr><td>port</td><td>$port</td></tr>
<tr><td>preload_buffer_size</td><td>$preload_buffer_size</td></tr>
<tr><td>protocol_version</td><td>$protocol_version</td></tr>
<tr><td>query_alloc_block_size</td><td>$query_alloc_block_size</td></tr>
<tr><td>query_cache_limit</td><td>$query_cache_limit</td></tr>
<tr><td>query_cache_min_res_unit</td><td>$query_cache_min_res_unit</td></tr>
<tr><td>query_cache_size</td><td>$query_cache_size</td></tr>
<tr><td>query_cache_type</td><td>$query_cache_type</td></tr>
<tr><td>query_cache_wlock_invalidate</td><td>$query_cache_wlock_invalidate</td></tr>
<tr><td>query_prealloc_size</td><td>$query_prealloc_size</td></tr>
<tr><td>range_alloc_block_size</td><td>$range_alloc_block_size</td></tr>
<tr><td>log_slow_rate_limit</td><td>$log_slow_rate_limit</td></tr>
<tr><td>read_buffer_size</td><td>$read_buffer_size</td></tr>
<tr><td>read_only</td><td>$read_only</td></tr>
<tr><td>read_rnd_buffer_size</td><td>$read_rnd_buffer_size</td></tr>
<tr><td>relay_log</td><td>$relay_log</td></tr>
<tr><td>relay_log_index</td><td>$relay_log_index</td></tr>
<tr><td>relay_log_info_file</td><td>$relay_log_info_file</td></tr>
<tr><td>relay_log_purge</td><td>$relay_log_purge</td></tr>
<tr><td>relay_log_space_limit</td><td>$relay_log_space_limit</td></tr>
<tr><td>rpl_recovery_rank</td><td>$rpl_recovery_rank</td></tr>
<tr><td>secure_auth</td><td>$secure_auth</td></tr>
<tr><td>secure_file_priv</td><td>$secure_file_priv</td></tr>
<tr><td>server_id</td><td>$server_id</td></tr>
<tr><td>skip_external_locking</td><td>$skip_external_locking</td></tr>
<tr><td>skip_networking</td><td>$skip_networking</td></tr>
<tr><td>skip_show_database</td><td>$skip_show_database</td></tr>
<tr><td>slave_compressed_protocol</td><td>$slave_compressed_protocol</td></tr>
<tr><td>slave_load_tmpdir</td><td>$slave_load_tmpdir</td></tr>
<tr><td>slave_net_timeout</td><td>$slave_net_timeout</td></tr>
<tr><td>slave_skip_errors</td><td>$slave_skip_errors</td></tr>
<tr><td>slave_transaction_retries</td><td>$slave_transaction_retries</td></tr>
<tr><td>slow_launch_time</td><td>$slow_launch_time</td></tr>
<tr><td>socket</td><td>$socket</td></tr>
<tr><td>sort_buffer_size</td><td>$sort_buffer_size</td></tr>
<tr><td>sql_big_selects</td><td>$sql_big_selects</td></tr>
<tr><td>sql_mode</td><td>$sql_mode</td></tr>
<tr><td>sql_notes</td><td>$sql_notes</td></tr>
<tr><td>sql_warnings</td><td>$sql_warnings</td></tr>
<tr><td>ssl_ca</td><td>$ssl_ca</td></tr>
<tr><td>ssl_capath</td><td>$ssl_capath</td></tr>
<tr><td>ssl_cert</td><td>$ssl_cert</td></tr>
<tr><td>ssl_cipher</td><td>$ssl_cipher</td></tr>
<tr><td>ssl_key</td><td>$ssl_key</td></tr>
<tr><td>storage_engine</td><td>$storage_engine</td></tr>
<tr><td>sync_binlog</td><td>$sync_binlog</td></tr>
<tr><td>sync_frm</td><td>$sync_frm</td></tr>
<tr><td>system_time_zone</td><td>$system_time_zone</td></tr>
<tr><td>table_cache</td><td>$table_cache</td></tr>
<tr><td>table_lock_wait_timeout</td><td>$table_lock_wait_timeout</td></tr>
<tr><td>table_type</td><td>$table_type</td></tr>
<tr><td>thread_cache_size</td><td>$thread_cache_size</td></tr>
<tr><td>thread_stack</td><td>$thread_stack</td></tr>
<tr><td>time_format</td><td>$time_format</td></tr>
<tr><td>time_zone</td><td>$time_zone</td></tr>
<tr><td>timed_mutexes</td><td>$timed_mutexes</td></tr>
<tr><td>tmp_table_size</td><td>$tmp_table_size</td></tr>
<tr><td>tmpdir</td><td>$tmpdir</td></tr>
<tr><td>transaction_alloc_block_size</td><td>$transaction_alloc_block_size</td></tr>
<tr><td>transaction_prealloc_size</td><td>$transaction_prealloc_size</td></tr>
<tr><td>tx_isolation</td><td>$tx_isolation</td></tr>
<tr><td>updatable_views_with_limit</td><td>$updatable_views_with_limit</td></tr>
<tr><td>version</td><td>$version</td></tr>
<tr><td>version_comment</td><td>$version_comment</td></tr>
<tr><td>version_compile_machine</td><td>$version_compile_machine</td></tr>
<tr><td>version_compile_os</td><td>$version_compile_os</td></tr>
<tr><td>wait_timeout</td><td>$wait_timeout</td></tr>
</table></div>";
 }
 else {
   print "<div id='content'>
<h2>Collected on 0000-00-00</h2>
<table class='tableborder'>
<tr><td>No Contents</td></td>
</table></div>";
 }

?>
<body>
</body>
</html>