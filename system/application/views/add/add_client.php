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
<tr><td><h2>Add Client</h2></td></tr>\n";
$data00 = array(
		'name'        => 'server_client_name',
		'id'          => 'server_client_name',
		'value'       => 'client name',
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data01 = array(
		'name'        => 'server_client_email',
		'id'          => 'server_client_email',
		'value'       => 'email@email.com',
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);
$data02 = array(
		'name'        => 'server_client_phone',
		'id'          => 'server_client_phone',
		'value'       => '000-000-0000',
		'maxlength'   => '100',
		'size'        => '50',
		'style'       => 'width:50%',
		);

echo form_open('add/subclient');
echo "<tr><td>".form_input($data00)."</td><td>Client Name</td></tr>";
echo "<tr><td>".form_input($data01)."</td><td>Client Email</td></tr>";
echo "<tr><td>".form_input($data02)."</td><td>Client Phone</td></tr>";
echo "</table><table><tr><td>".form_submit('submit','Add client')."</td><td>".form_reset('Reset', 'Reset').form_close()."</td>";
echo "<td><a href='$nroot/index.php/show/clients/' target='_self'><button>Cancel</button></a></td></tr>";
print "</table>";

//end of page
?>