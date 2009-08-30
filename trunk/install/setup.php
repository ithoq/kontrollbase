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

function head() {
  $IP=$_SERVER['SERVER_ADDR'];

  $syspath = $_SERVER['SCRIPT_FILENAME'];
  $syspath = rtrim($syspath, ".php");
  $syspath = rtrim($syspath, "/setup");
  $syspath = rtrim($syspath, "/install");

  $nroot = $_SERVER['PHP_SELF'];
  $nroot = rtrim($nroot, "/setup.php");
  $nroot = rtrim($nroot, "/install");

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

<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/states.js"></script>

<script type="text/javascript">
  Ext.onReady(function(){
		Ext.QuickTips.init();
 
		var login = new Ext.FormPanel({ 
		  labelWidth:125,
		      url:'$nroot/install/process.php', 
		      frame:true, 
		      title:'Kontrollbase 2.0.1 - Installation Settings', 
		      defaultType:'textfield',
		      monitorValid:true,
		      autoWidth:true,
		      autoHeight: true,
		      items:[
			{
			fieldLabel:'DB admin user',
			    name:'mysql_a_user',
			    value: 'kb_admin',
			    allowBlank:false
			    },
			{
			fieldLabel:'DB admin password',
			    name:'mysql_a_pass',
			    value: 'password',
			    allowBlank:false
			    },
			{ 
		        fieldLabel:'DB app user', 
			    name:'mysql_r_user', 
			    value: 'kb_app',			    
			    allowBlank:false 
			    },
			{ 
			fieldLabel:'DB app password', 
			    name:'mysql_r_pass', 
			    value: 'password',
			    allowBlank:false 
			    },
			{
                        fieldLabel:'DB app schema',
			    name:'mysql_r_db',
			    value: 'kontrollbase',
			    allowBlank:false
			    },
			{
                        fieldLabel:'DB app hostname',
			    name:'mysql_r_host',
			    value: "localhost",
			    allowBlank:false
			    },
			{
                        fieldLabel:'Web Root',
			    name:'web_root',
			    value: "http://$IP/kontrollbase/",
			    allowBlank:false
			    },
			{
                        fieldLabel:'Base DIR',
			    name:'base_dir',
			    value: "$syspath",
			    allowBlank:false
			    },
			],		      
		      buttons:[
			       { 
			       text:'Install',
				   formBind: true, 
				   handler:function(){ 
				   login.getForm().submit({ 
				     method:'POST', 
					 waitTitle:'Connecting', 
					 waitMsg:'Installing...',
					 
					 success:function(){
					 Ext.Msg.alert('Kontrollbase','Installation Success.<br>Login with User: admin, Password: password', function(btn, text){
							 if (btn == 'ok'){
							   var redirect = '$nroot/index.php';
							   window.location = redirect;
							 }
						       });
				       },
					 
					 failure:function(form, action){ 
					 if(action.failureType == 'server'){ 
					   obj = Ext.util.JSON.decode(action.response.responseText); 
					   Ext.Msg.alert('Installation Failed!', obj.errors.reason); 
					 }else{ 
					   Ext.Msg.alert('Warning!', 'Authentication server is unreachable : ' + action.response.responseText); 
					 } 
					 login.getForm().reset(); 
				       } 
				     }); 
				 } 
			       }] 
		      });
		
		var win = new Ext.Window({
		  layout:'fit',
		      autoHeight:true,
		      closable: false,
		      resizable: false,
		      plain: true,
		      border: false,
		      items: [login]
		      });
		win.show();
	      });
</script>

</head>
<body>
HEAD;
}

head();
