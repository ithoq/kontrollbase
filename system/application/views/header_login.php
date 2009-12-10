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
HEAD;

echo google_analytics();

print<<<HEAD
<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/states.js"></script>

<script type="text/javascript">
  Ext.onReady(function(){
		Ext.QuickTips.init();
		if(Ext.isIE) {
		  Ext.Msg.show({
		    title:'Browser Alert',
			msg: 'Internet Explorer is not supported by this application.<br>Please use a W3C standards compliant browser like Firefox, Safari, Camino, Chrome, etc.',
			icon: Ext.MessageBox.INFO,
			minWidth: 300,
			minHeight: 100
			});
		}
		else {
		  var login = new Ext.FormPanel({ 
		    renderTo: "loginbox",
			buttonAlign: 'center',
			autoHeight: true,
			labelWidth:80,
			url:'$nroot/index.php/login/auth/', 
			frame:true, 
			title:'<img src="$nroot/includes/images/kontrollbase_logo-trans32.png" align="center">',
			defaultType:'textfield',
			monitorValid:true,
			items:[{ 
		      fieldLabel:'Username', 
			  name:'system_user_name', 
			  allowBlank:false 
			  },{ 
			       fieldLabel:'Password', 
				   name:'system_user_pass', 
				   inputType:'password', 
				   allowBlank:false 
				   }],
			
			buttons:[{ 
		      text:'Login',
			  formBind: true, 
			  handler:function(){ 
			  login.getForm().submit({ 
			    method:'POST', 
				waitTitle:'Connecting', 
				waitMsg:'Authenticating...',
				
				success:function(){
				var redirect = '$nroot/index.php/main/';
				window.location = redirect;
			      },
				
				failure:function(form, action){ 
				if(action.failureType == 'server'){ 
				  obj = Ext.util.JSON.decode(action.response.responseText); 
				  Ext.Msg.alert('Login Failed.', obj.errors.reason); 
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
			width:300,
			height:150,
			closable: false,
			resizable: false,
			plain: true,
			border: false,
			items: [login]
			});
		  win.show();
		}
	      });
</script>
    
    </head>
    <body>
<div id="loginbox" width="200px">
</div>
</body>
</html>
HEAD;



?>