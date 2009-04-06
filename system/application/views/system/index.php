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
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

//system table
$stats_data=byte_format($stat_size[0]["DATA_LENGTH"]);
$stats_index=byte_format($stat_size[0]["INDEX_LENGTH"]);
$stats_total = byte_format(($stat_size[0]["DATA_LENGTH"]) + ($stat_size[0]["INDEX_LENGTH"]));
$report_data=byte_format($report_size[0]["DATA_LENGTH"]);
$report_index=byte_format($report_size[0]["INDEX_LENGTH"]);
$report_total= byte_format(($report_size[0]["DATA_LENGTH"]) + ($report_size[0]["INDEX_LENGTH"]));

print "<div id='content'>
<h2>System Information</h2>
<form><input type=\"button\" value=\"Refresh View\" onclick=\"window.location.reload()\"></form><br>
<table class='tableborder'>
<th>System Users</th>
<th>Servers On</th>
<th>Servers Off</th>
<th>Clients</th>
<tr>
<td class='td'>$users</td>
<td class='td'>$active</td>
<td class='td'>$inactive</td>
<td class='td'>$clients</td>
</tr>
</table>
<br>

<h2>Kontrollbase Statistics Table Info</h2>
<table class='tableborder'>
<tr>
<th>Rows</th>
<th>Data Space</th>
<th>Index Space</th>
<th>Total Space</th>
<th>&nbsp;</th>
</tr>
<td class='td'>$stats</td>
<td class='td'>$stats_data</td>
<td class='td'>$stats_index</td>
<td class='td'>$stats_total</td>
<td colspan='2'><a href='$nroot/index.php/system/data_prune/1' target='_self'><button>Prune Statistics Table</button></a></td></tr>
</table>
<br>

<h2>Kontrollbase Reporting Table Info</h2>
<table class='tableborder'>
<tr>
<th>Rows</th>
<th>Data</th>
<th>Index</th>
<th>Total Space</th>
<th>&nbsp;</th>
</tr>
<td class='td'>$reports</td>
<td class='td'>$report_data</td>
<td class='td'>$report_index</td>
<td class='td'>$report_total</td>
<td colspan='2'><a href='$nroot/index.php/system/data_prune/0' target='_self'><button>Prune Reporting Table</button></a></td></tr>
</table>
<br>
";

print "</table>\n";
print "</table></body></html>";
//end of page
?>