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
<td><a href='$nroot/index.php/add/user/' target='_self'><button><img src='$nroot/includes/images/add-16x16.png' width='12px' height='12px'>&nbsp; Add</button></a></td></table> 
<table class='tableborder'>
<tr>
<th>username</th>
<th>email</th>
<th>client</th>
<th>role</th>
<th>creation_time</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>";
$server_client_name = 0;
foreach($user_list as $key => $value) {
  print "<tr>";
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $id=$vValue; }
    if($vKey == 'system_user_name') { $system_user_name=$vValue; }
    if($vKey == 'system_user_pass') { $system_user_pass=$vValue; }
    if($vKey == 'system_user_email') { $system_user_email=$vValue; }
    if($vKey == 'server_client_id') { $server_client_id=$vValue; }
    if($vKey == 'role_tier') { $role_tier=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }  
  
  if($server_client_id == 0) { $server_client_name="system user"; }

  if($role_tier == 0) { $role_tier="admin";}
  elseif($role_tier == 1) { $role_tier="standard";}
  elseif($role_tier == 2) { $role_tier="client";}

  
  print "
<td class='td'>$system_user_name</td>
<td class='td'>$system_user_email</td>
<td class='td'>$server_client_name</td>
<td class='td'>$role_tier</td>
<td class='td'>$creation_time</td
<td class='td'><a href='$nroot/index.php/edit/user/$id' target='_self'><img src='$nroot/includes/images/edit.gif' width='14px' height='14px'></a></td>
<td class='td'><a href='$nroot/index.php/delete/user/$id' target='_self'><img src='$nroot/includes/images/delete.gif' width='12px' height='12px'></a></td>
  </tr>\n";
  $i++;
}
print "</table>";
//end of page
?>