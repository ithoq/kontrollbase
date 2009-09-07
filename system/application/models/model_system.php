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

class Model_system extends Model
{

  function __construct()
  {
    $this->Model_system();
  }
  
  function Model_system()
  {
    parent::Model();
  }

  function get_system_quant($x) {
    $dbr = $this->load->database('read', TRUE);
    log_message('debug', "Model System: get_system_quant($x) called.");
    if($x == 0) {
      $sql="select id from server_list where active ='0'";
    }
    elseif($x == 1) {
      $sql="select id from server_list where active >='1'";
    }
    elseif($x == 2) {
      $sql="select id from system_users";
    }
    elseif($x == 3) {
      $sql="select id from server_client";
    }
    elseif($x == 4) {
      $sql="select id from server_report";
    }        
    elseif($x == 5) {
      $sql="select id from server_statistics";
    }

    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      $data = $query->num_rows();
    }
    else {
      $data = '0';
    }
    return $data;
  }

  function get_settings() {
    $dbr = $this->load->database('read', TRUE);
    $sql="select system_server_loop_timeout,system_graph_animation_enable,system_alerts_email,system_hostname from system_main";

    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array(array("system_alerts_email" => "NULL", "system_hostname" => "NULL"));
      return $data;
    }
  }


  function get_data_size($schema) {
    $dbr = $this->load->database('read', TRUE);
    $sql="select DATA_LENGTH,INDEX_LENGTH from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$schema' and TABLE_NAME='server_statistics' LIMIT 1";

    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array(array("DATA_LENGTH" => "0", "INDEX_LENGTH" => "0"));
      return $data;
    }
  }

  function get_report_size($schema) {
    $dbr = $this->load->database('read', TRUE);
    $sql="select DATA_LENGTH,INDEX_LENGTH from INFORMATION_SCHEMA.TABLES where TABLE_SCHEMA='$schema' and TABLE_NAME='server_report' LIMIT 1";

    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = array(array("DATA_LENGTH" => "0", "INDEX_LENGTH" => "0"));
      return $data;
    }
  }

  //this functionality has been removed as of revision 102 - feel free to delete at will
  function data_prune(
		 $choice,
		 $system_users_id) {    

    if($choice == 0) {
      $table = "server_report";
      $type = "report";
    }
    elseif($choice == 1) {
      $table = "server_statistics";
      $type = "statistics";
    }
    else {
      return 1;
    }
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="truncate table $table";
    $sql1="INSERT INTO `system_pruning_audit` (
`id` ,
`system_users_id` ,
`pruning_table_type` ,
`Creation_time`
)
VALUES (
NULL , '$system_users_id', '$type', NOW( ))";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->query($sql1);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not prune table data for $table. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function edit_settings($system_alerts_email,
			 $system_hostname,
			 $system_graph_animation_enable,
			 $system_server_loop_timeout) {
    
    $system_alerts_email = $this->db->escape_str($system_alerts_email);
    $system_hostname = $this->db->escape_str($system_hostname);
    $system_graph_animation_enable = $this->db->escape_str($system_graph_animation_enable);
    $system_server_loop_timeout = $this->db->escape_str($system_server_loop_timeout);

    $dbr = $this->load->database('write', TRUE);
    $sql0="UPDATE `system_main` SET 
`system_alerts_email` = '$system_alerts_email',
`system_hostname` = '$system_hostname',
`system_graph_animation_enable` = '$system_graph_animation_enable',
`system_server_loop_timeout` = '$system_server_loop_timeout'";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "System settings edit failed. Please check database.");
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

}
?>
