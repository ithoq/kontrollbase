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
 $u=count($user_list);
 
 $server_client_name = 0;
 foreach($user_list as $key => $value) {
   foreach($value as $vKey => $vValue) {
     if($vKey == 'id') { $id=$vValue; }
     if($vKey == 'system_user_name') { $system_user_name=$vValue; }
     if($vKey == 'system_user_pass') { $system_user_pass=$vValue; }
     if($vKey == 'system_user_email') { $system_user_email=$vValue; }
     if($vKey == 'server_client_id') { $server_client_id=$vValue; }
     if($vKey == 'role_tier') { $role_tier=$vValue; }
     if($vKey == 'server_client_name') { $server_client_name=$vValue; }
     if($vKey == 'creation_time') { $creation_time=$vValue; }
   }  
   
   if($server_client_id == 0) { $server_client_name="system user"; }
   
   if($role_tier == 0) { $role_tier="admin";}
   elseif($role_tier == 1) { $role_tier="standard";}
   elseif($role_tier == 2) { $role_tier="client";}
   
   print "['$system_user_name','$system_user_email','$server_client_name','$role_tier','$creation_time','<a href=\"$nroot/index.php/edit/user/$id\" target=\"_self\"><img src=\"$nroot/includes/images/edit.gif\" width=\"14px\" height=\"14px\"></a>','<a href=\"$nroot/index.php/delete/check/user/$id\" target=\"_self\"><img src=\"$nroot/includes/images/delete.gif\" width=\"12px\" height=\"12px\">']";
   $r++;
   if($r<$u) { print ",\n";} 
   else { 
     print ",['','','','','','Add','<a href=\"$nroot/index.php/add/user/\" target=\"_self\"><img src=\"$nroot/includes/images/add-16x16.png\" width=\"12px\" height=\"12px\"></a>']];\n\n";
     
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
	      {name: 'system_user_name'},
	      {name: 'system_user_email'},
	      {name: 'server_client_name'},
	      {name: 'role_tier'},
	      {name: 'creation_time'},
	      {name: 'edit'},
	      {name: 'delete'}
	      ]}),
   columns: [
	     
   { id:'system_user_name', header: "Username", width: 200, sortable: true, dataIndex: 'system_user_name' },
   { id:'system_user_email', header: "Email", width: 200, sortable: true, dataIndex: 'system_user_email' },
   { id:'server_client_name', header: "Client", width: 120, sortable: true, dataIndex: 'server_client_name' },
   { id: 'role_tier', header: "Tier", width: 80, sortable: true, dataIndex: 'role_tier' },
   { id: 'creation_time', header: "Created", width: 120, sortable: true, dataIndex: 'creation_time' },
   { id: 'edit', header: "Edit", width: 50, sortable: true, dataIndex: 'edit' },
   { id: 'delete', header: "Delete", width: 50, sortable: true, dataIndex: 'delete' }
   ],
   stripeRows: true,
   autoExpandColumn: 'system_user_name',
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





?>