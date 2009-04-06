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

class Rss extends Controller {

	function Rss()
	{
		parent::Controller();	
	}

	function index() {
	  show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
        }

	function summary() {
	  $this->load->model('Model_main', 'main');
	  $g['data'] = $this->main->get_summary_data();
	  $g['root'] = $this->config->item('base_url');
	  if($g['data'] == 0) {
            show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
          }
          else {
	    $this->load->view('rss/summary',$g);
	  }
	}

	function alerts() {
          $this->load->model('Model_main', 'main');
	  $g['alerts'] = $this->main->get_current_alerts('0');
          $g['root'] = $this->config->item('base_url');
	  if($g['alerts'] == 0) {
            show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
          }
          else {
	    $this->load->view('rss/alerts',$g);
	  }
        }

        function summary_xml() {
          $this->load->model('Model_main', 'main');
          $g['data'] = $this->main->get_summary_data();
          $g['root'] = $this->config->item('base_url');
	  if($g['data'] == 0) {
            show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
          }
          else {
          $this->load->view('rss/summary-xml-output',$g);
	  }
        }

        function alerts_xml() {
          $this->load->model('Model_main', 'main');
          $g['alerts'] = $this->main->get_current_alerts('0');
          $g['root'] = $this->config->item('base_url');
	  if($g['alerts'] == 0) {
	    show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
	  }
	  else {
	    $this->load->view('rss/alerts-xml-output',$g);
	  }
        }

	function host() {	  
          $this->load->model('Model_main', 'main');
	  $type = ($this->uri->segment(3))?$this->uri->segment(3):0;
	  $server_list_id = ($this->uri->segment(4))?$this->uri->segment(4):0;
	  $g['root'] = $this->config->item('base_url');

	  if(!$type) {
            show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
          }
	  else {
	    if(!$server_list_id) {	    
	      show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
	    }
	    else {
	      if($type == 'alerts') {
		$g['alerts'] = $this->main->get_current_alerts($server_list_id);
		if($g['alerts'] == 0) {
		  show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
		}
		else {
		  $this->load->view('rss/alerts',$g);
		}
	      }
	      elseif($type == 'summary') {
		$g['data'] = $this->main->get_summary_host($server_list_id);
		if($g['data'] == 0) {
		  show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
		}
		else {
		  $this->load->view('rss/summary',$g);
		}
	      }
	      elseif($type == 'alerts_xml') {
                $g['alerts'] = $this->main->get_current_alerts($server_list_id);
                if($g['alerts'] == 0) {
                  show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
                }
                else {
                  $this->load->view('rss/alerts-xml-output',$g);
                }
              }
	      elseif($type == 'summary_xml') {
                $g['data'] = $this->main->get_summary_host($server_list_id);
                if($g['data'] == 0) {
                  show_error("The RSS you requested has failed. You are probably requesting it incorrectly.");
                }
                else {
                  $this->load->view('rss/summary-xml-output',$g);
                }
              }
	    }
	  }
        }
  }

?>