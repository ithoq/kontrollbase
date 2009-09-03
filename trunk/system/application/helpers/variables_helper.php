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

// SET SESSION VARIABLES THAT ARE NEEDED FOR SOME CONTROLLERS/MODELS
function set_session_vars() {
  $CI = get_instance();
  $CI->load->model('Model_system', 'system');
  $settings = $this->system->get_settings();
  $system_graph_animation_enable = $settings[0]['system_graph_animation_enable'];
  $CI->phpsession->save('sess_system_graph_animation_enable',"$system_graph_animation_enable");
  log_message('debug', "set_session_vars function: sess_system_graph_animation_enable session var = $system_graph_animation_enable");
}

// ENSURE THAT VARIOUS config.php VALUES ARE SET TO THE NECESSARY VALUES FOR PROPER OPERATION
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