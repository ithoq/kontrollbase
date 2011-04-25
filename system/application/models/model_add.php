<?php 
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @package Kontrollbase
   * ID: $Id$
   * @copyright Copyright (c) 2009 Matt Reid, Kontrollbase LLC
   * @license http://kontrollsoft.com/kontrollbase/userguide/general-LICENSE.php
   * @link http://kontrollbase.com
   */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_add extends Model
{

  function __construct()
  {
    $this->Model_add();
  }
  
  function Model_add()
  {
    parent::Model();
  }

  function add_host(
		    $server_client_id,
		    $server_type,
		    $server_is_slave,
		    $server_ipaddress,
		    $server_hostname,
		    $server_ssh_user,
		    $server_mysql_port,
		    $server_mysql_socket,
		    $server_mysql_db,
		    $server_mysql_host,
		    $server_mysql_user,
		    $server_mysql_pass,
		    $server_snmp_local_address,
		    $server_snmp_port,
		    $server_snmp_rocommunity,
		    $server_snmp_version,
		    $server_notes,
		    $threshold_queries_per_second,
		    $threshold_seconds_behind_master) {
    
    $active = '1';
    $server_client_id = $this->db->escape_str($server_client_id);
    $server_type = $this->db->escape_str($server_type);
    $server_is_slave = $this->db->escape_str($server_is_slave);
    $server_ipaddress = $this->db->escape_str($server_ipaddress);
    $server_hostname = $this->db->escape_str($server_hostname);
    $server_ssh_user = $this->db->escape_str($server_ssh_user);
    $server_mysql_port = $this->db->escape_str($server_mysql_port);
    $server_mysql_socket = $this->db->escape_str($server_mysql_socket);
    $server_mysql_db = $this->db->escape_str($server_mysql_db);
    $server_mysql_host = $this->db->escape_str($server_mysql_host);
    $server_mysql_user = $this->db->escape_str($server_mysql_user);
    $server_mysql_pass = $this->db->escape_str($server_mysql_pass);
    $server_snmp_local_address = $this->db->escape_str($server_snmp_local_address);
    $server_snmp_port = $this->db->escape_str($server_snmp_port);
    $server_snmp_rocommunity = $this->db->escape_str($server_snmp_rocommunity);
    $server_snmp_version = $this->db->escape_str($server_snmp_version);
    $server_notes = $this->db->escape_str($server_notes);
    $threshold_queries_per_second = $this->db->escape_str($threshold_queries_per_second);
    $threshold_seconds_behind_master = $this->db->escape_str($threshold_seconds_behind_master);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="INSERT INTO server_list (
`id` ,
`active` ,
`server_client_id` ,
`server_type` ,
`server_is_slave` ,
`server_ipaddress` ,
`server_hostname` ,
`server_ssh_user` ,
`server_mysql_port` ,
`server_mysql_socket` ,
`server_mysql_db` ,
`server_mysql_host`,
`server_mysql_user` ,
`server_mysql_pass` ,
`server_snmp_local_address` ,
`server_snmp_port` ,
`server_snmp_rocommunity` ,
`server_snmp_version` ,
`server_notes`,
`threshold_queries_per_second` ,
`threshold_seconds_behind_master` ,
`creation_time`
)
VALUES (
NULL , 
'$active',
'$server_client_id',
'$server_type',
'$server_is_slave',
'$server_ipaddress',
'$server_hostname',
'$server_ssh_user',
'$server_mysql_port',
'$server_mysql_socket',
'$server_mysql_db',
'$server_mysql_host',
'$server_mysql_user',
'$server_mysql_pass',
'$server_snmp_local_address',
'$server_snmp_port',
'$server_snmp_rocommunity',
'$server_snmp_version',
'$server_notes',
'$threshold_queries_per_second',
'$threshold_seconds_behind_master',
NOW())";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not add the desired host. Transaction failed.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function add_client(
		      $server_client_name,
		      $server_client_email,
		      $server_client_phone) {

    $server_client_name = $this->db->escape_str($server_client_name);
    $server_client_email = $this->db->escape_str($server_client_email);
    $server_client_phone = $this->db->escape_str($server_client_phone);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="INSERT INTO `server_client` (
`id` ,
`server_client_name` ,
`server_client_email` ,
`server_client_phone` ,
`creation_time`
)
VALUES (
NULL , '$server_client_name', '$server_client_email', '$server_client_phone', NOW( )
);";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "Transaction failed: $sql0");
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function add_user(
		    $system_user_name,
		    $system_user_pass,
		    $system_user_email,
		    $server_client_id,
		    $role_tier) {
    
    $system_user_name = $this->db->escape_str($system_user_name);
    $system_user_pass = $this->db->escape_str($system_user_pass);
    $system_user_email = $this->db->escape_str($system_user_email);
    $server_client_id = $this->db->escape_str($server_client_id);
    $role_tier = $this->db->escape_str($role_tier);
    
    $dbr = $this->load->database('write', TRUE);
    $sql0="INSERT INTO `system_users` (
`id` ,
`system_user_name` ,
`system_user_pass`,
`system_user_email` ,
`server_client_id` ,
`role_tier` ,
`creation_time`
)
VALUES (
NULL , '$system_user_name', md5('$system_user_pass'), '$system_user_email', '$server_client_id', '$role_tier', NOW());";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "Transaction failed: $sql0");
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
