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

class Delete extends Controller {

	function Delete()
	{
		parent::Controller();	
	}

	function index() {
          $this->load->view('delete/index');
        }

	function check() {
	  check();
	  $type = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $id =  ($this->uri->segment(4))?$this->uri->segment(4):0;
	  $g['type'] = $type;
	  $g['id'] = $id;
	  log_message('debug', "delete check function started. type:$type, id:$id");
	  $converted_type = $type."s";
	  $g['page'] = "show/$converted_type/";
	  $g['root'] = $this->config->item('base_url');
	  $this->load->view('delete/check',$g);
        }

	function host() {
	  check();
	  $this->load->model('Model_main', 'main');
          $this->load->model('Model_delete', 'delete');
          $this->load->library('form_validation');
	  $g['root'] = $this->config->item('base_url');

	  $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");

	  $state = $this->delete->delete_host($server_list_id);
	  if($state == 0) {
	    $g['state'] = 0;
	    $this->load->view('delete/delete_host',$g);
	  }
	  elseif($state == 1) {
	    $g['state'] = 1;
	    $this->load->view('delete/delete_host',$g);
	  }	
	  else {
	    $g['state'] = 2;
	    $this->load->view('delete/delete_host',$g);
	  }
	}

	function user() {
	  check();
	  $this->load->model('Model_main', 'main');
          $this->load->model('Model_delete', 'delete');
          $this->load->library('form_validation');
	  $g['root'] = $this->config->item('base_url');

	  $system_user_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $g['username'] = $this->main->get_user_info($system_user_id,"system_user_name");

	  $state = $this->delete->delete_user($system_user_id);
	  if($state == 0) {
	    $g['state'] = 0;
	    $this->load->view('delete/delete_user',$g);
	  }
	  elseif($state == 1) {
	    $g['state'] = 1;
	    $this->load->view('delete/delete_user',$g);
	  }
	  else {
	    $g['state'] = 2;
	    $this->load->view('delete/delete_user',$g);
	  }
	}

	function client() {
	  check();
	  log_message('debug',"Starting delete controller for client delete process.");
	  $this->load->model('Model_main', 'main');
          $this->load->model('Model_delete', 'delete');
	  $g['root'] = $this->config->item('base_url');

	  $server_client_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  log_message('debug',"Client ID is $server_client_id");
	  log_message('debug',"Getting client name");
	  $g['client'] = $this->main->get_client_info($server_client_id,"server_client_name");

	  log_message('debug',"Running delete model");
	  $state = $this->delete->delete_client($server_client_id);
	  if($state == 0) {
	    $g['state'] = 0;
	    $this->load->view('delete/delete_client',$g);
	  }
	  elseif($state == 1) {
	    $g['state'] = 1;
	    $this->load->view('delete/delete_client',$g);
	  }
	  else {
	    $g['state'] = 2;
	    $this->load->view('delete/delete_client',$g);
	  }
	}
}

?>