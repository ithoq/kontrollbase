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

function head(
	      $root,
	      $server_list,
	      $servers,
	      $overview,
	      $summary,
	      $data_size,
	      $index_size,
	      $total_size,
	      $data,
	      $news) {

  $nroot = substr_replace($root,"",-1);
  print<<<HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="$nroot/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="$nroot/userguide/css/userguide-nofluff.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/kb_extras.css" />

<style type="text/css">
    .settings {
    background-image:url('$nroot/includes/images/folder_wrench.png');
  }
  .nav {
    background-image:url('$nroot/includes/images/folder_go.png');
  }
</style>
HEAD;

echo google_analytics();

print<<<HEAD
<script type="text/javascript" src="$nroot/includes/browser_detect.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all-debug.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/miframe.js"></script>

<script type="text/javascript">
 Ext.onReady(function() {  
 Ext.QuickTips.init();
HEAD;

 print "    
var newsData = [";
 $r=0;
 $u=count($news);
 foreach($news as $key => $value) {
   foreach($value as $vKey => $vValue) {
     if($vKey == 'date') { $news_date=$vValue; }
     if($vKey == 'title') { $news_title=$vValue; }
     if($vKey == 'desc') { $news_desc=$vValue; }
     if($vKey == 'link') { $news_link=$vValue; }
   }

   print "['$news_date','$news_title','$news_desc','$news_link']";
   $r++;
   if($r<$u) { print ",\n";} else { print "\n];\n";}
 }

 print "    
var summaryData = [";

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
$engine_innodb_size_total],
";
 }
 //print the last data line for summary information - totals
 //ADDED EMPTY QUOTES TO THE TWO LINES BELOW "Total Values" - might help IE7?
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
 $engine_innodb_size_total_c]];

";

 print<<<HEAD
 var detailEl;
 
 var contentPanel = {
 id: 'content-panel',
 region: 'center', 
 layout: 'card',
 margins: '2 5 5 0',
 activeItem: 0,
 border: false,
 items: [
	 border
	 ]
 };

 var refreshTab=function(tab){
   tab.getUpdater().refresh();
 };

 var border = {
 id:'border-panel',
 title: '<img src="$nroot/includes/images/kontrollbase_logo-trans32.png" align="center">',
 layout:'border',
 region:'center',
 bodyBorder: false,
 autoEl: {
     tag: 'div',
                    html:''
   },
 defaults: {
   collapsible: true,
   split: true,
   animFloat: false,
   autoHide: false,
   useSplitTips: true,
   bodyStyle: 'padding:0px'
   },
 
 items: [
   {
     xtype: 'toolbar',
     height: 25,
     region: 'north',
     items: [{
       xtype: 'tbbutton',
       text: 'Logout',
       handler: function() {
	 window.location = '$nroot/index.php/login/logout/';}
     },
   {
     xtype: 'tbseparator'
   },
   {
     xtype: 'tbbutton',
     text: 'Forums',
     handler: function() {
       window.location = 'http://kontrollsoft.com/forum';}
   },
   {
     xtype: 'tbseparator'
   },
   {
     xtype: 'tbbutton',
     id: this.id + 'AuditButton',
     cls: 'x-btn-icon audit-button',
     tooltip: 'Contact Support',
     handler: function() {
       window.location = 'http://kontrollsoft.com/support';},
     scope: this,     
   }
       ]},
  {
   title: 'News and Announcements - This is a BETA product - there may be bugs to fix. Please contact support if you need help.',
   region: 'south',
   height: 140,
   xtype: 'grid',
   store: new Ext.data.SimpleStore({
     fields: [
	      {name: 'date'},
	      {name: 'title'},
	      {name: 'desc'},
	      {name: 'link'}
	      ]}),	 
   columns: [
   {
     id: 'date', 
     header: "date", 
     width: 100, 
     sortable: true, 
     renderer: 'undef', 
     dataIndex: 'date'
   },
   {
     id: 'title', 
     header: "title", 
     width: 160, 
     sortable: true, 
     renderer: 'undef', 
     dataIndex: 'title'
   },
   {
     id: 'desc', 
     header: "desc", 
     width: 200, 
     sortable: true, 
     renderer: 'undef', 
     dataIndex: 'desc'
   },
   {
     id: 'link', 
     header: "link", 
     width: 100, 
     sortable: true, 
     renderer: 'undef', 
     dataIndex: 'link'
   }
   ],
   stripeRows: true,
   autoExpandColumn: 'desc',
   listeners: { render: function(){this.store.loadData(newsData);}}
   },
   {
     region:'west',
     id:'west-panel',
     title:'Navigation',
     split:true,
     width: 200,
     minSize: 175,
     maxSize: 400,
     collapsible: true,
     margins:'5 0 0 0',
     layout:'accordion',
     layoutConfig:{
       animate:true
     },
     items: [{
       title: 'Servers List',
       html: "$servers",
       autoScroll: true,
       animScroll: true,
       iconCls:'nav'
     }]
   },
   {
   xtype: 'tabpanel',
   plain: true,
   region: 'center',
   margins: '5 0 0 0',
   activeTab: 0,
   autoScroll: true,
   animScroll: true,
   collapsible: false,
   bodyStyle: 'padding:5px 0px 0px 5px',
   items: [
   {
   title: 'Overview',
   deferredRender: true,
   width:440,
   height:480,
   layout : 'fit',
   listeners: {activate: refreshTab},
   autoLoad: {url: '$nroot/includes/pages/$overview'},
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   },
   {
   title: 'Summary Data',
   xtype: 'grid',
   layout: 'fit',
   store: new Ext.data.SimpleStore({
     fields: [
	      {name: 'hostname'},
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
	      ]
	 }),
   columns: [
   {id: 'hostname', header: "server hostname", width: 80, sortable: true, renderer: 'lowercase', dataIndex: 'hostname'},
   {id: 'load', header: "load", width: 45, sortable: true, renderer: 'undef', dataIndex: 'load'},
   {id: 'mem_used', header: "mem%", width: 50, sortable: true, renderer: 'undef', dataIndex: 'mem_used'},
   {id: 'QPS', header: "QPS", width: 50, sortable: true, renderer: 'undef', dataIndex: 'QPS'},
   {id: 'schema', header: "schema", width: 55, sortable: true, renderer: 'undef', dataIndex: 'schema'},
   {id: 'tables', header: "tables", width: 55, sortable: true, renderer: 'undef', dataIndex: 'tables'},
   {id: 'conn', header: "#conn", width: 55, sortable: true, renderer: 'undef',dataIndex: 'conn'},
   {id: 'total_size', header: "total size", width: 65, sortable: true, renderer: 'fileSize', dataIndex: 'total_size'},
   {id: 'num_innodb', header: "#innodb", width: 65, sortable: true, renderer: 'undef', dataIndex: 'num_innodb'},
   {id: 'num_myisam', header: "#myisam", width: 65, sortable: true, renderer: 'undef', dataIndex: 'num_myisam'},
   {id: 'myisam_total', header: "myisam_total", width: 75, sortable: true, renderer: 'fileSize', dataIndex: 'myisam_total'},
   {id: 'innodb_total', header: "innodb_total", width: 75, sortable: true, renderer: 'fileSize', dataIndex: 'innodb_total'}
	     ],
   stripeRows: true,
   autoExpandColumn: 'hostname',
   listeners: { render: function(){this.store.loadData(summaryData);}}},
   {
   title: 'Alert Management',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   items: [ 
   {
   xtype: 'tabpanel',
   plain: true,
   region: 'center',
   margins: '0 5 5 5',
   activeTab: 0,
   autoScroll: true,
   animScroll: true,
   items: [
   {
   title: 'Current Alerts',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/alerts/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   },
   {
   title: 'Acknowledged',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/alerts/response_main/ack/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   },
   {
   title: 'Ignored',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/alerts/response_main/ign/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   }
     ]
   }]},   
   {
   title: 'System Management',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   items: [
   {
   xtype: 'tabpanel',
   plain: true,
   region: 'center',
   margins: '0 5 5 5',
   activeTab: 0,
   autoScroll: true,
   animScroll: true,
   items: [
   {
   title: 'Hosts',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/show/hosts/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
       autoScroll:true
   },
   {
   title: 'Users',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/show/users/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   },
   {
   title: 'Clients',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/index.php/show/clients/'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
       autoScroll:true
   },
   {
     title: 'System',
     deferredRender: true,
     height: 480,
     width:440,
     layout : 'fit',
     listeners: {activate: refreshTab},
     items: {
       xtype          : 'iframepanel',
       defaultSrc  : '$nroot/index.php/system/'
     },
     shim:false,
     frame:true,
     animCollapse:false,
     enableTabScroll:true,
     autoScroll:true
   },
   {
     title: 'Debug Log',
     deferredRender: true,
     height: 480,
     width:440,
     layout : 'fit',
     listeners: {activate: refreshTab},
     items: {
       xtype          : 'iframepanel',
       defaultSrc  : '$nroot/system/logs/sys_debug.log'
     },
     shim:false,
     frame:true,
     animCollapse:false,
     enableTabScroll:true,
     autoScroll:true
   }

   ]}]},
   {
   title: 'User Guide',
   deferredRender: true,
   height: 480,
   width:440,
   layout : 'fit',
   listeners: {activate: refreshTab},
   items: {
     xtype          : 'iframepanel',
     defaultSrc  : '$nroot/userguide/toc-embed.php'
   },
   shim:false,
   frame:true,
   animCollapse:false,
   enableTabScroll:true,
   autoScroll:true
   }
   ]}]};

 
 new Ext.Viewport({
   layout: 'border',
       title: 'Ext Layout Browser',
       items: [
	       border
	       ],
       renderTo: Ext.getBody()
       });
   });
  
  </script>           
