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
$this->load->view('header_graphs',$g);

$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path
$file = "includes/FusionCharts.php";
$this->load->file($file, true);
$width = 325;
$height = 180;
$attributes = array('name' => 'graphform');
$data00 = array(
		'name'        => 'sday',
		'id'          => 'sday',
		'value'       => "$sday",
		'maxlength'   => '10',
		'size'        => '20',
		'style'       => 'width:50%',
		);
$data01 = array(
		'name'        => 'eday',
		'id'          => 'eday',
		'value'       => "$eday",
		'maxlength'   => '10',
		'size'        => '20',
		'style'       => 'width:50%',
		);

//start main table
print '<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">';
print "<tr><td colspan='3'><div id='content'><h1>Date range: start $sday -> end $eday</h1></td></tr>";
// start table for date range chooser form
print '<tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder">';
print form_open('main/graphs',$attributes);
print form_hidden('server_list_id', "$server_list_id");
print "<tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr>";
print  "<tr><td class='td'>".form_input($data00)."
<a href=\"#\"onClick=\"cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;\" NAME=\"anchor1\" ID=\"anchor1\"><img src='$nroot/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td>";

print "<td class='td'>".form_input($data01)." 
<a href=\"#\"onClick=\"cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;\" NAME=\"anchor1\" ID=\"anchor1\"><img src='$nroot/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td>";

print "<td>".form_submit('submit', 'Submit')."</td></tr></table></td></tr><table>";

print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g1, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g2, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g3, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g4, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g5, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g6, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g7, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g8, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g9, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g10, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g11, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g12, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g13, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g14, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g15, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g16, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g17, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g18, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g19, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g20, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g21, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g22, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g23, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g24, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g25, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g26, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g27, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g28, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g29, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g30, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g31, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g32, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g33, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g34, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g35, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g36, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g37, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g38, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g39, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g40, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g41, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g42, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g43, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g44, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g45, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g46, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g47, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g48, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g49, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g50, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g51, "kontrollbase", $width, $height)."</td></tr>";
print "<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g52, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g53, "kontrollbase", $width, $height)."</td>";
print "<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g54, "kontrollbase", $width, $height)."</td></tr>";

print "</tr></table></body></html>";

?>