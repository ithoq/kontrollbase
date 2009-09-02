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

function check_variables() {
  $CI = get_instance();
  $base = $CI->config->item('base_dir'); 
  $config = "$base/system/application/config/config.php";
  $compress = $CI->config->item('compress_output'); // needs to be false
  $sessdb = $CI->config->item('sess_use_database'); // needs to be false
  $sessip = $CI->config->item('sess_match_ip'); // needs to be TRUE 
  $sessuser = $CI->config->item('sess_match_useragent'); // needs to be TRUE
  $sessencrypt = $CI->config->item('sess_encrypt_cookie'); // needs to be TRUE                                                                        

  if($compress == TRUE) {
    log_message('debug', "ERROR: compress_output is enabled in the config. TURN IT OFF.");
    show_error("ERROR: compress_output is enabled. Set it to FALSE in the $config file.");
  }
  if($sessdb == TRUE) {
    log_message('debug', "ERROR: sess_use_database is enabled in the config. TURN IT OFF.");
    show_error("ERROR: sess_use_database is enabled. Set it to FALSE in the $config file");
  }
  if($sessip == FALSE) {
    log_message('debug', "ERROR: sess_match_ip is not enabled in the config. TURN IT ON.");
    show_error("ERROR: sess_match_ip is not enabled. Set it to TRUE in the $config file");
  }
  if($sessuser == FALSE) {
    log_message('debug', "ERROR: sess_match_useragent is not enabled in the config. TURN IT ON.");
    show_error("ERROR: sess_match_useragent is not enabled. Set it to TRUE in the $config file");
  }
  if($sessencrypt == FALSE) {
    log_message('debug', "ERROR: sess_encrypt_cookie is not enabled in the config. TURN IT ON.");
    show_error("ERROR: sess_encrypt_cookie is not enabled. Set it to TRUE in the $config file");
  }
}

?>