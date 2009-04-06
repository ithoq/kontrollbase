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
$clientlist=array("0"=> "Kontrollbase Account");
foreach ($clients as $a) {
  $clientlist[$a['id']]=$a['server_client_name'];
}

$roletier = array('0' => 'Admin','1' => 'Standard', '2' => 'Client');

print "<table>
<tr><td><h2>Add User</h2></td></tr>\n";
$data00 = array(
              'name'        => 'system_user_name',
              'id'          => 'system_user_name',
              'value'       => 'system_user_name',
	      'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data01 = array(
              'name'        => 'system_user_pass',
              'id'          => 'system_user_pass',
              'value'       => 'system_user_pass',
	      'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );
$data02 = array(
              'name'        => 'system_user_email',
              'id'          => 'system_user_email',
              'value'       => 'system_user_email',
	      'maxlength'   => '100',
              'size'        => '50',
              'style'       => 'width:50%',
	      );

echo form_open('add/subuser');
echo "<tr><td>".form_input($data00)."</td><td>User Name</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>User Password</td></tr>";
echo "<tr><td>".form_input($data02)."</td><td>User Email</td></tr>";
echo "<tr><td>".form_dropdown('server_client_id', $clientlist,'0')."</td><td>Associated Client</td></tr>";
echo "<tr><td>".form_dropdown('role_tier', $roletier,'1')."</td><td>Role Tier</td></tr>";
echo "</table><table><tr><td>".form_submit('submit','Add user')."</td><td>".form_reset('Reset', 'Reset').form_close()."</td>";
echo "<td><a href='$nroot/index.php/show/users/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>