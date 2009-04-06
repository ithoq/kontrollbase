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

function audit($page_id,$host_id) {
  $CI = get_instance();
  $user_system_user_id = $CI->phpsession->get('user_system_user_id');
  log_message('debug', "Audit logging user:$user_system_user_id, page:$page_id, host:$host_id");  
  $CI->load->model('Model_main', 'main');
  $CI->main->audit_user($user_system_user_id,$page_id,$host_id); 
}

?>