</head>
HEAD;
}

$nroot = substr_replace($root,"",-1);
$servers='<table>';
foreach($server_list as $key => $value) {
  $servers .= "<tr>";
  foreach($value as $k => $v) {
    if($k == 'id') { $id=$v;}
    if($k == 'server_hostname') { $list_hostname=$v;}    
    if($k == 'active') {$active=$v;}
    if($k == 'server_client_name') {$server_client_name=$v;}
    if($k == 'server_type') { $server_type=$v;}
  }
  if($server_type == 0) { $server_type='prod';}
  elseif($server_type == 1) { $server_type='stage';}
  elseif($server_type == 2) { $server_type='dev';}

  if($active == 0) { $active="<img src='$nroot/includes/images/Record-Disabled-16x16.png' width='14px' heigh='14px'>";}
  elseif($active == 1) { $active="<img src='$nroot/includes/images/Record-Normal-Green-16x16.png' width='14px' heigh='14px'>";}
  elseif($active == 2) { $active="<img src='$nroot/includes/images/Record-Problem-Red-16x16.png' width='14px' heigh='14px'>";}

  $servers .= "<td>$active <a href='$nroot/index.php/main/host/$id' target='_self'>$list_hostname</a></td></tr>";
}
$servers .= "</table>";

head(
     $root,
     $server_list,
     $servers,
     $overview,
     $summary,
     $data_size,
     $index_size,
     $total_size,
     $data,
     $news);

?>
