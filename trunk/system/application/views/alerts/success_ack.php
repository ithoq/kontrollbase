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
$nroot = substr_replace($root,"",-1);
$this->load->view('header_alerts',$g);

print "<div id='content'><h2><h4>Acknowledged alert: $alert_name for host: $hostname</h2></div>";

//$returnData['success'] = true;
//$returnData['message'] = "Acknowledged alert: $alert_name for host: $hostname";
//echo json_encode($returnData);

//die();

?>