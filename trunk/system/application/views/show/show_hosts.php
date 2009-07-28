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
$nroot = substr_replace($root,"",-1);
  print<<<HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="$nroot/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="$nroot/userguide/css/userguide-nofluff.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/layout/layout-browser.css">
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/tasks.css" />

<script type="text/javascript" src="$nroot/includes/browser_detect.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all-debug.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/miframe.js"></script>

<script type="text/javascript">
    Ext.onReady(function() {  
		  Ext.QuickTips.init();
HEAD;


// start the left table
$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

print "    
var serverList = [";
 $r=0;
 $u=count($server_list);
foreach($server_list as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $id=$vValue; }
    if($vKey == 'active') { $active=$vValue; }
    if($vKey == 'server_client_id') { $server_client_id=$vValue; }
    if($vKey == 'server_type') { $server_type=$vValue; }
    if($vKey == 'server_is_slave') { $server_is_slave=$vValue; }
    if($vKey == 'server_ipaddress') { $server_ipaddress=$vValue; }
    if($vKey == 'server_hostname') { $server_hostname=$vValue; }
    if($vKey == 'server_ssh_user') { $server_ssh_user=$vValue; }
    if($vKey == 'server_mysql_port') { $server_mysql_port=$vValue; }
    if($vKey == 'server_mysql_socket') { $server_mysql_socket=$vValue; }
    if($vKey == 'server_mysql_db') { $server_mysql_db=$vValue; }
    if($vKey == 'server_mysql_user') { $server_mysql_user=$vValue; }
    if($vKey == 'server_mysql_pass') { $server_mysql_pass=$vValue; }
    if($vKey == 'server_snmp_local_address') { $server_snmp_local_address=$vValue; }
    if($vKey == 'server_snmp_port') { $server_snmp_port=$vValue; }
    if($vKey == 'server_snmp_rocommunity') { $server_snmp_rocommunity=$vValue; }
    if($vKey == 'server_snmp_version') { $server_snmp_version=$vValue; }
    if($vKey == 'threshold_queries_per_second') { $threshold_queries_per_second=$vValue; }
    if($vKey == 'threshold_seconds_behind_master') { $threshold_seconds_behind_master=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }  

  if($server_type == 0) { $server_type="prod";}
  elseif($server_type == 1) { $server_type="staging";}
  elseif($server_type == 2) { $server_type="dev";}
  else { $server_type="NULL"; }

  if($server_is_slave == 0) { $server_is_slave="no";}
  elseif($server_is_slave == 1) { $server_is_slave="yes";}
  else { $server_is_slave="NULL";}

  if($active == 0) { $active="'<img src=\"$nroot/includes/images/Record-Disabled-24x24.png\" width=\"18px\" height=\"18px\">'";} 
  elseif($active == 1) { $active="'<img src=\"$nroot/includes/images/Record-Normal-Green-24x24.png\" width=\"18px\" height=\"18px\">'";}
  elseif($active == 2) { $active="'<img src=\"$nroot/includes/images/Record-Problem-Red-24x24.png\" width=\"18px\" height=\"18px\">'";}
  else { $active="NULL";}

  print "[$active,'$server_client_name','$server_hostname','$server_ipaddress','$server_type','$server_is_slave','$threshold_queries_per_second','$threshold_seconds_behind_master','<a href=\"$nroot/index.php/edit/host/$id\" target=\"_self\"><img src=\"$nroot/includes/images/edit.gif\" width=\"14px\" height=\"14px\">','<a href=\"$nroot/index.php/delete/host/$id\" target=\"_self\"><img src=\"$nroot/includes/images/delete.gif\" width=\"12px\" height=\"12px\">']";
   $r++;
   if($r<$u) { print ",\n";} else { print "];\n\n";}
}

		
  print<<<HEAD

    var dataGrid = {
    title: '',
    xtype: 'grid',
    layout: 'fit',
    region:'center',
    store: new Ext.data.SimpleStore({
      fields: [
	       {name: 'active'},
	       {name: 'server_client_name'},
	       {name: 'server_hostname'},
	       {name: 'server_ipaddress'},
	       {name: 'server_type'},
	       {name: 'server_is_slave'},
	       {name: 'threshold_queries_per_second'},
	       {name: 'threshold_seconds_behind_master'},
	       {name: 'edit'},
	       {name: 'delete'}
	       ]}),
    columns: [
	      
    { id: 'active', header: "active", width: 50, sortable: true, dataIndex: 'active' },
    { id:'server_client_name', header: "Client", width: 200, sortable: true, dataIndex: 'server_client_name' },
    { id:'server_hostname', header: "Hostname", width: 200, sortable: true, dataIndex: 'server_hostname' },
    { id:'server_ipaddress', header: "IP Address", width: 200, sortable: true, dataIndex: 'server_ipaddress' },
    { id: 'server_type', header: "Type", width: 100, sortable: true, dataIndex: 'server_type' },
    { id: 'server_is_slave', header: "Slave", width: 100, sortable: true, dataIndex: 'server_is_slave' },
    { id: 'threshold_queries_per_second', header: "T-QPS", width: 50, sortable: true, dataIndex: 'threshold_queries_per_second' },
    { id: 'threshold_seconds_behind_master', header: "T-SBM", width: 50, sortable: true, dataIndex: 'threshold_seconds_behind_master' },
    { id: 'edit', header: "Edit", width: 50, sortable: true, dataIndex: 'edit' },
    { id: 'delete', header: "Delete", width: 50, sortable: true, dataIndex: 'delete' }
    ],
    stripeRows: true,
    autoExpandColumn: 'server_hostname',
    listeners: {
      render: function(){
	this.store.loadData(serverList);
      }
    }
  };
  
  new Ext.Viewport({
    layout: 'border',
	title: 'grid',
	items: [ dataGrid ],
	renderTo: Ext.getBody()
	});
		});

</script>
</head>
<body>
</body>
</html>
HEAD;

//end of page
?>
