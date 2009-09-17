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

class Edit extends Controller {

	function Edit()
	{
		parent::Controller();	
	}

	function index() {
	  check();
	  
	  $this->load->view('edit/index');
        }

	function host() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $this->load->model('Model_edit', 'edit');
	  $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  if(!$server_list_id) {
            index();
          }

	  $g['server'] = $this->edit->get_server($server_list_id);
	  $g['root'] = $this->config->item('base_url');
	  $g['clients'] = $this->main->get_client_list();

	  $this->load->view('edit/edit_host',$g);
	}
	
	function subhost() {
	  check();
	  
	  $this->load->model('Model_main', 'main');
	  $this->load->model('Model_edit', 'edit');
	  $this->load->library('form_validation');	  
	  
	  $this->form_validation->set_rules('active', 'active', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_list_id', 'server_list_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_client_id', 'server_client_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_type', 'server_type', 'trim|required');
	  $this->form_validation->set_rules('server_is_slave', 'server_is_slave', 'trim|required');
	  $this->form_validation->set_rules('server_ipaddress', 'server_ipaddress', 'trim|required|valid_ip');
	  $this->form_validation->set_rules('server_hostname', 'server_hostname', 'trim|required');
	  $this->form_validation->set_rules('server_ssh_user', 'server_ssh_user', 'trim|required|min_length[6]');
	  $this->form_validation->set_rules('server_mysql_port', 'server_mysql_port', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_mysql_socket', 'server_mysql_socket', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_db', 'server_mysql_db', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_host', 'server_mysql_host', 'trim|required');
	  $this->form_validation->set_rules('server_mysql_user', 'server_mysql_user', 'trim|required|min_length[6]');
	  $this->form_validation->set_rules('server_mysql_pass', 'server_mysql_pass', 'trim|required|min_length[6]');
	  $this->form_validation->set_rules('server_snmp_local_address', 'server_snmp_local_address', 'trim|required');
	  $this->form_validation->set_rules('server_snmp_port', 'server_snmp_port', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_snmp_rocommunity', 'server_snmp_rocommunity', 'trim|required');
	  $this->form_validation->set_rules('server_snmp_version', 'server_snmp_version', 'trim|required|numeric|max_length[1]');
	  $this->form_validation->set_rules('threshold_queries_per_second', 'threshold_queries_per_second', 'trim|required|numeric');
	  $this->form_validation->set_rules('threshold_seconds_behind_master', 'threshold_seconds_behind_master', 'trim|required|numeric');	  

	  $active = $this->input->post('active');
	  $server_list_id = $this->input->post('server_list_id');
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
	  $threshold_queries_per_second = $this->input->post('threshold_queries_per_second');
	  $threshold_seconds_behind_master = $this->input->post('threshold_seconds_behind_master');

	  $server_hostname = strtolower($server_hostname);
	  $server_ssh_user = strtolower($server_ssh_user);
	  $server_mysql_db = strtolower($server_mysql_db);
	  $server_mysql_host = strtolower($server_mysql_host);
	  $server_mysql_user = strtolower($server_mysql_user);

	  $g['hostname'] = $server_hostname;
	  $g['root'] = $this->config->item('base_url');

	  if ($this->form_validation->run() == FALSE) {	    
	    if(!$server_list_id) {
	      log_message('debug', "Login controller: server_list_id is invalid or does not exist.");
	      $g['hostname'] = "NULL";
	      $g['server'] = array(array("id" => "NULL",
					 "active" => "NULL",
					 "server_client_id" => "NULL",
					 "server_type" => "NULL",
					 "server_is_slave" => "NULL",
					 "server_ipaddress" => "NULL",
					 "server_hostname" => "NULL",
					 "server_ssh_user" => "NULL",
					 "server_mysql_port" => "NULL",
					 "server_mysql_socket" => "NULL",
					 "server_mysql_db" => "NULL",
					 "server_mysql_host" => "NULL",
					 "server_mysql_user" => "NULL",
					 "server_mysql_pass" => "NULL",
					 "server_snmp_local_address" => "NULL",
					 "server_snmp_port" => "NULL",
					 "server_snmp_rocommunity" => "NULL",
					 "server_snmp_version" => "NULL",
					 "threshold_queries_per_second" => "NULL",
					 "threshold_seconds_behind_master" => "NULL",
					 "server_client_name" => "NULL",
					 "creation_time" => "NULL"));
	    }
	    else {
	      log_message('debug', "Login controller: server_list_id=$server_list_id");
	      $g['server'] = $this->edit->get_server($server_list_id);
	    }
	    log_message('debug', "Login controller: form validation failed.");
	    echo "{success: false, errors: { reason: 'Form validation failed. Please retry.'}}";

	    //USE FOR TROUBLESHOOTING FORM SUBMISSION: 
	    //echo "{success: false, errors: { reason: 'Form validation failed. Please retry. server_client_id: $server_client_id server_is_slave: $server_is_slave server_type: $server_type active: $active server_list_id: $server_list_id server_ipaddress: $server_ipaddress server_hostname: $server_hostname server_ssh_user: $server_ssh_user server_mysql_port: $server_mysql_port server_mysql_db: $server_mysql_db server_mysql_host: $server_mysql_host server_mysql_user: $server_mysql_user server_mysql_pass: $server_mysql_pass server_snmp_local_address: $server_snmp_local_address server_snmp_port: $server_snmp_port server_snmp_rocommunity: $server_snmp_rocommunity server_snmp_version: $server_snmp_version threshold_queries_per_second: $threshold_queries_per_second threshold_seconds_behind_master: $threshold_seconds_behind_master server_mysql_socket: $server_mysql_socket' }}";
	  }
	  else {
	    $state = $this->edit->edit_host(
					    $active,
					    $server_list_id,
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
					    $threshold_queries_per_second,
					    $threshold_seconds_behind_master);
	    if($state == 0) {
	      log_message('debug', "Login controller: JSON = {success: true}");
	      echo "{success: true}"; //JSON wooo!
	    }
	    elseif($state == 1) {
	      log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Update failed. Please retry.' }}");
	      echo "{success: false, errors: { reason: 'Update failed. Please retry.' }}";
	    }
	    else {
	      show_error("This is a general failure message.");
	    }
	  }
	}
	
	function client() {
	  check();
	  
          $this->load->model('Model_main', 'main');
          $this->load->model('Model_edit', 'edit');
          $server_client_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
          if(!$server_client_id) {
            index();
          }

          $g['client'] = $this->edit->get_client($server_client_id);
          $g['root'] = $this->config->item('base_url');
          $this->load->view('edit/edit_client',$g);
	}
	
	function subclient() {
	  check();	 
	  $this->load->model('Model_edit', 'edit');
	  $this->load->library('form_validation');  
	  
	  $this->form_validation->set_rules('server_client_id', 'server_client_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('server_client_name', 'server_client_name', 'trim|required|min_length[3]');
	  $this->form_validation->set_rules('server_client_email', 'server_client_email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('server_client_phone', 'server_client_phone', 'required');

	  $server_client_id = $this->input->post('server_client_id');
	  $server_client_name = $this->input->post('server_client_name');
	  $server_client_email = $this->input->post('server_client_email');
	  $server_client_phone = $this->input->post('server_client_phone');

	  $server_client_name = strtolower($server_client_name);
          $server_client_email = strtolower($server_client_email);

	  $g['clientname'] = $server_client_name;
	  $g['root'] = $this->config->item('base_url');

	  if ($this->form_validation->run() == FALSE) {    
	    log_message('debug', "Edit controller: form validation failed.");
	    echo "{success: false, errors: { reason: 'Form validation failed. Please retry.'}}";
	  }
	  else {
	    $state = $this->edit->edit_client(
					      $server_client_id,
					      $server_client_name,
					      $server_client_email,
					      $server_client_phone);
	    if($state == 0) {
	      log_message('debug', "Login controller: JSON = {success: true}");
              echo "{success: true}"; //JSON wooo!
	    }
	    elseif($state == 1) {
	      log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Edit failed. Probably a duplicate entry.' }}");
              echo "{success: false, errors: { reason: 'Edit failed due to failed transaction - possibly a duplicate key.' }}";
	    }
	    else {
	      show_error("This is a general failure message.");
	    }
	  }
	}

	function user() {
	  check();	  
          $this->load->model('Model_main', 'main');
          $this->load->model('Model_edit', 'edit');
          $system_user_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
          if(!$system_user_id) {
            index();
          }

          $g['user'] = $this->edit->get_user($system_user_id);
          $g['root'] = $this->config->item('base_url');
          $g['clients'] = $this->main->get_client_list();

          $this->load->view('edit/edit_user',$g);
	}
	
	function subuser() {
	  check();
	  $this->load->model('Model_main', 'main');
	  $this->load->model('Model_edit', 'edit');
	  $this->load->library('form_validation');  

	  $this->form_validation->set_rules('system_user_id', 'system_user_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('system_user_name', 'system_user_name', 'trim|required|min_length[3]');
	  $this->form_validation->set_rules('system_user_pass', 'system_user_pass', 'trim|required|min_length[6]');
	  $this->form_validation->set_rules('system_user_email', 'system_user_email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('server_client_id', 'server_client_id', 'trim|required|numeric');
	  $this->form_validation->set_rules('role_tier', 'role_tier', 'trim|required|numeric');

	  $system_user_id = $this->input->post('system_user_id');
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
	    
	    $g['root'] = $this->config->item('base_url');
	    $g['username'] = $system_user_name;
	    
	    if ($this->form_validation->run() == FALSE) {    
	      log_message('debug', "Edit controller: form validation failed.");
	      echo "{success: false, errors: { reason: 'Form validation failed. Please retry.'}}";
	    }
	    else {
	      $state = $this->edit->edit_user(
					      $system_user_id,
					      $system_user_name,
					      $system_user_pass,
					      $system_user_email,
					      $server_client_id,
					      $role_tier);
	      if($state == 0) {
		log_message('debug', "Login controller: JSON = {success: true}");
		echo "{success: true}"; 
	      }
	      elseif($state == 1) {
		log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Edit failed. Probably a duplicate entry.' }}");
		echo "{success: false, errors: { reason: 'Edit failed due to failed transaction - possibly a duplicate key.' }}";
	      }
	      else {
		show_error("This is a general failure message.");
	      }
	    }
	  }
	}
}

?>
