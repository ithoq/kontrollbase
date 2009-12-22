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
function microtime_float()
{
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec);
}

function qstart() { 
  log_message('debug', "DB query starting...");
  $_SESSION['qstart'] = microtime_float();
}

function qend() {
  log_message('debug', "DB query ended, calculating time...");
  $qstart = $_SESSION['qstart'];
  $qend = microtime_float();

  $qtime = $qend - $qstart;
  log_message('debug', "DB query timing: $qtime seconds.");
  unset($_SESSION['qstart']); //remove value of $_SESSION['qstart']
}
?>
