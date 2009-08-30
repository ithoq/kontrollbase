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

function logger($syspath,$data) {
  $date = date("c");
  $data = "$date - setup.php - $data\n";
  $INSTALL_LOG = "$syspath/system/logs/sys_install.log";
  if (!$handle = fopen("$INSTALL_LOG", 'a')) { print "<h1>Log file Error</h1>File: $INSTALL_LOG"; return 1; }
  if (fwrite($handle, $data) === FALSE) { print "<h1>Log file Error</h1>"; return 1; }
}

function head() {
  $IP=$_SERVER['SERVER_ADDR'];
  
  $syspath = $_SERVER['SCRIPT_FILENAME'];
  $syspath = rtrim($syspath, ".php");
  $syspath = rtrim($syspath, "/setup");
  $syspath = rtrim($syspath, "/install");

  $nroot = $_SERVER['PHP_SELF'];
  $nroot = rtrim($nroot, "/setup.php");
  $nroot = rtrim($nroot, "/install");
  
  logger($syspath,"IP:$IP"); 
  logger($syspath,"syspath:$syspath");
  logger($syspath,"nroot:$nroot");

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
    Ext.apply(Ext.form.VTypes, {
      password : function(val, field) {
		  if (field.initialPassField) {
		    var pwd = Ext.getCmp(field.initialPassField);
		    return (val == pwd.getValue());
		  }
		  return true;
		},
		  passwordText : 'Passwords do not match'
		  });

  Ext.onReady(function(){
		Ext.QuickTips.init();
		Ext.form.Field.prototype.msgTarget = 'side';

		var login = new Ext.FormPanel({ 
		  bodyStyle:'padding:5px 5px 0',
		      buttonAlign: 'right',
		      url:'$nroot/install/process.php', 
		      width:360,
		      labelWidth:115,
		      frame:true, 
		      title:'Kontrollbase 2.0.1 - Installation Settings', 
		      defaultType:'textfield',
		      monitorValid:true,
		      autoHeight: true,
		      items:[
			{
			fieldLabel:'DB admin user',
			    name:'mysql_a_user',
			    value: 'kb_admin',
			    width: 200,
			    allowBlank:false
			    },
			{
			fieldLabel:'DB admin password',
			    name:'mysql_a_pass',
			    value: 'password',
			    vtype: 'password',
			    width: 200,
			    minLength: 6,
			    maxLength: 32,
			    id: 'adminpass',
			    allowBlank:false
			    },
			{
			fieldLabel: 'Confirm admin pass',
			    name: 'mysql_a_pass_c',
			    vtype: 'password',
			    inputType: 'password',
			    initialPassField: 'adminpass',
			    width: 200,
			    allowBlank:false
			    },
			{ 
		        fieldLabel:'DB app user', 
			    name:'mysql_r_user', 
			    value: 'kb_app',			    
			    width: 200,
			    allowBlank:false 
			    },
			{ 
			fieldLabel:'DB app password', 
			    name:'mysql_r_pass', 
			    value: 'password',
			    vtype: 'password',
			    width: 200,
                            minLength: 6,
                            maxLength: 32,
                            id: 'apppass',
			    allowBlank:false 
			    },
			{
                        fieldLabel: 'Confirm app pass',
                            name: 'mysql_r_pass_c',
                            vtype: 'password',
                            inputType: 'password',
                            initialPassField: 'apppass',
			    width: 200,
                            allowBlank:false
			    },
			{
                        fieldLabel:'DB app schema',
			    name:'mysql_r_db',
			    value: 'kontrollbase',
			    width: 200,
			    allowBlank:false
			    },
			{
                        fieldLabel:'DB app hostname',
			    name:'mysql_r_host',
			    value: "localhost",
			    width: 200,
			    allowBlank:false
			    },
			{
                        fieldLabel:'Web Root',
			    name:'web_root',
			    value: "http://$IP/kontrollbase/",
			    width: 200,
			    allowBlank:false
			    },
			{
                        fieldLabel:'Base DIR',
			    name:'base_dir',
			    value: "$syspath",
			    width: 200,
			    allowBlank:false
			    }
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
