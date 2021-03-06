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

require_once("includes/dompdf/dompdf_config.inc.php");

$dompdf = new DOMPDF();
$dompdf->load_html($report);
$dompdf->render();
$dompdf->stream("Kontrollbase_$hostname-perfReport-$date.pdf");
?>