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

print "<table>
<tr><td valign='top'>";
// start the left table
$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path
print "<div id='content'>
<table><tr><td><form><input type=\"button\" value=\"Refresh\" onclick=\"window.location.reload()\"></form></td>
<td><a href='$nroot/index.php/add/client/' target='_self'><button><img src='$nroot/includes/images/add-16x16.png' width='12px' height='12px'>&nbsp; Add</button></a></td></table>
<table class='tableborder'>
<tr>
<th>server_client_name</th>
<th>server_client_email</th>
<th>server_client_phone</th>
<th>creation_time</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
</tr>";
foreach($client_list as $key => $value) {
  print "<tr>";
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $id=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'server_client_email') { $server_client_email=$vValue; }
    if($vKey == 'server_client_phone') { $server_client_phone=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }  
  print "
<td class='td'>$server_client_name</td>
<td class='td'>$server_client_email</td>
<td class='td'>$server_client_phone</td>
<td class='td'>$creation_time</td>
<td class='td'><a href='$nroot/index.php/edit/client/$id' target='_self'><img src='$nroot/includes/images/edit.gif' width='14px' height='14px'></a></td>
<td class='td'><a href='$nroot/index.php/delete/client/$id' target='_self'><img src='$nroot/includes/images/delete.gif' width='12px' height='12px'></a></td>
  </tr>\n";
  $i++;
}
print "</table>";
//end of page
?>