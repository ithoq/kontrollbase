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

<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
HEAD;

print "\n
<script type=\"text/javascript\">
var clients = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [";

foreach ($clients as $a) {
  print "['".$a['id']."','".$a['server_client_name']."'],\n";
}
print "['0','System User'],['','']]});\n\n";

print<<<HEAD
var type = new Ext.data.SimpleStore({
  fields: ['id','state'],
      data: [['0','Admin'],['1','Standard'],['2','Client']]
      });
HEAD;

print<<<HEAD
  Ext.onReady(function(){
		Ext.QuickTips.init();
		
		var host = new Ext.FormPanel({ 
		  renderTo: document.body,
		      buttonAlign: 'right',
		      width:390,
		      labelWidth:120,
		      url:'$nroot/index.php/add/subuser/', 
		      frame:true, 
		      title:'Add User', 
		      defaultType:'textfield',
		      monitorValid:true,
		      items:[
			     {
			     fieldLabel:'Name',
				 name:'system_user_name',
				 inputType: 'text',
				 width:250,
				 value: 'name',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Password',
				 name:'system_user_pass',
				 inputType: 'password',
				 width:250,
				 value: '12345678',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Email',
				 name:'system_user_email',
				 inputType: 'text',
				 width:250,
				 value: 'email@email.com',
				 allowBlank:false
				 },
			     {
			     xtype: 'combo',
				 name: 'server_client_id',
				 fieldLabel: 'Client',
                                 valueField: 'id',
				 hiddenName: 'server_client_id',
				 hiddenValue: 'server_client_id',
				 mode: 'local',
				 store: clients,
				 displayField: 'state',
				 width: 120,
                                 emptyText:'Select Client',
                                 typeAhead: true,
                                 value: 'client_name',
                                 triggerAction: 'all'
				 },

			     {
			     xtype: 'combo',
				 name: 'role_tier',
				 fieldLabel: 'Role',
				 valueField:'id',
				 hiddenName: 'role_tier',
				 hiddenValue: 'role_tier',
				 mode: 'local',
				 store: type,
				 displayField: 'state',
				 width: 120,
				 emptyText:'role',
				 typeAhead: true,
				 value: 'role',
				 triggerAction: 'all'
				 }
			     ],      
		      buttons:[
			       { 
			       text:'Add User',
				   formBind: true, 
				   handler:function(){ 
				   host.getForm().submit({ 
				     method:'POST', 
					 waitTitle:'Connecting.', 
					 waitMsg:'Adding user...',
					 setTimeout:10,
					 
					 success:function(){
                                           var redirect = '$nroot/index.php/show/users/';
                                           window.location = redirect;
				       },
					 
					 failure:function(form, action){ 
					 if(action.failureType == 'server'){ 
					   obj = Ext.util.JSON.decode(action.response.responseText); 
					   Ext.Msg.alert('Failed to add user.', obj.errors.reason); 
					 }else{ 
					   Ext.Msg.alert('Warning!', 'Update server is unreachable : ' + action.response.responseText); 
					 } 
					 host.getForm().reset(); 
				       } 
				     }); 
				 } 
			       }
			       ] 
		      });
	      });
</script>
HEAD;

print "</head>
<body>
</body>
</html>";

?>
