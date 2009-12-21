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

$report = "<a href='$nroot/index.php/main/report/$server_statistics_id/$server_list_id' target='_self'>click</a>";
$file = "includes/FusionCharts.php";
$this->load->file($file, true);
$width = 240;
$height = 130;

if($slave == '1') { $slv_state = "yes"; }
elseif($slave == '0') { $slv_state = "no"; }

$overview='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';
$overview.="<table>\n";
$overview.="<tr><td><div id='content'><h1>Overview Data for $hostname</h1></td></tr>\n";
$overview.="<tr><td>
<div id='content'><table cellpadding='0' cellspacing='1' border='0' style='width:100%' class='tableborder'>\n";

foreach($data as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'server_list_id') { $server_list_id=$v;}
    if($k == 'server_hostname') { $server_hostname=$v;}
    if($k == 'os_load_15') { $os_load_15=$v;}
    if($k == 'mem_perc') { $mem_perc=$v;}
    if($k == 'os_mem_total') { $mem_total=$v;}
    if($k == 'queries_per_second') { $queries_per_second=$v;}
    if($k == 'num_schema') { $num_schema=$v;}
    if($k == 'num_tables') { $num_tables=$v;}
    if($k == 'num_connections') { $num_connections=$v;}
    if($k == 'length_data') { $length_data=$v;}
    if($k == 'length_index') { $length_index=$v;}
    if($k == 'total_size') { $total_size=$v;}
    if($k == 'engine_count_innodb') { $engine_count_innodb=round($v,0);};
    if($k == 'engine_count_myisam') { $engine_count_myisam=round($v,0);};
    if($k == 'engine_myisam_size_total') { $engine_myisam_size_total=$v;}
    if($k == 'engine_innodb_size_total') { $engine_innodb_size_total=$v;};
  }
}

$zero_growth_30 = $growth_30[0]['0_day_size_mb'];
$thirty_growth_30 = $growth_30[0]['30_day_size_mb'];
$growth_30 = round((($zero_growth_30 / $thirty_growth_30) * 100),2)."%";

$overview.="<tr><th>Host Info</th><th>Data Info</th></tr>";
$overview.="<tr><td class='td'><strong>IP Address</strong>: $ip_address</td><td class='td'><strong>Data size</strong>: ".byte_format($total_size)."</td></tr>\n";
$overview.="<tr><td class='td'><strong>MySQL version</strong>: $version</td><td class='td'><strong>Index size</strong>: $size_index</td></tr>\n";
$overview.="<tr><td class='td'><strong>Default engine</strong>: $engine</td><td class='td'><strong>Total size</strong>: $size</td></tr>\n" ;
$overview.="<tr><td class='td'><strong>Uptime</strong>: $uptime days</td><td class='td'><strong>InnoDB Tables</strong>: $engine_count_innodb</td></tr>\n";
$overview.="<tr><td class='td'><strong>30 day % Growth </strong>: $growth_30</td><td class='td'>&nbsp;</td></tr>";
$overview.="<tr><td class='td'><strong>Avg Load</strong>: $os_load_15</td><td class='td'><strong>InnoDB Size</strong>: ".byte_format($engine_innodb_size_total)."</td></tr>";
$overview.="<tr><td class='td'><strong>Memory Used</strong>: $mem_perc %</td><td class='td'><strong>MyISAM Tables</strong>: $engine_count_myisam</td></tr>";
$overview.="<tr><td class='td'><strong>Memory Size</strong>: ".byte_format($mem_total)."</td><td class='td'><strong>MyISAM Size</strong>: ".byte_format($engine_myisam_size_total)."</td></tr>";
$overview.="<tr><td class='td'><strong>Queries/sec</strong>: $queries_per_second</td><td class='td'><strong>Collection Date</strong>: $date</td></tr>";
$overview.="<tr><td class='td'><strong>Connections</strong>: $num_connections</td><td class='td'><strong>Polling time</strong>: $collection_time_elapse</td></tr>";
$overview.="</div></table></td></tr>";
//$overview.=renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g32, "kontrollbase", $width, $height)."<br></div></td></tr></table>";


if($slave == '1') {
  if($slave_sql == '0') { $slave_sql = "YES"; } else { $slave_sql = "NO"; }
  if($slave_io == '0') { $slave_io = "YES"; }else {$slave_io = "NO"; }

  $slavepagedata='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';
  $slavepagedata.="<table><div id='content'>";
  $slavepagedata.="<tr><td><h1>Replication Information</h1></td></tr>";
  $slavepagedata.="<tr><td>Slave SQL_Thread: $slave_sql</td></tr>";
  $slavepagedata.="<tr><td>Slave I/O_Thread: $slave_io</td></tr>";
  $slavepagedata.="<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g37, "kontrollbase", $width, $height)."</td></tr>";
  $slavepagedata.="</table></body></html>";
 }
 else {
   $slavepagedata='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';
   $slavepagedata.="<div id='content'><table>";
   $slavepagedata.="<tr><td><h1>This server is not setup as a slave.</h1></td></tr></div>";
   $slavepagedata.="</table></body></html>";
 }
$slavepage = "host-slave-$server_list_id.php";

