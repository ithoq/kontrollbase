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

class System extends Controller {

	function System()
	{
		parent::Controller();	
	}

	function index() {
	  check();
          $this->load->model('Model_system', 'system');
	  $schema = $this->config->item('schema_readonly_name');
	  log_message('debug', "Controller System started.");

	  $g['revision'] = $this->config->item('kb_revision');
	  $g['ci_version'] = $this->config->item('ci_version');
	  $g['extjs_version'] = $this->config->item('extjs_version');
	  $g['users'] = $this->system->get_system_quant(2);//system users
	  $g['inactive'] = $this->system->get_system_quant(0);//inactive hosts
	  $g['active'] = $this->system->get_system_quant(1);//active hosts
	  $g['clients'] = $this->system->get_system_quant(3);//clients 
	  $g['reports'] = $this->system->get_system_quant(4);//reports
	  $g['stats'] = $this->system->get_system_quant(5);//stats
	  $g['stat_size'] = $this->system->get_data_size($schema);
	  $g['report_size'] = $this->system->get_report_size($schema);
	  $g['settings'] = $this->system->get_settings();
	  $g['root'] = $this->config->item('base_url');
	  
	  $this->load->view('system/settings',$g);
        }
	
	//the data_prune functionality was removed in revision 102 - feel free to delete the function
	function data_prune() {
	  check();
	  $this->load->model('Model_system', 'system');
	  $choice = ($this->uri->segment(3))?$this->uri->segment(3):0;//0 is report, 1 is stats
	  $system_users_id = '0'; //this is where we add the user session id

	  $g['root'] = $this->config->item('base_url');

	  $state = $this->system->data_prune(
					$choice,
					$system_users_id);
	  if($state == 0) {
	    $g['state'] = "Successfully pruned the table.";
	    $this->load->view('system/prune_result',$g);
	  }
	  elseif($state == 1) {
	    show_error("Failed to prune the table.");
	  }
	  else {
	    show_error("This is a general failure message.");
	  }
	}	

	// this seems to have no place since the index() function serves the settings view. let's delete this at revision 150, eh?
	function settings() {
	  check();
          $this->load->model('Model_system', 'system');
	  $g['settings'] = $this->system->get_settings();
	  $g['root'] = $this->config->item('base_url');
	    
	  $this->load->view('system/settings',$g);
        }

	function edit() {
	  check();
          $this->load->model('Model_system', 'system');
	  $g['settings'] = $this->system->get_settings();
	  $g['root'] = $this->config->item('base_url');
	      
	  $this->load->view('system/edit',$g);
        }

	function subedit() {
	  check();
	  $this->load->model('Model_system', 'system');
	  $this->load->library('form_validation');  
	  
	  $this->form_validation->set_rules('system_alerts_email', 'system_alerts_email', 'trim|required|valid_email');
	  $this->form_validation->set_rules('system_hostname', 'system_hostname', 'trim|required');
	  //$this->form_validation->set_rules('system_graph_animation_enable', 'system_graph_animation_enable', 'trim|required'); //we don't check this because the value only gets posted if it changes, so sometimes checking fails for not reason and it sucks. 
	  $this->form_validation->set_rules('system_server_loop_timeout', 'system_server_loop_timeout', 'trim|numeric|min_length[1]|max_length[2]|required');
	  
	  $system_alerts_email = $this->input->post('system_alerts_email');
	  $system_hostname = $this->input->post('system_hostname');
	  $system_graph_animation_enable = $this->input->post('system_graph_animation_enable');
	  $system_server_loop_timeout = $this->input->post('system_server_loop_timeout');
	  
	  if($system_graph_animation_enable == "on") { $system_graph_animation_enable = '1'; }
	  if(!$system_graph_animation_enable) { $system_graph_animation_enable = '0'; }
	  log_message('debug', "system_graph_animation_enable:$system_graph_animation_enable");
	  
	  if ($this->form_validation->run() == FALSE) {    
	    log_message('debug', "System:subedit system_alerts_email:$system_alerts_email, system_hostname:$system_hostname, system_graph_animation_enable:$system_graph_animation_enable, system_server_loop_timeout:$system_server_loop_timeout");
	    log_message('debug', "Login failed: JSON = success: false, errors: { reason: 'Form validation failed. Please retry.' }}");
	    echo "{success: false, errors: { reason: 'Form validation failed. Please retry.' }}";
	  }
	  else {
	    $state = $this->system->edit_settings($system_alerts_email,
						  $system_hostname,
						  $system_graph_animation_enable,
						  $system_server_loop_timeout);
	    if($state == 0) {
	      set_session_vars(); // set session variables [ variables_helper.php ]
	      log_message('debug', "Login controller: JSON = {success: true}");
	      echo "{success: true}";
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
  }

?>
