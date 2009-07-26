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

// start the left table
$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path
print "<div id='content'>
<table><tr><td><form><input type=\"button\" value=\"Refresh\" onclick=\"window.location.reload()\"></form></td>
<td><a href='$nroot/index.php/add/host/' target='_self'><button><img src='$nroot/includes/images/add-16x16.png' width='12px' height='12px'>&nbsp; Add</button></a></td></table> 
<table class='tableborder'>
<tr>
<th>active</th>
<th>client</th>
<th>hostname</th>
<th>ip_address</th>
<th>type</th>
<th>slave</th>
<th>threshold_QPS</th>
<th>threshold_SBM</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>";
foreach($server_list as $key => $value) {
  print "<tr>";
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $id=$vValue; }
    if($vKey == 'active') { $active=$vValue; }
    if($vKey == 'server_client_id') { $server_client_id=$vValue; }
    if($vKey == 'server_type') { $server_type=$vValue; }
    if($vKey == 'server_is_slave') { $server_is_slave=$vValue; }
    if($vKey == 'server_ipaddress') { $server_ipaddress=$vValue; }
    if($vKey == 'server_hostname') { $server_hostname=$vValue; }
    if($vKey == 'server_ssh_user') { $server_ssh_user=$vValue; }
    if($vKey == 'server_mysql_port') { $server_mysql_port=$vValue; }
    if($vKey == 'server_mysql_socket') { $server_mysql_socket=$vValue; }
    if($vKey == 'server_mysql_db') { $server_mysql_db=$vValue; }
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

  if($server_type == 0) { $server_type="prod";}
  elseif($server_type == 1) { $server_type="staging";}
  elseif($server_type == 2) { $server_type="dev";}
  else { $server_type="NULL"; }

  if($server_is_slave == 0) { $server_is_slave="no";}
  elseif($server_is_slave == 1) { $server_is_slave="yes";}
  else { $server_is_slave="NULL";}

  if($active == 0) { $active="<img src='$nroot/includes/images/Record-Disabled-24x24.png' width='18px' height='18'px'>";} 
  elseif($active == 1) { $active="<img src='$nroot/includes/images/Record-Normal-Green-24x24.png' width='18px' height='18'px'>";}
  elseif($active == 2) { $active="<img src='$nroot/includes/images/Record-Problem-Red-24x24.png' width='18px' height='18'px'>";}
  else { $active="NULL";}

  print "
<td class='td'>$active</td>
<td class='td'>$server_client_name</td>
<td class='td'>$server_hostname</td>
<td class='td'>$server_ipaddress</td> 
<td class='td'>$server_type</td>
<td class='td'>$server_is_slave</td>
<td class='td'>$threshold_queries_per_second</td>
<td class='td'>$threshold_seconds_behind_master</td>
<td class='td'><a href='$nroot/index.php/edit/host/$id' target='_self'><img src='$nroot/includes/images/edit.gif' width='14px' height='14px'></a></td>
<td class='td'><a href='$nroot/index.php/delete/host/$id' target='_self'><img src='$nroot/includes/images/delete.gif' width='12px' height='12px'></a></td>
  </tr>\n";
  $i++;
}
print "</table>";
//end of page
?>