$overview.="<tr><td><table>";
$overview.="<tr><td colspan='4'><div id='content'><h1>Previous Week's Activity</h1></td></tr>";
$overview.="<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g1, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g2, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g5, "kontrollbase", $width, $height)."</td></tr>";
$overview.="<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g7, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g12, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g15, "kontrollbase", $width, $height)."</td></tr>";
$overview.="<tr><td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g16, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g53, "kontrollbase", $width, $height)."</td>";
$overview.="<td>".renderChartHTML("$nroot/includes/FCF_Line.swf", "", $g54, "kontrollbase", $width, $height)."</td></tr>";
$overview.="</td></tr></div></table></td></tr></div></table></td></tr></body></html>";
$overviewpage = "host-overview-$server_list_id.php";

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

$attributes = array('name' => 'graphform');
$data00 = array(
		'name'        => 'sday',
		'id'          => 'sday',
		'value'       => "$sday",
		'maxlength'   => '10',
		'size'        => '15',
		'style'       => 'width:50%',
		);
$data01 = array(
		'name'        => 'eday',
		'id'          => 'eday',
		'value'       => "$eday",
		'maxlength'   => '10',
		'size'        => '15',
		'style'       => 'width:50%',
		);


$graphs='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">                  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />

<script type="text/javascript" src="'.$nroot.'/includes/browser_detect.js"></script>
<script language="JavaScript" SRC="'.$nroot.'/includes/CalendarPopup.js"></script>
<script language="JavaScript">
 var cal = new CalendarPopup();</script>
<script language="JavaScript" ID="jscal1x">
 var cal1x = new CalendarPopup("graphform");</script>
<script language="JavaScript">document.write(getCalendarStyles());</script>

</head>
<body>';
$graphs.='<table cellpadding="0" cellspacing="1" border="0" style="width:100%" class="tableborder">';
$graphs.="<tr><td colspan='3'><div id='content'><h1>Date range: start $sday -> end $eday</h1></td></tr>";
// start table for date range chooser form
$graphs.='<tr><td colspan="3">

<div id="content"><table cellpadding="0" cellspacing="1" border="0" class="tableborder">';
$graphs.=form_open('main/graphs',$attributes);
$graphs.=form_hidden('server_list_id', "$server_list_id");
$graphs.="<tr><th>Start date</th><th>End Date</th><th>&nbsp;</th></tr>";
$graphs.= "<tr><td class='td'>".form_input($data00)."
<a href=\"#\"onClick=\"cal.select(document.forms['graphform'].sday,'anchor1','yyyy-MM-dd'); return false;\" NAME=\"anchor1\" ID=\"anchor1\"><img src='$nroot/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td>";

$graphs.="<td class='td'>".form_input($data01)." 
<a href=\"#\"onClick=\"cal.select(document.forms['graphform'].eday,'anchor1','yyyy-MM-dd'); return false;\" NAME=\"anchor1\" ID=\"anchor1\"><img src='$nroot/includes/images/icon_calendar.gif' height='20' width='20' border='0'></a></td>";

$graphs.="<td>".form_submit('submit', 'Submit')."</td></tr></table></td></tr><table>";

$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g1, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g2, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g3, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g4, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g5, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g6, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g7, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g8, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g9, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g10, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g11, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g12, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g13, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g14, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g15, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g16, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g17, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g18, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g19, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g20, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g21, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g22, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g23, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g24, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g25, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g26, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g27, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g28, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g29, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g30, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g31, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g32, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g33, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g34, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g35, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g36, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g37, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g38, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g39, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g40, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g41, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g42, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g43, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g44, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g45, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g46, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g47, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g48, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g49, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g50, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g51, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="<tr><td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g52, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g53, "kontrollbase", $width, $height)."</td>";
$graphs.="<td>".renderChartHTML("$root/includes/FCF_Line.swf", "", $g54, "kontrollbase", $width, $height)."</td></tr>";
$graphs.="</tr></div></table></body></html>";

$graphspage = "host-graphs-$server_list_id.php";

$g['data_size'] = $size_data;
$g['index_size'] = $size_index;
$g['total_size'] = $size;
$g['root'] = $root;
$g['server_list'] = $server_list;
$g['dir'] = $dir;
$g['data'] = $data;
$g['alerts'] = $alerts;
$g['overviewpage'] = $overviewpage;
$g['slavepage'] = $slavepage;
$g['graphspage'] = $graphspage;
$g['server_statistics_id'] = $server_statistics_id;
$g['server_list_id'] = $server_list_id;
$g['sessionpage'] = $sessionpage;
$g['sess_tier'] = $sess_tier;

if ( ! write_file("$dir/includes/pages/$overviewpage", $overview)){echo 'Unable to write the overview file'; }
if ( ! write_file("$dir/includes/pages/$slavepage", $slavepagedata)){echo 'Unable to write the slave file'; }
if ( ! write_file("$dir/includes/graphs/$graphspage", $graphs)){echo 'Unable to write the graph file'; }
if ( ! write_file("$dir/includes/pages/$sessionpage", $sessiondata)){echo 'Unable to write the session file'; }

$this->load->view('header_host',$g);
?>
<body>
</body>
</html>
