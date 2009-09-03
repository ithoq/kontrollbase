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

class Main extends Controller {

  function Main()
  {
    parent::Controller();
  }

  function index() {	  
    $this->load->model('Model_main', 'main');  
    log_message('debug', "main_index function called");

    check_variables(); // ensure compress_output is set to FALSE in the config
    check_writeable(); // make sure directories are writeable that need to be - runs helper filecheck_helper
    check_files(); // make sure config files exist - runs helper filecheck_helper
    auth(); // check user authentication, if not authenticated, redirect to login controller
    //    version_check(); // check to see if a newer version is available
    log_message('debug', "main_index init checks finished, continuing...");
    set_session_vars(); // set session variables [ variables_helper.php ]

    $server_list_id = "0"; //we do this to get get_grahs_default to display overall environment data    
    $prevWeek = time() - (7 * 24 * 60 * 60);
    $eday = date('Y-m-d');
    $sday = date('Y-m-d', $prevWeek);
    
    $g['server_list'] = $this->main->get_server_list();
    $g['g1'] = $this->main->get_graphs_default("queries_per_second","Q/sec","Query Rate",$server_list_id,$sday,$eday);
    $g['g2'] = $this->main->get_graphs_default("num_connections","connections","Server Connections",$server_list_id,$sday,$eday);
    $g['g3'] = $this->main->get_graphs_default("os_load_15","load avg","OS Load AVG 15 minute",$server_list_id,$sday,$eday);
    $g['g4'] = $this->main->get_graphs_default("os_mem_used","ram","OS Memory Used",$server_list_id,$sday,$eday);
    $g['g5'] = $this->main->get_graphs_default("os_cpu_idle","percentage","OS CPU Idle",$server_list_id,$sday,$eday);
    $g['g6'] = $this->main->get_graphs_default("length_data","size","Total Data Size",$server_list_id,$sday,$eday);
    $g['g7'] = $this->main->get_graphs_default("length_index","size","Total Index Size",$server_list_id,$sday,$eday);
    $g['g8'] = $this->main->get_graphs_sec("Bytes_received","bytes/sec","Bytes_received",$server_list_id,$sday,$eday);
    $g['g9'] = $this->main->get_graphs_sec("Bytes_sent","bytes/sec","Bytes_sent",$server_list_id,$sday,$eday);	  
    $g['server_list_id'] = $server_list_id;
    $size_data = $this->main->get_stats($server_list_id,"length_data");
    $size_index = $this->main->get_stats($server_list_id,"length_index");
    $g['size_index'] = byte_format($size_index);
    $g['size_data']= byte_format($size_data);
    $g['size'] = byte_format($size_data + $size_index);
    $g['alerts'] = $this->main->get_current_alerts($server_list_id);
    $g['clients'] = $this->main->get_client_list();
    $g['root'] = $this->config->item('base_url');
    $g['dir'] = $this->config->item('base_dir');
    $g['data'] = $this->main->get_summary_data();
    $_SESSION['example'] = $g['root'];	  // we set this for the header files that don't use CI sessions

    $g['client_id'] = $this->phpsession->get('server_client_id');
    $g['user_system_user_name'] = $this->phpsession->get('user_system_user_name');
    $user_server_client_id = $this->phpsession->get('user_server_client_id');
    $g['user_server_client_name'] = $this->main->get_client_info($user_server_client_id,"server_client_name");
    $g['user_role_tier'] = $this->phpsession->get('user_role_tier');

    $this->load->view('main/main',$g);
  }
  
