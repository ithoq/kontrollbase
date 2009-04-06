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

class Model_edit extends Model
{

  function __construct()
  {
    $this->Model_edit();
  }
  
  function Model_edit()
  {
    parent::Model();
  }

  function get_server($server_list_id) {
    $dbr = $this->load->database('read', TRUE);
    $sql = "select t1.*,t2.server_client_name from server_list as t1, server_client as t2 where t1.server_client_id = t2.id and t1.id = '$server_list_id' order by server_hostname limit 1";
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $server=array("id" => "NULL",
		    "active" => "NULL",
		    "server_client_id" => "NULL",
		    "server_type" => "NULL",
		    "server_is_slave" => "NULL",
		    "server_ipaddress" => "NULL",
		    "server_hostname" => "NULL",
		    "server_ssh_user" => "NULL",
		    "server_mysql_port" => "NULL",
		    "server_mysql_db" => "NULL",
		    "server_mysql_host" => "NULL",
		    "server_mysql_user" => "NULL",
		    "server_mysql_pass" => "NULL",
		    "server_snmp_local_address" => "NULL",
		    "server_snmp_port" => "NULL",
		    "server_snmp_rocommunity" => "NULL",
		    "server_snmp_version" => "NULL",
		    "threshold_queries_per_second" => "NULL",
		    "threshold_seconds_behind_master" => "NULL",
		    "server_client_name" => "NULL",
		    "creation_time" => "NULL");
      return $server;
    }
  }
  
  function edit_host(
		     $active,
		     $server_list_id,
		     $server_client_id,
		     $server_type,
		     $server_is_slave,
		     $server_ipaddress,
		     $server_hostname,
		     $server_ssh_user,
		     $server_mysql_port,
		     $server_mysql_db,
		     $server_mysql_host,
		     $server_mysql_user,
		     $server_mysql_pass,
		     $server_snmp_local_address,
		     $server_snmp_port,
		     $server_snmp_rocommunity,
		     $server_snmp_version,
		     $threshold_queries_per_second,
		     $threshold_seconds_behind_master) {
    
    $active = $this->db->escape_str($active);
    $server_list_id = $this->db->escape_str($server_list_id);
    $server_client_id = $this->db->escape_str($server_client_id);
    $server_type = $this->db->escape_str($server_type);
    $server_is_slave = $this->db->escape_str($server_is_slave);
    $server_ipaddress = $this->db->escape_str($server_ipaddress);
    $server_hostname = $this->db->escape_str($server_hostname);
    $server_ssh_user = $this->db->escape_str($server_ssh_user);
    $server_mysql_port = $this->db->escape_str($server_mysql_port);
    $server_mysql_db = $this->db->escape_str($server_mysql_db);
    $server_mysql_host = $this->db->escape_str($server_mysql_host);
    $server_mysql_user = $this->db->escape_str($server_mysql_user);
    $server_mysql_pass = $this->db->escape_str($server_mysql_pass);
    $server_snmp_local_address = $this->db->escape_str($server_snmp_local_address);
    $server_snmp_port = $this->db->escape_str($server_snmp_port);
    $server_snmp_rocommunity = $this->db->escape_str($server_snmp_rocommunity);
    $server_snmp_version = $this->db->escape_str($server_snmp_version);
    $threshold_queries_per_second = $this->db->escape_str($threshold_queries_per_second);
    $threshold_seconds_behind_master = $this->db->escape_str($threshold_seconds_behind_master);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="
UPDATE `server_list` SET 
`active` = '$active',
`server_client_id` = '$server_client_id',
`server_type` = '$server_type',
`server_is_slave` = '$server_is_slave',
`server_ipaddress` = '$server_ipaddress',
`server_hostname` = '$server_hostname',
`server_ssh_user` = '$server_ssh_user',
`server_mysql_port` = '$server_mysql_port',
`server_mysql_db` = '$server_mysql_db',
`server_mysql_host` = '$server_mysql_host',
`server_mysql_user` = '$server_mysql_user',
`server_mysql_pass` = '$server_mysql_pass',
`server_snmp_local_address` = '$server_snmp_local_address',
`server_snmp_port` = '$server_snmp_port',
`server_snmp_rocommunity` = '$server_snmp_rocommunity',
`server_snmp_version` = '$server_snmp_version',
`threshold_queries_per_second` = '$threshold_queries_per_second',
`threshold_seconds_behind_master` = '$threshold_seconds_behind_master'
 WHERE `id` = '$server_list_id' LIMIT 1";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not edit the desired host. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function get_user($system_user_id) {
    $dbr = $this->load->database('read', TRUE);
    $sql0 = "select * from system_users where id='$system_user_id' limit 1";
    $query = $dbr->query($sql0);
    if($query->num_rows() > 0) {      
      return $query->result_array();
    }
    else {
      $user=array("id" => "NULL",
		   "system_user_name" => "NULL",
		   "system_user_pass" => "NULL",
		   "system_user_email" => "NULL",
		   "server_client_id" => "NULL",
		   "role_tier" => "NULL",
		   "server_client_name" => "NULL",
		   "creation_time" => "NULL");
      return $user;
    }
  }

  function edit_user(
		     $system_user_id,
		     $system_user_name,
		     $system_user_pass,
		     $system_user_email,
		     $server_client_id,
		     $role_tier) {
    
    $system_user_id = $this->db->escape_str($system_user_id);
    $system_user_name = $this->db->escape_str($system_user_name);
    $system_user_pass = $this->db->escape_str($system_user_pass);
    $system_user_email = $this->db->escape_str($system_user_email);
    $server_client_id = $this->db->escape_str($server_client_id);
    $role_tier = $this->db->escape_str($role_tier);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="UPDATE `system_users` SET 
`system_user_name` = '$system_user_name',
`system_user_pass` = md5('$system_user_pass'),
`system_user_email` = '$system_user_email',
`server_client_id` = '$server_client_id',
`role_tier` = '$role_tier' 
WHERE `system_users`.`id` = '$system_user_id' LIMIT 1";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not edit the desired user. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }
  
  function get_client($server_client_id) {
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from server_client where id='$server_client_id' limit 1";
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $client=array("id" => "NULL",
			   "server_client_name" => "NULL",
			   "server_client_email" => "NULL",
			   "server_client_phone" => "NULL",
			   "creation_time" => "NULL");
      return $client;
    }
  }

  function edit_client(
		       $server_client_id,
		       $server_client_name,
		       $server_client_email,
		       $server_client_phone) {
    
    $server_client_id = $this->db->escape_str($server_client_id);
    $server_client_name = $this->db->escape_str($server_client_name);
    $server_client_email = $this->db->escape_str($server_client_email);
    $server_client_phone = $this->db->escape_str($server_client_phone);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="UPDATE `server_client` SET 
`server_client_name` = '$server_client_name',
`server_client_email` = '$server_client_email',
`server_client_phone` = '$server_client_phone'
WHERE `server_client`.`id` = '$server_client_id' LIMIT 1";

    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not edit the desired client. Transaction failed.');
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