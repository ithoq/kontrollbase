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

class Analytics extends Controller {

  function Analytics()
  {
    parent::Controller();
  }

  function index() {
    $this->load->view('main/index');
  }

  function stats_connections() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_connections',$g);
  }
  
  function stats_indexes() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_indexes',$g);
  }

  function stats_innodb() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_innodb',$g);
  }

  function stats_myisam() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_myisam',$g);
  }

  function stats_query_analysis() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_query-analysis',$g);
  }

  function stats_query_cache() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_query-cache',$g);
  }

  function stats_sort_buffer() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_sort-buffer',$g);
  }

  function stats_join_buffer() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_join-buffer',$g);
  }

  function stats_table_cache() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_table-cache',$g);
  }

  function stats_table_locking() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_table-locking',$g);
  }
  
  function stats_temp_table() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_temp-table',$g);
  }

  function stats_threads() {
    auth();
    $this->load->model('Model_main', 'main');
    $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
    $g['statistics'] = $this->main->get_server_status($server_list_id);
    $g['variables'] = $this->main->get_server_variables($server_list_id);
    $g['server_list_id'] = $server_list_id;
    $g['root'] = $this->config->item('base_url');
    $this->load->view('main/stats_threads',$g);
  }
}

?>