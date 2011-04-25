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

class Model_delete extends Model
{

  function __construct()
  {
    $this->Model_delete();
  }
  
  function Model_delete()
  {
    parent::Model();
  }

  function delete_host($server_list_id) {
    log_message('debug',"Model_delete starting with delete_host function.");
    $dbr = $this->load->database('write', TRUE);
    $sql0 = "delete from server_list where id = '$server_list_id'";
    $sql1 = "delete from server_statistics where server_list_id = '$server_list_id'";
    $sql2 = "delete from alerts_current where server_list_id = '$server_list_id'";
    $sql3 = "delete from server_report where server_list_id = '$server_list_id'";
    $sql3 = "delete from graphs_custom where server_list_id = '$server_list_id'";

    //we run all of these deletes in a transaction
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->query($sql1);
    $this->db->query($sql2);
    $this->db->query($sql3);
    log_message('debug',$sql0);
    log_message('debug',$sql1);
    log_message('debug',$sql2);
    log_message('debug',$sql3);    
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not delete the desired host. Transaction failed. Changes rolled back.');
      $this->db->trans_off();
      return 1;
    } 
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function delete_user($system_user_id) {
    log_message('debug',"Model_delete starting with delete_user function.");
    $dbr = $this->load->database('write', TRUE);
    $sql0 = "delete from system_users where id = '$system_user_id'";
    $this->db->trans_start();
    $this->db->query($sql0);
    log_message('debug',$sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not delete the desired user. Transaction failed. Changes rolled back.');
      $this->db->trans_off();
      return 1;
    }
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function delete_client($server_client_id) {
    log_message('debug',"Beginning Model_delete for delete_client");
    $dbr = $this->load->database('write', TRUE);
    $sql0 = "delete from server_client where id = '$server_client_id'";   
    $sql1 = "select id from server_list where server_client_id = '$server_client_id'";
    
    //things we need to delete per each user that the client has associated
    $sql7 = "delete from system_users where server_client_id = '$server_client_id'";
    $sql8 = "delete from api_users where api_server_client_id = '$server_client_id'";

    $this->db->trans_start();
    log_message('debug',$sql1);
    $query = $dbr->query($sql1);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$server_list_id = $row->id;
	//things we need to delete per each host that the client has associated
	$sql2 = "delete from server_list where id = '$server_list_id'";
	$sql3 = "delete from server_statistics where server_list_id = '$server_list_id'";
	$sql4 = "delete from alerts_current where server_list_id = '$server_list_id'";
	$sql5 = "delete from server_report where server_list_id = '$server_list_id'";
	$sql6 = "delete from graphs_custom where server_list_id = '$server_list_id'";
	$this->db->query($sql2);
	$this->db->query($sql3);
	$this->db->query($sql4);
	$this->db->query($sql5);
	$this->db->query($sql6);

	log_message('debug',$sql2);
	log_message('debug',$sql3);
	log_message('debug',$sql4);
	log_message('debug',$sql5);
	log_message('debug',$sql6);
      }
    }
    $this->db->query($sql7);
    $this->db->query($sql8);
    $this->db->query($sql0);
    log_message('debug',$sql7);
    log_message('debug',$sql8);
    log_message('debug',$sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      show_error('Could not delete the client or their associated hosts/users. Transaction failed. Changes rolled back.');
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