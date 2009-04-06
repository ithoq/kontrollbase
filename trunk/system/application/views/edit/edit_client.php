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
foreach($client as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $server_client_id=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'server_client_email') { $server_client_email=$vValue; }
    if($vKey == 'server_client_phone') { $server_client_phone=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }
}

print "<table>
<tr><td><h2>Edit Client</h2></td></tr>\n";
$data00 = array(
		'name'        => 'server_client_name',
		'id'          => 'server_client_name',
		'value'       => "$server_client_name",
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data01 = array(
		'name'        => 'server_client_email',
		'id'          => 'server_client_email',
		'value'       => "$server_client_email",
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data02 = array(
		'name'        => 'server_client_phone',
		'id'          => 'server_client_phone',
		'value'       => "$server_client_phone",
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);

echo form_open('edit/subclient');
echo form_hidden('server_client_id', "$server_client_id");
echo "<tr><td>".form_input($data00)."</td><td>Client Name</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>Client Email</td></tr>";
echo "<tr><td>".form_input($data02)."</td><td>Client Phone</td></tr>";
echo "</table><table><tr><td colspan='2'>".form_reset('Reset','Reset').form_submit('submit', 'Edit client').form_close();
echo "&nbsp;<a href='$nroot/index.php/show/clients/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>