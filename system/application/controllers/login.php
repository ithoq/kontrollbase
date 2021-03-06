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

class Login extends Controller {

	function Login()
	{
		parent::Controller();	
	}

	function index() {
          $this->load->model('Model_login', 'login');
	  
	  if($this->phpsession->get('logged_in') == TRUE) { //user is already logged in
	    redirect("main");
	  }
	  else {
	    $g['root'] = $this->config->item('base_url');	  
	    $this->load->view('login/index',$g);
	  }
        }

	function logout() {
	  $user_system_user_name = $this->phpsession->get('user_system_user_name');
	  log_message('debug', "Logout called for user $user_system_user_name");
	  $this->phpsession->clear('server_client_id');
	  $this->phpsession->clear('user_role_tier');
	  $this->phpsession->clear('user_system_user_id');
	  $this->phpsession->clear('user_system_user_name');
	  $this->phpsession->clear('user_system_user_email');
	  $this->phpsession->clear('logged_in');
	  redirect("main/index");
	}

	function auth() {
	  $this->load->model('Model_login', 'login');
	  $this->load->library('form_validation');  

	  $this->form_validation->set_rules('system_user_name', 'system_user_name', 'trim|required');
	  $this->form_validation->set_rules('system_user_pass', 'system_user_pass', 'trim|required');

	  $system_user_name = $this->input->post('system_user_name');
	  $system_user_pass = $this->input->post('system_user_pass');
	    
	  $g['root'] = $this->config->item('base_url');
	  
	  if ($this->form_validation->run() == FALSE) {    
	    $g['system_user_name'] = $system_user_name;
	    $g['system_user_pass'] = $system_user_pass;
	    $this->load->view('login/index',$g);
	  }
	  else {
	    $state = $this->login->get_user($system_user_name,$system_user_pass);
	    log_message('debug', "Login conroller: state = $state");
	    if($state == 0) {
	      log_message('debug', "redirecting to main");
	      $user_system_user_id = $this->phpsession->get('user_system_user_id');
	      $last_login = $this->login->record_login($user_system_user_id); //update the system_users table for last login date
	      if($last_login == 1) { // database connection for 'write' account is not working
		log_message('debug',"Database write access incorrect. Please check database configuration.");
		$this->phpsession->clear('server_client_id');
		$this->phpsession->clear('user_role_tier');
		$this->phpsession->clear('user_system_user_id');
		$this->phpsession->clear('user_system_user_name');
		$this->phpsession->clear('user_system_user_email');
		$this->phpsession->clear('logged_in');
		echo "{success: false, errors: { reason: 'Database write permissions incorrect. Please check config file.' }}";
	      }
	      else {
		log_message('debug', "Login controller: JSON = {success: true}");
		echo "{success: true}"; 
	      }
	    }
	    elseif($state == 1) { 
	      $this->phpsession->clear('server_client_id');
	      $this->phpsession->clear('user_role_tier');
	      $this->phpsession->clear('user_system_user_id');
	      $this->phpsession->clear('user_system_user_name');
	      $this->phpsession->clear('user_system_user_email');
	      $this->phpsession->clear('logged_in');
              log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Login failed. Please retry.' }}");
	      echo "{success: false, errors: { reason: 'Login failed. Please retry.' }}";
	    }
	    elseif($state == 2) {
	      $this->phpsession->clear('server_client_id');
	      $this->phpsession->clear('user_role_tier');
	      $this->phpsession->clear('user_system_user_id');
	      $this->phpsession->clear('user_system_user_name');
	      $this->phpsession->clear('user_system_user_email');
	      $this->phpsession->clear('logged_in');
	      log_message('debug',"Database read access incorrect. Please check database configuration.");
              echo "{success: false, errors: { reason: 'Database read access incorrect. Please check database configuration.' }}";
            }
	    else {
	      show_error("This is a general failure message.");
	    }
	  }
	}
  }

?>