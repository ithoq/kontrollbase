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

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends Model
{

  function __construct()
  {
    $this->Model_login();
  }
  
  function Model_login()
  {
    parent::Model();
  }

  function get_user($system_user_name,$system_user_pass) {
    log_message('debug', "Starting get_user from model_login");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from system_users where system_user_name = '$system_user_name' and system_user_pass = md5('$system_user_pass')";

    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	log_message('debug', "received matching login results from database");
	$server_client_id = $row->server_client_id;
	$role_tier = $row->role_tier;
	$system_user_id = $row->id;
	$system_user_name = $row->system_user_name;
	$system_user_email = $row->system_user_email;

	// set auth in session data
	$this->phpsession->save('server_client_id',"$server_client_id");
	$this->phpsession->save('user_role_tier',"$role_tier");
	$this->phpsession->save('user_system_user_id',"$system_user_id");
	$this->phpsession->save('user_system_user_name',"$system_user_name");
	$this->phpsession->save('user_system_user_email',"$system_user_email");
	$this->phpsession->save('logged_in',TRUE);

	log_message('debug', "logged_in state == TRUE");
	return 0;
      }
    }
    //login bad, either wrong password or no user by that name
    else {
      log_message('debug', "Model_login get_user query rows < 0");
      $this->phpsession->clear('server_client_id');
      $this->phpsession->clear('user_role_tier');
      $this->phpsession->clear('user_system_user_id');
      $this->phpsession->clear('user_system_user_name');
      $this->phpsession->clear('user_system_user_email');
      $this->phpsession->clear('logged_in');
      log_message('debug', "logged_in state == FALSE");
      return 1;
    }
  }
  
}
?>