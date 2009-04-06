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
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

print '<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide.css" />
<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/extjs/resources/css/ext-all.css" />

<script type="text/javascript" src="'.$nroot.'/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="'.$nroot.'/includes/extjs/ext-all-debug.js"></script>
<script type="text/javascript" src="'.$nroot.'/includes/extjs/ext-all.js"></script>

<script type="text/javascript">
    Ext.onReady(function(){    
	Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
';
 
print "    var myData = [";

$queries_per_second_c=0;
$num_schema_c=0;
$num_tables_c=0;
$length_data_c=0;
$length_index_c=0;
$total_size_c=0;
$num_connections_c=0;
$engine_count_innodb_c=0;
$engine_count_myisam_c=0;
$engine_myisam_size_total_c=0;
$engine_innodb_size_total_c=0;

$z=0;
$c=count($data);
foreach($data as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'server_list_id') { $server_list_id=$v;}
    if($k == 'server_hostname') { $server_hostname=$v;}
    if($k == 'os_load_15') { $os_load_15=$v;}
    if($k == 'mem_perc') { $mem_perc=$v;}
    if($k == 'queries_per_second') { $queries_per_second=$v; $queries_per_second_c += $queries_per_second;}
    if($k == 'num_schema') { $num_schema=$v; $num_schema_c += $num_schema;}
    if($k == 'num_tables') { $num_tables=$v; $num_tables_c += $num_tables;}
    if($k == 'num_connections') { $num_connections=$v; $num_connections_c += $num_connections;}
    if($k == 'length_data') { $length_data=$v; $length_data_c += $length_data;}
    if($k == 'length_index') { $length_index=$v; $length_index_c += $length_index;}
    if($k == 'total_size') { $total_size=$v; $total_size_c += $total_size;}
    if($k == 'engine_count_innodb') { $engine_count_innodb=round($v,0); $engine_count_innodb_c += $engine_count_innodb;}
    if($k == 'engine_count_myisam') { $engine_count_myisam=round($v,0); $engine_count_myisam_c += $engine_count_myisam;}
    if($k == 'engine_myisam_size_total') { $engine_myisam_size_total=$v; $engine_myisam_size_total_c += $engine_myisam_size_total;}
    if($k == 'engine_innodb_size_total') { $engine_innodb_size_total=$v; $engine_innodb_size_total_c += $engine_innodb_size_total;}
  }
    print "
  ['$server_hostname',
$os_load_15,
$mem_perc,
$queries_per_second,
$num_schema,
$num_tables,
$num_connections,
$total_size,
$engine_count_innodb,
$engine_count_myisam,
$engine_myisam_size_total,
$engine_innodb_size_total],";
}

print "
['Total Values',
 ,
 ,
 $queries_per_second_c,
 $num_schema_c,
 $num_tables_c,
 $num_connections_c,
 $total_size_c,
 $engine_count_innodb_c,
 $engine_count_myisam_c,
 $engine_myisam_size_total_c,
 $engine_innodb_size_total_c]
];";

print "
    function change(val){
      if(val > 0){
	return '<span style=\"color:green;\">' + val + '</span>';
      }else if(val < 0){
	return '<span style=\"color:red;\">' + val + '</span>';
      }
      return val;
    }

    function pctChange(val){
      if(val > 0){
	return '<span style=\"color:green;\">' + val + '%</span>';
      }else if(val < 0){
	return '<span style=\"color:red;\">' + val + '%</span>';
      }
      return val;
    }

    var store = new Ext.data.SimpleStore({
      fields: [";

print "{name: 'hostname'},
{name: 'load', type: 'float'},
{name: 'mem_used', type: 'float'},
{name: 'QPS', type: 'float'},
{name: 'schema', type: 'float'},
{name: 'tables', type: 'float'},
{name: 'conn', type: 'float'},
{name: 'total_size', type: 'float'},
{name: 'num_innodb', type: 'float'},
{name: 'num_myisam', type: 'float'},
{name: 'myisam_total', type: 'float'},
{name: 'innodb_total', type: 'float'}
]";

print "
	  });
    store.loadData(myData);

    // create the Grid
    var grid = new Ext.grid.GridPanel({
      store: store,
	  columns: [";

print "
  {id:'hostname',header: \"server hostname\", width: 80, sortable: true, renderer: 'lowercase', dataIndex: 'hostname'},
{header: \"load\", width: 45, sortable: true, dataIndex: 'load'},
{header: \"mem%\", width: 50, sortable: true, dataIndex: 'mem_used'},
{header: \"QPS\", width: 50, sortable: true, dataIndex: 'QPS'},
{header: \"schema\", width: 55, sortable: true, dataIndex: 'schema'},
{header: \"tables\", width: 55, sortable: true, dataIndex: 'tables'},
{header: \"#conn\", width: 55, sortable: true, dataIndex: 'conn'},
{header: \"total size\", width: 65, sortable: true, renderer: 'fileSize', dataIndex: 'total_size'},
{header: \"#innodb\", width: 65, sortable: true, dataIndex: 'num_innodb'},
{header: \"#myisam\", width: 65, sortable: true, dataIndex: 'num_myisam'},
{header: \"myisam_total\", width: 75, sortable: true, renderer: 'fileSize', dataIndex: 'myisam_total'},
{header: \"innodb_total\", width: 75, sortable: true, renderer: 'fileSize', dataIndex: 'innodb_total'},

		    ],
	  stripeRows: true,
	  autoExpandColumn: 'hostname',
	  height:200,
	  width:850,
	  title:'Database Environment Summary Data'
	  });

    grid.render('grid-example');
      });</script>

</head>
<body>

<div id=\"grid-example\"></div>
<table>
<tr>
<td colspan='20'><a href='$nroot/index.php/rss/summary/' target='_blank'> 
<img src='$nroot/includes/images/rss_sqare-14-14.gif' length='12' width='12' border='0'></a> Page Data</td>

<td colspan='20'> | <a href='$nroot/index.php/rss/summary_xml/' target='_blank'>
<img src='$nroot/includes/images/rss_sqare-14-14.gif' length='12' width='12' border='0'></a> XML Data</td>
</tr>
</table>";

//end of page
include("includes/footer.php");