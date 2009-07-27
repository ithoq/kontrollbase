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

$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

// start the right table
$file = "includes/FusionCharts.php";
$this->load->file($file, true);
$width = 240;
$height = 130;

$overview='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';
$overview.="<div id='content'><h1>Overall Environment Data</h1><h2>Data Statistics</h2><table class='tableborder'>";
$overview.="<tr><th>Data size</th><th>Index size</th><th>Total size</th></tr>";
$overview.="<tr>";
$overview.="<td class='td'>$size_data</td>";
$overview.="<td class='td'>$size_index</td>";
$overview.="<td class='td'>$size</td></tr></table></td><td>";
$overview.="<h2>Statistics Available Via  RSS</h2><table class='tableborder'><tr>
<th>Summary RSS</th><th>Summary RSS-XML</th><th>Alerts RSS</th><th>Alerts RSS-XML</th></tr>";
$overview.="<td class='td'><a href='$nroot/index.php/rss/summary/' target='_blank'><img src='$nroot/includes/images/rss-rectangle.jpg'></a></td>";
$overview.="<td class='td'><a href='$nroot/index.php/rss/summary_xml/' target='_blank'><img src='$nroot/includes/images/rss-rectangle.jpg'></a></td>";
$overview.="<td class='td'><a href='$nroot/index.php/rss/alerts/' target='_blank'><img src='$nroot/includes/images/rss-rectangle.jpg'></a></td>";
$overview.="<td class='td'><a href='$nroot/index.php/rss/alerts_xml/' target='_blank'><img src='$nroot/includes/images/rss-rectangle.jpg'></a></td>";
$overview.="</table></td></tr></table>";

if($client_id == 0) {
  $overview.= "<table id='container'><tr><td colspan='3'>&nbsp;</td></tr><tr><td colspan='3'><h1>Previous Week's Activity</h1></td></tr>";
  $overview.= "<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g1, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g2, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g3, "kontrollbase", $width, $height)."</td></tr>";
  $overview.= "<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g4, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g5, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g6, "kontrollbase", $width, $height)."</td></tr>";
  $overview.= "<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g7, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g8, "kontrollbase", $width, $height)."</td>";
  $overview.= "<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g9, "kontrollbase", $width, $height)."</td></tr></table></td></tr></table></body></html>";
}
else {
  $overview.="</body></html";
}

$overviewpage = "overview.php";

if($user_role_tier == 0) {$sess_tier = "Admin";}
elseif($user_role_tier == 1) {$sess_tier ="Standard";}
elseif($user_role_tier == 2) {$sess_tier ="Client";}

$sessiondata='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>
<table>
<tr><td>User: </td><td>'.$user_system_user_name.'</td></tr>
<tr><td>Client: </td><td>'.$user_server_client_name.'</td></tr>
<tr><td>Role: </td><td>'.$sess_tier.'</td></tr>
<tr><td>Logout: </td><td><a href="'.$nroot.'/index.php/login/logout/" target="_self"><img src="'.$nroot.'/includes/images/off.png" width="20px" height="20px"></a></td></tr>
</table>
</body>
</html>';
 $sessionpage = "session.php";


$g['data_size'] = $size_data;
$g['index_size'] = $size_index;
$g['total_size'] = $size;
$g['root'] = $root;
$g['server_list'] = $server_list;
$g['dir'] = $dir;
$g['overview'] = $overviewpage;
$g['sessionpage'] = $sessionpage;
$g['data'] = $data;
$g['alerts'] = $alerts;
$g['user_system_user_name'] = $user_system_user_name;
$g['user_server_client_name'] = $user_server_client_name;
$g['sess_tier'] = $sess_tier;

if ( ! write_file("$dir/includes/pages/$overviewpage", $overview)){echo 'Unable to write the overview file'; }
if ( ! write_file("$dir/includes/pages/$sessionpage", $sessiondata)){echo 'Unable to write the session file'; }
$g['summary'] = "summary";

if($client_id == 0) {
  $this->load->view('header',$g);
 }
 else {
   $this->load->view('header_client',$g);
 }
?>
<body>
    <!-- use class="x-hide-display" to prevent a brief flicker of the content -->
<div id="north" class="x-hide-display">
  <p>Hi. I'm the north panel.</p>
</div>

    <div id="west" class="x-hide-display">
        <p>Hi. I'm the west panel.</p>
    </div>
    <div id="center2" class="x-hide-display">
        <a id="hideit" href="#">Toggle the west region</a>
        <p>My closable attribute is set to false so you can't close me. The other center panels can be closed.</p>
</div>
    <div id="center1" class="x-hide-display">
        <p><b>Done reading me? Close me by clicking the X in the top right corner.</b></p>

    </div>
    <div id="props-panel" class="x-hide-display" style="width:200px;height:200px;overflow:hidden;">

    </div>
    <div id="south" class="x-hide-display">
        <p>south - generally for informational stuff, also could be for status bar</p>
    </div>
</body>
