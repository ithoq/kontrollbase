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

class Model_alerts extends Model
{

  function __construct()
  {
    $this->Model_alerts();
  }
  
  function Model_alerts()
  {
    parent::Model();
  }

  function alert_remove(
			$alerts_current_id,
			$system_users_id) {
    
    $alerts_current_id = $this->db->escape_str($alerts_current_id);
    $system_users_id = $this->db->escape_str($system_users_id);

    $dbr = $this->load->database('write', TRUE);
    $sql0="UPDATE `alerts_current` SET 
`alerts_ign` = '0',
`alerts_ack` = '0',
`system_users_id` = '$system_users_id',
`response_time` = NOW( ) WHERE `alerts_current`.`id` = '$alerts_current_id' LIMIT 1";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not remove the alert recognition. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function alert_update(
		     $alerts_current_id,
		     $system_users_id,
		     $choice) {
    
    $alerts_current_id = $this->db->escape_str($alerts_current_id);
    $system_users_id = $this->db->escape_str($system_users_id);

    if($choice == 'ack') {
      $alert_ign = '0';
      $alert_ack = '1';
      $c = 'acknowledge';
    }
    elseif($choice == 'ign') {
      $alert_ign = '1';
      $alert_ack = '0';
      $c = 'ignore';
    }
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="UPDATE `alerts_current` SET 
`alerts_ign` = '$alert_ign',
`alerts_ack` = '$alert_ack',
`system_users_id` = '$system_users_id',
`response_time` = NOW( ) WHERE `alerts_current`.`id` = '$alerts_current_id' LIMIT 1";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not $c the desired alert. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function get_alert_responses($server_list_id,$choice) {
    $dbr = $this->load->database('read', TRUE);
    
    if($choice == 'ack') {
      $alert_ign = '0';
      $alert_ack = '1';
      $c = 'acknowledge';
    }
    elseif($choice == 'ign') {
      $alert_ign = '1';
      $alert_ack = '0';
      $c = 'ignore';
    }
    
    if($server_list_id == '0') {     
      $sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active = '0' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='$alert_ign' and t2.alerts_ack='$alert_ack' order by server_hostname,t1.alert_level";
    }
    else {
      $sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active = '0' and t2.server_list_id='$server_list_id' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='$alert_ign' and t2.alerts_ack='$alert_ack' order by server_hostname,t1.alert_level";
    }

    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array(array(
		    "id" => "NULL",
		    "alert_name" => "NULL",
		    "alert_desc" => "NULL",
		    "alert_links" => "NULL",
		    "alert_solution" => "NULL",
		    "alert_level" => "2",
		    "alerts_current_id" => "NULL",
		    "alerts_ign" => "NULL",
		    "alerts_ack" => "NULL",
		    "system_users_id" => "NULL",
		    "renew_time" => "NULL",
		    "response_time" => "NULL",
		    "alerts_def_id" => "NULL",
		    "server_list_id" => "NULL",
		    "server_hostname" => "NULL"));
      return $data;
    }
  }

}
?>