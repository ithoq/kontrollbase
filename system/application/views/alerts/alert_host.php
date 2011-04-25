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

$g['root'] = $root;
$this->load->view('header_nojs',$g);

$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

print "<div id='content'><table class='tableborder'>
<tr><td colspan='6'><h2>Alerts for $hostname</h2></td></tr>
<tr>
<th>id</th>
<th>server</th>
<th>level</th>
<th>alert description</th>
<th>&nbsp;</th>
<th>&nbsp;</th> 
</tr>";
$i=0;
foreach($alerts as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'alerts_def_id') { $alerts_def_id=$vValue; }
    if($vKey == 'alert_name') { $alert_name=$vValue; }
    if($vKey == 'alerts_current_id') { $alerts_current_id=$vValue; }
    if($vKey == 'alert_desc') { $alert_desc=$vValue; }
    if($vKey == 'alert_links') { $alert_links=$vValue; }
    if($vKey == 'alert_solution') { $alert_solution=$vValue; }
    if($vKey == 'server_list_id') { $server_list_id=$vValue; }
    if($vKey == 'server_hostname') { $server_hostname=$vValue; }
    if($vKey == 'alert_level') { $alert_level=$vValue; }    
  }
  
  if($alert_level == 0) { $alert_level = 'crit';}
  elseif($alert_level == 1) { $alert_level= 'warn';}
  elseif($alert_level == 2) { $alert_level= 'info';}
  
  // here we need hover pop up thing for the $alerts_current_id column: we need to display $alert_desc, $alert_links, $alert_solution
  print "<tr>
<td class='td'><a href='$nroot/index.php/alerts/host/$server_list_id' target='_self'>$alerts_current_id</a></td>
<td class='td'>$server_hostname</td>
<td class='td'>$alert_level</td>
<td class='td'>$alert_name</td>
<td class='td'><a href='$nroot/index.php/alerts/ack/$alerts_current_id/$server_list_id/$alerts_def_id' target='_self'>
<img src='$nroot/includes/images/Pause-Normal-Red-16x16.png' width='12px' height='12px'></a></td>
<td class='td'><a href='$nroot/index.php/alerts/ign/$alerts_current_id/$server_list_id/$alerts_def_id' target='_self'>
<img src='$nroot/includes/images/Volume-Normal-Red-16x16.png' width='16px' height='16px'></a></td>
</tr>
";
  $i++;
}
print "</td></tr></table></div></body></html>";
//end of page
?>