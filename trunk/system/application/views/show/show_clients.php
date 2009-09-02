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

print "    
var serverList = [";
 $r=0;
 $u=count($client_list);

foreach($client_list as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $id=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'server_client_email') { $server_client_email=$vValue; }
    if($vKey == 'server_client_phone') { $server_client_phone=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }  
  
  print "['$server_client_name','$server_client_email','$server_client_phone','$creation_time','<a href=\"$nroot/index.php/edit/client/$id\" target=\"_self\"><img src=\"$nroot/includes/images/edit.gif\" width=\"14px\" height=\"14px\">','<a href=\"$nroot/index.php/delete/check/client/$id\" target=\"_self\"><img src=\"$nroot/includes/images/delete.gif\" width=\"12px\" height=\"12px\">']";

  $r++;
  if($r<$u) { print ",\n";} 
  else { 
    print ",['','','','','Add','<a href=\"$nroot/index.php/add/client/\" target=\"_self\"><img src=\"$nroot/includes/images/add-16x16.png\" width=\"12px\" height=\"12px\"></a>']];\n\n";
  }
 }

  print<<<HEAD

    var dataGrid = {
    title: '',
    xtype: 'grid',
    layout: 'fit',
    region:'center',
    store: new Ext.data.SimpleStore({
      fields: [
	       {name: 'server_client_name'},
	       {name: 'server_client_email'},
	       {name: 'server_client_phone'},
	       {name: 'creation_time'},
	       {name: 'edit'},
	       {name: 'delete'}
	       ]}),
    columns: [
	            
    { id:'server_client_name', header: "Client", width: 200, sortable: true, dataIndex: 'server_client_name' },
    { id:'server_client_email', header: "Email", width: 200, sortable: true, dataIndex: 'server_client_email' },
    { id:'server_client_phone', header: "Phone", width: 200, sortable: true, dataIndex: 'server_client_phone' },
    { id: 'creation_time', header: "Created", width: 120, sortable: true, dataIndex: 'creation_time' },
    { id: 'edit', header: "Edit", width: 50, sortable: true, dataIndex: 'edit' },
    { id: 'delete', header: "Delete", width: 50, sortable: true, dataIndex: 'delete' }
    ],
    stripeRows: true,
    autoExpandColumn: 'server_client_name',
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