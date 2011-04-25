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

class Authfail extends Controller {

	function Authfail()
	{
		parent::Controller();	
	}

	function index() {
	  $g['root'] = $this->config->item('base_url');
	  $this->load->view('authfail',$g);
        }
  }

?>