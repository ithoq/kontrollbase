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
$this->load->view('header_manage-users',$g);

$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path
print "<table>
<tr><td>";

if($state == 0) {
  print "User $username has been deleted.";
 }
elseif($state == 1) {
  print "User $username has not been deleted.";
}
 else {
   print "Some error occurred. Please contact support.";
 } 

print "</table>";
//end of page
?>