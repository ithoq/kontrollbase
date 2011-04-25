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

class Alerts extends Controller {

        function Alerts()
	{
		parent::Controller();	
	}

	function index() {
	  check();
	  $server_list_id = "NULL"; //we do this to display all alerts
	  $this->load->model('Model_main', 'main');
	  
	  $g['server_list'] = $this->main->get_server_list();
	  $g['server_list_id'] = $server_list_id;
	  $g['alerts'] = $this->main->get_current_alerts($server_list_id);
	  $g['root'] = $this->config->item('base_url');
	  $g['dir'] = $this->config->item('base_dir');

	  $this->load->view('alerts/alert_management',$g);
        }

	function host() {
	  $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  if(!$server_list_id) { 
	    index();
	  }
          $this->load->model('Model_main', 'main');

	  $g['server_list'] = $this->main->get_server_list();
	  $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
	  $g['ip_address'] = $this->main->get_host_info($server_list_id,"server_ipaddress");
	  $g['server_list_id'] = $this->main->get_host_info($server_list_id,"id");
	  $g['alerts'] = $this->main->get_current_alerts($server_list_id);
	  $g['root'] = $this->config->item('base_url');
	  $g['dir'] = $this->config->item('base_dir');

	  $this->load->view('alerts/alert_host',$g);
        }

	function ack() {
	  check();
	  $this->load->model('Model_alerts', 'alerts');
	  $this->load->model('Model_main', 'main');

	  $alerts_current_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $server_list_id = ($this->uri->segment(4))?$this->uri->segment(4):0;
	  $alerts_def_id = ($this->uri->segment(5))?$this->uri->segment(5):0;
	  $system_users_id = '0'; // this will be where we grab the SESSION user id

	  $g['root'] = $this->config->item('base_url');
	  $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
	  $g['alert_name'] = $this->main->get_alert_name($alerts_def_id);
	  $g['dir'] = $this->config->item('base_dir');

	  $choice = 'ack';
	  $state = $this->alerts->alert_update(
					    $alerts_current_id,
					    $system_users_id,
					    $choice);
	  if($state == 0) {
	    $this->load->view('alerts/success_ack',$g);
	  }
	  elseif($state == 1) {
	    show_error("Failed to acknowledge the alert.");
	  }
	  else {
	    show_error("This is a general failure message.");
	  }
	}

	function ign() {
	  check();
	  $this->load->model('Model_alerts', 'alerts');
          $this->load->model('Model_main', 'main');

	  $alerts_current_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $server_list_id = ($this->uri->segment(4))?$this->uri->segment(4):0;
	  $alerts_def_id = ($this->uri->segment(5))?$this->uri->segment(5):0;
          $system_users_id = '0'; // this will be where we grab the SESSION user id                                                                       

          $g['root'] = $this->config->item('base_url');
          $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
          $g['alert_name'] = $this->main->get_alert_name($alerts_def_id);
	  $g['dir'] = $this->config->item('base_dir');

	  $choice = 'ign';
	  $state = $this->alerts->alert_update(
					    $alerts_current_id,
					    $system_users_id,
					    $choice);
	  if($state == 0) {
	    $this->load->view('alerts/success_ign',$g);
	  }
	  elseif($state == 1) {
	    show_error("Failed to ignore the alert.");
	  }
	  else {
	    show_error("This is a general failure message.");
	  }
	}

	function remove() {
	  check();
	  $this->load->model('Model_alerts', 'alerts');
	  $this->load->model('Model_main', 'main');

	  $alerts_current_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $server_list_id = ($this->uri->segment(4))?$this->uri->segment(4):0;
	  $alerts_def_id = ($this->uri->segment(5))?$this->uri->segment(5):0;
	  $choice = ($this->uri->segment(6))?$this->uri->segment(6):0;
	  $system_users_id = '0'; // this will be where we grab the SESSION user id

	  $g['root'] = $this->config->item('base_url');
	  $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
	  $g['alert_name'] = $this->main->get_alert_name($alerts_def_id);
	  $g['dir'] = $this->config->item('base_dir');

	  $state = $this->alerts->alert_remove(
					       $alerts_current_id,
					       $system_users_id);
	  if($state == 0) {
	    if($choice == "ign") {
	      $this->load->view('alerts/success_remove-ign',$g);
	    }
	    elseif($choice == "ack") {
	      $this->load->view('alerts/success_remove-ack',$g);
	    }
	  }
	  elseif($state == 1) {
	    show_error("Failed to change the alert status.");
	  }
	  else {
	    show_error("This is a general failure message.");
	  }
	}


	function response_main() {
	  check();
	  $choice = ($this->uri->segment(3))?$this->uri->segment(3):0; #can be 'ack' or 'ign'
	  $server_list_id = "0"; //we do this to display overall environment data
	  $this->load->model('Model_main', 'main');
          $this->load->model('Model_alerts', 'alerts');
	  
	  if(!$choice) {
	    $choice = 'ack';
	  }

	  $g['server_list'] = $this->main->get_server_list();
	  $g['server_list_id'] = $server_list_id;
	  $g['alerts'] = $this->alerts->get_alert_responses($server_list_id,$choice);
	  $g['root'] = $this->config->item('base_url');
	  $g['choice'] = $choice;
	  $g['dir'] = $this->config->item('base_dir');

	  $this->load->view('alerts/response_management',$g);
        }

	function response_host() {
	  check();
	  $server_list_id = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $choice = ($this->uri->segment(4))?$this->uri->segment(4):0; #can be 'ack' or 'ign' 
	  if(!$server_list_id) { 
	    index();
	  }

          $this->load->model('Model_main', 'main');
	  $this->load->model('Model_alerts', 'alerts');

	  $g['server_list'] = $this->main->get_server_list();
	  $g['hostname'] = $this->main->get_host_info($server_list_id,"server_hostname");
	  $g['ip_address'] = $this->main->get_host_info($server_list_id,"server_ipaddress");
	  $g['server_list_id'] = $this->main->get_host_info($server_list_id,"id");
	  $g['alerts'] = $this->alerts->get_alert_responses($server_list_id,$choice);
	  $g['root'] = $this->config->item('base_url');
	  $g['choice'] = $choice;
	  $g['dir'] = $this->config->item('base_dir');

	  $this->load->view('alerts/response_host',$g);
        }
	
}

?>