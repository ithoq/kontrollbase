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

$system_alerts_email = $settings[0]['system_alerts_email'];
$system_hostname = $settings[0]['system_hostname'];

print "<table>
<tr><td colspan='3'><h2>Edit System Settings</h2></td></tr>\n";
$data00 = array(
              'name'        => 'system_alerts_email',
              'id'          => 'system_alerts_email',
              'value'       => "$system_alerts_email",
	      'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data01 = array(
              'name'        => 'system_hostname',
              'id'          => 'system_hostname',
              'value'       => "$system_hostname",
	      'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );

echo form_open('system/subedit');
echo "<tr><td>".form_input($data00)."</td><td>Alerts Email</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>System Hostname</td></tr>";
echo "</table><table><tr><td colspan='2'>".form_reset('Reset','Reset').form_submit('submit', 'Edit settings').form_close();
echo "&nbsp;<a href='$nroot/index.php/system/settings/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>