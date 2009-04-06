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

$system_alerts_email = $settings[0]['system_alerts_email'];
$system_hostname = $settings[0]['system_hostname'];

//system table
print "<div id='content'>
<h2>System Information</h2>
<table class='tableborder'>
<th>Alert Email</th>
<th>System Hostname</th>
<tr>
<td class='td'>$system_alerts_email</td>
<td class='td'>$system_hostname</td>
</tr>
<tr><td><form><input type=\"button\" value=\"Refresh View\" onclick=\"window.location.reload()\"></form></td>
<td><a href='$nroot/index.php/system/edit/' target='_self'><button>Edit Settings</button></a></td></tr></table>";

print "</body></html>";
//end of page
?>