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

class Model_main extends Model
{

  function __construct()
  {
    $this->Model_main();
  }
  
  function Model_main()
  {
    parent::Model();
  }

  function audit_user($system_user_id,$page_id,$host_id) {
    log_message('debug', "Audit insert starting.");
    $dbr = $this->load->database('write', TRUE);
    $system_user_id = $this->db->escape_str($system_user_id);
    $page_id = $this->db->escape_str($page_id);
    $host_id = $this->db->escape_str($host_id);

    $sql0="INSERT INTO `system_users_audit` (
`id` ,
`system_user_id` ,
`system_pages_id` ,
`system_pages_attribute` ,
`Creation_time`
)
VALUES (
NULL , '$system_user_id', '$page_id', '$host_id', NOW( )
);";
    $this->db->trans_start();
    $this->db->query($sql0);
    $this->db->trans_complete();
    if ($this->db->trans_status() === FALSE) {
      log_message('debug', "Audit log insert FAILED");
      $this->db->trans_off();
      return 1;
    }
    else {
      $this->db->trans_off();
      return 0;
    }
  }

  function get_summary_host($server_list_id) {
    log_message('debug', "Starting get_summary_host");
    $dbr = $this->load->database('read', TRUE);
    $this->load->helper('number');
    $sql1="select t1.id as server_list_id,t1.server_hostname,t2.id,t2.server_list_id,t2.os_load_15,t2.os_mem_total,round((t2.os_mem_total / t2.os_mem_used)) as mem_perc,round(t2.queries_per_second,2) as queries_per_second,t2.num_schema,t2.num_tables,t2.num_connections,t2.length_data,t2.length_index,(t2.length_data + t2.length_index) as total_size,t2.engine_count_innodb,t2.engine_count_myisam,t2.engine_myisam_size_data,t2.engine_myisam_size_index,(t2.engine_myisam_size_data + t2.engine_myisam_size_index) as engine_myisam_size_total, t2.engine_innodb_size_data,t2.engine_innodb_size_index,(t2.engine_innodb_size_data + t2.engine_innodb_size_index) as engine_innodb_size_total from server_list as t1, server_statistics as t2 where t1.id = t2.server_list_id and t2.server_list_id = '$server_list_id' order by t2.id desc limit 1";
    log_message('debug', $sql1);
    $query1 = $dbr->query($sql1);
    if($query1->num_rows() > 0) {
      foreach ($query1->result() as $row1) {    
	$server_list_id = $row1->server_list_id;
	$server_hostname = $row1->server_hostname;
	$os_load_15 = $row1->os_load_15;
	$mem_perc = $row1->mem_perc;
	$os_mem_total = $row1->os_mem_total;
	$queries_per_second = $row1->queries_per_second;
	$num_schema = $row1->num_schema;
	$num_tables = $row1->num_tables;
	$num_connections = $row1->num_connections;
	$length_data = $row1->length_data;
	$length_index = $row1->length_index;
	$total_size = $row1->total_size;
	$engine_count_innodb = $row1->engine_count_innodb;
	$engine_count_myisam = $row1->engine_count_myisam;
	$engine_myisam_size_data = $row1->engine_myisam_size_data;
	$engine_myisam_size_index = $row1->engine_myisam_size_index;
	$engine_myisam_size_total = $row1->engine_myisam_size_total;
	$engine_innodb_size_data = $row1->engine_innodb_size_data;
	$engine_innodb_size_index = $row1->engine_innodb_size_index;
	$engine_innodb_size_total = $row1->engine_innodb_size_total;
	$data = array(array(
			  "server_list_id" => "$server_list_id",
			  "server_hostname" => "$server_hostname",
			  "os_load_15" => "$os_load_15",
			  "mem_perc" => "$mem_perc",
			  "os_mem_total" => "$os_mem_total",
			  "queries_per_second" => "$queries_per_second",
			  "num_schema" => "$num_schema",
			  "num_tables" => "$num_tables",
			  "num_connections" => "$num_connections",
			  "length_data" => "$length_data",
			  "length_index" => "$length_index",
			  "total_size" => "$total_size",
			  "engine_count_innodb" => "$engine_count_innodb",
			  "engine_count_myisam" => "$engine_count_myisam",
			  "engine_myisam_size_data" => "$engine_myisam_size_data",
			  "engine_myisam_size_index" => "$engine_myisam_size_index",
			  "engine_myisam_size_total" => "$engine_myisam_size_total",
			  "engine_innodb_size_data" => "$engine_innodb_size_data",
			  "engine_innodb_size_index" => "$engine_innodb_size_index",
			  "engine_innodb_size_total" => "$engine_innodb_size_total"));
      }
    }
    else {
      $data = array(array(
                          "server_list_id" => "0",
                          "server_hostname" => "0",
                          "os_load_15" => "0",
                          "mem_perc" => "0",
                          "os_mem_total" => "0",
                          "queries_per_second" => "0",
                          "num_schema" => "0",
                          "num_tables" => "0",
                          "num_connections" => "0",
                          "length_data" => "0",
                          "length_index" => "0",
                          "total_size" => "0",
                          "engine_count_innodb" => "0",
                          "engine_count_myisam" => "0",
                          "engine_myisam_size_data" => "0",
                          "engine_myisam_size_index" => "0",
                          "engine_myisam_size_total" => "0",
                          "engine_innodb_size_data" => "0",
                          "engine_innodb_size_index" => "0",
                          "engine_innodb_size_total" => "0"));
    }
    return $data;
  }
  
  function get_summary_data() {
    log_message('debug', "Starting get_summary_data");
    $dbr = $this->load->database('read', TRUE);
    $this->load->helper('number');
    $sql0 = "select id,server_hostname from server_list where active >='1' order by server_hostname";
    $i=0;
    $query = $dbr->query($sql0);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$id=$row->id;
	$sql1="select t1.id as server_list_id,t1.server_hostname,t2.id,t2.server_list_id,t2.os_load_15,t2.os_mem_total,round((t2.os_mem_total / t2.os_mem_used)) as mem_perc,round(t2.queries_per_second,2) as queries_per_second,t2.num_schema,t2.num_tables,t2.num_connections,t2.length_data,t2.length_index,(t2.length_data + t2.length_index) as total_size,t2.engine_count_innodb,t2.engine_count_myisam,t2.engine_myisam_size_data,t2.engine_myisam_size_index,(t2.engine_myisam_size_data + t2.engine_myisam_size_index) as engine_myisam_size_total, t2.engine_innodb_size_data,t2.engine_innodb_size_index,(t2.engine_innodb_size_data + t2.engine_innodb_size_index) as engine_innodb_size_total from server_list as t1, server_statistics as t2 where t1.id = t2.server_list_id and t2.server_list_id = '$id' order by t2.id desc limit 1";
	log_message('debug', "$sql1");
	$query1 = $dbr->query($sql1);
	if($query1->num_rows() > 0) {
	  log_message('debug', "Query results greater than zero");
	  foreach ($query1->result() as $row1) {	    
	    $server_list_id = $row1->server_list_id;
	    $server_hostname = $row1->server_hostname;
	    $os_load_15 = $row1->os_load_15;
	    $mem_perc = $row1->mem_perc;
	    $os_mem_total = $row1->os_mem_total;
	    $queries_per_second = $row1->queries_per_second;
	    $num_schema = $row1->num_schema;
	    $num_tables = $row1->num_tables;
	    $num_connections = $row1->num_connections;
	    $length_data = $row1->length_data;
	    $length_index = $row1->length_index;
	    $total_size = $row1->total_size;
	    $engine_count_innodb = $row1->engine_count_innodb;
	    $engine_count_myisam = $row1->engine_count_myisam;
	    $engine_myisam_size_data = $row1->engine_myisam_size_data;
	    $engine_myisam_size_index = $row1->engine_myisam_size_index;
	    $engine_myisam_size_total = $row1->engine_myisam_size_total;
	    $engine_innodb_size_data = $row1->engine_innodb_size_data;
	    $engine_innodb_size_index = $row1->engine_innodb_size_index;
	    $engine_innodb_size_total = $row1->engine_innodb_size_total;
	    $data[$i] = array(
			      "server_list_id" => "$server_list_id",
			      "server_hostname" => "$server_hostname",
			      "os_load_15" => "$os_load_15",
			      "mem_perc" => "$mem_perc",
			      "os_mem_total" => "$os_mem_total",
			      "queries_per_second" => "$queries_per_second",
			      "num_schema" => "$num_schema",
			      "num_tables" => "$num_tables",
			      "num_connections" => "$num_connections",
			      "length_data" => "$length_data",
			      "length_index" => "$length_index",
			      "total_size" => "$total_size",
			      "engine_count_innodb" => "$engine_count_innodb",
			      "engine_count_myisam" => "$engine_count_myisam",
			      "engine_myisam_size_data" => "$engine_myisam_size_data",
			      "engine_myisam_size_index" => "$engine_myisam_size_index",
			      "engine_myisam_size_total" => "$engine_myisam_size_total",
			      "engine_innodb_size_data" => "$engine_innodb_size_data",
			      "engine_innodb_size_index" => "$engine_innodb_size_index",
			      "engine_innodb_size_total" => "$engine_innodb_size_total");
	    $i++;
	  }
	}
	else {
	  $data = array(array(
			      "server_list_id" => "0",
			      "server_hostname" => "0",
			      "os_load_15" => "0",
			      "mem_perc" => "0",
			      "os_mem_total" => "0",
			      "queries_per_second" => "0",
			      "num_schema" => "0",
			      "num_tables" => "0",
			      "num_connections" => "0",
			      "length_data" => "0",
			      "length_index" => "0",
			      "total_size" => "0",
			      "engine_count_innodb" => "0",
			      "engine_count_myisam" => "0",
			      "engine_myisam_size_data" => "0",
			      "engine_myisam_size_index" => "0",
			      "engine_myisam_size_total" => "0",
			      "engine_innodb_size_data" => "0",
			      "engine_innodb_size_index" => "0",
			      "engine_innodb_size_total" => "0"));
	}
      }
    }   
    else {
      log_message('debug', "Data set as 0 return");
      $data = array(array(
			  "server_list_id" => "0",
			  "server_hostname" => "0",
			  "os_load_15" => "0",
			  "mem_perc" => "0",
			  "os_mem_total" => "0",
			  "queries_per_second" => "0",
			  "num_schema" => "0",
			  "num_tables" => "0",
			  "num_connections" => "0",
			  "length_data" => "0",
			  "length_index" => "0",
			  "total_size" => "0",
			  "engine_count_innodb" => "0",
			  "engine_count_myisam" => "0",
			  "engine_myisam_size_data" => "0",
			  "engine_myisam_size_index" => "0",
			  "engine_myisam_size_total" => "0",
			  "engine_innodb_size_data" => "0",
			  "engine_innodb_size_index" => "0",
			  "engine_innodb_size_total" => "0"));
    }
    log_message('debug', "Returning data");
    return $data;
  }
  
  function get_data($server_statistics_id) {
    log_message('debug', "Starting get_data");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select * from server_statistics where id='$server_statistics_id' order by id limit 1";
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $data = "0";
    }
    return $data;
  }

  function get_current_alerts($server_list_id) {
    log_message('debug', "Starting get_current_alerts");
    $dbr = $this->load->database('read', TRUE);
    if($server_list_id == '0') {     
      $sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' and t1.alert_level ='0' order by server_hostname,t1.alert_level";
    }
    elseif($server_list_id == 'NULL') {
      $sql="select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack,  t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' order by server_hostname,t1.alert_level";
    }
    else {
      $sql = "select t1.id, t1.alert_name, t1.alert_desc, t1.alert_links, t1.alert_solution, t1.alert_level, t2.id as alerts_current_id, t2.alerts_ign, t2.alerts_ack, t2.system_users_id, t2.renew_time, t2.response_time, t2.alerts_def_id, t2.server_list_id, t3.server_hostname from alerts_def as t1, alerts_current as t2, server_list as t3 where t3.active >= '1' and t2.server_list_id='$server_list_id' and t2.alert_state = '1' and t2.alerts_def_id = t1.id and t3.id = t2.server_list_id and t2.alerts_ign ='0' and t2.alerts_ack='0' order by server_hostname,t1.alert_level";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $alerts = array(array(
			    "alert_name" => "null",
			    "alert_desc" => "null",
			    "alert_links" => "null",
			    "alert_solution" => "null",
			    "alert_level" => "null",
			    "alerts_current_id" => "null",
			    "alerts_ign" => "null",
			    "alerts_ack" => "null",
			    "system_users_id" => "null",
			    "renew_time" => "null",
			    "response_time" => "null",
			    "alerts_def_id" => "null",
			    "server_list_id" => "null",
			    "server_hostname" => "null"));
      return $alerts;			    
    }
  }

  function get_server_statistics_id($server_list_id) {
    log_message('debug', "Starting get_server_statistics_id");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select id from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$data = $row->id;
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }

  function get_last_report($server_list_id) {
    log_message('debug', "Starting get_last_report");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select t1.id, t1.server_list_id ,t2.server_statistics_id from server_statistics as t1, server_report as t2 where t1.id = t2.server_statistics_id and t1.server_list_id = '$server_list_id' order by t2.id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $server_statistics_id = $row->server_statistics_id;
	$report_id = $row->id;
      }
    }
    else {
      $report_id = "0";
    }
    return $report_id;
  }

  function get_report($server_statistics_id) {
    log_message('debug', "Starting get_report");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select server_report_document from server_report where server_statistics_id='$server_statistics_id' order by id desc limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$data = $row->server_report_document;
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }

  function get_server_list() {
    log_message('debug', "Starting get_server_list");
    $dbr = $this->load->database('read', TRUE);
    $client_id = $this->phpsession->get('server_client_id');
    if($client_id != 0) {
      $sql = "select t1.*, t2.server_client_name from server_list as t1, server_client as t2 where t1.server_client_id = '$client_id' and t1.server_client_id = t2.id";
    }
    else {
      $sql = "select t1.*, t2.server_client_name from 
            server_list as t1, 
            server_client as t2 
            where t1.server_client_id = t2.id
            order by t2.server_client_name,server_type,server_hostname";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
  }

  function get_stats($server_list_id,$x) {
    log_message('debug', "Starting get_stats");
    $dbr = $this->load->database('read', TRUE);
    if($server_list_id == '0') { //here we are calculating sizes of variables for a list of hosts
      $sql = "select id from server_list where active >='1' order by server_hostname";
      log_message('debug', "$sql");
      $query = $dbr->query($sql);
      $vcount = 0;
      $vals = array(0);
      if($query->num_rows() > 0) {
	foreach ($query->result() as $row) {
	  $servop = $row->id;
	  $sql1 = "select $x from server_statistics where server_list_id='$servop' order by id desc limit 1";
	  log_message('debug', "$sql1");
	  $query1 = $dbr->query($sql1);
	  if($query1->num_rows() > 0) {
	    foreach ($query1->result() as $row1) {
	      $z = $row1->$x;
	      array_push($vals,$z);
	    }
	  }
	}
      }
      foreach($vals as $v) {	
	$vcount += $v;
      }
      return $vcount;
    }
    else { //here we are calculating size of a variable for one host
      $sql = "select $x from server_statistics where server_list_id='$server_list_id' order by id desc limit 1";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;	
      }
    }
    else {
      $data = "0";
    }
    return $data;
  }
  
  function get_host_info($server_list_id,$x) {
    log_message('debug', "Starting get_host_info");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from server_list where id='$server_list_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_client_info($server_client_id,$x) {
    log_message('debug', "Starting get_client_info");

    if($server_client_id == 0) {
      $data = "System User";
      return $data;
    }

    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from server_client where id='$server_client_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_client_list() {
    log_message('debug', "Starting get_client_list");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select id,server_client_name from server_client order by server_client_name";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      return $query->result_array();
    }
    else {
      $clients=array(array("id" => "0","server_client_name" => ""));
      return $clients;
    }
  }

  function get_user_info($system_user_id,$x) {
    log_message('debug', "Starting get_user_info");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select $x from system_users where id='$system_user_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->$x;
      }
    }
    return $data;
  }

  function get_alert_name($alerts_def_id) {
    log_message('debug', "Starting get_alert_name");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select alert_name from alerts_def where id='$alerts_def_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data = $row->alert_name;
      }
    }
    return $data;
  }

  function get_slave($server_list_id) {
    log_message('debug', "Starting get_slave");
    $dbr = $this->load->database('read', TRUE);
    $sql = "select server_is_slave from server_list where id='$server_list_id' limit 1";
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    if($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
	$slave = $row->server_is_slave;
      }
    }
    return $slave;      
  }

  function get_graphs_default($xval,$yaxis,$name,$server_list_id,$sday,$eday) {
    log_message('debug', "Starting get_graphs_default");
    $dbr = $this->load->database('read', TRUE);
    $yval = "Date";
    $xaxis = "";
  
    if($server_list_id == '0') {
      $sql = "select $xval,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    else {
      $sql = "select $xval,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE server_list_id = '$server_list_id' AND Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    $count = $query->num_rows();

    if($count <= 64) {
      log_message('debug', "count < 64");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    elseif($count <= 128) {
      log_message('debug', "count < 128");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }
    else {
      log_message('debug', "count > 128");
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1'
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10'
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5'
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }
    if($query->num_rows() > 0) {
      $i=1;
	foreach ($query->result() as $row) {
	  $val1 = $row->$xval;
	  $val2 = $row->$yval;
	  if($val1 < 1) { $val1 = $val1 + .001; }
	  if($xval == "Uptime") { $val1 = ($val1 / 86400);}
	  $strXML .= "<set name='$val2' value='$val1' color='ff6600' showName='0'/>\n";
	  $i++;
	}
    }
    $strXML .= "</graph>";
    return $strXML;
  }
  
  function get_graphs_sec($xval,$yaxis,$name,$server_list_id,$sday,$eday) {
    log_message('debug', "Starting get_graphs_sec");
    $dbr = $this->load->database('read', TRUE);
    $yval = "Date";
    $xaxis = "";
    
    if($server_list_id== '0') {
      log_message('debug', "overview type");
    $sql = "select $xval,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    else {
      log_message('debug', "host type");
      $sql = "select $xval,Uptime,DATE_FORMAT(Creation_time,'%m-%d %H:%i') as Date from server_statistics WHERE server_list_id = '$server_list_id' AND Creation_time BETWEEN '$sday' AND '$eday' GROUP BY DAY(Creation_time),HOUR(Creation_time) ORDER BY Creation_time";
    }
    log_message('debug', "$sql");
    $query = $dbr->query($sql);
    $count = $query->num_rows();
    
    if($count <= 64) {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='40' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    elseif($count <= 128) {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1' 
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10' 
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5' 
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n"; 
    }
    else {
      $strXML = "<graph caption='$name' xAxisName='$xaxis' yAxisName='$yaxis' 
showValues='0' rotateNames='1' decimalPrecision='2' showLimits='1' animation='1'
showgridbg='1' showhovercap='1' showColumnShadow='1'
shadowYShift='0' shadowXShift='1' showAnchors='1' anchorRadius='2' anchorBgColor='b8b8b8' anchorScale='0' anchorAlpha='10'
showAlternateHGridColor='1' AlternateHGridColor='ff5904' divLineColor='ff5904' divLineAlpha='20' alternateHGridAlpha='5'
canvasBorderColor='b8b8b8' baseFontColor='666666' lineColor='99ccff' lineThickness='1'>\n";
    }    
    if($query->num_rows() > 0) {
      $i=1;
      foreach ($query->result() as $row) {
	$val1 = $row->$xval;
	$val2 = $row->$yval;
	$Uptime = $row->Uptime;

	if($Uptime < 1) { $Uptime = 1; }
	if($val1 < 1) { $val1 = 1; }

	$val1 = ($val1 / $Uptime);
	if($val1 < 1) { $val1 = $val1 + .001; }
	//	if($i % 2) {
	$strXML .= "<set name='$val2' value='$val1' color='ff6600' showName='0'/>\n";
	  //}
	$i++;
      }
    }
    $strXML .= "</graph>";
    return $strXML;
  }
}
?>
