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

class Add extends Controller {

	function Add()
	{
		parent::Controller();	
	}

	function index() {
	  check();
	  
	  $this->load->view('add/index');
        }

	function host() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $g['root'] = $this->config->item('base_url');
	  $g['clients'] = $this->main->get_client_list();

	  $this->load->view('add/add_host',$g);
	}
	
	function subhost() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $this->load->model('Model_add', 'add');
	  $this->load->library('form_validation');	  

	  $this->form_validation->set_rules('server_client_id', 'server_client_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_type', 'server_type', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_is_slave', 'server_is_slave', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_ipaddress', 'server_ipaddress', 'trim|required|valid_ip');
	  $this->form_validation->set_rules('server_hostname', 'server_hostname', 'trim|required');
	  $this->form_validation->set_rules('server_ssh_user', 'server_ssh_user', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_port', 'server_mysql_port', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_mysql_socket', 'server_mysql_socket', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_db', 'server_mysql_db', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_host', 'server_mysql_host', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_user', 'server_mysql_user', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_pass', 'server_mysql_pass', 'trim|required');
	  $this->form_validation->set_rules('server_snmp_local_address', 'server_snmp_local_address', 'trim|required');
	  $this->form_validation->set_rules('server_snmp_port', 'server_snmp_port', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_snmp_rocommunity', 'server_snmp_rocommunity', 'trim|required');
	  $this->form_validation->set_rules('server_snmp_version', 'server_snmp_version', 'trim|required|numeric|max_length[1]');
	  $this->form_validation->set_rules('server_notes', 'server_notes', 'trim|required');
	  $this->form_validation->set_rules('threshold_queries_per_second', 'threshold_queries_per_second', 'trim|required|numeric');
	  $this->form_validation->set_rules('threshold_seconds_behind_master', 'threshold_seconds_behind_master', 'trim|required|numeric');	  

	  $server_client_id = $this->input->post('server_client_id');
	  $server_type = $this->input->post('server_type');
	  $server_is_slave = $this->input->post('server_is_slave');
	  $server_ipaddress = $this->input->post('server_ipaddress');
	  $server_hostname = $this->input->post('server_hostname');
	  $server_ssh_user = $this->input->post('server_ssh_user');
	  $server_mysql_port = $this->input->post('server_mysql_port');
	  $server_mysql_socket = $this->input->post('server_mysql_socket');
	  $server_mysql_db = $this->input->post('server_mysql_db');
	  $server_mysql_host = $this->input->post('server_mysql_host');
	  $server_mysql_user = $this->input->post('server_mysql_user');
	  $server_mysql_pass = $this->input->post('server_mysql_pass');
	  $server_snmp_local_address = $this->input->post('server_snmp_local_address');
	  $server_snmp_port = $this->input->post('server_snmp_port');
	  $server_snmp_rocommunity = $this->input->post('server_snmp_rocommunity');
	  $server_snmp_version = $this->input->post('server_snmp_version');
	  $server_notes = $this->input->post('server_notes');
	  $threshold_queries_per_second = $this->input->post('threshold_queries_per_second');
	  $threshold_seconds_behind_master = $this->input->post('threshold_seconds_behind_master');

	  $server_hostname = strtolower($server_hostname);
          $server_ssh_user = strtolower($server_ssh_user);
          $server_mysql_db = strtolower($server_mysql_db);
          $server_mysql_host = strtolower($server_mysql_host);
          $server_mysql_user = strtolower($server_mysql_user);

	  $g['hostname'] = $server_hostname;
	  $g['root'] = $this->config->item('base_url');

	  if(!is_numeric($server_client_id)) {
            log_message('debug', "Add controller: form validation failed. No client selected");
	    echo "{success: false, errors: { reason: 'Failed to add host. No client selected.'}}";
	  }	       

	  elseif($this->form_validation->run() == FALSE) {	    
	    log_message('debug', "Add controller: form validation failed.");
	    echo "{success: false, errors: { reason: 'Form validation failed. Please ensure all fields are filled out.'}}";
	    //echo "{success: false, errors: { reason: 'Form validation failed. Please retry. server_client_id: $server_client_id server_is_slave: $server_is_slave server_type: $server_type server_ipaddress: $server_ipaddress server_hostname: $server_hostname server_ssh_user: $server_ssh_user server_mysql_port: $server_mysql_port server_mysql_db: $server_mysql_db server_mysql_host: $server_mysql_host server_mysql_user: $server_mysql_user server_mysql_pass: $server_mysql_pass server_snmp_local_address: $server_snmp_local_address server_snmp_port: $server_snmp_port server_snmp_rocommunity: $server_snmp_rocommunity server_snmp_version: $server_snmp_version threshold_queries_per_second: $threshold_queries_per_second threshold_seconds_behind_master: $threshold_seconds_behind_master server_mysql_socket: $server_mysql_socket' }}";
	  }
	  else {
	    $state = $this->add->add_host(
					  $server_client_id,
					  $server_type,
					  $server_is_slave,
					  $server_ipaddress,
					  $server_hostname,
					  $server_ssh_user,
					  $server_mysql_port,
					  $server_mysql_socket,
					  $server_mysql_db,
					  $server_mysql_host,
					  $server_mysql_user,
					  $server_mysql_pass,
					  $server_snmp_local_address,
					  $server_snmp_port,
					  $server_snmp_rocommunity,
					  $server_snmp_version,
					  $server_notes,
					  $threshold_queries_per_second,
					  $threshold_seconds_behind_master);
	    if($state == 0) {
	      log_message('debug', "Login controller: JSON = {success: true}");
              echo "{success: true}";
	    }
	    elseif($state == 1) {
	      log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Add failed. Probably a duplicate entry.' }}");
              echo "{success: false, errors: { reason: 'Add failed due to failed transaction - possibly a duplicate key.' }}";
	    }
	    else {
	      show_error("This is a general failure message.");
	    }
	  }
	}
	
	function client() {
	  check();
	  
          $g['root'] = $this->config->item('base_url');
          $this->load->view('add/add_client',$g);
	}
	
	function subclient() {
	  check();
	  
	  $this->load->model('Model_add', 'add');
	  $this->load->library('form_validation');  
	  
	  $this->form_validation->set_rules('server_client_name', 'server_client_name', 'trim|required|min_length[3]');
	  $this->form_validation->set_rules('server_client_email', 'server_client_email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('server_client_phone', 'server_client_phone', 'required');

	  $server_client_name = $this->input->post('server_client_name');
	  $server_client_email = $this->input->post('server_client_email');
	  $server_client_phone = $this->input->post('server_client_phone');

	  $server_client_name = strtolower($server_client_name);
	  $server_client_email = strtolower($server_client_email);

	  $g['client'] = $server_client_name;
	  $g['root'] = $this->config->item('base_url');

	  if ($this->form_validation->run() == FALSE) {    
	    log_message('debug', "Add controller: form validation failed.");
	    echo "{success: false, errors: { reason: 'Form validation failed. Please retry.'}}";
	  }
	  else {
	    $state = $this->add->add_client(
					    $server_client_name,
					    $server_client_email,
					    $server_client_phone);
	    if($state == 0) {
	      log_message('debug', "Login controller: JSON = {success: true}");
              echo "{success: true}"; //JSON wooo!
	    }
	    elseif($state == 1) {
	      log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Add failed. Probably a duplicate entry.' }}");
              echo "{success: false, errors: { reason: 'Add failed due to failed transaction - possibly a duplicate key.' }}";
	    }
	    else {
	      show_error("This is a general failure message.");
	    }
	  }
	}
	  
	function user() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $g['root'] = $this->config->item('base_url');
	  $g['clients'] = $this->main->get_client_list();
	  
	  $this->load->view('add/add_user',$g);
	}
	
	function subuser() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $this->load->model('Model_add', 'add');
	  $this->load->library('form_validation');  

	  $this->form_validation->set_rules('system_user_name', 'system_user_name', 'trim|required|min_length[3]');
	  $this->form_validation->set_rules('system_user_pass', 'system_user_pass', 'trim|required|min_length[6]');
	  $this->form_validation->set_rules('system_user_email', 'system_user_email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('server_client_id', 'server_client_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('role_tier', 'role_tier', 'trim|required|numeric');

	  $system_user_name = $this->input->post('system_user_name');
	  $system_user_pass = $this->input->post('system_user_pass');
	  $system_user_email = $this->input->post('system_user_email');
	  $server_client_id = $this->input->post('server_client_id');
	  $role_tier = $this->input->post('role_tier');

	  log_message('debug', "Add user: role_tier:$role_tier, server_client_id:$server_client_id");
          //check to ensure that client user can only be associated with a !0 $server_client_id
          //check to ensure that admin user can only be a role_tier=1, standard can only be role_tier=1, client can only be =2
          if((($role_tier == 0) || ($role_tier == 1)) && ($server_client_id != 0)) {
	    log_message('debug', "Add user: user is system or admin but trying to be set as client");
	    echo "{success: false, errors: { reason: 'Users set to \'Admin\' or \'System\' cannot be associated with client type other than \'System User\'. Please retry your settings.' }}";
          }               
          else {
	    
	    $system_user_name = strtolower($system_user_name);
	    $system_user_email = strtolower($system_user_email);
	    
	    $g['username'] = $system_user_name;
	    $g['root'] = $this->config->item('base_url');
	    
	    if ($this->form_validation->run() == FALSE) {    
	      log_message('debug', "Add controller: form validation failed.");
	      echo "{success: false, errors: { reason: 'Form validation failed. Please retry.'}}";
	    }
	    else {
	      $state = $this->add->add_user(
					    $system_user_name,
					    $system_user_pass,
					    $system_user_email,
					    $server_client_id,
					    $role_tier);
	      if($state == 0) {
		log_message('debug', "Login controller: JSON = {success: true}");
		echo "{success: true}"; //JSON wooo!
	      }
	      elseif($state == 1) {
		log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Add failed. Probably a duplicate entry.' }}");
		echo "{success: false, errors: { reason: 'Add failed due to failed transaction - possibly a duplicate key.' }}";
	      }
	      else {
		show_error("This is a general failure message.");
	      }
	    }
	  }
	}
}

?>