  function host() {
    log_message('debug', "main_host function called");
    auth();
    log_message('debug', "main_host auth check finished, continuing...");

    memcache_start(); // start memcache if enabled in config
    $this->load->model('Model_main', 'main');
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules('sday', 'sday', 'required|exact_length[10]|alpha_dash');
    $this->form_validation->set_rules('eday', 'eday', 'required|exact_length[10]|alpha_dash');
    $this->form_validation->set_rules('server_list_id', 'server_list_id', 'required|numeric');
    
    $server_temp_id = $this->input->post('server_list_id');
    $sday = $this->input->post('sday');
    $eday = $this->input->post('eday');
    
    if(!$server_temp_id) {
      $prevWeek = time() - (7 * 24 * 60 * 60);
      $eday = date('Y-m-d');
      $sday = date('Y-m-d', $prevWeek);
      $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
      if(!$server_list_id) {
	$this->index();
      }
    }
    else {
      $server_list_id = $server_temp_id;
      if($this->form_validation->run() == FALSE) {
	show_error("Your request has failed.");
      }
    }

    $server_client_id = $this->phpsession->get('user_server_client_id');
    $fatal = $this->main->get_valid_host($server_client_id,$server_list_id);
    if($fatal == 0) {
      show_error("Unauthorized access.");
    }
    
    $prevWeek = time() - (7 * 24 * 60 * 60);
    $eday = date('Y-m-d');
    $sday = date('Y-m-d', $prevWeek);
    
    $g['sday'] = $sday;
    $g['eday'] = $eday;
    $g['server_list'] = $this->main->get_server_list();
    $g['g1'] = $this->main->get_graphs_default("queries_per_second","Q/sec","Query Rate",$server_list_id,$sday,$eday);
    $g['g2'] = $this->main->get_graphs_default("num_connections","connections","Server Connections",$server_list_id,$sday,$eday);
    $g['g3'] = $this->main->get_graphs_default("os_load_1","load avg","OS Load AVG 1 minute",$server_list_id,$sday,$eday);
    $g['g4'] = $this->main->get_graphs_default("os_load_5","load avg","OS Load AVG 5 minute",$server_list_id,$sday,$eday);
    $g['g5'] = $this->main->get_graphs_default("os_load_15","load avg","OS Load AVG 15 minute",$server_list_id,$sday,$eday);
    $g['g6'] = $this->main->get_graphs_default("os_mem_total","ram","OS Memory Total",$server_list_id,$sday,$eday);
    $g['g7'] = $this->main->get_graphs_default("os_mem_used","ram","OS Memory Used",$server_list_id,$sday,$eday);
    $g['g8'] = $this->main->get_graphs_default("os_swap_total","swap size","OS Swap Total",$server_list_id,$sday,$eday);
    $g['g9'] = $this->main->get_graphs_default("os_swap_free","swap size","OS Swap Free",$server_list_id,$sday,$eday);
    $g['g10'] = $this->main->get_graphs_default("os_cpu_user","percentage","OS CPU User",$server_list_id,$sday,$eday);
    $g['g11'] = $this->main->get_graphs_default("os_cpu_system","percentage","OS CPU System",$server_list_id,$sday,$eday);
    $g['g12'] = $this->main->get_graphs_default("os_cpu_idle","percentage","OS CPU Idle",$server_list_id,$sday,$eday);
    $g['g13'] = $this->main->get_graphs_default("num_schema","quantity","Total Schemas",$server_list_id,$sday,$eday);
    $g['g14'] = $this->main->get_graphs_default("num_tables","quantity","Total Tables",$server_list_id,$sday,$eday);
    $g['g15'] = $this->main->get_graphs_default("length_data","size","Total Data Size",$server_list_id,$sday,$eday);
    $g['g16'] = $this->main->get_graphs_default("length_index","size","Total Index Size",$server_list_id,$sday,$eday);
    $g['g17'] = $this->main->get_graphs_default("engine_count_innodb","quant","InnoDB Tables",$server_list_id,$sday,$eday);
    $g['g18'] = $this->main->get_graphs_default("engine_count_myisam","quant","MyISAM Tables",$server_list_id,$sday,$eday);
    $g['g19'] = $this->main->get_graphs_default("engine_innodb_size_data","quant","InnoDB Data Size",$server_list_id,$sday,$eday);
    $g['g20'] = $this->main->get_graphs_default("engine_innodb_size_index","quant","InnoDB Index Size",$server_list_id,$sday,$eday);
    $g['g21'] = $this->main->get_graphs_default("engine_myisam_size_data","quant","MyISAM Data Size",$server_list_id,$sday,$eday);
    $g['g22'] = $this->main->get_graphs_default("engine_myisam_size_index","quant","MyISAM Index Size",$server_list_id,$sday,$eday);
    $g['g23'] = $this->main->get_graphs_default("Qcache_free_memory","free","Qcache_free_memory",$server_list_id,$sday,$eday);
    $g['g24'] = $this->main->get_graphs_sec("Qcache_hits","per/sec","Qcache_hits",$server_list_id,$sday,$eday);
    $g['g25'] = $this->main->get_graphs_sec("Qcache_inserts","per/sec","Qcache_inserts",$server_list_id,$sday,$eday);
    $g['g26'] = $this->main->get_graphs_sec("Qcache_queries_in_cache","per/sec","Qcache_queries_in_cache",$server_list_id,$sday,$eday);
    $g['g27'] = $this->main->get_graphs_sec("Qcache_lowmem_prunes","per/sec","Qcache_lowmem_prunes",$server_list_id,$sday,$eday);
    $g['g28'] = $this->main->get_graphs_sec("Qcache_not_cached","per/sec","Qcache_not_cached",$server_list_id,$sday,$eday);
    $g['g29'] = $this->main->get_graphs_sec("Open_tables","per/sec","Open_tables",$server_list_id,$sday,$eday);
    $g['g30'] = $this->main->get_graphs_sec("Open_files","per/sec","Open_files",$server_list_id,$sday,$eday);
    $g['g31'] = $this->main->get_graphs_sec("Slow_queries","per/sec","Slow_queries",$server_list_id,$sday,$eday);
    $g['g32'] = $this->main->get_graphs_default("Uptime","days","Server Uptime",$server_list_id,$sday,$eday);
    $g['g33'] = $this->main->get_graphs_sec("Table_locks_immediate","per/sec","Table_locks_immediate",$server_list_id,$sday,$eday);
    $g['g34'] = $this->main->get_graphs_sec("Table_locks_waited","per/sec","Table_locks_waited",$server_list_id,$sday,$eday);
    $g['g35'] = $this->main->get_graphs_sec("Threads_cached","per/sec","Threads_cached",$server_list_id,$sday,$eday);
    $g['g36'] = $this->main->get_graphs_sec("Threads_created","per/sec","Threads_created",$server_list_id,$sday,$eday);
    $g['g37'] = $this->main->get_graphs_default("Seconds_Behind_Master","seconds","Seconds_Behind_Master",$server_list_id,$sday,$eday);
    $g['g38'] = $this->main->get_graphs_sec("Key_reads","per/sec","Key_reads",$server_list_id,$sday,$eday);
    $g['g39'] = $this->main->get_graphs_sec("Key_writes","per/sec","Key_writes",$server_list_id,$sday,$eday);
    $g['g40'] = $this->main->get_graphs_sec("Innodb_data_reads","per/sec","Innodb_data_reads",$server_list_id,$sday,$eday);
    $g['g41'] = $this->main->get_graphs_sec("Innodb_data_writes","per/sec","Innodb_data_writes",$server_list_id,$sday,$eday);
    $g['g42'] = $this->main->get_graphs_sec("Innodb_buffer_pool_reads","per/sec","Innodb_buffer_pool_reads",$server_list_id,$sday,$eday);
    $g['g43'] = $this->main->get_graphs_sec("Innodb_buffer_pool_write_requests","per/sec","Innodb_buffer_pool_write_requests",$server_list_id,$sday,$eday);
    $g['g44'] = $this->main->get_graphs_default("Innodb_buffer_pool_pages_free","quant","Innodb_buffer_pool_pages_free",$server_list_id,$sday,$eday);
    $g['g45'] = $this->main->get_graphs_default("Innodb_buffer_pool_pages_total","quant","Innodb_buffer_pool_pages_total",$server_list_id,$sday,$eday);
    $g['g46'] = $this->main->get_graphs_sec("Created_tmp_disk_tables","per/sec","Created_tmp_disk_tables",$server_list_id,$sday,$eday);
    $g['g47'] = $this->main->get_graphs_sec("Created_tmp_files","per/sec","Created_tmp_files",$server_list_id,$sday,$eday);
    $g['g48'] = $this->main->get_graphs_sec("Created_tmp_tables","per/sec","Created_tmp_tables",$server_list_id,$sday,$eday);
    $g['g49'] = $this->main->get_graphs_sec("Com_select","per/sec","Com_select",$server_list_id,$sday,$eday);
    $g['g50'] = $this->main->get_graphs_sec("Com_insert","per/sec","Com_insert",$server_list_id,$sday,$eday);
    $g['g51'] = $this->main->get_graphs_sec("Com_delete","per/sec","Com_delete",$server_list_id,$sday,$eday);
    $g['g52'] = $this->main->get_graphs_sec("Com_update","per/sec","Com_update",$server_list_id,$sday,$eday);
    $g['g53'] = $this->main->get_graphs_sec("Bytes_received","bytes/sec","Bytes_received",$server_list_id,$sday,$eday);
    $g['g54'] = $this->main->get_graphs_sec("Bytes_sent","bytes/sec","Bytes_sent",$server_list_id,$sday,$eday);    
    
    $g['slave'] = $this->main->get_slave($server_list_id);
    $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
    $g['ip_address'] = $this->main->get_host_info($server_list_id,"server_ipaddress");
    $g['server_list_id'] = $this->main->get_host_info($server_list_id,"id");
    $g['server_statistics_id'] = $this->main->get_server_statistics_id($server_list_id);
    $g['version'] = $this->main->get_stats($server_list_id,"version");
    $g['engine'] = $this->main->get_stats($server_list_id,"storage_engine");
    $g['slave_sql'] = $this->main->get_stats($server_list_id,"Slave_SQL_Running");
    $g['slave_io'] = $this->main->get_stats($server_list_id,"Slave_IO_Running");
    $g['date'] = $this->main->get_stats($server_list_id,"Creation_time");
    $g['collection_time_elapse'] = $this->main->get_stats($server_list_id,"collection_time_elapse");
    $size_data = $this->main->get_stats($server_list_id,"length_data");
    $size_index = $this->main->get_stats($server_list_id,"length_index");
    $g['size_index'] = byte_format($size_index);
    $g['size_data']= byte_format($size_data);
    $g['size'] = byte_format($size_data + $size_index);
    $g['uptime'] = round($this->main->get_stats($server_list_id,"Uptime")/86400);  
    $g['alerts'] = $this->main->get_current_alerts($server_list_id);
    $g['clients'] = $this->main->get_client_list();
    $g['root'] = $this->config->item('base_url');
    $g['dir'] = $this->config->item('base_dir');
    $g['data'] = $this->main->get_summary_host($server_list_id);

    $g['client_id'] = $this->phpsession->get('server_client_id');
    $g['user_system_user_name'] = $this->phpsession->get('user_system_user_name');
    $user_server_client_id = $this->phpsession->get('user_server_client_id');
    $g['user_server_client_name'] = $this->main->get_client_info($user_server_client_id,"server_client_name");
    $g['user_role_tier'] = $this->phpsession->get('user_role_tier');

    //TESTING MEMCACHE
    //if($this->phpsession->get('memcache_active') == TRUE) {
    //log_message('debug', "Cacheing view main/host as cachedHost-$server_list_id");
    //$this->cache->save("cachedHost-$server_list_id",$this->load->view('main/host', $g, TRUE),NULL,3600);
    //}

    $this->load->view('main/host',$g);
  }
  
