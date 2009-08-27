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

function auth() {
  $CI = get_instance();
  log_message('debug', "Login function starting.");
  $login = $CI->phpsession->get('logged_in');
  if($login == FALSE) {
    log_message('debug', "Session 'logged_in == FALSE, redirecting to login function");
    redirect("login");
  }
}

//this function is deprecated since the one below it is better. I'll keep it around for a bit to see if I really need it
function deprecated_check() {
  log_message('debug', "Auth Check function starting.");
  $CI = get_instance();
  $login = $CI->phpsession->get('logged_in');
  $client = $CI->phpsession->get('server_client_id');
  $username = $CI->phpsession->get('user_system_user_name');
  if($login == FALSE) {
    log_message('debug', "Session 'logged_in == FALSE, redirecting to login function");
    redirect("login");
  }
  elseif($client != 0) {
    log_message('info', "Session is a client user. Access to this controller is FORBIDDEN!");
    $CI->phpsession->clear();
    log_message('info', "User forcefully logged out.");
    redirect("authfail");
  }
  else {
    return;
  }
}

function check() {
  log_message('debug', "Admin Check function starting.");
  $CI = get_instance();
  $login = $CI->phpsession->get('logged_in');
  $client = $CI->phpsession->get('server_client_id');
  $tier = $CI->phpsession->get('user_role_tier');
  $username = $CI->phpsession->get('user_system_user_name');
  if($login == FALSE) {
    log_message('debug', "Session 'logged_in == FALSE, redirecting to login function");
    redirect("login");
  }
  elseif($client != 0) {
    log_message('info', "Session is a client user. Access to this controller is FORBIDDEN!");
    $CI->phpsession->clear();
    log_message('info', "User forcefully logged out.");
    redirect("authfail");
  }
  else {
    if($tier != 0) {
      log_message('info', "Session is not an admin user. Access to this controller is FORBIDDEN!");
      $CI->phpsession->clear();
      log_message('info', "User forcefully logged out.");
      redirect("authfail");
    }
    elseif($tier == 0) {
      log_message('info', "Session is an admin user. Access to this controller is ALLOWED.");
      return;
    }
  }
}
?>