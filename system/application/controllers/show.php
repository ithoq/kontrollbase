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

class Show extends Controller {

	function Show()
	{
		parent::Controller();	
	}

	function index() {
	  check();
	  $this->load->view('show/index');
        }

	function hosts() {
	  check();
          $this->load->model('Model_show', 'show');
	  $g['server_list'] = $this->show->get_server_list();
	  $g['root'] = $this->config->item('base_url');

	  $this->load->view('show/show_hosts',$g);
        }	

	function users() {
	  check();
          $this->load->model('Model_show', 'show');
          $g['user_list'] = $this->show->get_user_list();
          $g['root'] = $this->config->item('base_url');

          $this->load->view('show/show_users',$g);
        }

	function clients() {
	  check();
          $this->load->model('Model_show', 'show');
          $g['client_list'] = $this->show->get_client_list();
          $g['root'] = $this->config->item('base_url');

          $this->load->view('show/show_clients',$g);
        }

}

?>