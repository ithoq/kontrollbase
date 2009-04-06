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

$g['root'] = $root;
$this->load->view('header',$g);
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

foreach($data as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'cnf_file') { $cnf_file=nl2br($v);}
    if($k == 'os_load_1') { $os_load_1=$v;}
    if($k == 'os_load_5') { $os_load_5=$v;}
    if($k == 'os_load_15') { $os_load_15=$v;}
    if($k == 'os_mem_total') { $os_mem_total=$v;}
    if($k == 'os_mem_used') { $os_mem_used=$v;}
    if($k == 'os_swap_total') { $os_swap_total=$v;}
    if($k == 'os_swap_free') { $os_swap_free=$v;}
    if($k == 'os_cpu_user') { $os_cpu_user=$v;}
    if($k == 'os_cpu_system') { $os_cpu_system=$v;}
    if($k == 'os_cpu_idle') { $os_cpu_idle=$v;}
    if($k == 'queries_per_second') { $queries_per_second=$v;}
    if($k == 'num_schema') { $num_schema=$v;}
    if($k == 'num_tables') { $num_tables=$v;}
    if($k == 'num_connections') { $num_connections=$v;}
    if($k == 'length_data') { $length_data=$v;}
    if($k == 'length_index') { $length_index=$v;}
    if($k == 'engine_count_innodb') { $engine_count_innodb=$v;}
    if($k == 'engine_count_myisam') { $engine_count_myisam=$v;}
    if($k == 'engine_myisam_size_data') { $engine_myisam_size_data=$v;}
    if($k == 'engine_myisam_size_index') { $engine_myisam_size_index=$v;}
    if($k == 'engine_innodb_size_data') { $engine_innodb_size_data=$v;}
    if($k == 'engine_innodb_size_index') { $engine_innodb_size_index=$v;}
    if($k == 'auto_increment_increment') { $auto_increment_increment=$v;}
    if($k == 'auto_increment_offset') { $auto_increment_offset=$v;}
    if($k == 'automatic_sp_privileges') { $automatic_sp_privileges=$v;}
    if($k == 'back_log') { $back_log=$v;}
    if($k == 'basedir') { $basedir=$v;}
    if($k == 'binlog_cache_size') { $binlog_cache_size=$v;}
    if($k == 'bulk_insert_buffer_size') { $bulk_insert_buffer_size=$v;}
    if($k == 'character_set_client') { $character_set_client=$v;}
    if($k == 'character_set_connection') { $character_set_connection=$v;}
    if($k == 'character_set_database') { $character_set_database=$v;}
    if($k == 'character_set_filesystem') { $character_set_filesystem=$v;}
    if($k == 'character_set_results') { $character_set_results=$v;}
    if($k == 'character_set_server') { $character_set_server=$v;}
    if($k == 'character_set_system') { $character_set_system=$v;}
    if($k == 'character_sets_dir') { $character_sets_dir=$v;}
    if($k == 'collation_connection') { $collation_connection=$v;}
    if($k == 'collation_database') { $collation_database=$v;}
    if($k == 'collation_server') { $collation_server=$v;}
    if($k == 'completion_type') { $completion_type=$v;}
    if($k == 'concurrent_insert') { $concurrent_insert=$v;}
    if($k == 'connect_timeout') { $connect_timeout=$v;}
    if($k == 'datadir') { $datadir=$v;}
    if($k == 'date_format') { $date_format=$v;}
    if($k == 'datetime_format') { $datetime_format=$v;}
    if($k == 'default_week_format') { $default_week_format=$v;}
    if($k == 'delay_key_write') { $delay_key_write=$v;}
    if($k == 'delayed_insert_limit') { $delayed_insert_limit=$v;}
    if($k == 'delayed_insert_timeout') { $delayed_insert_timeout=$v;}
    if($k == 'delayed_queue_size') { $delayed_queue_size=$v;}
    if($k == 'div_precision_increment') { $div_precision_increment=$v;}
    if($k == 'keep_files_on_create') { $keep_files_on_create=$v;}
    if($k == 'engine_condition_pushdown') { $engine_condition_pushdown=$v;}
    if($k == 'expire_logs_days') { $expire_logs_days=$v;}
    if($k == 'flush') { $flush=$v;}
    if($k == 'flush_time') { $flush_time=$v;}
    if($k == 'ft_boolean_syntax') { $ft_boolean_syntax=$v;}
    if($k == 'ft_max_word_len') { $ft_max_word_len=$v;}
    if($k == 'ft_min_word_len') { $ft_min_word_len=$v;}
    if($k == 'ft_query_expansion_limit') { $ft_query_expansion_limit=$v;}
    if($k == 'ft_stopword_file') { $ft_stopword_file=$v;}
    if($k == 'group_concat_max_len') { $group_concat_max_len=$v;}
    if($k == 'have_archive') { $have_archive=$v;}
    if($k == 'have_bdb') { $have_bdb=$v;}
    if($k == 'have_blackhole_engine') { $have_blackhole_engine=$v;}
    if($k == 'have_compress') { $have_compress=$v;}
    if($k == 'have_crypt') { $have_crypt=$v;}
    if($k == 'have_csv') { $have_csv=$v;}
    if($k == 'have_dynamic_loading') { $have_dynamic_loading=$v;}
    if($k == 'have_example_engine') { $have_example_engine=$v;}
    if($k == 'have_federated_engine') { $have_federated_engine=$v;}
    if($k == 'have_geometry') { $have_geometry=$v;}
    if($k == 'have_innodb') { $have_innodb=$v;}
    if($k == 'have_isam') { $have_isam=$v;}
    if($k == 'have_merge_engine') { $have_merge_engine=$v;}
    if($k == 'have_ndbcluster') { $have_ndbcluster=$v;}
    if($k == 'have_openssl') { $have_openssl=$v;}
    if($k == 'have_ssl') { $have_ssl=$v;}
    if($k == 'have_query_cache') { $have_query_cache=$v;}
    if($k == 'have_raid') { $have_raid=$v;}
    if($k == 'have_rtree_keys') { $have_rtree_keys=$v;}
    if($k == 'have_symlink') { $have_symlink=$v;}
    if($k == 'hostname') { $hostname=$v;}
    if($k == 'init_connect') { $init_connect=$v;}
    if($k == 'init_file') { $init_file=$v;}
    if($k == 'init_slave') { $init_slave=$v;}
    if($k == 'innodb_additional_mem_pool_size') { $innodb_additional_mem_pool_size=$v;}
    if($k == 'innodb_autoextend_increment') { $innodb_autoextend_increment=$v;}
    if($k == 'innodb_buffer_pool_awe_mem_mb') { $innodb_buffer_pool_awe_mem_mb=$v;}
    if($k == 'innodb_buffer_pool_size') { $innodb_buffer_pool_size=$v;}
    if($k == 'innodb_checksums') { $innodb_checksums=$v;}
    if($k == 'innodb_commit_concurrency') { $innodb_commit_concurrency=$v;}
    if($k == 'innodb_concurrency_tickets') { $innodb_concurrency_tickets=$v;}
    if($k == 'innodb_data_file_path') { $innodb_data_file_path=$v;}
    if($k == 'innodb_data_home_dir') { $innodb_data_home_dir=$v;}
    if($k == 'innodb_adaptive_hash_index') { $innodb_adaptive_hash_index=$v;}
    if($k == 'innodb_doublewrite') { $innodb_doublewrite=$v;}
    if($k == 'innodb_fast_shutdown') { $innodb_fast_shutdown=$v;}
    if($k == 'innodb_file_io_threads') { $innodb_file_io_threads=$v;}
    if($k == 'innodb_file_per_table') { $innodb_file_per_table=$v;}
    if($k == 'innodb_flush_log_at_trx_commit') { $innodb_flush_log_at_trx_commit=$v;}
    if($k == 'innodb_flush_method') { $innodb_flush_method=$v;}
    if($k == 'innodb_force_recovery') { $innodb_force_recovery=$v;}
    if($k == 'innodb_lock_wait_timeout') { $innodb_lock_wait_timeout=$v;}
    if($k == 'innodb_locks_unsafe_for_binlog') { $innodb_locks_unsafe_for_binlog=$v;}
    if($k == 'innodb_log_arch_dir') { $innodb_log_arch_dir=$v;}
    if($k == 'innodb_log_archive') { $innodb_log_archive=$v;}
    if($k == 'innodb_log_buffer_size') { $innodb_log_buffer_size=$v;}
    if($k == 'innodb_log_file_size') { $innodb_log_file_size=$v;}
    if($k == 'innodb_log_files_in_group') { $innodb_log_files_in_group=$v;}
    if($k == 'innodb_log_group_home_dir') { $innodb_log_group_home_dir=$v;}
    if($k == 'innodb_max_dirty_pages_pct') { $innodb_max_dirty_pages_pct=$v;}
    if($k == 'innodb_max_purge_lag') { $innodb_max_purge_lag=$v;}
    if($k == 'innodb_mirrored_log_groups') { $innodb_mirrored_log_groups=$v;}
    if($k == 'innodb_open_files') { $innodb_open_files=$v;}
    if($k == 'innodb_rollback_on_timeout') { $innodb_rollback_on_timeout=$v;}
    if($k == 'innodb_support_xa') { $innodb_support_xa=$v;}
    if($k == 'innodb_sync_spin_loops') { $innodb_sync_spin_loops=$v;}
    if($k == 'innodb_table_locks') { $innodb_table_locks=$v;}
    if($k == 'innodb_thread_concurrency') { $innodb_thread_concurrency=$v;}
    if($k == 'innodb_thread_sleep_delay') { $innodb_thread_sleep_delay=$v;}
    if($k == 'innodb_read_ahead') { $innodb_read_ahead=$v;}
    if($k == 'innodb_ibuf_contract_const') { $innodb_ibuf_contract_const=$v;}
    if($k == 'innodb_ibuf_contract_burst') { $innodb_ibuf_contract_burst=$v;}
    if($k == 'innodb_buf_flush_const') { $innodb_buf_flush_const=$v;}
    if($k == 'innodb_buf_flush_burst') { $innodb_buf_flush_burst=$v;}
    if($k == 'interactive_timeout') { $interactive_timeout=$v;}
    if($k == 'join_buffer_size') { $join_buffer_size=$v;}
    if($k == 'key_buffer_size') { $key_buffer_size=$v;}
    if($k == 'key_cache_age_threshold') { $key_cache_age_threshold=$v;}
    if($k == 'key_cache_block_size') { $key_cache_block_size=$v;}
    if($k == 'key_cache_division_limit') { $key_cache_division_limit=$v;}
    if($k == 'language') { $language=$v;}
    if($k == 'large_files_support') { $large_files_support=$v;}
    if($k == 'large_page_size') { $large_page_size=$v;}
    if($k == 'large_pages') { $large_pages=$v;}
    if($k == 'lc_time_names') { $lc_time_names=$v;}
    if($k == 'license') { $license=$v;}
    if($k == 'local_infile') { $local_infile=$v;}
    if($k == 'locked_in_memory') { $locked_in_memory=$v;}
    if($k == 'log') { $log=$v;}
    if($k == 'log_bin') { $log_bin=$v;}
    if($k == 'log_bin_trust_function_creators') { $log_bin_trust_function_creators=$v;}
    if($k == 'log_error') { $log_error=$v;}
    if($k == 'log_queries_not_using_indexes') { $log_queries_not_using_indexes=$v;}
    if($k == 'log_slave_updates') { $log_slave_updates=$v;}
    if($k == 'log_slow_queries') { $log_slow_queries=$v;}
    if($k == 'log_slow_filter') { $log_slow_filter=$v;}
    if($k == 'log_slow_verbosity') { $log_slow_verbosity=$v;}
    if($k == 'log_warnings') { $log_warnings=$v;}
    if($k == 'long_query_time') { $long_query_time=$v;}
    if($k == 'low_priority_updates') { $low_priority_updates=$v;}
    if($k == 'lower_case_file_system') { $lower_case_file_system=$v;}
    if($k == 'lower_case_table_names') { $lower_case_table_names=$v;}
    if($k == 'max_allowed_packet') { $max_allowed_packet=$v;}
    if($k == 'max_binlog_cache_size') { $max_binlog_cache_size=$v;}
    if($k == 'max_binlog_size') { $max_binlog_size=$v;}
    if($k == 'max_connect_errors') { $max_connect_errors=$v;}
    if($k == 'max_connections') { $max_connections=$v;}
    if($k == 'max_delayed_threads') { $max_delayed_threads=$v;}
    if($k == 'max_error_count') { $max_error_count=$v;}
    if($k == 'max_heap_table_size') { $max_heap_table_size=$v;}
    if($k == 'max_insert_delayed_threads') { $max_insert_delayed_threads=$v;}
    if($k == 'max_join_size') { $max_join_size=$v;}
    if($k == 'max_length_for_sort_data') { $max_length_for_sort_data=$v;}
    if($k == 'max_prepared_stmt_count') { $max_prepared_stmt_count=$v;}
    if($k == 'max_relay_log_size') { $max_relay_log_size=$v;}
    if($k == 'max_seeks_for_key') { $max_seeks_for_key=$v;}
    if($k == 'max_sort_length') { $max_sort_length=$v;}
    if($k == 'max_sp_recursion_depth') { $max_sp_recursion_depth=$v;}
    if($k == 'max_tmp_tables') { $max_tmp_tables=$v;}
    if($k == 'max_user_connections') { $max_user_connections=$v;}
    if($k == 'max_write_lock_count') { $max_write_lock_count=$v;}
    if($k == 'min_examined_row_limit') { $min_examined_row_limit=$v;}
    if($k == 'multi_range_count') { $multi_range_count=$v;}
    if($k == 'myisam_data_pointer_size') { $myisam_data_pointer_size=$v;}
    if($k == 'myisam_max_sort_file_size') { $myisam_max_sort_file_size=$v;}
    if($k == 'myisam_recover_options') { $myisam_recover_options=$v;}
    if($k == 'myisam_repair_threads') { $myisam_repair_threads=$v;}
    if($k == 'myisam_sort_buffer_size') { $myisam_sort_buffer_size=$v;}
    if($k == 'myisam_stats_method') { $myisam_stats_method=$v;}
    if($k == 'net_buffer_length') { $net_buffer_length=$v;}
    if($k == 'net_read_timeout') { $net_read_timeout=$v;}
    if($k == 'net_retry_count') { $net_retry_count=$v;}
    if($k == 'net_write_timeout') { $net_write_timeout=$v;}
    if($k == 'new') { $new=$v;}
    if($k == 'old_passwords') { $old_passwords=$v;}
    if($k == 'open_files_limit') { $open_files_limit=$v;}
    if($k == 'optimizer_prune_level') { $optimizer_prune_level=$v;}
    if($k == 'optimizer_search_depth') { $optimizer_search_depth=$v;}
    if($k == 'pid_file') { $pid_file=$v;}
    if($k == 'port') { $port=$v;}
    if($k == 'preload_buffer_size') { $preload_buffer_size=$v;}
    if($k == 'protocol_version') { $protocol_version=$v;}
    if($k == 'query_alloc_block_size') { $query_alloc_block_size=$v;}
    if($k == 'query_cache_limit') { $query_cache_limit=$v;}
    if($k == 'query_cache_min_res_unit') { $query_cache_min_res_unit=$v;}
    if($k == 'query_cache_size') { $query_cache_size=$v;}
    if($k == 'query_cache_type') { $query_cache_type=$v;}
    if($k == 'query_cache_wlock_invalidate') { $query_cache_wlock_invalidate=$v;}
    if($k == 'query_prealloc_size') { $query_prealloc_size=$v;}
    if($k == 'range_alloc_block_size') { $range_alloc_block_size=$v;}
    if($k == 'log_slow_rate_limit') { $log_slow_rate_limit=$v;}
    if($k == 'read_buffer_size') { $read_buffer_size=$v;}
    if($k == 'read_only') { $read_only=$v;}
    if($k == 'read_rnd_buffer_size') { $read_rnd_buffer_size=$v;}
    if($k == 'relay_log') { $relay_log=$v;}
    if($k == 'relay_log_index') { $relay_log_index=$v;}
    if($k == 'relay_log_info_file') { $relay_log_info_file=$v;}
    if($k == 'relay_log_purge') { $relay_log_purge=$v;}
    if($k == 'relay_log_space_limit') { $relay_log_space_limit=$v;}
    if($k == 'rpl_recovery_rank') { $rpl_recovery_rank=$v;}
    if($k == 'secure_auth') { $secure_auth=$v;}
    if($k == 'secure_file_priv') { $secure_file_priv=$v;}
    if($k == 'server_id') { $server_id=$v;}
    if($k == 'skip_external_locking') { $skip_external_locking=$v;}
    if($k == 'skip_networking') { $skip_networking=$v;}
    if($k == 'skip_show_database') { $skip_show_database=$v;}
    if($k == 'slave_compressed_protocol') { $slave_compressed_protocol=$v;}
    if($k == 'slave_load_tmpdir') { $slave_load_tmpdir=$v;}
    if($k == 'slave_net_timeout') { $slave_net_timeout=$v;}
    if($k == 'slave_skip_errors') { $slave_skip_errors=$v;}
    if($k == 'slave_transaction_retries') { $slave_transaction_retries=$v;}
    if($k == 'slow_launch_time') { $slow_launch_time=$v;}
    if($k == 'socket') { $socket=$v;}
    if($k == 'sort_buffer_size') { $sort_buffer_size=$v;}
    if($k == 'sql_big_selects') { $sql_big_selects=$v;}
    if($k == 'sql_mode') { $sql_mode=$v;}
    if($k == 'sql_notes') { $sql_notes=$v;}
    if($k == 'sql_warnings') { $sql_warnings=$v;}
    if($k == 'ssl_ca') { $ssl_ca=$v;}
    if($k == 'ssl_capath') { $ssl_capath=$v;}
    if($k == 'ssl_cert') { $ssl_cert=$v;}
    if($k == 'ssl_cipher') { $ssl_cipher=$v;}
    if($k == 'ssl_key') { $ssl_key=$v;}
    if($k == 'storage_engine') { $storage_engine=$v;}
    if($k == 'sync_binlog') { $sync_binlog=$v;}
    if($k == 'sync_frm') { $sync_frm=$v;}
    if($k == 'system_time_zone') { $system_time_zone=$v;}
    if($k == 'table_cache') { $table_cache=$v;}
    if($k == 'table_lock_wait_timeout') { $table_lock_wait_timeout=$v;}
    if($k == 'table_type') { $table_type=$v;}
    if($k == 'thread_cache_size') { $thread_cache_size=$v;}
    if($k == 'thread_stack') { $thread_stack=$v;}
    if($k == 'time_format') { $time_format=$v;}
    if($k == 'time_zone') { $time_zone=$v;}
    if($k == 'timed_mutexes') { $timed_mutexes=$v;}
    if($k == 'tmp_table_size') { $tmp_table_size=$v;}
    if($k == 'tmpdir') { $tmpdir=$v;}
    if($k == 'transaction_alloc_block_size') { $transaction_alloc_block_size=$v;}
    if($k == 'transaction_prealloc_size') { $transaction_prealloc_size=$v;}
    if($k == 'tx_isolation') { $tx_isolation=$v;}
    if($k == 'updatable_views_with_limit') { $updatable_views_with_limit=$v;}
    if($k == 'version') { $version=$v;}
    if($k == 'version_comment') { $version_comment=$v;}
    if($k == 'version_compile_machine') { $version_compile_machine=$v;}
    if($k == 'version_compile_os') { $version_compile_os=$v;}
    if($k == 'wait_timeout') { $wait_timeout=$v;}
    if($k == 'Aborted_clients') { $Aborted_clients=$v;}
    if($k == 'Aborted_connects') { $Aborted_connects=$v;}
    if($k == 'Binlog_cache_disk_use') { $Binlog_cache_disk_use=$v;}
    if($k == 'Binlog_cache_use') { $Binlog_cache_use=$v;}
    if($k == 'Bytes_received') { $Bytes_received=$v;}
    if($k == 'Bytes_sent') { $Bytes_sent=$v;}
    if($k == 'Com_admin_commands') { $Com_admin_commands=$v;}
    if($k == 'Com_alter_db') { $Com_alter_db=$v;}
    if($k == 'Com_alter_table') { $Com_alter_table=$v;}
    if($k == 'Com_analyze') { $Com_analyze=$v;}
    if($k == 'Com_backup_table') { $Com_backup_table=$v;}
    if($k == 'Com_begin') { $Com_begin=$v;}
    if($k == 'Com_call_procedure') { $Com_call_procedure=$v;}
    if($k == 'Com_change_db') { $Com_change_db=$v;}
    if($k == 'Com_change_master') { $Com_change_master=$v;}
    if($k == 'Com_check') { $Com_check=$v;}
    if($k == 'Com_checksum') { $Com_checksum=$v;}
    if($k == 'Com_commit') { $Com_commit=$v;}
    if($k == 'Com_create_db') { $Com_create_db=$v;}
    if($k == 'Com_create_function') { $Com_create_function=$v;}
    if($k == 'Com_create_index') { $Com_create_index=$v;}
    if($k == 'Com_create_table') { $Com_create_table=$v;}
    if($k == 'Com_create_user') { $Com_create_user=$v;}
    if($k == 'Com_dealloc_sql') { $Com_dealloc_sql=$v;}
    if($k == 'Com_delete') { $Com_delete=$v;}
    if($k == 'Com_delete_multi') { $Com_delete_multi=$v;}
    if($k == 'Com_do') { $Com_do=$v;}
    if($k == 'Com_drop_db') { $Com_drop_db=$v;}
    if($k == 'Com_drop_function') { $Com_drop_function=$v;}
    if($k == 'Com_drop_index') { $Com_drop_index=$v;}
    if($k == 'Com_drop_table') { $Com_drop_table=$v;}
    if($k == 'Com_drop_user') { $Com_drop_user=$v;}
    if($k == 'Com_execute_sql') { $Com_execute_sql=$v;}
    if($k == 'Com_flush') { $Com_flush=$v;}
    if($k == 'Com_grant') { $Com_grant=$v;}
    if($k == 'Com_ha_close') { $Com_ha_close=$v;}
    if($k == 'Com_ha_open') { $Com_ha_open=$v;}
    if($k == 'Com_ha_read') { $Com_ha_read=$v;}
    if($k == 'Com_help') { $Com_help=$v;}
    if($k == 'Com_insert') { $Com_insert=$v;}
    if($k == 'Com_insert_select') { $Com_insert_select=$v;}
    if($k == 'Com_kill') { $Com_kill=$v;}
    if($k == 'Com_load') { $Com_load=$v;}
    if($k == 'Com_load_master_data') { $Com_load_master_data=$v;}
    if($k == 'Com_load_master_table') { $Com_load_master_table=$v;}
    if($k == 'Com_lock_tables') { $Com_lock_tables=$v;}
    if($k == 'Com_optimize') { $Com_optimize=$v;}
    if($k == 'Com_preload_keys') { $Com_preload_keys=$v;}
    if($k == 'Com_prepare_sql') { $Com_prepare_sql=$v;}
    if($k == 'Com_purge') { $Com_purge=$v;}
    if($k == 'Com_purge_before_date') { $Com_purge_before_date=$v;}
    if($k == 'Com_rename_table') { $Com_rename_table=$v;}
    if($k == 'Com_repair') { $Com_repair=$v;}
    if($k == 'Com_replace') { $Com_replace=$v;}
    if($k == 'Com_replace_select') { $Com_replace_select=$v;}
    if($k == 'Com_reset') { $Com_reset=$v;}
    if($k == 'Com_restore_table') { $Com_restore_table=$v;}
    if($k == 'Com_revoke') { $Com_revoke=$v;}
    if($k == 'Com_revoke_all') { $Com_revoke_all=$v;}
    if($k == 'Com_rollback') { $Com_rollback=$v;}
    if($k == 'Com_savepoint') { $Com_savepoint=$v;}
    if($k == 'Com_select') { $Com_select=$v;}
    if($k == 'Com_set_option') { $Com_set_option=$v;}
    if($k == 'Com_show_binlog_events') { $Com_show_binlog_events=$v;}
    if($k == 'Com_show_binlogs') { $Com_show_binlogs=$v;}
    if($k == 'Com_show_charsets') { $Com_show_charsets=$v;}
    if($k == 'Com_show_collations') { $Com_show_collations=$v;}
    if($k == 'Com_show_column_types') { $Com_show_column_types=$v;}
    if($k == 'Com_show_create_db') { $Com_show_create_db=$v;}
    if($k == 'Com_show_create_table') { $Com_show_create_table=$v;}
    if($k == 'Com_show_databases') { $Com_show_databases=$v;}
    if($k == 'Com_show_errors') { $Com_show_errors=$v;}
    if($k == 'Com_show_fields') { $Com_show_fields=$v;}
    if($k == 'Com_show_grants') { $Com_show_grants=$v;}
    if($k == 'Com_show_innodb_status') { $Com_show_innodb_status=$v;}
    if($k == 'Com_show_keys') { $Com_show_keys=$v;}
    if($k == 'Com_show_logs') { $Com_show_logs=$v;}
    if($k == 'Com_show_master_status') { $Com_show_master_status=$v;}
    if($k == 'Com_show_ndb_status') { $Com_show_ndb_status=$v;}
    if($k == 'Com_show_new_master') { $Com_show_new_master=$v;}
    if($k == 'Com_show_open_tables') { $Com_show_open_tables=$v;}
    if($k == 'Com_show_privileges') { $Com_show_privileges=$v;}
    if($k == 'Com_show_processlist') { $Com_show_processlist=$v;}
    if($k == 'Com_show_slave_hosts') { $Com_show_slave_hosts=$v;}
    if($k == 'Com_show_slave_status') { $Com_show_slave_status=$v;}
    if($k == 'Com_show_status') { $Com_show_status=$v;}
    if($k == 'Com_show_storage_engines') { $Com_show_storage_engines=$v;}
    if($k == 'Com_show_tables') { $Com_show_tables=$v;}
    if($k == 'Com_show_triggers') { $Com_show_triggers=$v;}
    if($k == 'Com_show_variables') { $Com_show_variables=$v;}
    if($k == 'Com_show_warnings') { $Com_show_warnings=$v;}
    if($k == 'Com_slave_start') { $Com_slave_start=$v;}
    if($k == 'Com_slave_stop') { $Com_slave_stop=$v;}
    if($k == 'Com_stmt_close') { $Com_stmt_close=$v;}
    if($k == 'Com_stmt_execute') { $Com_stmt_execute=$v;}
    if($k == 'Com_stmt_fetch') { $Com_stmt_fetch=$v;}
    if($k == 'Com_stmt_prepare') { $Com_stmt_prepare=$v;}
    if($k == 'Com_stmt_reset') { $Com_stmt_reset=$v;}
    if($k == 'Com_stmt_send_long_data') { $Com_stmt_send_long_data=$v;}
    if($k == 'Com_truncate') { $Com_truncate=$v;}
    if($k == 'Com_unlock_tables') { $Com_unlock_tables=$v;}
    if($k == 'Com_update') { $Com_update=$v;}
    if($k == 'Com_update_multi') { $Com_update_multi=$v;}
    if($k == 'Com_xa_commit') { $Com_xa_commit=$v;}
    if($k == 'Com_xa_end') { $Com_xa_end=$v;}
    if($k == 'Com_xa_prepare') { $Com_xa_prepare=$v;}
    if($k == 'Com_xa_recover') { $Com_xa_recover=$v;}
    if($k == 'Com_xa_rollback') { $Com_xa_rollback=$v;}
    if($k == 'Com_xa_start') { $Com_xa_start=$v;}
    if($k == 'Compression') { $Compression=$v;}
    if($k == 'Connections') { $Connections=$v;}
    if($k == 'Created_tmp_disk_tables') { $Created_tmp_disk_tables=$v;}
    if($k == 'Created_tmp_files') { $Created_tmp_files=$v;}
    if($k == 'Created_tmp_tables') { $Created_tmp_tables=$v;}
    if($k == 'Delayed_errors') { $Delayed_errors=$v;}
    if($k == 'Delayed_insert_threads') { $Delayed_insert_threads=$v;}
    if($k == 'Delayed_writes') { $Delayed_writes=$v;}
    if($k == 'Flush_commands') { $Flush_commands=$v;}
    if($k == 'Handler_commit') { $Handler_commit=$v;}
    if($k == 'Handler_delete') { $Handler_delete=$v;}
    if($k == 'Handler_discover') { $Handler_discover=$v;}
    if($k == 'Handler_prepare') { $Handler_prepare=$v;}
    if($k == 'Handler_read_first') { $Handler_read_first=$v;}
    if($k == 'Handler_read_key') { $Handler_read_key=$v;}
    if($k == 'Handler_read_next') { $Handler_read_next=$v;}
    if($k == 'Handler_read_prev') { $Handler_read_prev=$v;}
    if($k == 'Handler_read_rnd') { $Handler_read_rnd=$v;}
    if($k == 'Handler_read_rnd_next') { $Handler_read_rnd_next=$v;}
    if($k == 'Handler_rollback') { $Handler_rollback=$v;}
    if($k == 'Handler_savepoint') { $Handler_savepoint=$v;}
    if($k == 'Handler_savepoint_rollback') { $Handler_savepoint_rollback=$v;}
    if($k == 'Handler_update') { $Handler_update=$v;}
    if($k == 'Handler_write') { $Handler_write=$v;}
    if($k == 'Innodb_buffer_pool_pages_data') { $Innodb_buffer_pool_pages_data=$v;}
    if($k == 'Innodb_buffer_pool_pages_dirty') { $Innodb_buffer_pool_pages_dirty=$v;}
    if($k == 'Innodb_buffer_pool_pages_flushed') { $Innodb_buffer_pool_pages_flushed=$v;}
    if($k == 'Innodb_buffer_pool_pages_free') { $Innodb_buffer_pool_pages_free=$v;}
    if($k == 'Innodb_buffer_pool_pages_misc') { $Innodb_buffer_pool_pages_misc=$v;}
    if($k == 'Innodb_buffer_pool_pages_total') { $Innodb_buffer_pool_pages_total=$v;}
    if($k == 'Innodb_buffer_pool_read_ahead_rnd') { $Innodb_buffer_pool_read_ahead_rnd=$v;}
    if($k == 'Innodb_buffer_pool_read_ahead_seq') { $Innodb_buffer_pool_read_ahead_seq=$v;}
    if($k == 'Innodb_buffer_pool_read_requests') { $Innodb_buffer_pool_read_requests=$v;}
    if($k == 'Innodb_buffer_pool_reads') { $Innodb_buffer_pool_reads=$v;}
    if($k == 'Innodb_buffer_pool_wait_free') { $Innodb_buffer_pool_wait_free=$v;}
    if($k == 'Innodb_buffer_pool_write_requests') { $Innodb_buffer_pool_write_requests=$v;}
    if($k == 'Innodb_data_fsyncs') { $Innodb_data_fsyncs=$v;}
    if($k == 'Innodb_data_pending_fsyncs') { $Innodb_data_pending_fsyncs=$v;}
    if($k == 'Innodb_data_pending_reads') { $Innodb_data_pending_reads=$v;}
    if($k == 'Innodb_data_pending_writes') { $Innodb_data_pending_writes=$v;}
    if($k == 'Innodb_data_read') { $Innodb_data_read=$v;}
    if($k == 'Innodb_data_reads') { $Innodb_data_reads=$v;}
    if($k == 'Innodb_data_writes') { $Innodb_data_writes=$v;}
    if($k == 'Innodb_data_written') { $Innodb_data_written=$v;}
    if($k == 'Innodb_dblwr_pages_written') { $Innodb_dblwr_pages_written=$v;}
    if($k == 'Innodb_dblwr_writes') { $Innodb_dblwr_writes=$v;}
    if($k == 'Innodb_log_waits') { $Innodb_log_waits=$v;}
    if($k == 'Innodb_log_write_requests') { $Innodb_log_write_requests=$v;}
    if($k == 'Innodb_log_writes') { $Innodb_log_writes=$v;}
    if($k == 'Innodb_os_log_fsyncs') { $Innodb_os_log_fsyncs=$v;}
    if($k == 'Innodb_os_log_pending_fsyncs') { $Innodb_os_log_pending_fsyncs=$v;}
    if($k == 'Innodb_os_log_pending_writes') { $Innodb_os_log_pending_writes=$v;}
    if($k == 'Innodb_os_log_written') { $Innodb_os_log_written=$v;}
    if($k == 'Innodb_page_size') { $Innodb_page_size=$v;}
    if($k == 'Innodb_pages_created') { $Innodb_pages_created=$v;}
    if($k == 'Innodb_pages_read') { $Innodb_pages_read=$v;}
    if($k == 'Innodb_pages_written') { $Innodb_pages_written=$v;}
    if($k == 'Innodb_row_lock_current_waits') { $Innodb_row_lock_current_waits=$v;}
    if($k == 'Innodb_row_lock_time') { $Innodb_row_lock_time=$v;}
    if($k == 'Innodb_row_lock_time_avg') { $Innodb_row_lock_time_avg=$v;}
    if($k == 'Innodb_row_lock_time_max') { $Innodb_row_lock_time_max=$v;}
    if($k == 'Innodb_row_lock_waits') { $Innodb_row_lock_waits=$v;}
    if($k == 'Innodb_rows_deleted') { $Innodb_rows_deleted=$v;}
    if($k == 'Innodb_rows_inserted') { $Innodb_rows_inserted=$v;}
    if($k == 'Innodb_rows_read') { $Innodb_rows_read=$v;}
    if($k == 'Innodb_rows_updated') { $Innodb_rows_updated=$v;}
    if($k == 'Key_blocks_not_flushed') { $Key_blocks_not_flushed=$v;}
    if($k == 'Key_blocks_unused') { $Key_blocks_unused=$v;}
    if($k == 'Key_blocks_used') { $Key_blocks_used=$v;}
    if($k == 'Key_read_requests') { $Key_read_requests=$v;}
    if($k == 'Key_reads') { $Key_reads=$v;}
    if($k == 'Key_write_requests') { $Key_write_requests=$v;}
    if($k == 'Key_writes') { $Key_writes=$v;}
    if($k == 'Last_query_cost') { $Last_query_cost=$v;}
    if($k == 'Max_used_connections') { $Max_used_connections=$v;}
    if($k == 'Not_flushed_delayed_rows') { $Not_flushed_delayed_rows=$v;}
    if($k == 'Open_files') { $Open_files=$v;}
    if($k == 'Open_streams') { $Open_streams=$v;}
    if($k == 'Open_tables') { $Open_tables=$v;}
    if($k == 'Opened_tables') { $Opened_tables=$v;}
    if($k == 'Prepared_stmt_count') { $Prepared_stmt_count=$v;}
    if($k == 'Qcache_free_blocks') { $Qcache_free_blocks=$v;}
    if($k == 'Qcache_free_memory') { $Qcache_free_memory=$v;}
    if($k == 'Qcache_hits') { $Qcache_hits=$v;}
    if($k == 'Qcache_inserts') { $Qcache_inserts=$v;}
    if($k == 'Qcache_lowmem_prunes') { $Qcache_lowmem_prunes=$v;}
    if($k == 'Qcache_not_cached') { $Qcache_not_cached=$v;}
    if($k == 'Qcache_queries_in_cache') { $Qcache_queries_in_cache=$v;}
    if($k == 'Qcache_total_blocks') { $Qcache_total_blocks=$v;}
    if($k == 'Questions') { $Questions=$v;}
    if($k == 'Rpl_status') { $Rpl_status=$v;}
    if($k == 'Select_full_join') { $Select_full_join=$v;}
    if($k == 'Select_full_range_join') { $Select_full_range_join=$v;}
    if($k == 'Select_range') { $Select_range=$v;}
    if($k == 'Select_range_check') { $Select_range_check=$v;}
    if($k == 'Select_scan') { $Select_scan=$v;}
    if($k == 'Slave_open_temp_tables') { $Slave_open_temp_tables=$v;}
    if($k == 'Slave_retried_transactions') { $Slave_retried_transactions=$v;}
    if($k == 'Slave_running') { $Slave_running=$v;}
    if($k == 'Slow_launch_threads') { $Slow_launch_threads=$v;}
    if($k == 'Slow_queries') { $Slow_queries=$v;}
    if($k == 'Sort_merge_passes') { $Sort_merge_passes=$v;}
    if($k == 'Sort_range') { $Sort_range=$v;}
    if($k == 'Sort_rows') { $Sort_rows=$v;}
    if($k == 'Sort_scan') { $Sort_scan=$v;}
    if($k == 'Table_locks_immediate') { $Table_locks_immediate=$v;}
    if($k == 'Table_locks_waited') { $Table_locks_waited=$v;}
    if($k == 'Tc_log_max_pages_used') { $Tc_log_max_pages_used=$v;}
    if($k == 'Tc_log_page_size') { $Tc_log_page_size=$v;}
    if($k == 'Tc_log_page_waits') { $Tc_log_page_waits=$v;}
    if($k == 'Threads_cached') { $Threads_cached=$v;}
    if($k == 'Threads_connected') { $Threads_connected=$v;}
    if($k == 'Threads_created') { $Threads_created=$v;}
    if($k == 'Threads_running') { $Threads_running=$v;}
    if($k == 'Uptime') { $Uptime=$v;}
    if($k == 'server_snmp_error_code') { $server_snmp_error_code=$v;}
    if($k == 'server_mysql_error_code') { $server_mysql_error_code=$v;}
    if($k == 'Slave_IO_Running') { $Slave_IO_Running=$v;}
    if($k == 'Slave_SQL_Running') { $Slave_SQL_Running=$v;}
    if($k == 'Seconds_Behind_Master') { $Seconds_Behind_Master=$v;}
    if($k == 'illegal_global_user') { $illegal_global_user=$v;}
    if($k == 'illegal_grant_user') { $illegal_grant_user=$v;}
    if($k == 'illegal_remote_root') { $illegal_remote_root=$v;}
    if($k == 'illegal_user_nopass') { $illegal_user_nopass=$v;}
    if($k == 'illegal_user_noname') { $illegal_user_noname=$v;}
    if($k == 'collection_time_elapse') { $collection_time_elapse=$v;}
    if($k == 'Creation_time') { $Creation_time=$v;}
  }
}

