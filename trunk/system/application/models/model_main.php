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

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_main extends Model
{

  function __construct()
  {
    $this->Model_main();
  }
  
  function Model_main()
  {
    parent::Model();
  }

  function audit_user($system_user_id,$page_id,$host_id) {
    log_message('debug', "Audit insert starting.");
    $dbr = $this->load->database('write', TRUE);
    $system_user_id = $this->db->escape_str($system_user_id);
    $page_id = $this->db->escape_str($page_id);
    $host_id = $this->db->escape_str($host_id);

    $sql0="INSERT DELAYED INTO `system_users_audit` (
`id` ,
`system_user_id` ,
`system_pages_id` ,
`system_pages_attribute` ,
`Creation_time`
)
VALUES (
NULL , '$system_user_id', '$page_id', '$host_id', NOW( )
);";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "Audit log insert FAILED");
      $this->db->trans_off();
      return 1;
    }
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function get_summary_host($server_list_id) {
    log_message('debug', "Starting get_summary_host");
    $dbr = $this->load->database('read', TRUE);
    $this->load->helper('number');
    $sql1="select t1.id as server_list_id,t1.server_hostname,t2.id,t2.server_list_id,t2.os_load_15,t2.os_mem_total,round((t2.os_mem_total / t2.os_mem_used)) as mem_perc,round(t2.queries_per_second,2) as queries_per_second,t2.num_schema,t2.num_tables,t2.num_connections,t2.length_data,t2.length_index,(t2.length_data + t2.length_index) as total_size,t2.engine_count_innodb,t2.engine_count_myisam,t2.engine_myisam_size_data,t2.engine_myisam_size_index,(t2.engine_myisam_size_data + t2.engine_myisam_size_index) as engine_myisam_size_total, t2.engine_innodb_size_data,t2.engine_innodb_size_index,(t2.engine_innodb_size_data + t2.engine_innodb_size_index) as engine_innodb_size_total from server_list as t1, server_statistics as t2 where t1.id = t2.server_list_id and t2.server_list_id = '$server_list_id' order by t2.id desc limit 1";
    $query1 = $dbr->query($sql1);
    if($query1->num_rows() > 0) {
      log_message('debug', "results greater than zero for host: $server_list_id, sql: $sql1");
      foreach ($query1->result() as $row1) {    
	$server_list_id = $row1->server_list_id;
	$server_hostname = $row1->server_hostname;
	$os_load_15 = $row1->os_load_15;
	$mem_perc = $row1->mem_perc;
	$os_mem_total = $row1->os_mem_total;
	$queries_per_second = $row1->queries_per_second;
	$num_schema = $row1->num_schema;
	$num_tables = $row1->num_tables;
	$num_connections = $row1->num_connections;
	$length_data = $row1->length_data;
	$length_index = $row1->length_index;
	$total_size = $row1->total_size;
	$engine_count_innodb = $row1->engine_count_innodb;
	$engine_count_myisam = $row1->engine_count_myisam;
	$engine_myisam_size_data = $row1->engine_myisam_size_data;
	$engine_myisam_size_index = $row1->engine_myisam_size_index;
	$engine_myisam_size_total = $row1->engine_myisam_size_total;
	$engine_innodb_size_data = $row1->engine_innodb_size_data;
	$engine_innodb_size_index = $row1->engine_innodb_size_index;
	$engine_innodb_size_total = $row1->engine_innodb_size_total;
	$data = array(array(
			  "server_list_id" => "$server_list_id",
			  "server_hostname" => "$server_hostname",
			  "os_load_15" => "$os_load_15",
			  "mem_perc" => "$mem_perc",
			  "os_mem_total" => "$os_mem_total",
			  "queries_per_second" => "$queries_per_second",
			  "num_schema" => "$num_schema",
			  "num_tables" => "$num_tables",
			  "num_connections" => "$num_connections",
			  "length_data" => "$length_data",
			  "length_index" => "$length_index",
			  "total_size" => "$total_size",
			  "engine_count_innodb" => "$engine_count_innodb",
			  "engine_count_myisam" => "$engine_count_myisam",
			  "engine_myisam_size_data" => "$engine_myisam_size_data",
			  "engine_myisam_size_index" => "$engine_myisam_size_index",
			  "engine_myisam_size_total" => "$engine_myisam_size_total",
			  "engine_innodb_size_data" => "$engine_innodb_size_data",
			  "engine_innodb_size_index" => "$engine_innodb_size_index",
			  "engine_innodb_size_total" => "$engine_innodb_size_total"));
      }
    }
    else {
      $data = array(array(
                          "server_list_id" => "0",
                          "server_hostname" => "0",
                          "os_load_15" => "0",
                          "mem_perc" => "0",
                          "os_mem_total" => "0",
                          "queries_per_second" => "0",
                          "num_schema" => "0",
                          "num_tables" => "0",
                          "num_connections" => "0",
                          "length_data" => "0",
                          "length_index" => "0",
                          "total_size" => "0",
                          "engine_count_innodb" => "0",
                          "engine_count_myisam" => "0",
                          "engine_myisam_size_data" => "0",
                          "engine_myisam_size_index" => "0",
                          "engine_myisam_size_total" => "0",
                          "engine_innodb_size_data" => "0",
                          "engine_innodb_size_index" => "0",
                          "engine_innodb_size_total" => "0"));
    }
    return $data;
  }
  
  function get_summary_data() {
    log_message('debug', "Starting get_summary_data");
    $dbr = $this->load->database('read', TRUE);
    $this->load->helper('number');
    $user_server_client_id = $this->phpsession->get('user_server_client_id');
    if($user_server_client_id == 0) {
      $sql0 = "select id,server_hostname from server_list where active >='1' order by server_hostname";
    }
    else {
      $sql0 = "select id,server_hostname from server_list where active >='1' and server_client_id = '$user_server_client_id' order by server_hostname";
    }
    $i=0;
    $query = $dbr->query($sql0);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$id=$row->id;
	$sql1="select t1.id as server_list_id,t1.server_hostname,t2.id,t2.server_list_id,t2.os_load_15,t2.os_mem_total,round((t2.os_mem_total / t2.os_mem_used)) as mem_perc,round(t2.queries_per_second,2) as queries_per_second,t2.num_schema,t2.num_tables,t2.num_connections,t2.length_data,t2.length_index,(t2.length_data + t2.length_index) as total_size,t2.engine_count_innodb,t2.engine_count_myisam,t2.engine_myisam_size_data,t2.engine_myisam_size_index,(t2.engine_myisam_size_data + t2.engine_myisam_size_index) as engine_myisam_size_total, t2.engine_innodb_size_data,t2.engine_innodb_size_index,(t2.engine_innodb_size_data + t2.engine_innodb_size_index) as engine_innodb_size_total from server_list as t1, server_statistics as t2 where t1.id = t2.server_list_id and t2.server_list_id = '$id' order by t2.id desc limit 1";
	$query1 = $dbr->query($sql1);
	if($query1->num_rows() > 0) {
	  log_message('debug', "results greater than zero for host: $id, sql: $sql1");
	  foreach ($query1->result() as $row1) {	    
	    $server_list_id = $row1->server_list_id;
	    $server_hostname = $row1->server_hostname;
	    $os_load_15 = $row1->os_load_15;
	    $mem_perc = $row1->mem_perc;
	    $os_mem_total = $row1->os_mem_total;
	    $queries_per_second = $row1->queries_per_second;
	    $num_schema = $row1->num_schema;
	    $num_tables = $row1->num_tables;
	    $num_connections = $row1->num_connections;
	    $length_data = $row1->length_data;
	    $length_index = $row1->length_index;
	    $total_size = $row1->total_size;
	    $engine_count_innodb = $row1->engine_count_innodb;
	    $engine_count_myisam = $row1->engine_count_myisam;
	    $engine_myisam_size_data = $row1->engine_myisam_size_data;
	    $engine_myisam_size_index = $row1->engine_myisam_size_index;
	    $engine_myisam_size_total = $row1->engine_myisam_size_total;
	    $engine_innodb_size_data = $row1->engine_innodb_size_data;
	    $engine_innodb_size_index = $row1->engine_innodb_size_index;
	    $engine_innodb_size_total = $row1->engine_innodb_size_total;
	    $data[$i] = array(
			      "server_list_id" => "$server_list_id",
			      "server_hostname" => "$server_hostname",
			      "os_load_15" => "$os_load_15",
			      "mem_perc" => "$mem_perc",
			      "os_mem_total" => "$os_mem_total",
			      "queries_per_second" => "$queries_per_second",
			      "num_schema" => "$num_schema",
			      "num_tables" => "$num_tables",
			      "num_connections" => "$num_connections",
			      "length_data" => "$length_data",
			      "length_index" => "$length_index",
			      "total_size" => "$total_size",
			      "engine_count_innodb" => "$engine_count_innodb",
			      "engine_count_myisam" => "$engine_count_myisam",
			      "engine_myisam_size_data" => "$engine_myisam_size_data",
			      "engine_myisam_size_index" => "$engine_myisam_size_index",
			      "engine_myisam_size_total" => "$engine_myisam_size_total",
			      "engine_innodb_size_data" => "$engine_innodb_size_data",
			      "engine_innodb_size_index" => "$engine_innodb_size_index",
			      "engine_innodb_size_total" => "$engine_innodb_size_total");
	    $i++;
	  }
	}
      }
    }   
    else {
      log_message('debug', "Data set as 0 return");
      $data = array(array(
			  "server_list_id" => "0",
			  "server_hostname" => "0",
			  "os_load_15" => "0",
			  "mem_perc" => "0",
			  "os_mem_total" => "0",
			  "queries_per_second" => "0",
			  "num_schema" => "0",
			  "num_tables" => "0",
			  "num_connections" => "0",
			  "length_data" => "0",
			  "length_index" => "0",
			  "total_size" => "0",
			  "engine_count_innodb" => "0",
			  "engine_count_myisam" => "0",
			  "engine_myisam_size_data" => "0",
			  "engine_myisam_size_index" => "0",
			  "engine_myisam_size_total" => "0",
			  "engine_innodb_size_data" => "0",
			  "engine_innodb_size_index" => "0",
			  "engine_innodb_size_total" => "0"));
    }
    if(!isset($data)) {
      $data = array(array(
                          "server_list_id" => "0",
                          "server_hostname" => "0",
                          "os_load_15" => "0",
                          "mem_perc" => "0",
                          "os_mem_total" => "0",
                          "queries_per_second" => "0",
                          "num_schema" => "0",
                          "num_tables" => "0",
                          "num_connections" => "0",
                          "length_data" => "0",
                          "length_index" => "0",
                          "total_size" => "0",
                          "engine_count_innodb" => "0",
                          "engine_count_myisam" => "0",
                          "engine_myisam_size_data" => "0",
                          "engine_myisam_size_index" => "0",
                          "engine_myisam_size_total" => "0",
                          "engine_innodb_size_data" => "0",
                          "engine_innodb_size_index" => "0",
                          "engine_innodb_size_total" => "0"));
    }
    log_message('debug', "Returning data");
    return $data;
  }
  
  function get_cnf($server_list_id) {
    log_message('debug', "Starting model_main -> get_cnf");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select cnf_file,creation_time from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array("cnf_file" => "", "creation_time" => "0000-00-00");
    }
    return $data;
  }

  function get_overview_stats() {
    log_message('debug', "Starting model_main -> get_overview_stats");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select ((MAX(os_mem_used)) / POWER(1024,3)) max_os_mem_used, ((MIN(os_mem_used)) / POWER(1024,3)) min_os_mem_used, ((AVG(os_mem_used)) / POWER(1024,3)) avg_os_mem_used, ((STDDEV_POP(os_mem_used)) / POWER(1024,3))stdev_os_mem_used, ((MAX(length_data + length_index)) / POWER(1024,3)) max_size, ((MIN(length_data + length_index)) / POWER(1024,3)) min_size, ((AVG(length_data + length_index)) / POWER(1024,3)) avg_size, ((STDDEV_POP(length_data + length_index)) / POWER(1024,3)) stdev_size, MAX(num_connections) max_connections,  MIN(num_connections) min_connections, AVG(num_connections) avg_connections, STDDEV_POP(num_connections) stdev_connections, MAX(queries_per_second) max_qps, MIN(queries_per_second) min_qps, AVG(queries_per_second) avg_qps, STDDEV_POP(queries_per_second) stdev_qps from server_statistics where DATE_SUB(CURDATE(), INTERVAL 7 DAY)";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array(  "max_os_mem_used" => "0",
		      "min_os_mem_used" => "0",
		      "avg_os_mem_used" => "0",
		      "stdev_os_mem_used" => "0",
		      "max_size" => "0",
		      "min_size" => "0",
		      "avg_size" => "0",
		      "stdev_size" => "0",
		      "max_connections" => "0",
		      "min_connections" => "0",
		      "avg_connections" => "0",
		      "stdev_connections" => "0",
		      "stdev_os_mem_used" => "0",
		      "max_qps" => "0",
		      "min_qps" => "0",
		      "avg_qps" => "0",
		      "stdev_qps" => "0");
    }
    return $data;
  }

  function get_host_growth_30($server_list_id) {
    log_message('debug', "Starting model_main -> get_host_growth_30");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select (select (((length_data + length_index) / 1024) / 1024) as curr_size from server_statistics where server_list_id='12' and CURDATE() <= Creation_time order by Creation_time asc limit 1) as 0_day_size_mb, 

(select (((length_data + length_index) / 1024) / 1024) as curr_size from server_statistics where server_list_id='12' and DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= Creation_time order by Creation_time asc limit 1) as 30_day_size_mb,

 ( (select (((length_data + length_index) / 1024) / 1024) as curr_size from server_statistics where server_list_id='12' and CURDATE() <= Creation_time order by Creation_time asc limit 1) - (select (((length_data + length_index) / 1024) / 1024) as curr_size from server_statistics where server_list_id='12' and DATE_SUB(CURDATE(),INTERVAL 30 DAY) <= Creation_time order by Creation_time asc limit 1)) as difference";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array("0_day_size_mb" => "0",
		    "30_day_size_mb" => "0",
		    "difference" => "0");
    }
    return $data;
  }

  function get_server_variables($server_list_id) {
    log_message('debug', "Starting model_main -> get_cnf");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$os_load_1 = $row->os_load_1;
	$os_load_5 = $row->os_load_5;
	$os_load_15 = $row->os_load_15;
	$os_mem_total = $row->os_mem_total;
	$os_mem_used = $row->os_mem_used;
	$os_swap_total = $row->os_swap_total;
	$os_swap_free = $row->os_swap_free;
	$os_cpu_user = $row->os_cpu_user;
	$os_cpu_system = $row->os_cpu_system;
	$os_cpu_idle = $row->os_cpu_idle;
	$queries_per_second = $row->queries_per_second;
	$num_schema = $row->num_schema;
	$num_tables = $row->num_tables;
	$num_connections = $row->num_connections;
	$length_data = $row->length_data;
	$length_index = $row->length_index;
	$engine_count_innodb = $row->engine_count_innodb;
	$engine_count_myisam = $row->engine_count_myisam;
	$engine_myisam_size_data = $row->engine_myisam_size_data;
	$engine_myisam_size_index = $row->engine_myisam_size_index;
	$engine_innodb_size_data = $row->engine_innodb_size_data;
	$engine_innodb_size_index = $row->engine_innodb_size_index;
	$auto_increment_increment = $row->auto_increment_increment;
	$auto_increment_offset = $row->auto_increment_offset;
	$automatic_sp_privileges = $row->automatic_sp_privileges;
	$back_log = $row->back_log;
	$basedir = $row->basedir;
	$binlog_cache_size = $row->binlog_cache_size;
	$bulk_insert_buffer_size = $row->bulk_insert_buffer_size;
	$character_set_client = $row->character_set_client;
	$character_set_connection = $row->character_set_connection;
	$character_set_database = $row->character_set_database;
	$character_set_filesystem = $row->character_set_filesystem;
	$character_set_results = $row->character_set_results;
	$character_set_server = $row->character_set_server;
	$character_set_system = $row->character_set_system;
	$character_sets_dir = $row->character_sets_dir;
	$collation_connection = $row->collation_connection;
	$collation_database = $row->collation_database;
	$collation_server = $row->collation_server;
	$completion_type = $row->completion_type;
	$concurrent_insert = $row->concurrent_insert;
	$connect_timeout = $row->connect_timeout;
	$datadir = $row->datadir;
	$date_format = $row->date_format;
	$datetime_format = $row->datetime_format;
	$default_week_format = $row->default_week_format;
	$delay_key_write = $row->delay_key_write;
	$delayed_insert_limit = $row->delayed_insert_limit;
	$delayed_insert_timeout = $row->delayed_insert_timeout;
	$delayed_queue_size = $row->delayed_queue_size;
	$div_precision_increment = $row->div_precision_increment;
	$keep_files_on_create = $row->keep_files_on_create;
	$engine_condition_pushdown = $row->engine_condition_pushdown;
	$expire_logs_days = $row->expire_logs_days;
	$flush = $row->flush;
	$flush_time = $row->flush_time;
	$ft_boolean_syntax = $row->ft_boolean_syntax;
	$ft_max_word_len = $row->ft_max_word_len;
	$ft_min_word_len = $row->ft_min_word_len;
	$ft_query_expansion_limit = $row->ft_query_expansion_limit;
	$ft_stopword_file = $row->ft_stopword_file;
	$group_concat_max_len = $row->group_concat_max_len;
	$have_archive = $row->have_archive;
	$have_bdb = $row->have_bdb;
	$have_blackhole_engine = $row->have_blackhole_engine;
	$have_compress = $row->have_compress;
	$have_crypt = $row->have_crypt;
	$have_csv = $row->have_csv;
	$have_dynamic_loading = $row->have_dynamic_loading;
	$have_example_engine = $row->have_example_engine;
	$have_federated_engine = $row->have_federated_engine;
	$have_geometry = $row->have_geometry;
	$have_innodb = $row->have_innodb;
	$have_isam = $row->have_isam;
	$have_merge_engine = $row->have_merge_engine;
	$have_ndbcluster = $row->have_ndbcluster;
	$have_openssl = $row->have_openssl;
	$have_ssl = $row->have_ssl;
	$have_query_cache = $row->have_query_cache;
	$have_raid = $row->have_raid;
	$have_rtree_keys = $row->have_rtree_keys;
	$have_symlink = $row->have_symlink;
	$hostname = $row->hostname;
	$init_connect = $row->init_connect;
	$init_file = $row->init_file;
	$init_slave = $row->init_slave;
	$innodb_additional_mem_pool_size = $row->innodb_additional_mem_pool_size;
	$innodb_autoextend_increment = $row->innodb_autoextend_increment;
	$innodb_buffer_pool_awe_mem_mb = $row->innodb_buffer_pool_awe_mem_mb;
	$innodb_buffer_pool_size = $row->innodb_buffer_pool_size;
	$innodb_checksums = $row->innodb_checksums;
	$innodb_commit_concurrency = $row->innodb_commit_concurrency;
	$innodb_concurrency_tickets = $row->innodb_concurrency_tickets;
	$innodb_data_file_path = $row->innodb_data_file_path;
	$innodb_data_home_dir = $row->innodb_data_home_dir;
	$innodb_adaptive_hash_index = $row->innodb_adaptive_hash_index;
	$innodb_doublewrite = $row->innodb_doublewrite;
	$innodb_fast_shutdown = $row->innodb_fast_shutdown;
	$innodb_file_io_threads = $row->innodb_file_io_threads;
	$innodb_file_per_table = $row->innodb_file_per_table;
	$innodb_flush_log_at_trx_commit = $row->innodb_flush_log_at_trx_commit;
	$innodb_flush_method = $row->innodb_flush_method;
	$innodb_force_recovery = $row->innodb_force_recovery;
	$innodb_lock_wait_timeout = $row->innodb_lock_wait_timeout;
	$innodb_locks_unsafe_for_binlog = $row->innodb_locks_unsafe_for_binlog;
	$innodb_log_arch_dir = $row->innodb_log_arch_dir;
	$innodb_log_archive = $row->innodb_log_archive;
	$innodb_log_buffer_size = $row->innodb_log_buffer_size;
	$innodb_log_file_size = $row->innodb_log_file_size;
	$innodb_log_files_in_group = $row->innodb_log_files_in_group;
	$innodb_log_group_home_dir = $row->innodb_log_group_home_dir;
	$innodb_max_dirty_pages_pct = $row->innodb_max_dirty_pages_pct;
	$innodb_max_purge_lag = $row->innodb_max_purge_lag;
	$innodb_mirrored_log_groups = $row->innodb_mirrored_log_groups;
	$innodb_open_files = $row->innodb_open_files;
	$innodb_rollback_on_timeout = $row->innodb_rollback_on_timeout;
	$innodb_support_xa = $row->innodb_support_xa;
	$innodb_sync_spin_loops = $row->innodb_sync_spin_loops;
	$innodb_table_locks = $row->innodb_table_locks;
	$innodb_thread_concurrency = $row->innodb_thread_concurrency;
	$innodb_thread_sleep_delay = $row->innodb_thread_sleep_delay;
	$innodb_read_ahead = $row->innodb_read_ahead;
	$innodb_ibuf_contract_const = $row->innodb_ibuf_contract_const;
	$innodb_ibuf_contract_burst = $row->innodb_ibuf_contract_burst;
	$innodb_buf_flush_const = $row->innodb_buf_flush_const;
	$innodb_buf_flush_burst = $row->innodb_buf_flush_burst;
	$interactive_timeout = $row->interactive_timeout;
	$join_buffer_size = $row->join_buffer_size;
	$key_buffer_size = $row->key_buffer_size;
	$key_cache_age_threshold = $row->key_cache_age_threshold;
	$key_cache_block_size = $row->key_cache_block_size;
	$key_cache_division_limit = $row->key_cache_division_limit;
	$language = $row->language;
	$large_files_support = $row->large_files_support;
	$large_page_size = $row->large_page_size;
	$large_pages = $row->large_pages;
	$lc_time_names = $row->lc_time_names;
	$license = $row->license;
	$local_infile = $row->local_infile;
	$locked_in_memory = $row->locked_in_memory;
	$log = $row->log;
	$log_bin = $row->log_bin;
	$log_bin_trust_function_creators = $row->log_bin_trust_function_creators;
	$log_error = $row->log_error;
	$log_queries_not_using_indexes = $row->log_queries_not_using_indexes;
	$log_slave_updates = $row->log_slave_updates;
	$log_slow_queries = $row->log_slow_queries;
	$log_slow_filter = $row->log_slow_filter;
	$log_slow_verbosity = $row->log_slow_verbosity;
	$log_warnings = $row->log_warnings;
	$long_query_time = $row->long_query_time;
	$low_priority_updates = $row->low_priority_updates;
	$lower_case_file_system = $row->lower_case_file_system;
	$lower_case_table_names = $row->lower_case_table_names;
	$max_allowed_packet = $row->max_allowed_packet;
	$max_binlog_cache_size = $row->max_binlog_cache_size;
	$max_binlog_size = $row->max_binlog_size;
	$max_connect_errors = $row->max_connect_errors;
	$max_connections = $row->max_connections;
	$max_delayed_threads = $row->max_delayed_threads;
	$max_error_count = $row->max_error_count;
	$max_heap_table_size = $row->max_heap_table_size;
	$max_insert_delayed_threads = $row->max_insert_delayed_threads;
	$max_join_size = $row->max_join_size;
	$max_length_for_sort_data = $row->max_length_for_sort_data;
	$max_prepared_stmt_count = $row->max_prepared_stmt_count;
	$max_relay_log_size = $row->max_relay_log_size;
	$max_seeks_for_key = $row->max_seeks_for_key;
	$max_sort_length = $row->max_sort_length;
	$max_sp_recursion_depth = $row->max_sp_recursion_depth;
	$max_tmp_tables = $row->max_tmp_tables;
	$max_user_connections = $row->max_user_connections;
	$max_write_lock_count = $row->max_write_lock_count;
	$min_examined_row_limit = $row->min_examined_row_limit;
	$multi_range_count = $row->multi_range_count;
	$myisam_data_pointer_size = $row->myisam_data_pointer_size;
	$myisam_max_sort_file_size = $row->myisam_max_sort_file_size;
	$myisam_recover_options = $row->myisam_recover_options;
	$myisam_repair_threads = $row->myisam_repair_threads;
	$myisam_sort_buffer_size = $row->myisam_sort_buffer_size;
	$myisam_stats_method = $row->myisam_stats_method;
	$net_buffer_length = $row->net_buffer_length;
	$net_read_timeout = $row->net_read_timeout;
	$net_retry_count = $row->net_retry_count;
	$net_write_timeout = $row->net_write_timeout;
	$new = $row->new;
	$old_passwords = $row->old_passwords;
	$open_files_limit = $row->open_files_limit;
	$optimizer_prune_level = $row->optimizer_prune_level;
	$optimizer_search_depth = $row->optimizer_search_depth;
	$pid_file = $row->pid_file;
	$port = $row->port;
	$preload_buffer_size = $row->preload_buffer_size;
	$protocol_version = $row->protocol_version;
	$query_alloc_block_size = $row->query_alloc_block_size;
	$query_cache_limit = $row->query_cache_limit;
	$query_cache_min_res_unit = $row->query_cache_min_res_unit;
	$query_cache_size = $row->query_cache_size;
	$query_cache_type = $row->query_cache_type;
	$query_cache_wlock_invalidate = $row->query_cache_wlock_invalidate;
	$query_prealloc_size = $row->query_prealloc_size;
	$range_alloc_block_size = $row->range_alloc_block_size;
	$log_slow_rate_limit = $row->log_slow_rate_limit;
	$read_buffer_size = $row->read_buffer_size;
	$read_only = $row->read_only;
	$read_rnd_buffer_size = $row->read_rnd_buffer_size;
	$relay_log = $row->relay_log;
	$relay_log_index = $row->relay_log_index;
	$relay_log_info_file = $row->relay_log_info_file;
	$relay_log_purge = $row->relay_log_purge;
	$relay_log_space_limit = $row->relay_log_space_limit;
	$rpl_recovery_rank = $row->rpl_recovery_rank;
	$secure_auth = $row->secure_auth;
	$secure_file_priv = $row->secure_file_priv;
	$server_id = $row->server_id;
	$skip_external_locking = $row->skip_external_locking;
	$skip_networking = $row->skip_networking;
	$skip_show_database = $row->skip_show_database;
	$slave_compressed_protocol = $row->slave_compressed_protocol;
	$slave_load_tmpdir = $row->slave_load_tmpdir;
	$slave_net_timeout = $row->slave_net_timeout;
	$slave_skip_errors = $row->slave_skip_errors;
	$slave_transaction_retries = $row->slave_transaction_retries;
	$slow_launch_time = $row->slow_launch_time;
	$socket = $row->socket;
	$sort_buffer_size = $row->sort_buffer_size;
	$sql_big_selects = $row->sql_big_selects;
	$sql_mode = $row->sql_mode;
	$sql_notes = $row->sql_notes;
	$sql_warnings = $row->sql_warnings;
	$ssl_ca = $row->ssl_ca;
	$ssl_capath = $row->ssl_capath;
	$ssl_cert = $row->ssl_cert;
	$ssl_cipher = $row->ssl_cipher;
	$ssl_key = $row->ssl_key;
	$storage_engine = $row->storage_engine;
	$sync_binlog = $row->sync_binlog;
	$sync_frm = $row->sync_frm;
	$system_time_zone = $row->system_time_zone;
	$table_cache = $row->table_cache;
	$table_lock_wait_timeout = $row->table_lock_wait_timeout;
	$table_type = $row->table_type;
	$thread_cache_size = $row->thread_cache_size;
	$thread_stack = $row->thread_stack;
	$time_format = $row->time_format;
	$time_zone = $row->time_zone;
	$timed_mutexes = $row->timed_mutexes;
	$tmp_table_size = $row->tmp_table_size;
	$tmpdir = $row->tmpdir;
	$transaction_alloc_block_size = $row->transaction_alloc_block_size;
	$transaction_prealloc_size = $row->transaction_prealloc_size;
	$tx_isolation = $row->tx_isolation;
	$updatable_views_with_limit = $row->updatable_views_with_limit;
	$version = $row->version;
	$version_comment = $row->version_comment;
	$version_compile_machine = $row->version_compile_machine;
	$version_compile_os = $row->version_compile_os;
	$wait_timeout = $row->wait_timeout;
	$Creation_time = $row->Creation_time;
      }
      $data = array(array(
			  "os_load_1" => "$os_load_1",
			  "os_load_5" => "$os_load_5",
			  "os_load_15" => "$os_load_15",
			  "os_mem_total" => "$os_mem_total",
			  "os_mem_used" => "$os_mem_used",
			  "os_swap_total" => "$os_swap_total",
			  "os_swap_free" => "$os_swap_free",
			  "os_cpu_user" => "$os_cpu_user",
			  "os_cpu_system" => "$os_cpu_system",
			  "os_cpu_idle" => "$os_cpu_idle",
			  "queries_per_second" => "$queries_per_second",
			  "num_schema" => "$num_schema",
			  "num_tables" => "$num_tables",
			  "num_connections" => "$num_connections",
			  "length_data" => "$length_data",
			  "length_index" => "$length_index",
			  "engine_count_innodb" => "$engine_count_innodb",
			  "engine_count_myisam" => "$engine_count_myisam",
			  "engine_myisam_size_data" => "$engine_myisam_size_data",
			  "engine_myisam_size_index" => "$engine_myisam_size_index",
			  "engine_innodb_size_data" => "$engine_innodb_size_data",
			  "engine_innodb_size_index" => "$engine_innodb_size_index",
			  "auto_increment_increment" => "$auto_increment_increment",
			  "auto_increment_offset" => "$auto_increment_offset",
			  "automatic_sp_privileges" => "$automatic_sp_privileges",
			  "back_log" => "$back_log",
			  "basedir" => "$basedir",
			  "binlog_cache_size" => "$binlog_cache_size",
			  "bulk_insert_buffer_size" => "$bulk_insert_buffer_size",
			  "character_set_client" => "$character_set_client",
			  "character_set_connection" => "$character_set_connection",
			  "character_set_database" => "$character_set_database",
			  "character_set_filesystem" => "$character_set_filesystem",
			  "character_set_results" => "$character_set_results",
			  "character_set_server" => "$character_set_server",
			  "character_set_system" => "$character_set_system",
			  "character_sets_dir" => "$character_sets_dir",
			  "collation_connection" => "$collation_connection",
			  "collation_database" => "$collation_database",
			  "collation_server" => "$collation_server",
			  "completion_type" => "$completion_type",
			  "concurrent_insert" => "$concurrent_insert",
			  "connect_timeout" => "$connect_timeout",
			  "datadir" => "$datadir",
			  "date_format" => "$date_format",
			  "datetime_format" => "$datetime_format",
			  "default_week_format" => "$default_week_format",
			  "delay_key_write" => "$delay_key_write",
			  "delayed_insert_limit" => "$delayed_insert_limit",
			  "delayed_insert_timeout" => "$delayed_insert_timeout",
			  "delayed_queue_size" => "$delayed_queue_size",
			  "div_precision_increment" => "$div_precision_increment",
			  "keep_files_on_create" => "$keep_files_on_create",
			  "engine_condition_pushdown" => "$engine_condition_pushdown",
			  "expire_logs_days" => "$expire_logs_days",
			  "flush" => "$flush",
			  "flush_time" => "$flush_time",
			  "ft_boolean_syntax" => "$ft_boolean_syntax",
			  "ft_max_word_len" => "$ft_max_word_len",
			  "ft_min_word_len" => "$ft_min_word_len",
			  "ft_query_expansion_limit" => "$ft_query_expansion_limit",
			  "ft_stopword_file" => "$ft_stopword_file",
			  "group_concat_max_len" => "$group_concat_max_len",
			  "have_archive" => "$have_archive",
			  "have_bdb" => "$have_bdb",
			  "have_blackhole_engine" => "$have_blackhole_engine",
			  "have_compress" => "$have_compress",
			  "have_crypt" => "$have_crypt",
			  "have_csv" => "$have_csv",
			  "have_dynamic_loading" => "$have_dynamic_loading",
			  "have_example_engine" => "$have_example_engine",
			  "have_federated_engine" => "$have_federated_engine",
			  "have_geometry" => "$have_geometry",
			  "have_innodb" => "$have_innodb",
			  "have_isam" => "$have_isam",
			  "have_merge_engine" => "$have_merge_engine",
			  "have_ndbcluster" => "$have_ndbcluster",
			  "have_openssl" => "$have_openssl",
			  "have_ssl" => "$have_ssl",
			  "have_query_cache" => "$have_query_cache",
			  "have_raid" => "$have_raid",
			  "have_rtree_keys" => "$have_rtree_keys",
			  "have_symlink" => "$have_symlink",
			  "hostname" => "$hostname",
			  "init_connect" => "$init_connect",
			  "init_file" => "$init_file",
			  "init_slave" => "$init_slave",
			  "innodb_additional_mem_pool_size" => "$innodb_additional_mem_pool_size",
			  "innodb_autoextend_increment" => "$innodb_autoextend_increment",
			  "innodb_buffer_pool_awe_mem_mb" => "$innodb_buffer_pool_awe_mem_mb",
			  "innodb_buffer_pool_size" => "$innodb_buffer_pool_size",
			  "innodb_checksums" => "$innodb_checksums",
			  "innodb_commit_concurrency" => "$innodb_commit_concurrency",
			  "innodb_concurrency_tickets" => "$innodb_concurrency_tickets",
			  "innodb_data_file_path" => "$innodb_data_file_path",
			  "innodb_data_home_dir" => "$innodb_data_home_dir",
			  "innodb_adaptive_hash_index" => "$innodb_adaptive_hash_index",
			  "innodb_doublewrite" => "$innodb_doublewrite",
			  "innodb_fast_shutdown" => "$innodb_fast_shutdown",
			  "innodb_file_io_threads" => "$innodb_file_io_threads",
			  "innodb_file_per_table" => "$innodb_file_per_table",
			  "innodb_flush_log_at_trx_commit" => "$innodb_flush_log_at_trx_commit",
			  "innodb_flush_method" => "$innodb_flush_method",
			  "innodb_force_recovery" => "$innodb_force_recovery",
			  "innodb_lock_wait_timeout" => "$innodb_lock_wait_timeout",
			  "innodb_locks_unsafe_for_binlog" => "$innodb_locks_unsafe_for_binlog",
			  "innodb_log_arch_dir" => "$innodb_log_arch_dir",
			  "innodb_log_archive" => "$innodb_log_archive",
			  "innodb_log_buffer_size" => "$innodb_log_buffer_size",
			  "innodb_log_file_size" => "$innodb_log_file_size",
			  "innodb_log_files_in_group" => "$innodb_log_files_in_group",
			  "innodb_log_group_home_dir" => "$innodb_log_group_home_dir",
			  "innodb_max_dirty_pages_pct" => "$innodb_max_dirty_pages_pct",
			  "innodb_max_purge_lag" => "$innodb_max_purge_lag",
			  "innodb_mirrored_log_groups" => "$innodb_mirrored_log_groups",
			  "innodb_open_files" => "$innodb_open_files",
			  "innodb_rollback_on_timeout" => "$innodb_rollback_on_timeout",
			  "innodb_support_xa" => "$innodb_support_xa",
			  "innodb_sync_spin_loops" => "$innodb_sync_spin_loops",
			  "innodb_table_locks" => "$innodb_table_locks",
			  "innodb_thread_concurrency" => "$innodb_thread_concurrency",
			  "innodb_thread_sleep_delay" => "$innodb_thread_sleep_delay",
			  "innodb_read_ahead" => "$innodb_read_ahead",
			  "innodb_ibuf_contract_const" => "$innodb_ibuf_contract_const",
			  "innodb_ibuf_contract_burst" => "$innodb_ibuf_contract_burst",
			  "innodb_buf_flush_const" => "$innodb_buf_flush_const",
			  "innodb_buf_flush_burst" => "$innodb_buf_flush_burst",
			  "interactive_timeout" => "$interactive_timeout",
			  "join_buffer_size" => "$join_buffer_size",
			  "key_buffer_size" => "$key_buffer_size",
			  "key_cache_age_threshold" => "$key_cache_age_threshold",
			  "key_cache_block_size" => "$key_cache_block_size",
			  "key_cache_division_limit" => "$key_cache_division_limit",
			  "language" => "$language",
			  "large_files_support" => "$large_files_support",
			  "large_page_size" => "$large_page_size",
			  "large_pages" => "$large_pages",
			  "lc_time_names" => "$lc_time_names",
			  "license" => "$license",
			  "local_infile" => "$local_infile",
			  "locked_in_memory" => "$locked_in_memory",
			  "log" => "$log",
			  "log_bin" => "$log_bin",
			  "log_bin_trust_function_creators" => "$log_bin_trust_function_creators",
			  "log_error" => "$log_error",
			  "log_queries_not_using_indexes" => "$log_queries_not_using_indexes",
			  "log_slave_updates" => "$log_slave_updates",
			  "log_slow_queries" => "$log_slow_queries",
			  "log_slow_filter" => "$log_slow_filter",
			  "log_slow_verbosity" => "$log_slow_verbosity",
			  "log_warnings" => "$log_warnings",
			  "long_query_time" => "$long_query_time",
			  "low_priority_updates" => "$low_priority_updates",
			  "lower_case_file_system" => "$lower_case_file_system",
			  "lower_case_table_names" => "$lower_case_table_names",
			  "max_allowed_packet" => "$max_allowed_packet",
			  "max_binlog_cache_size" => "$max_binlog_cache_size",
			  "max_binlog_size" => "$max_binlog_size",
			  "max_connect_errors" => "$max_connect_errors",
			  "max_connections" => "$max_connections",
			  "max_delayed_threads" => "$max_delayed_threads",
			  "max_error_count" => "$max_error_count",
			  "max_heap_table_size" => "$max_heap_table_size",
			  "max_insert_delayed_threads" => "$max_insert_delayed_threads",
			  "max_join_size" => "$max_join_size",
			  "max_length_for_sort_data" => "$max_length_for_sort_data",
			  "max_prepared_stmt_count" => "$max_prepared_stmt_count",
			  "max_relay_log_size" => "$max_relay_log_size",
			  "max_seeks_for_key" => "$max_seeks_for_key",
			  "max_sort_length" => "$max_sort_length",
			  "max_sp_recursion_depth" => "$max_sp_recursion_depth",
			  "max_tmp_tables" => "$max_tmp_tables",
			  "max_user_connections" => "$max_user_connections",
			  "max_write_lock_count" => "$max_write_lock_count",
			  "min_examined_row_limit" => "$min_examined_row_limit",
			  "multi_range_count" => "$multi_range_count",
			  "myisam_data_pointer_size" => "$myisam_data_pointer_size",
			  "myisam_max_sort_file_size" => "$myisam_max_sort_file_size",
			  "myisam_recover_options" => "$myisam_recover_options",
			  "myisam_repair_threads" => "$myisam_repair_threads",
			  "myisam_sort_buffer_size" => "$myisam_sort_buffer_size",
			  "myisam_stats_method" => "$myisam_stats_method",
			  "net_buffer_length" => "$net_buffer_length",
			  "net_read_timeout" => "$net_read_timeout",
			  "net_retry_count" => "$net_retry_count",
			  "net_write_timeout" => "$net_write_timeout",
			  "new" => "$new",
			  "old_passwords" => "$old_passwords",
			  "open_files_limit" => "$open_files_limit",
			  "optimizer_prune_level" => "$optimizer_prune_level",
			  "optimizer_search_depth" => "$optimizer_search_depth",
			  "pid_file" => "$pid_file",
			  "port" => "$port",
			  "preload_buffer_size" => "$preload_buffer_size",
			  "protocol_version" => "$protocol_version",
			  "query_alloc_block_size" => "$query_alloc_block_size",
			  "query_cache_limit" => "$query_cache_limit",
			  "query_cache_min_res_unit" => "$query_cache_min_res_unit",
			  "query_cache_size" => "$query_cache_size",
			  "query_cache_type" => "$query_cache_type",
			  "query_cache_wlock_invalidate" => "$query_cache_wlock_invalidate",
			  "query_prealloc_size" => "$query_prealloc_size",
			  "range_alloc_block_size" => "$range_alloc_block_size",
			  "log_slow_rate_limit" => "$log_slow_rate_limit",
			  "read_buffer_size" => "$read_buffer_size",
			  "read_only" => "$read_only",
			  "read_rnd_buffer_size" => "$read_rnd_buffer_size",
			  "relay_log" => "$relay_log",
			  "relay_log_index" => "$relay_log_index",
			  "relay_log_info_file" => "$relay_log_info_file",
			  "relay_log_purge" => "$relay_log_purge",
			  "relay_log_space_limit" => "$relay_log_space_limit",
			  "rpl_recovery_rank" => "$rpl_recovery_rank",
			  "secure_auth" => "$secure_auth",
			  "secure_file_priv" => "$secure_file_priv",
			  "server_id" => "$server_id",
			  "skip_external_locking" => "$skip_external_locking",
			  "skip_networking" => "$skip_networking",
			  "skip_show_database" => "$skip_show_database",
			  "slave_compressed_protocol" => "$slave_compressed_protocol",
			  "slave_load_tmpdir" => "$slave_load_tmpdir",
			  "slave_net_timeout" => "$slave_net_timeout",
			  "slave_skip_errors" => "$slave_skip_errors",
			  "slave_transaction_retries" => "$slave_transaction_retries",
			  "slow_launch_time" => "$slow_launch_time",
			  "socket" => "$socket",
			  "sort_buffer_size" => "$sort_buffer_size",
			  "sql_big_selects" => "$sql_big_selects",
			  "sql_mode" => "$sql_mode",
			  "sql_notes" => "$sql_notes",
			  "sql_warnings" => "$sql_warnings",
			  "ssl_ca" => "$ssl_ca",
			  "ssl_capath" => "$ssl_capath",
			  "ssl_cert" => "$ssl_cert",
			  "ssl_cipher" => "$ssl_cipher",
			  "ssl_key" => "$ssl_key",
			  "storage_engine" => "$storage_engine",
			  "sync_binlog" => "$sync_binlog",
			  "sync_frm" => "$sync_frm",
			  "system_time_zone" => "$system_time_zone",
			  "table_cache" => "$table_cache",
			  "table_lock_wait_timeout" => "$table_lock_wait_timeout",
			  "table_type" => "$table_type",
			  "thread_cache_size" => "$thread_cache_size",
			  "thread_stack" => "$thread_stack",
			  "time_format" => "$time_format",
			  "time_zone" => "$time_zone",
			  "timed_mutexes" => "$timed_mutexes",
			  "tmp_table_size" => "$tmp_table_size",
			  "tmpdir" => "$tmpdir",
			  "transaction_alloc_block_size" => "$transaction_alloc_block_size",
			  "transaction_prealloc_size" => "$transaction_prealloc_size",
			  "tx_isolation" => "$tx_isolation",
			  "updatable_views_with_limit" => "$updatable_views_with_limit",
			  "version" => "$version",
			  "version_comment" => "$version_comment",
			  "version_compile_machine" => "$version_compile_machine",
			  "version_compile_os" => "$version_compile_os",
			  "wait_timeout" => "$wait_timeout",
			  "Creation_time" => "$Creation_time"));

    }
    else {
      $data = array(array(
			  "os_load_1" => "0",
			  "os_load_5" => "0",
			  "os_load_15" => "0",
			  "os_mem_total" => "0",
			  "os_mem_used" => "0",
			  "os_swap_total" => "0",
			  "os_swap_free" => "0",
			  "os_cpu_user" => "0",
			  "os_cpu_system" => "0",
			  "os_cpu_idle" => "0",
			  "queries_per_second" => "0",
			  "num_schema" => "0",
			  "num_tables" => "0",
			  "num_connections" => "0",
			  "length_data" => "0",
			  "length_index" => "0",
			  "engine_count_innodb" => "0",
			  "engine_count_myisam" => "0",
			  "engine_myisam_size_data" => "0",
			  "engine_myisam_size_index" => "0",
			  "engine_innodb_size_data" => "0",
			  "engine_innodb_size_index" => "0",
			  "auto_increment_increment" => "0",
			  "auto_increment_offset" => "0",
			  "automatic_sp_privileges" => "0",
			  "back_log" => "0",
			  "basedir" => "0",
			  "binlog_cache_size" => "0",
			  "bulk_insert_buffer_size" => "0",
			  "character_set_client" => "0",
			  "character_set_connection" => "0",
			  "character_set_database" => "0",
			  "character_set_filesystem" => "0",
			  "character_set_results" => "0",
			  "character_set_server" => "0",
			  "character_set_system" => "0",
			  "character_sets_dir" => "0",
			  "collation_connection" => "0",
			  "collation_database" => "0",
			  "collation_server" => "0",
			  "completion_type" => "0",
			  "concurrent_insert" => "0",
			  "connect_timeout" => "0",
			  "datadir" => "0",
			  "date_format" => "0",
			  "datetime_format" => "0",
			  "default_week_format" => "0",
			  "delay_key_write" => "0",
			  "delayed_insert_limit" => "0",
			  "delayed_insert_timeout" => "0",
			  "delayed_queue_size" => "0",
			  "div_precision_increment" => "0",
			  "keep_files_on_create" => "0",
			  "engine_condition_pushdown" => "0",
			  "expire_logs_days" => "0",
			  "flush" => "0",
			  "flush_time" => "0",
			  "ft_boolean_syntax" => "0",
			  "ft_max_word_len" => "0",
			  "ft_min_word_len" => "0",
			  "ft_query_expansion_limit" => "0",
			  "ft_stopword_file" => "0",
			  "group_concat_max_len" => "0",
			  "have_archive" => "0",
			  "have_bdb" => "0",
			  "have_blackhole_engine" => "0",
			  "have_compress" => "0",
			  "have_crypt" => "0",
			  "have_csv" => "0",
			  "have_dynamic_loading" => "0",
			  "have_example_engine" => "0",
			  "have_federated_engine" => "0",
			  "have_geometry" => "0",
			  "have_innodb" => "0",
			  "have_isam" => "0",
			  "have_merge_engine" => "0",
			  "have_ndbcluster" => "0",
			  "have_openssl" => "0",
			  "have_ssl" => "0",
			  "have_query_cache" => "0",
			  "have_raid" => "0",
			  "have_rtree_keys" => "0",
			  "have_symlink" => "0",
			  "hostname" => "0",
			  "init_connect" => "0",
			  "init_file" => "0",
			  "init_slave" => "0",
			  "innodb_additional_mem_pool_size" => "0",
			  "innodb_autoextend_increment" => "0",
			  "innodb_buffer_pool_awe_mem_mb" => "0",
			  "innodb_buffer_pool_size" => "0",
			  "innodb_checksums" => "0",
			  "innodb_commit_concurrency" => "0",
			  "innodb_concurrency_tickets" => "0",
			  "innodb_data_file_path" => "0",
			  "innodb_data_home_dir" => "0",
			  "innodb_adaptive_hash_index" => "0",
			  "innodb_doublewrite" => "0",
			  "innodb_fast_shutdown" => "0",
			  "innodb_file_io_threads" => "0",
			  "innodb_file_per_table" => "0",
			  "innodb_flush_log_at_trx_commit" => "0",
			  "innodb_flush_method" => "0",
			  "innodb_force_recovery" => "0",
			  "innodb_lock_wait_timeout" => "0",
			  "innodb_locks_unsafe_for_binlog" => "0",
			  "innodb_log_arch_dir" => "0",
			  "innodb_log_archive" => "0",
			  "innodb_log_buffer_size" => "0",
			  "innodb_log_file_size" => "0",
			  "innodb_log_files_in_group" => "0",
			  "innodb_log_group_home_dir" => "0",
			  "innodb_max_dirty_pages_pct" => "0",
			  "innodb_max_purge_lag" => "0",
			  "innodb_mirrored_log_groups" => "0",
			  "innodb_open_files" => "0",
			  "innodb_rollback_on_timeout" => "0",
			  "innodb_support_xa" => "0",
			  "innodb_sync_spin_loops" => "0",
			  "innodb_table_locks" => "0",
			  "innodb_thread_concurrency" => "0",
			  "innodb_thread_sleep_delay" => "0",
			  "innodb_read_ahead" => "0",
			  "innodb_ibuf_contract_const" => "0",
			  "innodb_ibuf_contract_burst" => "0",
			  "innodb_buf_flush_const" => "0",
			  "innodb_buf_flush_burst" => "0",
			  "interactive_timeout" => "0",
			  "join_buffer_size" => "0",
			  "key_buffer_size" => "0",
			  "key_cache_age_threshold" => "0",
			  "key_cache_block_size" => "0",
			  "key_cache_division_limit" => "0",
			  "language" => "0",
			  "large_files_support" => "0",
			  "large_page_size" => "0",
			  "large_pages" => "0",
			  "lc_time_names" => "0",
			  "license" => "0",
			  "local_infile" => "0",
			  "locked_in_memory" => "0",
			  "log" => "0",
			  "log_bin" => "0",
			  "log_bin_trust_function_creators" => "0",
			  "log_error" => "0",
			  "log_queries_not_using_indexes" => "0",
			  "log_slave_updates" => "0",
			  "log_slow_queries" => "0",
			  "log_slow_filter" => "0",
			  "log_slow_verbosity" => "0",
			  "log_warnings" => "0",
			  "long_query_time" => "0",
			  "low_priority_updates" => "0",
			  "lower_case_file_system" => "0",
			  "lower_case_table_names" => "0",
			  "max_allowed_packet" => "0",
			  "max_binlog_cache_size" => "0",
			  "max_binlog_size" => "0",
			  "max_connect_errors" => "0",
			  "max_connections" => "0",
			  "max_delayed_threads" => "0",
			  "max_error_count" => "0",
			  "max_heap_table_size" => "0",
			  "max_insert_delayed_threads" => "0",
			  "max_join_size" => "0",
			  "max_length_for_sort_data" => "0",
			  "max_prepared_stmt_count" => "0",
			  "max_relay_log_size" => "0",
			  "max_seeks_for_key" => "0",
			  "max_sort_length" => "0",
			  "max_sp_recursion_depth" => "0",
			  "max_tmp_tables" => "0",
			  "max_user_connections" => "0",
			  "max_write_lock_count" => "0",
			  "min_examined_row_limit" => "0",
			  "multi_range_count" => "0",
			  "myisam_data_pointer_size" => "0",
			  "myisam_max_sort_file_size" => "0",
			  "myisam_recover_options" => "0",
			  "myisam_repair_threads" => "0",
			  "myisam_sort_buffer_size" => "0",
			  "myisam_stats_method" => "0",
			  "net_buffer_length" => "0",
			  "net_read_timeout" => "0",
			  "net_retry_count" => "0",
			  "net_write_timeout" => "0",
			  "new" => "0",
			  "old_passwords" => "0",
			  "open_files_limit" => "0",
			  "optimizer_prune_level" => "0",
			  "optimizer_search_depth" => "0",
			  "pid_file" => "0",
			  "port" => "0",
			  "preload_buffer_size" => "0",
			  "protocol_version" => "0",
			  "query_alloc_block_size" => "0",
			  "query_cache_limit" => "0",
			  "query_cache_min_res_unit" => "0",
			  "query_cache_size" => "0",
			  "query_cache_type" => "0",
			  "query_cache_wlock_invalidate" => "0",
			  "query_prealloc_size" => "0",
			  "range_alloc_block_size" => "0",
			  "log_slow_rate_limit" => "0",
			  "read_buffer_size" => "0",
			  "read_only" => "0",
			  "read_rnd_buffer_size" => "0",
			  "relay_log" => "0",
			  "relay_log_index" => "0",
			  "relay_log_info_file" => "0",
			  "relay_log_purge" => "0",
			  "relay_log_space_limit" => "0",
			  "rpl_recovery_rank" => "0",
			  "secure_auth" => "0",
			  "secure_file_priv" => "0",
			  "server_id" => "0",
			  "skip_external_locking" => "0",
			  "skip_networking" => "0",
			  "skip_show_database" => "0",
			  "slave_compressed_protocol" => "0",
			  "slave_load_tmpdir" => "0",
			  "slave_net_timeout" => "0",
			  "slave_skip_errors" => "0",
			  "slave_transaction_retries" => "0",
			  "slow_launch_time" => "0",
			  "socket" => "0",
			  "sort_buffer_size" => "0",
			  "sql_big_selects" => "0",
			  "sql_mode" => "0",
			  "sql_notes" => "0",
			  "sql_warnings" => "0",
			  "ssl_ca" => "0",
			  "ssl_capath" => "0",
			  "ssl_cert" => "0",
			  "ssl_cipher" => "0",
			  "ssl_key" => "0",
			  "storage_engine" => "0",
			  "sync_binlog" => "0",
			  "sync_frm" => "0",
			  "system_time_zone" => "0",
			  "table_cache" => "0",
			  "table_lock_wait_timeout" => "0",
			  "table_type" => "0",
			  "thread_cache_size" => "0",
			  "thread_stack" => "0",
			  "time_format" => "0",
			  "time_zone" => "0",
			  "timed_mutexes" => "0",
			  "tmp_table_size" => "0",
			  "tmpdir" => "0",
			  "transaction_alloc_block_size" => "0",
			  "transaction_prealloc_size" => "0",
			  "tx_isolation" => "0",
			  "updatable_views_with_limit" => "0",
			  "version" => "0",
			  "version_comment" => "0",
			  "version_compile_machine" => "0",
			  "version_compile_os" => "0",
			  "wait_timeout" => "0",
			  "Creationtime" => "0000-00-00"));
    }
    return $data;
  }

  function get_server_status($server_list_id) {
    log_message('debug', "Starting model_main -> get_server_status");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
      $Aborted_clients = $row->Aborted_clients;
      $Aborted_connects = $row->Aborted_connects;
      $Binlog_cache_disk_use = $row->Binlog_cache_disk_use;
      $Binlog_cache_use = $row->Binlog_cache_use;
      $Bytes_received = $row->Bytes_received;
      $Bytes_sent = $row->Bytes_sent;
      $Com_admin_commands = $row->Com_admin_commands;
      $Com_alter_db = $row->Com_alter_db;
      $Com_alter_table = $row->Com_alter_table;
      $Com_analyze = $row->Com_analyze;
      $Com_backup_table = $row->Com_backup_table;
      $Com_begin = $row->Com_begin;
      $Com_call_procedure = $row->Com_call_procedure;
      $Com_change_db = $row->Com_change_db;
      $Com_change_master = $row->Com_change_master;
      $Com_check = $row->Com_check;
      $Com_checksum = $row->Com_checksum;
      $Com_commit = $row->Com_commit;
      $Com_create_db = $row->Com_create_db;
      $Com_create_function = $row->Com_create_function;
      $Com_create_index = $row->Com_create_index;
      $Com_create_table = $row->Com_create_table;
      $Com_create_user = $row->Com_create_user;
      $Com_dealloc_sql = $row->Com_dealloc_sql;
      $Com_delete = $row->Com_delete;
      $Com_delete_multi = $row->Com_delete_multi;
      $Com_do = $row->Com_do;
      $Com_drop_db = $row->Com_drop_db;
      $Com_drop_function = $row->Com_drop_function;
      $Com_drop_index = $row->Com_drop_index;
      $Com_drop_table = $row->Com_drop_table;
      $Com_drop_user = $row->Com_drop_user;
      $Com_execute_sql = $row->Com_execute_sql;
      $Com_flush = $row->Com_flush;
      $Com_grant = $row->Com_grant;
      $Com_ha_close = $row->Com_ha_close;
      $Com_ha_open = $row->Com_ha_open;
      $Com_ha_read = $row->Com_ha_read;
      $Com_help = $row->Com_help;
      $Com_insert = $row->Com_insert;
      $Com_insert_select = $row->Com_insert_select;
      $Com_kill = $row->Com_kill;
      $Com_load = $row->Com_load;
      $Com_load_master_data = $row->Com_load_master_data;
      $Com_load_master_table = $row->Com_load_master_table;
      $Com_lock_tables = $row->Com_lock_tables;
      $Com_optimize = $row->Com_optimize;
      $Com_preload_keys = $row->Com_preload_keys;
      $Com_prepare_sql = $row->Com_prepare_sql;
      $Com_purge = $row->Com_purge;
      $Com_purge_before_date = $row->Com_purge_before_date;
      $Com_rename_table = $row->Com_rename_table;
      $Com_repair = $row->Com_repair;
      $Com_replace = $row->Com_replace;
      $Com_replace_select = $row->Com_replace_select;
      $Com_reset = $row->Com_reset;
      $Com_restore_table = $row->Com_restore_table;
      $Com_revoke = $row->Com_revoke;
      $Com_revoke_all = $row->Com_revoke_all;
      $Com_rollback = $row->Com_rollback;
      $Com_savepoint = $row->Com_savepoint;
      $Com_select = $row->Com_select;
      $Com_set_option = $row->Com_set_option;
      $Com_show_binlog_events = $row->Com_show_binlog_events;
      $Com_show_binlogs = $row->Com_show_binlogs;
      $Com_show_charsets = $row->Com_show_charsets;
      $Com_show_collations = $row->Com_show_collations;
      $Com_show_column_types = $row->Com_show_column_types;
      $Com_show_create_db = $row->Com_show_create_db;
      $Com_show_create_table = $row->Com_show_create_table;
      $Com_show_databases = $row->Com_show_databases;
      $Com_show_errors = $row->Com_show_errors;
      $Com_show_fields = $row->Com_show_fields;
      $Com_show_grants = $row->Com_show_grants;
      $Com_show_innodb_status = $row->Com_show_innodb_status;
      $Com_show_keys = $row->Com_show_keys;
      $Com_show_logs = $row->Com_show_logs;
      $Com_show_master_status = $row->Com_show_master_status;
      $Com_show_ndb_status = $row->Com_show_ndb_status;
      $Com_show_new_master = $row->Com_show_new_master;
      $Com_show_open_tables = $row->Com_show_open_tables;
      $Com_show_privileges = $row->Com_show_privileges;
      $Com_show_processlist = $row->Com_show_processlist;
      $Com_show_slave_hosts = $row->Com_show_slave_hosts;
      $Com_show_slave_status = $row->Com_show_slave_status;
      $Com_show_status = $row->Com_show_status;
      $Com_show_storage_engines = $row->Com_show_storage_engines;
      $Com_show_tables = $row->Com_show_tables;
      $Com_show_triggers = $row->Com_show_triggers;
      $Com_show_variables = $row->Com_show_variables;
      $Com_show_warnings = $row->Com_show_warnings;
      $Com_slave_start = $row->Com_slave_start;
      $Com_slave_stop = $row->Com_slave_stop;
      $Com_stmt_close = $row->Com_stmt_close;
      $Com_stmt_execute = $row->Com_stmt_execute;
      $Com_stmt_fetch = $row->Com_stmt_fetch;
      $Com_stmt_prepare = $row->Com_stmt_prepare;
      $Com_stmt_reset = $row->Com_stmt_reset;
      $Com_stmt_send_long_data = $row->Com_stmt_send_long_data;
      $Com_truncate = $row->Com_truncate;
      $Com_unlock_tables = $row->Com_unlock_tables;
      $Com_update = $row->Com_update;
      $Com_update_multi = $row->Com_update_multi;
      $Com_xa_commit = $row->Com_xa_commit;
      $Com_xa_end = $row->Com_xa_end;
      $Com_xa_prepare = $row->Com_xa_prepare;
      $Com_xa_recover = $row->Com_xa_recover;
      $Com_xa_rollback = $row->Com_xa_rollback;
      $Com_xa_start = $row->Com_xa_start;
      $Compression = $row->Compression;
      $Connections = $row->Connections;
      $Created_tmp_disk_tables = $row->Created_tmp_disk_tables;
      $Created_tmp_files = $row->Created_tmp_files;
      $Created_tmp_tables = $row->Created_tmp_tables;
      $Delayed_errors = $row->Delayed_errors;
      $Delayed_insert_threads = $row->Delayed_insert_threads;
      $Delayed_writes = $row->Delayed_writes;
      $Flush_commands = $row->Flush_commands;
      $Handler_commit = $row->Handler_commit;
      $Handler_delete = $row->Handler_delete;
      $Handler_discover = $row->Handler_discover;
      $Handler_prepare = $row->Handler_prepare;
      $Handler_read_first = $row->Handler_read_first;
      $Handler_read_key = $row->Handler_read_key;
      $Handler_read_next = $row->Handler_read_next;
      $Handler_read_prev = $row->Handler_read_prev;
      $Handler_read_rnd = $row->Handler_read_rnd;
      $Handler_read_rnd_next = $row->Handler_read_rnd_next;
      $Handler_rollback = $row->Handler_rollback;
      $Handler_savepoint = $row->Handler_savepoint;
      $Handler_savepoint_rollback = $row->Handler_savepoint_rollback;
      $Handler_update = $row->Handler_update;
      $Handler_write = $row->Handler_write;
      $Innodb_buffer_pool_pages_data = $row->Innodb_buffer_pool_pages_data;
      $Innodb_buffer_pool_pages_dirty = $row->Innodb_buffer_pool_pages_dirty;
      $Innodb_buffer_pool_pages_flushed = $row->Innodb_buffer_pool_pages_flushed;
      $Innodb_buffer_pool_pages_free = $row->Innodb_buffer_pool_pages_free;
      $Innodb_buffer_pool_pages_misc = $row->Innodb_buffer_pool_pages_misc;
      $Innodb_buffer_pool_pages_total = $row->Innodb_buffer_pool_pages_total;
      $Innodb_buffer_pool_read_ahead_rnd = $row->Innodb_buffer_pool_read_ahead_rnd;
      $Innodb_buffer_pool_read_ahead_seq = $row->Innodb_buffer_pool_read_ahead_seq;
      $Innodb_buffer_pool_read_requests = $row->Innodb_buffer_pool_read_requests;
      $Innodb_buffer_pool_reads = $row->Innodb_buffer_pool_reads;
      $Innodb_buffer_pool_wait_free = $row->Innodb_buffer_pool_wait_free;
      $Innodb_buffer_pool_write_requests = $row->Innodb_buffer_pool_write_requests;
      $Innodb_data_fsyncs = $row->Innodb_data_fsyncs;
      $Innodb_data_pending_fsyncs = $row->Innodb_data_pending_fsyncs;
      $Innodb_data_pending_reads = $row->Innodb_data_pending_reads;
      $Innodb_data_pending_writes = $row->Innodb_data_pending_writes;
      $Innodb_data_read = $row->Innodb_data_read;
      $Innodb_data_reads = $row->Innodb_data_reads;
      $Innodb_data_writes = $row->Innodb_data_writes;
      $Innodb_data_written = $row->Innodb_data_written;
      $Innodb_dblwr_pages_written = $row->Innodb_dblwr_pages_written;
      $Innodb_dblwr_writes = $row->Innodb_dblwr_writes;
      $Innodb_log_waits = $row->Innodb_log_waits;
      $Innodb_log_write_requests = $row->Innodb_log_write_requests;
      $Innodb_log_writes = $row->Innodb_log_writes;
      $Innodb_os_log_fsyncs = $row->Innodb_os_log_fsyncs;
      $Innodb_os_log_pending_fsyncs = $row->Innodb_os_log_pending_fsyncs;
      $Innodb_os_log_pending_writes = $row->Innodb_os_log_pending_writes;
      $Innodb_os_log_written = $row->Innodb_os_log_written;
      $Innodb_page_size = $row->Innodb_page_size;
      $Innodb_pages_created = $row->Innodb_pages_created;
      $Innodb_pages_read = $row->Innodb_pages_read;
      $Innodb_pages_written = $row->Innodb_pages_written;
      $Innodb_row_lock_current_waits = $row->Innodb_row_lock_current_waits;
      $Innodb_row_lock_time = $row->Innodb_row_lock_time;
      $Innodb_row_lock_time_avg = $row->Innodb_row_lock_time_avg;
      $Innodb_row_lock_time_max = $row->Innodb_row_lock_time_max;
      $Innodb_row_lock_waits = $row->Innodb_row_lock_waits;
      $Innodb_rows_deleted = $row->Innodb_rows_deleted;
      $Innodb_rows_inserted = $row->Innodb_rows_inserted;
      $Innodb_rows_read = $row->Innodb_rows_read;
      $Innodb_rows_updated = $row->Innodb_rows_updated;
      $Key_blocks_not_flushed = $row->Key_blocks_not_flushed;
      $Key_blocks_unused = $row->Key_blocks_unused;
      $Key_blocks_used = $row->Key_blocks_used;
      $Key_read_requests = $row->Key_read_requests;
      $Key_reads = $row->Key_reads;
      $Key_write_requests = $row->Key_write_requests;
      $Key_writes = $row->Key_writes;
      $Last_query_cost = $row->Last_query_cost;
      $Max_used_connections = $row->Max_used_connections;
      $Not_flushed_delayed_rows = $row->Not_flushed_delayed_rows;
      $Open_files = $row->Open_files;
      $Open_streams = $row->Open_streams;
      $Open_tables = $row->Open_tables;
      $Opened_tables = $row->Opened_tables;
      $Prepared_stmt_count = $row->Prepared_stmt_count;
      $Qcache_free_blocks = $row->Qcache_free_blocks;
      $Qcache_free_memory = $row->Qcache_free_memory;
      $Qcache_hits = $row->Qcache_hits;
      $Qcache_inserts = $row->Qcache_inserts;
      $Qcache_lowmem_prunes = $row->Qcache_lowmem_prunes;
      $Qcache_not_cached = $row->Qcache_not_cached;
      $Qcache_queries_in_cache = $row->Qcache_queries_in_cache;
      $Qcache_total_blocks = $row->Qcache_total_blocks;
      $Questions = $row->Questions;
      $Rpl_status = $row->Rpl_status;
      $Select_full_join = $row->Select_full_join;
      $Select_full_range_join = $row->Select_full_range_join;
      $Select_range = $row->Select_range;
      $Select_range_check = $row->Select_range_check;
      $Select_scan = $row->Select_scan;
      $Slave_open_temp_tables = $row->Slave_open_temp_tables;
      $Slave_retried_transactions = $row->Slave_retried_transactions;
      $Slave_running = $row->Slave_running;
      $Slow_launch_threads = $row->Slow_launch_threads;
      $Slow_queries = $row->Slow_queries;
      $Sort_merge_passes = $row->Sort_merge_passes;
      $Sort_range = $row->Sort_range;
      $Sort_rows = $row->Sort_rows;
      $Sort_scan = $row->Sort_scan;
      $Table_locks_immediate = $row->Table_locks_immediate;
      $Table_locks_waited = $row->Table_locks_waited;
      $Tc_log_max_pages_used = $row->Tc_log_max_pages_used;
      $Tc_log_page_size = $row->Tc_log_page_size;
      $Tc_log_page_waits = $row->Tc_log_page_waits;
      $Threads_cached = $row->Threads_cached;
      $Threads_connected = $row->Threads_connected;
      $Threads_created = $row->Threads_created;
      $Threads_running = $row->Threads_running;
      $Uptime = $row->Uptime;
      $Creation_time = $row->Creation_time;
      }      

      $data = array(array(
		    "Aborted_clients" => "$Aborted_clients",
		    "Aborted_connects" => "$Aborted_connects",
		    "Binlog_cache_disk_use" => "$Binlog_cache_disk_use",
		    "Binlog_cache_use" => "$Binlog_cache_use",
		    "Bytes_received" => "$Bytes_received",
		    "Bytes_sent" => "$Bytes_sent",
		    "Com_admin_commands" => "$Com_admin_commands",
		    "Com_alter_db" => "$Com_alter_db",
		    "Com_alter_table" => "$Com_alter_table",
		    "Com_analyze" => "$Com_analyze",
		    "Com_backup_table" => "$Com_backup_table",
		    "Com_begin" => "$Com_begin",
		    "Com_call_procedure" => "$Com_call_procedure",
		    "Com_change_db" => "$Com_change_db",
		    "Com_change_master" => "$Com_change_master",
		    "Com_check" => "$Com_check",
		    "Com_checksum" => "$Com_checksum",
		    "Com_commit" => "$Com_commit",
		    "Com_create_db" => "$Com_create_db",
		    "Com_create_function" => "$Com_create_function",
		    "Com_create_index" => "$Com_create_index",
		    "Com_create_table" => "$Com_create_table",
		    "Com_create_user" => "$Com_create_user",
		    "Com_dealloc_sql" => "$Com_dealloc_sql",
		    "Com_delete" => "$Com_delete",
		    "Com_delete_multi" => "$Com_delete_multi",
		    "Com_do" => "$Com_do",
		    "Com_drop_db" => "$Com_drop_db",
		    "Com_drop_function" => "$Com_drop_function",
		    "Com_drop_index" => "$Com_drop_index",
		    "Com_drop_table" => "$Com_drop_table",
		    "Com_drop_user" => "$Com_drop_user",
		    "Com_execute_sql" => "$Com_execute_sql",
		    "Com_flush" => "$Com_flush",
		    "Com_grant" => "$Com_grant",
		    "Com_ha_close" => "$Com_ha_close",
		    "Com_ha_open" => "$Com_ha_open",
		    "Com_ha_read" => "$Com_ha_read",
		    "Com_help" => "$Com_help",
		    "Com_insert" => "$Com_insert",
		    "Com_insert_select" => "$Com_insert_select",
		    "Com_kill" => "$Com_kill",
		    "Com_load" => "$Com_load",
		    "Com_load_master_data" => "$Com_load_master_data",
		    "Com_load_master_table" => "$Com_load_master_table",
		    "Com_lock_tables" => "$Com_lock_tables",
		    "Com_optimize" => "$Com_optimize",
		    "Com_preload_keys" => "$Com_preload_keys",
		    "Com_prepare_sql" => "$Com_prepare_sql",
		    "Com_purge" => "$Com_purge",
		    "Com_purge_before_date" => "$Com_purge_before_date",
		    "Com_rename_table" => "$Com_rename_table",
		    "Com_repair" => "$Com_repair",
		    "Com_replace" => "$Com_replace",
		    "Com_replace_select" => "$Com_replace_select",
		    "Com_reset" => "$Com_reset",
		    "Com_restore_table" => "$Com_restore_table",
		    "Com_revoke" => "$Com_revoke",
		    "Com_revoke_all" => "$Com_revoke_all",
		    "Com_rollback" => "$Com_rollback",
		    "Com_savepoint" => "$Com_savepoint",
		    "Com_select" => "$Com_select",
		    "Com_set_option" => "$Com_set_option",
		    "Com_show_binlog_events" => "$Com_show_binlog_events",
		    "Com_show_binlogs" => "$Com_show_binlogs",
		    "Com_show_charsets" => "$Com_show_charsets",
		    "Com_show_collations" => "$Com_show_collations",
		    "Com_show_column_types" => "$Com_show_column_types",
		    "Com_show_create_db" => "$Com_show_create_db",
		    "Com_show_create_table" => "$Com_show_create_table",
		    "Com_show_databases" => "$Com_show_databases",
		    "Com_show_errors" => "$Com_show_errors",
		    "Com_show_fields" => "$Com_show_fields",
		    "Com_show_grants" => "$Com_show_grants",
		    "Com_show_innodb_status" => "$Com_show_innodb_status",
		    "Com_show_keys" => "$Com_show_keys",
		    "Com_show_logs" => "$Com_show_logs",
		    "Com_show_master_status" => "$Com_show_master_status",
		    "Com_show_ndb_status" => "$Com_show_ndb_status",
		    "Com_show_new_master" => "$Com_show_new_master",
		    "Com_show_open_tables" => "$Com_show_open_tables",
		    "Com_show_privileges" => "$Com_show_privileges",
		    "Com_show_processlist" => "$Com_show_processlist",
		    "Com_show_slave_hosts" => "$Com_show_slave_hosts",
		    "Com_show_slave_status" => "$Com_show_slave_status",
		    "Com_show_status" => "$Com_show_status",
		    "Com_show_storage_engines" => "$Com_show_storage_engines",
		    "Com_show_tables" => "$Com_show_tables",
		    "Com_show_triggers" => "$Com_show_triggers",
		    "Com_show_variables" => "$Com_show_variables",
		    "Com_show_warnings" => "$Com_show_warnings",
		    "Com_slave_start" => "$Com_slave_start",
		    "Com_slave_stop" => "$Com_slave_stop",
		    "Com_stmt_close" => "$Com_stmt_close",
		    "Com_stmt_execute" => "$Com_stmt_execute",
		    "Com_stmt_fetch" => "$Com_stmt_fetch",
		    "Com_stmt_prepare" => "$Com_stmt_prepare",
		    "Com_stmt_reset" => "$Com_stmt_reset",
		    "Com_stmt_send_long_data" => "$Com_stmt_send_long_data",
		    "Com_truncate" => "$Com_truncate",
		    "Com_unlock_tables" => "$Com_unlock_tables",
		    "Com_update" => "$Com_update",
		    "Com_update_multi" => "$Com_update_multi",
		    "Com_xa_commit" => "$Com_xa_commit",
		    "Com_xa_end" => "$Com_xa_end",
		    "Com_xa_prepare" => "$Com_xa_prepare",
		    "Com_xa_recover" => "$Com_xa_recover",
		    "Com_xa_rollback" => "$Com_xa_rollback",
		    "Com_xa_start" => "$Com_xa_start",
		    "Compression" => "$Compression",
		    "Connections" => "$Connections",
		    "Created_tmp_disk_tables" => "$Created_tmp_disk_tables",
		    "Created_tmp_files" => "$Created_tmp_files",
		    "Created_tmp_tables" => "$Created_tmp_tables",
		    "Delayed_errors" => "$Delayed_errors",
		    "Delayed_insert_threads" => "$Delayed_insert_threads",
		    "Delayed_writes" => "$Delayed_writes",
		    "Flush_commands" => "$Flush_commands",
		    "Flush_commands" => "$Flush_commands",
		    "Handler_commit" => "$Handler_commit",
		    "Handler_delete" => "$Handler_delete",
		    "Handler_discover" => "$Handler_discover",
		    "Handler_prepare" => "$Handler_prepare",
		    "Handler_read_first" => "$Handler_read_first",
		    "Handler_read_key" => "$Handler_read_key",
		    "Handler_read_next" => "$Handler_read_next",
		    "Handler_read_prev" => "$Handler_read_prev",
		    "Handler_read_rnd" => "$Handler_read_rnd",
		    "Handler_read_rnd_next" => "$Handler_read_rnd_next",
		    "Handler_rollback" => "$Handler_rollback",
		    "Handler_savepoint" => "$Handler_savepoint",
		    "Handler_savepoint_rollback" => "$Handler_savepoint_rollback",
		    "Handler_update" => "$Handler_update",
		    "Handler_write" => "$Handler_write",
		    "Innodb_buffer_pool_pages_data" => "$Innodb_buffer_pool_pages_data",
		    "Innodb_buffer_pool_pages_dirty" => "$Innodb_buffer_pool_pages_dirty",
		    "Innodb_buffer_pool_pages_flushed" => "$Innodb_buffer_pool_pages_flushed",
		    "Innodb_buffer_pool_pages_free" => "$Innodb_buffer_pool_pages_free",
		    "Innodb_buffer_pool_pages_misc" => "$Innodb_buffer_pool_pages_misc",
		    "Innodb_buffer_pool_pages_total" => "$Innodb_buffer_pool_pages_total",
		    "Innodb_buffer_pool_read_ahead_rnd" => "$Innodb_buffer_pool_read_ahead_rnd",
		    "Innodb_buffer_pool_read_ahead_seq" => "$Innodb_buffer_pool_read_ahead_seq",
		    "Innodb_buffer_pool_read_requests" => "$Innodb_buffer_pool_read_requests",
		    "Innodb_buffer_pool_reads" => "$Innodb_buffer_pool_reads",
		    "Innodb_buffer_pool_wait_free" => "$Innodb_buffer_pool_wait_free",
		    "Innodb_buffer_pool_write_requests" => "$Innodb_buffer_pool_write_requests",
		    "Innodb_data_fsyncs" => "$Innodb_data_fsyncs",
		    "Innodb_data_pending_fsyncs" => "$Innodb_data_pending_fsyncs",
		    "Innodb_data_pending_reads" => "$Innodb_data_pending_reads",
		    "Innodb_data_pending_writes" => "$Innodb_data_pending_writes",
		    "Innodb_data_read" => "$Innodb_data_read",
		    "Innodb_data_reads" => "$Innodb_data_reads",
		    "Innodb_data_writes" => "$Innodb_data_writes",
		    "Innodb_data_written" => "$Innodb_data_written",
		    "Innodb_dblwr_pages_written" => "$Innodb_dblwr_pages_written",
		    "Innodb_dblwr_writes" => "$Innodb_dblwr_writes",
		    "Innodb_log_waits" => "$Innodb_log_waits",
		    "Innodb_log_write_requests" => "$Innodb_log_write_requests",
		    "Innodb_log_writes" => "$Innodb_log_writes",
		    "Innodb_os_log_fsyncs" => "$Innodb_os_log_fsyncs",
		    "Innodb_os_log_pending_fsyncs" => "$Innodb_os_log_pending_fsyncs",
		    "Innodb_os_log_pending_writes" => "$Innodb_os_log_pending_writes",
		    "Innodb_os_log_written" => "$Innodb_os_log_written",
		    "Innodb_page_size" => "$Innodb_page_size",
		    "Innodb_pages_created" => "$Innodb_pages_created",
		    "Innodb_pages_read" => "$Innodb_pages_read",
		    "Innodb_pages_written" => "$Innodb_pages_written",
		    "Innodb_row_lock_current_waits" => "$Innodb_row_lock_current_waits",
		    "Innodb_row_lock_time" => "$Innodb_row_lock_time",
		    "Innodb_row_lock_time_avg" => "$Innodb_row_lock_time_avg",
		    "Innodb_row_lock_time_max" => "$Innodb_row_lock_time_max",
		    "Innodb_row_lock_waits" => "$Innodb_row_lock_waits",
		    "Innodb_rows_deleted" => "$Innodb_rows_deleted",
		    "Innodb_rows_inserted" => "$Innodb_rows_inserted",
		    "Innodb_rows_read" => "$Innodb_rows_read",
		    "Innodb_rows_updated" => "$Innodb_rows_updated",
		    "Key_blocks_not_flushed" => "$Key_blocks_not_flushed",
		    "Key_blocks_unused" => "$Key_blocks_unused",
		    "Key_blocks_used" => "$Key_blocks_used",
		    "Key_read_requests" => "$Key_read_requests",
		    "Key_reads" => "$Key_reads",
		    "Key_write_requests" => "$Key_write_requests",
		    "Key_writes" => "$Key_writes",
		    "Last_query_cost" => "$Last_query_cost",
		    "Max_used_connections" => "$Max_used_connections",
		    "Not_flushed_delayed_rows" => "$Not_flushed_delayed_rows",
		    "Open_files" => "$Open_files",
		    "Open_streams" => "$Open_streams",
		    "Open_tables" => "$Open_tables",
		    "Opened_tables" => "$Opened_tables",
		    "Prepared_stmt_count" => "$Prepared_stmt_count",
		    "Qcache_free_blocks" => "$Qcache_free_blocks",
		    "Qcache_free_memory" => "$Qcache_free_memory",
		    "Qcache_hits" => "$Qcache_hits",
		    "Qcache_inserts" => "$Qcache_inserts",
		    "Qcache_lowmem_prunes" => "$Qcache_lowmem_prunes",
		    "Qcache_not_cached" => "$Qcache_not_cached",
		    "Qcache_queries_in_cache" => "$Qcache_queries_in_cache",
		    "Qcache_total_blocks" => "$Qcache_total_blocks",
		    "Questions" => "$Questions",
		    "Rpl_status" => "$Rpl_status",
		    "Select_full_join" => "$Select_full_join",
		    "Select_full_range_join" => "$Select_full_range_join",
		    "Select_range" => "$Select_range",
		    "Select_range_check" => "$Select_range_check",
		    "Select_scan" => "$Select_scan",
		    "Slave_open_temp_tables" => "$Slave_open_temp_tables",
		    "Slave_retried_transactions" => "$Slave_retried_transactions",
		    "Slave_running" => "$Slave_running",
		    "Slow_launch_threads" => "$Slow_launch_threads",
		    "Slow_queries" => "$Slow_queries",
		    "Sort_merge_passes" => "$Sort_merge_passes",
		    "Sort_range" => "$Sort_range",
		    "Sort_rows" => "$Sort_rows",
		    "Sort_scan" => "$Sort_scan",
		    "Table_locks_immediate" => "$Table_locks_immediate",
		    "Table_locks_waited" => "$Table_locks_waited",
		    "Tc_log_max_pages_used" => "$Tc_log_max_pages_used",
		    "Tc_log_page_size" => "$Tc_log_page_size",
		    "Tc_log_page_waits" => "$Tc_log_page_waits",
		    "Threads_cached" => "$Threads_cached",
		    "Threads_connected" => "$Threads_connected",
		    "Threads_created" => "$Threads_created",
		    "Threads_running" => "$Threads_running",
		    "Uptime" => "$Uptime",
		    "Creation_time" => "$Creation_time"));
    }
    else {
      $data = array(array(
		    "Aborted_clients" => "0",
		    "Aborted_connects" => "0",
		    "Binlog_cache_disk_use" => "0",
		    "Binlog_cache_use" => "0",
		    "Bytes_received" => "0",
		    "Bytes_sent" => "0",
		    "Com_admin_commands" => "0",
		    "Com_alter_db" => "0",
		    "Com_alter_table" => "0",
		    "Com_analyze" => "0",
		    "Com_backup_table" => "0",
		    "Com_begin" => "0",
		    "Com_call_procedure" => "0",
		    "Com_change_db" => "0",
		    "Com_change_master" => "0",
		    "Com_check" => "0",
		    "Com_checksum" => "0",
		    "Com_commit" => "0",
		    "Com_create_db" => "0",
		    "Com_create_function" => "0",
		    "Com_create_index" => "0",
		    "Com_create_table" => "0",
		    "Com_create_user" => "0",
		    "Com_dealloc_sql" => "0",
		    "Com_delete" => "0",
		    "Com_delete_multi" => "0",
		    "Com_do" => "0",
		    "Com_drop_db" => "0",
		    "Com_drop_function" => "0",
		    "Com_drop_index" => "0",
		    "Com_drop_table" => "0",
		    "Com_drop_user" => "0",
		    "Com_execute_sql" => "0",
		    "Com_flush" => "0",
		    "Com_grant" => "0",
		    "Com_ha_close" => "0",
		    "Com_ha_open" => "0",
		    "Com_ha_read" => "0",
		    "Com_help" => "0",
		    "Com_insert" => "0",
		    "Com_insert_select" => "0",
		    "Com_kill" => "0",
		    "Com_load" => "0",
		    "Com_load_master_data" => "0",
		    "Com_load_master_table" => "0",
		    "Com_lock_tables" => "0",
		    "Com_optimize" => "0",
		    "Com_preload_keys" => "0",
		    "Com_prepare_sql" => "0",
		    "Com_purge" => "0",
		    "Com_purge_before_date" => "0",
		    "Com_rename_table" => "0",
		    "Com_repair" => "0",
		    "Com_replace" => "0",
		    "Com_replace_select" => "0",
		    "Com_reset" => "0",
		    "Com_restore_table" => "0",
		    "Com_revoke" => "0",
		    "Com_revoke_all" => "0",
		    "Com_rollback" => "0",
		    "Com_savepoint" => "0",
		    "Com_select" => "0",
		    "Com_set_option" => "0",
		    "Com_show_binlog_events" => "0",
		    "Com_show_binlogs" => "0",
		    "Com_show_charsets" => "0",
		    "Com_show_collations" => "0",
		    "Com_show_column_types" => "0",
		    "Com_show_create_db" => "0",
		    "Com_show_create_table" => "0",
		    "Com_show_databases" => "0",
		    "Com_show_errors" => "0",
		    "Com_show_fields" => "0",
		    "Com_show_grants" => "0",
		    "Com_show_innodb_status" => "0",
		    "Com_show_keys" => "0",
		    "Com_show_logs" => "0",
		    "Com_show_master_status" => "0",
		    "Com_show_ndb_status" => "0",
		    "Com_show_new_master" => "0",
		    "Com_show_open_tables" => "0",
		    "Com_show_privileges" => "0",
		    "Com_show_processlist" => "0",
		    "Com_show_slave_hosts" => "0",
		    "Com_show_slave_status" => "0",
		    "Com_show_status" => "0",
		    "Com_show_storage_engines" => "0",
		    "Com_show_tables" => "0",
		    "Com_show_triggers" => "0",
		    "Com_show_variables" => "0",
		    "Com_show_warnings" => "0",
		    "Com_slave_start" => "0",
		    "Com_slave_stop" => "0",
		    "Com_stmt_close" => "0",
		    "Com_stmt_execute" => "0",
		    "Com_stmt_fetch" => "0",
		    "Com_stmt_prepare" => "0",
		    "Com_stmt_reset" => "0",
		    "Com_stmt_send_long_data" => "0",
		    "Com_truncate" => "0",
		    "Com_unlock_tables" => "0",
		    "Com_update" => "0",
		    "Com_update_multi" => "0",
		    "Com_xa_commit" => "0",
		    "Com_xa_end" => "0",
		    "Com_xa_prepare" => "0",
		    "Com_xa_recover" => "0",
		    "Com_xa_rollback" => "0",
		    "Com_xa_start" => "0",
		    "Compression" => "0",
		    "Connections" => "0",
		    "Created_tmp_disk_tables" => "0",
		    "Created_tmp_files" => "0",
		    "Created_tmp_tables" => "0",
		    "Delayed_errors" => "0",
		    "Delayed_insert_threads" => "0",
		    "Delayed_writes" => "0",
		    "Flush_commands" => "0",
		    "Handler_commit" => "0",
		    "Handler_delete" => "0",
		    "Handler_discover" => "0",
		    "Handler_prepare" => "0",
		    "Handler_read_first" => "0",
		    "Handler_read_key" => "0",
		    "Handler_read_next" => "0",
		    "Handler_read_prev" => "0",
		    "Handler_read_rnd" => "0",
		    "Handler_read_rnd_next" => "0",
		    "Handler_rollback" => "0",
		    "Handler_savepoint" => "0",
		    "Handler_savepoint_rollback" => "0",
		    "Handler_update" => "0",
		    "Handler_write" => "0",
		    "Innodb_buffer_pool_pages_data" => "0",
		    "Innodb_buffer_pool_pages_dirty" => "0",
		    "Innodb_buffer_pool_pages_flushed" => "0",
		    "Innodb_buffer_pool_pages_free" => "0",
		    "Innodb_buffer_pool_pages_misc" => "0",
		    "Innodb_buffer_pool_pages_total" => "0",
		    "Innodb_buffer_pool_read_ahead_rnd" => "0",
		    "Innodb_buffer_pool_read_ahead_seq" => "0",
		    "Innodb_buffer_pool_read_requests" => "0",
		    "Innodb_buffer_pool_reads" => "0",
		    "Innodb_buffer_pool_wait_free" => "0",
		    "Innodb_buffer_pool_write_requests" => "0",
		    "Innodb_data_fsyncs" => "0",
		    "Innodb_data_pending_fsyncs" => "0",
		    "Innodb_data_pending_reads" => "0",
		    "Innodb_data_pending_writes" => "0",
		    "Innodb_data_read" => "0",
		    "Innodb_data_reads" => "0",
		    "Innodb_data_writes" => "0",
		    "Innodb_data_written" => "0",
		    "Innodb_dblwr_pages_written" => "0",
		    "Innodb_dblwr_writes" => "0",
		    "Innodb_log_waits" => "0",
		    "Innodb_log_write_requests" => "0",
		    "Innodb_log_writes" => "0",
		    "Innodb_os_log_fsyncs" => "0",
		    "Innodb_os_log_pending_fsyncs" => "0",
		    "Innodb_os_log_pending_writes" => "0",
		    "Innodb_os_log_written" => "0",
		    "Innodb_page_size" => "0",
		    "Innodb_pages_created" => "0",
		    "Innodb_pages_read" => "0",
		    "Innodb_pages_written" => "0",
		    "Innodb_row_lock_current_waits" => "0",
		    "Innodb_row_lock_time" => "0",
		    "Innodb_row_lock_time_avg" => "0",
		    "Innodb_row_lock_time_max" => "0",
		    "Innodb_row_lock_waits" => "0",
		    "Innodb_rows_deleted" => "0",
		    "Innodb_rows_inserted" => "0",
		    "Innodb_rows_read" => "0",
		    "Innodb_rows_updated" => "0",
		    "Key_blocks_not_flushed" => "0",
		    "Key_blocks_unused" => "0",
		    "Key_blocks_used" => "0",
		    "Key_read_requests" => "0",
		    "Key_reads" => "0",
		    "Key_write_requests" => "0",
		    "Key_writes" => "0",
		    "Last_query_cost" => "0",
		    "Max_used_connections" => "0",
		    "Not_flushed_delayed_rows" => "0",
		    "Open_files" => "0",
		    "Open_streams" => "0",
		    "Open_tables" => "0",
		    "Opened_tables" => "0",
		    "Prepared_stmt_count" => "0",
		    "Qcache_free_blocks" => "0",
		    "Qcache_free_memory" => "0",
		    "Qcache_hits" => "0",
		    "Qcache_inserts" => "0",
		    "Qcache_lowmem_prunes" => "0",
		    "Qcache_not_cached" => "0",
		    "Qcache_queries_in_cache" => "0",
		    "Qcache_total_blocks" => "0",
		    "Questions" => "0",
		    "Rpl_status" => "0",
		    "Select_full_join" => "0",
		    "Select_full_range_join" => "0",
		    "Select_range" => "0",
		    "Select_range_check" => "0",
		    "Select_scan" => "0",
		    "Slave_open_temp_tables" => "0",
		    "Slave_retried_transactions" => "0",
		    "Slave_running" => "0",
		    "Slow_launch_threads" => "0",
		    "Slow_queries" => "0",
		    "Sort_merge_passes" => "0",
		    "Sort_range" => "0",
		    "Sort_rows" => "0",
		    "Sort_scan" => "0",
		    "Table_locks_immediate" => "0",
		    "Table_locks_waited" => "0",
		    "Tc_log_max_pages_used" => "0",
		    "Tc_log_page_size" => "0",
		    "Tc_log_page_waits" => "0",
		    "Threads_cached" => "0",
		    "Threads_connected" => "0",
		    "Threads_created" => "0",
		    "Threads_running" => "0",
		    "Uptime" => "0",
		    "Creation_time" => "0000-00-00"));
    }
    return $data;
  }

  function get_current_alerts($server_list_id) {
    log_message('debug', "Starting get_current_alerts");
    $dbr = $this->load->database('read', TRUE);
    if($server_list_id == '0') {     
      $user_server_client_id = $this->phpsession->get('user_server_client_id');
      if($user_server_client_id== 0) {
	$sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' and t1.alert_level ='0' order by server_hostname,t1.alert_level";
      }
      else {
	$sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t3.server_client_id = '$user_server_client_id' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' and t1.alert_level ='0' order by server_hostname,t1.alert_level";
      }
    }
    elseif($server_list_id == 'NULL') {
      $sql="select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack,  t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' order by server_hostname,t1.alert_level";
    }
    else {
      $sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.server_list_id='$server_list_id' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' order by server_hostname,t1.alert_level";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $alerts = array(array(
			    "alert_name" => "null",
			    "alert_desc" => "null",
			    "alert_links" => "null",
			    "alert_solution" => "null",
			    "alert_level" => "null",
			    "alerts_current_id" => "null",
			    "alerts_ign" => "null",
			    "alerts_ack" => "null",
			    "system_users_id" => "null",
			    "renew_time" => "null",
			    "response_time" => "null",
			    "alerts_def_id" => "null",
			    "server_list_id" => "null",
			    "server_hostname" => "null"));
      return $alerts;			    
    }
  }

  function get_server_statistics_id($server_list_id) {
    log_message('debug', "Starting get_server_statistics_id");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select id from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$data = $row->id;
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }

  function get_valid_host($server_client_id,$server_list_id) {
    log_message('debug', "Starting get_valid_host");
    $dbr = $this->load->database('read', TRUE);
    if($server_client_id != 0) {
      $sql = "select id,server_hostname from server_list where server_client_id = '$server_client_id' and id = '$server_list_id'";
      log_message('debug', "$sql");
      $query = $dbr->query($sql);
      if($query->num_rows() > 0) {
	$data = "1";
      }
      else {
	$data = "0";
      }
      return $data;
    }
    else {
      $data = "1";
      return $data;
    }
  }

  function get_last_report($server_list_id) {
    log_message('debug', "Starting get_last_report");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select t1.id, t1.server_list_id ,t2.server_statistics_id from server_statistics as t1, server_report as t2 where t1.id = t2.server_statistics_id and t1.server_list_id = '$server_list_id' order by t2.id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $server_statistics_id = $row->server_statistics_id;
	$report_id = $row->id;
      }
    }
    else {
      $report_id = "0";
    }
    return $report_id;
  }

  function get_report($server_statistics_id) {
    log_message('debug', "Starting get_report");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select server_report_document from server_report where server_statistics_id='$server_statistics_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$data = $row->server_report_document;
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }

  function get_server_list() {
    log_message('debug', "Starting get_server_list");
    $dbr = $this->load->database('read', TRUE);
    $client_id = $this->phpsession->get('server_client_id');
    if($client_id != 0) {
      $sql = "select t1.*, t2.server_client_name from server_list as t1, server_client as t2 where t1.server_client_id = '$client_id' and t1.server_client_id = t2.id";
    }
    else {
      $sql = "select t1.*, t2.server_client_name from 
            server_list as t1, 
            server_client as t2 
            where t1.server_client_id = t2.id
            order by t2.server_client_name,server_type,server_hostname";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
  }

  function get_stats($server_list_id,$x) {
    log_message('debug', "Starting get_stats");
    $dbr = $this->load->database('read', TRUE);
    if($server_list_id == '0') { //here we are calculating sizes of variables for a list of hosts
      $user_server_client_id = $this->phpsession->get('user_server_client_id');
      if($user_server_client_id == 0) {
	$sql = "select id from server_list where active >='1' order by server_hostname";
      }
      else {
	$sql = "select id from server_list where active >='1' and server_client_id = '$user_server_client_id' order by server_hostname";
      }

      log_message('debug', "$sql");
      $query = $dbr->query($sql);
      $vcount = 0;
      $vals = array(0);
      if($query->num_rows() > 0) {
	foreach ($query->result() as $row) {
	  $servop = $row->id;
	  $sql1 = "select $x from server_statistics where server_list_id='$servop' order by id desc limit 1";
	  log_message('debug', "$sql1");
	  $query1 = $dbr->query($sql1);
	  if($query1->num_rows() > 0) {
	    foreach ($query1->result() as $row1) {
	      $z = $row1->$x;
	      array_push($vals,$z);
	    }
	  }
	}
      }
      foreach($vals as $v) {	
	$vcount += $v;
      }
      return $vcount;
    }
    else { //here we are calculating size of a variable for one host
      $sql = "select $x from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;	
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }
  
  function get_host_info($server_list_id,$x) {
    log_message('debug', "Starting get_host_info");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from server_list where id='$server_list_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_client_info($server_client_id,$x) {
    log_message('debug', "Starting get_client_info");

    if($server_client_id == 0) {
      $data = "System User";
      return $data;
    }

    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from server_client where id='$server_client_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_client_list() {
    log_message('debug', "Starting get_client_list");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select id,server_client_name from server_client order by server_client_name";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $clients=array(array("id" => "0","server_client_name" => ""));
      return $clients;
    }
  }

  function get_user_info($system_user_id,$x) {
    log_message('debug', "Starting get_user_info");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from system_users where id='$system_user_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_alert_name($alerts_def_id) {
    log_message('debug', "Starting get_alert_name");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select alert_name from alerts_def where id='$alerts_def_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->alert_name;
      }
    }
    return $data;
  }

  function get_slave($server_list_id) {
    log_message('debug', "Starting get_slave");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select server_is_slave from server_list where id='$server_list_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$slave = $row->server_is_slave;
      }
    }
    return $slave;      
  }

  function get_graphs_default($xval,$yaxis,$name,$server_list_id,$sday,$eday) {
    log_message('debug', "Starting get_graphs_default");
    $dbr = $this->load->database('read', TRUE);
    $sess_system_graph_animation_enable = $this->phpsession->get('sess_system_graph_animation_enable');
    $yval = "Date";
    $xaxis = "";
  
    if($server_list_id == '0') {
      $sql = "select max($xval) as $xval,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    else {
      $sql = "select $xval,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE server_list_id = '$server_list_id' AND Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    $count = $query->num_rows();

    if($count <= 64) {
      log_message('debug', "count < 64");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    elseif($count <= 128) {
      log_message('debug', "count < 128");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }
    else {
      log_message('debug', "count > 128");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1'
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10'
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5'
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }
    if($query->num_rows() > 0) {
      $i=1;
	foreach ($query->result() as $row) {
	  $val1 = $row->$xval;
	  $val2 = $row->$yval;
	  if($val1 < 1) { $val1 = $val1 + .001; }
	  if($xval == "Uptime") { $val1 = ($val1 / 86400);}
	  $strXML .= "<set name='$val2' value='$val1' color='ff6600' showName='0'/>\n";
	  $i++;
	}
    }
    $strXML .= "</graph>";
    return $strXML;
  }
  
  function get_graphs_sec($xval,$yaxis,$name,$server_list_id,$sday,$eday) {
    log_message('debug', "Starting get_graphs_sec");
    $dbr = $this->load->database('read', TRUE);
    $sess_system_graph_animation_enable = $this->phpsession->get('sess_system_graph_animation_enable');
    $yval = "Date";
    $xaxis = "";
    
    if($server_list_id== '0') {
      log_message('debug', "overview type");
      //We're not using $sday and $eday for the overview so I changed it to INTERVAL instead. 
      //Might remove the commented out query at some point later.
      //$sql = "select $xval,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    $sql = "select $xval,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE() GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    else {
      log_message('debug', "host type");
      $sql = "select $xval,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE server_list_id = '$server_list_id' AND Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    $count = $query->num_rows();
    
    if($count <= 64) {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    elseif($count <= 128) {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    else {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='$sess_system_graph_animation_enable'
showgridbg='1' showhovercap='1' showColumnShadow='1'
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10'
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5'
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }    
    if($query->num_rows() > 0) {
      $i=1;
      foreach ($query->result() as $row) {
	$val1 = $row->$xval;
	$val2 = $row->$yval;
	$Uptime = $row->Uptime;

	if($Uptime < 1) { $Uptime = 1; }
	if($val1 < 1) { $val1 = 1; }

	$val1 = ($val1 / $Uptime);
	if($val1 < 1) { $val1 = $val1 + .001; }
	$strXML .= "<set name='$val2' value='$val1' color='ff6600' showName='0'/>\n";
	$i++;
      }
    }
    $strXML .= "</graph>";
    return $strXML;
  }
}
?>
