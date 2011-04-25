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

class Model_show extends Model
{

  function __construct()
  {
    $this->Model_show();
  }
  
  function Model_show()
  {
    parent::Model();
  }

  function get_server_list() {
    $dbr = $this->load->database('read', TRUE);
    $sql = "select t1.*, t2.server_client_name from 
            server_list as t1, 
            server_client as t2 
            where t1.server_client_id = t2.id 
            order by t2.server_client_name,server_type,server_hostname";
    qstart();
    $query = $dbr->query($sql);
    qend();
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $servers=array(array("id" => "NULL",
			   "active" => "NULL",
			   "server_client_id" => "NULL",
			   "server_type" => "NULL",
			   "server_is_slave" => "NULL",
			   "server_ipaddress" => "NULL",
			   "server_hostname" => "NULL",
			   "server_ssh_user" => "NULL",
			   "server_mysql_port" => "NULL",
			   "server_mysql_socket" => "NULL",
			   "server_mysql_db" => "NULL",
			   "server_mysql_user" => "NULL",
			   "server_mysql_pass" => "NULL",
			   "server_snmp_local_address" => "NULL",
			   "server_snmp_port" => "NULL",
			   "server_snmp_rocommunity" => "NULL",
			   "server_snmp_version" => "NULL",
			   "threshold_queries_per_second" => "NULL",
			   "threshold_seconds_behind_master" => "NULL",
			   "server_client_name" => "NULL",
			   "creation_time" => "NULL"));
      return $servers;
    }
  }

  function get_user_list() {
    $dbr = $this->load->database('read', TRUE);
    $sql0 = "select t1.*,t2.server_client_name 
            from system_users as t1, server_client as t2 
            where t1.server_client_id = t2.id 
            or t1.server_client_id = '0' 
            group by t1.system_user_name 
            order by system_user_name";
    qstart();
    $query = $dbr->query($sql0);
    qend();
    if($query->num_rows() > 0) {      
      return $query->result_array();
    }
    else {
      $users=array(array("id" => "NULL",
			 "system_user_name" => "NULL",
			 "system_user_pass" => "NULL",
			 "system_user_email" => "NULL",
			 "server_client_id" => "NULL",
			 "role_tier" => "NULL",
			 "server_client_name" => "NULL",
			 "creation_time" => "NULL"));
      return $users;
    }
  }
  
  
  function get_client_list() {
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from server_client order by server_client_name";
    qstart();
    $query = $dbr->query($sql);
    qend();
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $clients=array(array("id" => "NULL",
			   "server_client_name" => "NULL",
			   "server_client_email" => "NULL",
			   "server_client_phone" => "NULL",
			   "creation_time" => "NULL"));
      return $clients;
    }
  }

}
?>
