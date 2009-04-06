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
$nroot = substr_replace($root,"",-1);

//html to pdf 
$html = "";
require_once("includes/dompdf/dompdf_config.inc.php");
//end

print "<table><tr><td valign='top'><div id='content'>\n";
//$html .= "<table><tr><td valign='top'>\n";
$xml = new SimpleXMLElement($data);
$i=0;
$date='';
foreach($xml->report as $report) {
  foreach($report->attributes() as $key => $value) {
    $date=$value;
  }  
  foreach($report->server->attributes() as $key => $value) {
    $hostname = $value;
    print "<h1>Kontrollbase Performance and Security Report for $hostname - report date: $date</h1>\n";
    $html.= "<h1>Kontrollbase Performance and Security Report for $hostname - report date: $date</h1>";
  }
  $solnum=1;
  $solset='';
  foreach($report->server as $server) {
    foreach($server->alert as $alert) {
      foreach($alert->name as $name) {
	$category = $alert->category;
        $description = $alert->description;
	$links = $alert->links;
	$solution = $alert->solution;
	if($solution) {
	  $solset.="$solnum. ".$solution;
	  print "<h2>Check for: $name</h2>\n";
	  $html .= "<h2>Check for: $name</h2>";
	  
	  print "<em>Category: $category</em>\n";
	  $html .= "<em>Category: $category</em>";
	  
	  if($alert->detail) {
	    print "<code>";
	    foreach($alert->detail as $detail) {
	      print "$detail<br>\n";
	      $html .= "$detail<br>";
	    }
	    print "</code>";
	  }
	  
	  if($links) {
          print "<br><strong>For more information</strong>:<br>
                <a href='$links' target='_blank'>$links</a><br>\n";
	  $html .= "<br>For more information:<br><a href='$links' target='_blank'>$links</a><br>";
	  }
	  if($solution) {
	    print "<br><strong>Solution</strong>:<br>
                 $solution<br>\n";
	    $html .= "<br>Solution:<br>$solution<br>";	    
	  }
	  $solset.="<br>";
	  $solnum++;
	}
      }
    }
    print "<br><br><h1>Summation of Solutions</h1>";
    print "$solset<br>";
    $html.= "<br><br><h1>Summation of Solutions</h1>";
    $html.= "$solset<br>";
  }
  $i++;
}

echo form_open('main/report_pdf');
echo form_hidden('report', "$html");
echo form_hidden('hostname', "$hostname");
echo "\n";
echo form_hidden('date', "$date");
echo "\n";
print '<h1>Download Report as PDF</h1>
<INPUT TYPE="IMAGE" SRC="'.$nroot.'/includes/images/icon_application_pdf_large.png" ALT="Download PDF Report"></div></td></tr></table></body></html>';
?>