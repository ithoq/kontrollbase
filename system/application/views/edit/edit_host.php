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

$g['root'] = $root;
$this->load->view('header_nojs',$g);

$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path
echo validation_errors();
print "<table>
<tr><td><h2>Edit Host</h2></td></tr>\n";
foreach ($clients as $a) {
  $clientlist[$a['id']]=$a['server_client_name'];
}

foreach($server as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $server_list_id=$vValue; }
    if($vKey == 'active') { $active=$vValue; }
    if($vKey == 'server_client_id') { $server_client_id=$vValue; }
    if($vKey == 'server_type') { $server_type=$vValue; }
    if($vKey == 'server_is_slave') { $server_is_slave=$vValue; }
    if($vKey == 'server_ipaddress') { $server_ipaddress=$vValue; }
    if($vKey == 'server_hostname') { $server_hostname=$vValue; }
    if($vKey == 'server_ssh_user') { $server_ssh_user=$vValue; }
    if($vKey == 'server_mysql_port') { $server_mysql_port=$vValue; }
    if($vKey == 'server_mysql_db') { $server_mysql_db=$vValue; }
    if($vKey == 'server_mysql_host') { $server_mysql_host=$vValue; }
    if($vKey == 'server_mysql_user') { $server_mysql_user=$vValue; }
    if($vKey == 'server_mysql_pass') { $server_mysql_pass=$vValue; }
    if($vKey == 'server_snmp_local_address') { $server_snmp_local_address=$vValue; }
    if($vKey == 'server_snmp_port') { $server_snmp_port=$vValue; }
    if($vKey == 'server_snmp_rocommunity') { $server_snmp_rocommunity=$vValue; }
    if($vKey == 'server_snmp_version') { $server_snmp_version=$vValue; }
    if($vKey == 'threshold_queries_per_second') { $threshold_queries_per_second=$vValue; }
    if($vKey == 'threshold_seconds_behind_master') { $threshold_seconds_behind_master=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }
}

$slave = array('0' => 'No','1' => 'Yes');
$type = array('0' => 'Production','1' => 'Staging', '2' => 'Development');
$active = array('0' => 'Yes','1' => 'No');

$data00 = array(
              'name'        => 'server_ipaddress',
              'id'          => 'server_ipaddress',
              'value'       => "$server_ipaddress",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data01 = array(
              'name'        => 'server_hostname',
              'id'          => 'server_hostname',
              'value'       => "$server_hostname",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data02 = array(
              'name'        => 'server_ssh_user',
              'id'          => 'server_ssh_user',
              'value'       => "$server_ssh_user",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data03 = array(
              'name'        => 'server_mysql_port',
              'id'          => 'server_mysql_port',
              'value'       => "$server_mysql_port",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data04 = array(
              'name'        => 'server_mysql_db',
              'id'          => 'server_mysql_db',
              'value'       => "$server_mysql_db",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data05 = array(
		'name'        => 'server_mysql_host',
		'id'          => 'server_mysql_host',
		'value'       => "$server_mysql_host",
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data06 = array(
              'name'        => 'server_mysql_user',
              'id'          => 'server_mysql_user',
              'value'       => "$server_mysql_user",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data07 = array(
              'name'        => 'server_mysql_pass',
              'id'          => 'server_mysql_pass',
              'value'       => "$server_mysql_pass",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data08 = array(
              'name'        => 'server_snmp_local_address',
              'id'          => 'server_snmp_local_address',
              'value'       => "$server_snmp_local_address",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data09 = array(
              'name'        => 'server_snmp_port',
              'id'          => 'server_snmp_port',
              'value'       => "$server_snmp_port",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data10 = array(
              'name'        => 'server_snmp_rocommunity',
              'id'          => 'server_snmp_rocommunity',
              'value'       => "$server_snmp_rocommunity",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data11 = array(
              'name'        => 'server_snmp_version',
              'id'          => 'server_snmp_version',
              'value'       => "$server_snmp_version",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data12 = array(
              'name'        => 'threshold_queries_per_second',
              'id'          => 'threshold_queries_per_second',
              'value'       => "$threshold_queries_per_second",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data13 = array(
              'name'        => 'threshold_seconds_behind_master',
              'id'          => 'threshold_seconds_behind_master',
              'value'       => "$threshold_seconds_behind_master",
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );

echo form_open('edit/subhost');
echo form_hidden('server_list_id', "$server_list_id");
echo "<tr><td>".form_input($data00)."</td><td>IP address</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>Hostname</td></tr>";
echo "<tr><td>".form_input($data02)."</td><td>SSH Username</td></tr>";
echo "<tr><td>".form_input($data03)."</td><td>MySQL Port</td></tr>";
echo "<tr><td>".form_input($data04)."</td><td>Polling Database</td></tr>";
echo "<tr><td>".form_input($data05)."</td><td>Polling Address</td></tr>";
echo "<tr><td>".form_input($data06)."</td><td>MySQL Username</td></tr>";
echo "<tr><td>".form_password($data07)."</td><td>MySQL Password</td></tr>";
echo "<tr><td>".form_input($data08)."</td><td>SNMP Local Address</td></tr>";
echo "<tr><td>".form_input($data09)."</td><td>SNMP Port</td></tr>";
echo "<tr><td>".form_input($data10)."</td><td>SNMP Community</td></tr>";
echo "<tr><td>".form_input($data11)."</td><td>SNMP Version</td></tr>";
echo "<tr><td>".form_input($data12)."</td><td>QPS Threshold</td></tr>";
echo "<tr><td>".form_input($data13)."</td><td>SBM Threshold</td></tr>";
echo "<tr><td>".form_dropdown('server_client_id', $clientlist,"$server_client_id")."</td><td>Associated Client</td></tr>";
echo "<tr><td>".form_dropdown('server_type', $type,"$server_type")."</td><td>Server Type</td></tr>";
echo "<tr><td>".form_dropdown('server_is_slave', $slave,"$server_is_slave")."</td><td>Replication Server</td></tr>";
echo "<tr><td>".form_dropdown('active', $active,"$active")."</td><td>Server is active</td></tr>";
echo "</table><table><tr><td colspan='2'>".form_reset('Reset','Reset').form_submit('submit', 'Edit host').form_close();
echo "&nbsp;<a href='$nroot/index.php/show/hostssss/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>