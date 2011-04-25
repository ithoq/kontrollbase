<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
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

// checks the current version against the running version
function version_check() {
  log_message('debug', "Version check helper function starting.");
  $CI = get_instance();
  $version = $CI->config->item('kb_version');
}
?>