print "<table id='container'>
<tr><td colspan='3'><h3>Hostname: $hostname</h3></td></tr>
<tr><td>Variable</td><td>Value</td></tr>
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
<tr><td>server_snmp_error_code</td><td>$server_snmp_error_code</td></tr>
<tr><td>server_mysql_error_code</td><td>$server_mysql_error_code</td></tr>
<tr><td>Slave_IO_Running</td><td>$Slave_IO_Running</td></tr>
<tr><td>Slave_SQL_Running</td><td>$Slave_SQL_Running</td></tr>
<tr><td>Seconds_Behind_Master</td><td>$Seconds_Behind_Master</td></tr>
<tr><td>illegal_global_user</td><td>$illegal_global_user</td></tr>
<tr><td>illegal_grant_user</td><td>$illegal_grant_user</td></tr>
<tr><td>illegal_remote_root</td><td>$illegal_remote_root</td></tr>
<tr><td>illegal_user_nopass</td><td>$illegal_user_nopass</td></tr>
<tr><td>illegal_user_noname</td><td>$illegal_user_noname</td></tr>
<tr><td>collection_time_elapse</td><td>$collection_time_elapse</td></tr>
<tr><td>Creation_time</td><td>$Creation_time</td></tr>
<tr><td colspan='2'><hr></td></tr> 
<tr><td>cnf file</td><td>$cnf_file</td></tr>";

print "</tr></table>";
 //end of page
 include("includes/footer.php");
 ?>