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
<tr><td><h2>Add Host</h2></td></tr>\n";
foreach ($clients as $a) {
  $clientlist[$a['id']]=$a['server_client_name'];
}

$slave = array('0' => 'No','1' => 'Yes');
$type = array('0' => 'Production','1' => 'Staging', '2' => 'Development');

$data00 = array(
              'name'        => 'server_ipaddress',
              'id'          => 'server_ipaddress',
              'value'       => 'server_ipaddress',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data01 = array(
              'name'        => 'server_hostname',
              'id'          => 'server_hostname',
              'value'       => 'server_hostname',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data02 = array(
              'name'        => 'server_ssh_user',
              'id'          => 'server_ssh_user',
              'value'       => 'kontrollbase',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data03 = array(
              'name'        => 'server_mysql_port',
              'id'          => 'server_mysql_port',
              'value'       => '3306',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data04 = array(
              'name'        => 'server_mysql_db',
              'id'          => 'server_mysql_db',
              'value'       => 'mysql',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data05 = array(
		'name'        => 'server_mysql_host',
		'id'          => 'server_mysql_host',
		'value'       => '127.0.0.1',
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data06 = array(
              'name'        => 'server_mysql_user',
              'id'          => 'server_mysql_user',
              'value'       => 'kontrollbase',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data07 = array(
              'name'        => 'server_mysql_pass',
              'id'          => 'server_mysql_pass',
              'value'       => 'k0nTr011b453',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data08 = array(
              'name'        => 'server_snmp_local_address',
              'id'          => 'server_snmp_local_address',
              'value'       => '127.0.0.1',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data09 = array(
              'name'        => 'server_snmp_port',
              'id'          => 'server_snmp_port',
              'value'       => '161',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data10 = array(
              'name'        => 'server_snmp_rocommunity',
              'id'          => 'server_snmp_rocommunity',
              'value'       => 'public',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data11 = array(
              'name'        => 'server_snmp_version',
              'id'          => 'server_snmp_version',
              'value'       => '1',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data12 = array(
              'name'        => 'threshold_queries_per_second',
              'id'          => 'threshold_queries_per_second',
              'value'       => '1000',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data13 = array(
              'name'        => 'threshold_seconds_behind_master',
              'id'          => 'threshold_seconds_behind_master',
              'value'       => '3600',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data14 = array(
              'name'        => 'server_mysql_socket',
              'id'          => 'server_mysql_socket',
              'value'       => '/var/run/mysql.sock',
              'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );

echo form_open('add/subhost');
echo "<tr><td>".form_input($data00)."</td><td>IP address</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>Hostname</td></tr>";
echo "<tr><td>".form_input($data02)."</td><td>SSH Username</td></tr>";
echo "<tr><td>".form_input($data03)."</td><td>MySQL Port</td></tr>";
echo "<tr><td>".form_input($data14)."</td><td>MySQL Socket</td></tr>";
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
echo "<tr><td>".form_dropdown('server_client_id', $clientlist)."</td><td>Associated Client</td></tr>";
echo "<tr><td>".form_dropdown('server_type', $type)."</td><td>Server Type</td></tr>";
echo "<tr><td>".form_dropdown('server_is_slave', $slave)."</td><td>Replication Server</td></tr>";
echo "</table><table><tr><td>".form_submit('submit','Add host')."</td><td>".form_reset('Reset', 'Reset').form_close()."</td>";
echo "<td><a href='$nroot/index.php/show/hosts/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>