  function graphs() {
    log_message('debug', "main-graphs function called");
    $this->load->model('Model_main', 'main');
    $this->load->library('form_validation');
    
    $this->form_validation->set_rules('sday', 'sday', 'required|exact_length[10]|alpha_dash');
    $this->form_validation->set_rules('eday', 'eday', 'required|exact_length[10]|alpha_dash');
    $this->form_validation->set_rules('server_list_id', 'server_list_id', 'required|numeric');
    
    $server_temp_id = $this->input->post('server_list_id');
    $sday = $this->input->post('sday');
    $eday = $this->input->post('eday');
    
    if(!$server_temp_id) {
      $prevWeek = time() - (7 * 24 * 60 * 60);
      $eday = date('Y-m-d');
      $sday = date('Y-m-d', $prevWeek);
      $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
      if(!$server_list_id) {
	index();
      }
    }
    else {
      $server_list_id = $server_temp_id;
      if($this->form_validation->run() == FALSE) {
	show_error("Your request has failed.");
      }
    }
    
    $g['sday'] = $sday;
    $g['eday'] = $eday;
    $g['server_list'] = $this->main->get_server_list();
    $g['slave'] = $this->main->get_slave($server_list_id);
    $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
    $g['ip_address'] = $this->main->get_host_info($server_list_id,"server_ipaddress");
    $g['server_list_id'] = $this->main->get_host_info($server_list_id,"id");
    $g['server_statistics_id'] = $this->main->get_server_statistics_id($server_list_id);
    $g['version'] = $this->main->get_stats($server_list_id,"version");
    $g['engine'] = $this->main->get_stats($server_list_id,"storage_engine");
    $g['slave_sql'] = $this->main->get_stats($server_list_id,"Slave_SQL_Running");
    $g['slave_io'] = $this->main->get_stats($server_list_id,"Slave_IO_Running");
    $g['date'] = $this->main->get_stats($server_list_id,"Creation_time");
    $g['collection_time_elapse'] = $this->main->get_stats($server_list_id,"collection_time_elapse");
    $size_data = $this->main->get_stats($server_list_id,"length_data");
    $size_index = $this->main->get_stats($server_list_id,"length_index");
    $g['size_index'] = byte_format($size_index);
    $g['size_data']= byte_format($size_data);
    $g['size'] = byte_format($size_data + $size_index);
    $g['uptime'] = round($this->main->get_stats($server_list_id,"Uptime")/86400);
    $g['alerts'] = $this->main->get_current_alerts($server_list_id);
    $g['root'] = $this->config->item('base_url');
    
    $g['g1'] = $this->main->get_graphs_default("queries_per_second","Q/sec","Query Rate",$server_list_id,$sday,$eday);
    $g['g2'] = $this->main->get_graphs_default("num_connections","connections","Server Connections",$server_list_id,$sday,$eday);
    $g['g3'] = $this->main->get_graphs_default("os_load_1","load avg","OS Load AVG 1 minute",$server_list_id,$sday,$eday);
    $g['g4'] = $this->main->get_graphs_default("os_load_5","load avg","OS Load AVG 5 minute",$server_list_id,$sday,$eday);
    $g['g5'] = $this->main->get_graphs_default("os_load_15","load avg","OS Load AVG 15 minute",$server_list_id,$sday,$eday);
    $g['g6'] = $this->main->get_graphs_default("os_mem_total","ram","OS Memory Total",$server_list_id,$sday,$eday);
    $g['g7'] = $this->main->get_graphs_default("os_mem_used","ram","OS Memory Used",$server_list_id,$sday,$eday);
    $g['g8'] = $this->main->get_graphs_default("os_swap_total","swap size","OS Swap Total",$server_list_id,$sday,$eday);
    $g['g9'] = $this->main->get_graphs_default("os_swap_free","swap size","OS Swap Free",$server_list_id,$sday,$eday);
    $g['g10'] = $this->main->get_graphs_default("os_cpu_user","percentage","OS CPU User",$server_list_id,$sday,$eday);
    $g['g11'] = $this->main->get_graphs_default("os_cpu_system","percentage","OS CPU System",$server_list_id,$sday,$eday);
    $g['g12'] = $this->main->get_graphs_default("os_cpu_idle","percentage","OS CPU Idle",$server_list_id,$sday,$eday);
    $g['g13'] = $this->main->get_graphs_default("num_schema","quantity","Total Schemas",$server_list_id,$sday,$eday);
    $g['g14'] = $this->main->get_graphs_default("num_tables","quantity","Total Tables",$server_list_id,$sday,$eday);
    $g['g15'] = $this->main->get_graphs_default("length_data","size","Total Data Size",$server_list_id,$sday,$eday);
    $g['g16'] = $this->main->get_graphs_default("length_index","size","Total Index Size",$server_list_id,$sday,$eday);
    $g['g17'] = $this->main->get_graphs_default("engine_count_innodb","quant","InnoDB Tables",$server_list_id,$sday,$eday);
    $g['g18'] = $this->main->get_graphs_default("engine_count_myisam","quant","MyISAM Tables",$server_list_id,$sday,$eday);
    $g['g19'] = $this->main->get_graphs_default("engine_innodb_size_data","quant","InnoDB Data Size",$server_list_id,$sday,$eday);
    $g['g20'] = $this->main->get_graphs_default("engine_innodb_size_index","quant","InnoDB Index Size",$server_list_id,$sday,$eday);
    $g['g21'] = $this->main->get_graphs_default("engine_myisam_size_data","quant","MyISAM Data Size",$server_list_id,$sday,$eday);
    $g['g22'] = $this->main->get_graphs_default("engine_myisam_size_index","quant","MyISAM Index Size",$server_list_id,$sday,$eday);
    $g['g23'] = $this->main->get_graphs_default("Qcache_free_memory","free","Qcache_free_memory",$server_list_id,$sday,$eday);
    $g['g24'] = $this->main->get_graphs_sec("Qcache_hits","per/sec","Qcache_hits",$server_list_id,$sday,$eday);
    $g['g25'] = $this->main->get_graphs_sec("Qcache_inserts","per/sec","Qcache_inserts",$server_list_id,$sday,$eday);
    $g['g26'] = $this->main->get_graphs_sec("Qcache_queries_in_cache","per/sec","Qcache_queries_in_cache",$server_list_id,$sday,$eday);
    $g['g27'] = $this->main->get_graphs_sec("Qcache_lowmem_prunes","per/sec","Qcache_lowmem_prunes",$server_list_id,$sday,$eday);
    $g['g28'] = $this->main->get_graphs_sec("Qcache_not_cached","per/sec","Qcache_not_cached",$server_list_id,$sday,$eday);
    $g['g29'] = $this->main->get_graphs_sec("Open_tables","per/sec","Open_tables",$server_list_id,$sday,$eday);
    $g['g30'] = $this->main->get_graphs_sec("Open_files","per/sec","Open_files",$server_list_id,$sday,$eday);
    $g['g31'] = $this->main->get_graphs_sec("Slow_queries","per/sec","Slow_queries",$server_list_id,$sday,$eday);
    $g['g32'] = $this->main->get_graphs_default("Uptime","days","Server Uptime",$server_list_id,$sday,$eday);
    $g['g33'] = $this->main->get_graphs_sec("Table_locks_immediate","per/sec","Table_locks_immediate",$server_list_id,$sday,$eday);
    $g['g34'] = $this->main->get_graphs_sec("Table_locks_waited","per/sec","Table_locks_waited",$server_list_id,$sday,$eday);
    $g['g35'] = $this->main->get_graphs_sec("Threads_cached","per/sec","Threads_cached",$server_list_id,$sday,$eday);
    $g['g36'] = $this->main->get_graphs_sec("Threads_created","per/sec","Threads_created",$server_list_id,$sday,$eday);
    $g['g37'] = $this->main->get_graphs_default("Seconds_Behind_Master","seconds","Seconds_Behind_Master",$server_list_id,$sday,$eday);
    $g['g38'] = $this->main->get_graphs_sec("Key_reads","per/sec","Key_reads",$server_list_id,$sday,$eday);
    $g['g39'] = $this->main->get_graphs_sec("Key_writes","per/sec","Key_writes",$server_list_id,$sday,$eday);
    $g['g40'] = $this->main->get_graphs_sec("Innodb_data_reads","per/sec","Innodb_data_reads",$server_list_id,$sday,$eday);
    $g['g41'] = $this->main->get_graphs_sec("Innodb_data_writes","per/sec","Innodb_data_writes",$server_list_id,$sday,$eday);
    $g['g42'] = $this->main->get_graphs_sec("Innodb_buffer_pool_reads","per/sec","Innodb_buffer_pool_reads",$server_list_id,$sday,$eday);
    $g['g43'] = $this->main->get_graphs_sec("Innodb_buffer_pool_write_requests","per/sec","Innodb_buffer_pool_write_requests",$server_list_id,$sday,$eday);
    $g['g44'] = $this->main->get_graphs_default("Innodb_buffer_pool_pages_free","quant","Innodb_buffer_pool_pages_free",$server_list_id,$sday,$eday);
    $g['g45'] = $this->main->get_graphs_default("Innodb_buffer_pool_pages_total","quant","Innodb_buffer_pool_pages_total",$server_list_id,$sday,$eday);
    $g['g46'] = $this->main->get_graphs_sec("Created_tmp_disk_tables","per/sec","Created_tmp_disk_tables",$server_list_id,$sday,$eday);
    $g['g47'] = $this->main->get_graphs_sec("Created_tmp_files","per/sec","Created_tmp_files",$server_list_id,$sday,$eday);
    $g['g48'] = $this->main->get_graphs_sec("Created_tmp_tables","per/sec","Created_tmp_tables",$server_list_id,$sday,$eday);
    $g['g49'] = $this->main->get_graphs_sec("Com_select","per/sec","Com_select",$server_list_id,$sday,$eday);
    $g['g50'] = $this->main->get_graphs_sec("Com_insert","per/sec","Com_insert",$server_list_id,$sday,$eday);
    $g['g51'] = $this->main->get_graphs_sec("Com_delete","per/sec","Com_delete",$server_list_id,$sday,$eday);
    $g['g52'] = $this->main->get_graphs_sec("Com_update","per/sec","Com_update",$server_list_id,$sday,$eday);
    $g['g53'] = $this->main->get_graphs_sec("Bytes_received","bytes/sec","Bytes_received",$server_list_id,$sday,$eday);
    $g['g54'] = $this->main->get_graphs_sec("Bytes_sent","bytes/sec","Bytes_sent",$server_list_id,$sday,$eday);
    
    $this->load->view('main/graphs',$g);
  }
  
