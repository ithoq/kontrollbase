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
$this->load->view('header_alerts',$g);

print "<div id='content'><h2>Ignored alert: $alert_name for host: $hostname</h2></div>";
//$returnData['success'] = true;
//$returnData['message'] = "Ignored alert: $alert_name for host: $hostname";
//echo json_encode($returnData);
?>