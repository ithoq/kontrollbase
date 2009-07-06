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

function check_variables() {
  $CI = get_instance();
  $compress = $CI->config->item('compress_output');

  if($compress == TRUE) {
    log_message('debug', "ERROR: compress_output is enabled in the config. TURN IT OFF.");
    show_error("ERROR: compress_output is enabled, login functions will not work with this setting enabled. Please set it to FALSE in the system/application/config/config.php file.");
  }
  else {
    log_message('debug', "CHECK: compress_output is disabled. Good, all is well. Continuing.");
  }
}

?>