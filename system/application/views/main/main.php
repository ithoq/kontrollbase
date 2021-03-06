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

$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

// start the right table
$file = "includes/FusionCharts.php";
$this->load->file($file, true);
$width = 325;
$height = 180;

$overview='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />

<style type="text/css"> 
    #container {
        padding:10px;
    }
    #container .x-panel {
        margin:10px;
    }
    #container .x-panel-ml {
        padding-left:1px;
    }
    #container .x-panel-mr {
        padding-right:1px;
    }
    #container .x-panel-bl {
        padding-left:2px;
    }
 
    #container .x-panel-br {
        padding-right:2px;
    }
    #container .x-panel-body {
 
    }
    #container .x-panel-mc {
        padding-top:0;
    }
    #container .x-panel-bc .x-panel-footer {
        padding-bottom:2px;
    }
    #container .x-panel-nofooter .x-panel-bc {
        height:2px;
    }
    #container .x-toolbar {
        border:1px solid #99BBE8;
        border-width: 0 0 1px 0;
    }
    .chart {
        background-image: url(chart.gif) !important;
    }
    </style>

</head>
<body>';

if($client_id == 0) {
  $max_os_mem_used = round($overview_stats[0]['max_os_mem_used'],2)." GB";
  $min_os_mem_used = round($overview_stats[0]['min_os_mem_used'],2)." GB";
  $avg_os_mem_used = round($overview_stats[0]['avg_os_mem_used'],2)." GB";
  $stdev_os_mem_used = round($overview_stats[0]['stdev_os_mem_used'],2)." GB";
  $max_size = round($overview_stats[0]['max_size'],2)." GB";
  $min_size = round($overview_stats[0]['min_size'],2)." GB";
  $avg_size = round($overview_stats[0]['avg_size'],2)." GB";
  $stdev_size = round($overview_stats[0]['stdev_size'],2)." GB";
  $max_connections = round($overview_stats[0]['max_connections'],2);
  $min_connections = round($overview_stats[0]['min_connections'],2);
  $avg_connections = round($overview_stats[0]['avg_connections'],2);
  $stdev_connections = round($overview_stats[0]['stdev_connections'],2);
  $max_qps = round($overview_stats[0]['max_qps'],2);
  $min_qps = round($overview_stats[0]['min_qps'],2);
  $avg_qps = round($overview_stats[0]['avg_qps'],2);
  $stdev_qps = round($overview_stats[0]['stdev_qps'],2);
  $ov_Creation_time = $overview_stats[0]['Creation_time'];

  $overview.= "<table id='content'><tr><td colspan='3'><h1>Environment - Weekly Stats</h1></td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>max_os_mem_used</td><td>$max_os_mem_used</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>min_os_mem_used</td><td>$min_os_mem_used</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>avg_os_mem_used</td><td>$avg_os_mem_used</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>stdev_os_mem_used</td><td>$stdev_os_mem_used</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>max_size</td><td>$max_size</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>min_size</td><td>$min_size</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>avg_size</td><td>$avg_size</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>stdev_size</td><td>$stdev_size</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>max_connections</td><td>$max_connections</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>min_connections</td><td>$min_connections</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>avg_connections</td><td>$avg_connections</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>stdev_connections</td><td>$stdev_connections</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>max_qps</td><td>$max_qps</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>min_qps</td><td>$min_qps</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>avg_qps</td><td>$avg_qps</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>stdev_qps</td><td>$stdev_qps</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>Calculation date</td><td>$ov_Creation_time</td><td>&nbsp;</td></tr>";
  $overview.= "<tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>";

  $overview.= "<tr><td colspan='3'><h1>Environment - Weekly Activity</h1></td></tr>";
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
  $overview.="<div id='content'><h1>Overall Environment Data</h1><h2>Data Statistics</h2><table class='tableborder'>";
  $overview.="<tr><th>Data size</th><th>Index size</th><th>Total size</th></tr>";
  $overview.="<tr>";
  $overview.="<td class='td'>$size_data</td>";
  $overview.="<td class='td'>$size_index</td>";
  $overview.="<td class='td'>$size</td></tr></table></td>";
  $overview.="</table></td></tr></table></div></body></html";
}

$overviewpage = "overview.php";

if($user_role_tier == 0) {$sess_tier = "Admin";}
elseif($user_role_tier == 1) {$sess_tier ="Standard";}
elseif($user_role_tier == 2) {$sess_tier ="Client";}

$g['data_size'] = $size_data;
$g['index_size'] = $size_index;
$g['total_size'] = $size;
$g['root'] = $root;
$g['server_list'] = $server_list;
$g['dir'] = $dir;
$g['overview'] = $overviewpage;
$g['data'] = $data;
//$g['alerts'] = $alerts; //getting rid of bottom alert panel since we already have alerts at top and we want news&announcements at bottom
$g['user_system_user_name'] = $user_system_user_name;
$g['user_server_client_name'] = $user_server_client_name;
$g['sess_tier'] = $sess_tier;
$g['news'] = $news;

if ( ! write_file("$dir/includes/pages/$overviewpage", $overview)){echo 'Unable to write the overview file'; }
$g['summary'] = "summary";

if($client_id == 0) {
  if($user_role_tier == 0) {
    $this->load->view('header_admin',$g);
  }
  elseif($user_role_tier == 1) {
    $this->load->view('header',$g);
  }
 }
 else {
   $this->load->view('header_client',$g);
 }
?>
<body>
</body>
</html>
