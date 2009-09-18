<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
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

// Check variables to see if they are 0 so that we do not get division by zero errors
function check_var($var) {
  log_message('debug', "exceptionhandler helper starting: check_var($var)");
  if($var == 0) { 
    log_message('debug', "exceptionhandler: var:$var, changing to '.00000001'");
    $var = .00000001; 
    return $var;
  }
  else {
    log_message('debug', "exceptionhandler: (var > 0) continuing...");
    return $var;
  }
}

?>