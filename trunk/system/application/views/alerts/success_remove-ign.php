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
$this->load->view('header_alerts-ign',$g);

print "<div id='content'><h2>Removed alert recognition: $alert_name for host: $hostname</h2></div>";
//$returnData['success'] = true;
//$returnData['message'] = "Removed alert recognition: $alert_name for host: $hostname";
//echo json_encode($returnData);
?>