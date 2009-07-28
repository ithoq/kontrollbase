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

 print "    
var serverList = [";
 $r=0;
 $u=count($alerts);

 foreach($alerts as $key => $value) {
   foreach($value as $vKey => $vValue) {
     if($vKey == 'alerts_def_id') { $alerts_def_id=$vValue; }
     if($vKey == 'alert_name') { $alert_name=$vValue; }
     if($vKey == 'alerts_current_id') { $alerts_current_id=$vValue; }
     if($vKey == 'alert_desc') { $alert_desc=$vValue; }
     if($vKey == 'alert_links') { $alert_links=$vValue; }
     if($vKey == 'alert_solution') { $alert_solution=$vValue; }
     if($vKey == 'server_list_id') { $server_list_id=$vValue; }
     if($vKey == 'server_hostname') { $server_hostname=$vValue; }
     if($vKey == 'alert_level') { $alert_level=$vValue; }    
   }
   
   if($alert_level == 0) { $alert_level = 'crit';}
   elseif($alert_level == 1) { $alert_level= 'warn';}
   elseif($alert_level == 2) { $alert_level= 'info';}
   
   // here we need hover pop up thing for the $alerts_current_id column: we need to display $alert_desc, $alert_links, $alert_solution
   
   $ack="'<a href=\"$nroot/index.php/alerts/ack/$alerts_current_id/$server_list_id/$alerts_def_id\" target=\"_self\"><img src=\"$nroot/includes/images/Pause-Normal-Red-16x16.png\" width=\"12px\" height=\"12px\"></a>'";
   $ign="'<a href=\"$nroot/index.php/alerts/ign/$alerts_current_id/$server_list_id/$alerts_def_id\" target=\"_self\"><img src=\"$nroot/includes/images/Volume-Normal-Red-16x16.png\" width=\"16px\" height=\"16px\"></a>'";
   
   print "['$server_hostname','$alert_level','$alert_name',$ack,$ign]";
   $r++;
   if($r<$u) { print ",\n";} 
   else { 
     print "];\n\n";     
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
	      {name: 'server_hostname'},
	      {name: 'alert_level'},
	      {name: 'alert_name'},
	      {name: 'ack'},
	      {name: 'ign'}
	      ]}),
   columns: [
	          
   { id:'server_hostname', header: "Hostname", width: 200, sortable: true, dataIndex: 'server_hostname' },
   { id:'alert_level', header: "Level", width: 200, sortable: true, dataIndex: 'alert_level' },
   { id:'alert_name', header: "Name", width: 120, sortable: true, dataIndex: 'alert_name' },
   { id: 'ack', header: "Ack", width: 50, sortable: true, dataIndex: 'ack' },
   { id: 'ign', header: "Ign", width: 50, sortable: true, dataIndex: 'ign' }
   ],
   stripeRows: true,
   autoExpandColumn: 'alert_name',
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