  function data() {
    log_message('debug', "main-data function called");
    $this->load->model('Model_main', 'main');
    $server_statistics_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    if(!$server_statistics_id) { 
      show_error("Request has failed."); 
    }
    $g['data'] = $this->main->get_data($server_statistics_id);
    $g['root'] = $this->config->item('base_url');
    
    if($g['data'] == '0') {
      show_error("Failed to show the requested data.");
    }
    else {
      $this->load->view('main/data',$g);
    }
  }

  function cnf() {
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['data'] = $this->main->get_cnf($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/cnf',$g);
  }

  function server_variables() {
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['data'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/server_variables',$g);
  }

  function server_status() {
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['data'] = $this->main->get_server_status($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/server_status',$g);
  }

  function summary() {
    log_message('debug', "main-summary function called");
    $this->load->model('Model_main', 'main');
    $g['data'] = $this->main->get_summary_data();
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/summary',$g);
  }
  
  function report() {
    log_message('debug', "main-report function called");
    $this->load->model('Model_main', 'main');
    $server_statistics_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $server_list_id = ($this->uri->segment(4))?$this->uri->segment(4):0;
    
    if(!$server_statistics_id) { show_error("Request has failed."); }
    if(!$server_list_id) { show_error("Request has failed."); }
    
    $g['root'] = $this->config->item('base_url');
    
    $last_report = $this->main->get_last_report($server_list_id);
    if($last_report == '0'){
      $f['id'] = $server_statistics_id;
      $hostname = $this->main->get_host_info($server_list_id,"server_hostname");
      show_error("Failed to load report for hostname $hostname");
    }
    else {
      $l['data'] = $this->main->get_report($last_report);
      $l['root'] = $this->config->item('base_url');
      $this->load->view('main/report',$l); 
    }
  }
  
  function report_pdf() {
    log_message('debug', "main-report_pdf function called");
    $this->load->library('form_validation');  
    
    $this->form_validation->set_rules('report', 'report', 'trim|required');
    $this->form_validation->set_rules('hostname', 'hostname', 'trim|required');
    $this->form_validation->set_rules('date', 'date', 'trim|required');
    $l['report'] = $this->input->post('report');
    $l['hostname'] = $this->input->post('hostname');
    $l['date'] = $this->input->post('date');
    
    if ($this->form_validation->run() == FALSE) {    
      show_error("Could not generate report PDF.");
    }
    else {
      $this->load->view('main/report_pdf',$l);
    }
  }
}

?>