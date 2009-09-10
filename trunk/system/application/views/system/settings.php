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
$system_alerts_email = $settings[0]['system_alerts_email'];
$system_hostname = $settings[0]['system_hostname'];
$system_graph_animation_enable = $settings[0]['system_graph_animation_enable'];
$system_server_loop_timeout = $settings[0]['system_server_loop_timeout'];
// ext doesn't like the email format now so I'll come back to this: unterminated string literal
//$system_alerts_email_template = htmlentities($settings[0]['system_alerts_email_template']);
$stats_data=byte_format($stat_size[0]["DATA_LENGTH"]);
$stats_index=byte_format($stat_size[0]["INDEX_LENGTH"]);
$stats_total = byte_format(($stat_size[0]["DATA_LENGTH"]) + ($stat_size[0]["INDEX_LENGTH"]));
$report_data=byte_format($report_size[0]["DATA_LENGTH"]);
$report_index=byte_format($report_size[0]["INDEX_LENGTH"]);
$report_total= byte_format(($report_size[0]["DATA_LENGTH"]) + ($report_size[0]["INDEX_LENGTH"]));
if($revision != "") { $revision = "revision $revision"; }
if($system_graph_animation_enable == 0) { $system_graph_animation_enable = "false";} 
elseif($system_graph_animation_enable == 1) { $system_graph_animation_enable = "true";}

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

<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>

</head>
<body>
<div>
<script type="text/javascript">
  Ext.onReady(function(){
		  Ext.QuickTips.init();
		  Ext.form.Field.prototype.msgTarget = 'side';

		var login = new Ext.FormPanel({ 
		  renderTo: document.body,
		      buttonAlign: 'left',
		      width:420,
		      labelWidth:165,
		      url:'$nroot/index.php/system/subedit/', 
		      frame:true, 
		      title:'Information, Statistics, Settings', 
		      defaultType:'textfield',
		      monitorValid:true,
		      items:[
			     {
                             fieldLabel:'Kontrollbase Version',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '2.0.1 $revision',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'CodeIgniter Framework',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: 'version $ci_version',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'ExtJS framework',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: 'version $extjs_version',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Active hosts',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$active',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Inactive hosts',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$inactive',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Users',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$users',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Clients',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$clients',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Statistics table',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$stats_total',
				 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Report table',
                                 name:'',
                                 inputType: 'text',
                                 width:250,
                                 value: '$report_total',
                                 disabled: true,
                                 allowBlank:true
                                 },
			     {
                             fieldLabel:'Graph animation',
                                 name:'system_graph_animation_enable',
				 xtype: 'checkbox',
                                 checked: $system_graph_animation_enable,
				 boxLabel: ' check to enable'
                                 },
			     {
                             fieldLabel:'SSH connection timeout(sec)',
                                 name:'system_server_loop_timeout',
                                 inputType: 'text',
                                 width:250,
				 minLength: 1,
				 maxLength: 2,
                                 value: '$system_server_loop_timeout',
                                 allowBlank:false
                                 },
			     { 
			     fieldLabel:'Alert Email', 
				 name:'system_alerts_email', 
				 inputType: 'text',
				 vtype: 'email',
				 width:250,
				 value: '$system_alerts_email',
				 allowBlank:false 			
				 },
			     { 
			     fieldLabel:'System Hostname', 
				 name:'system_hostname', 
				 inputType: 'text',
				 width:250,
				 value: '$system_hostname',
				 allowBlank:false 
				 }
			     ],		      
		      buttons:[{ 
		    text:'Update System Settings',
			formBind: true, 
			handler:function(){ 
			login.getForm().submit({ 
			  method:'POST', 
			      waitTitle:'Connecting.', 
			      waitMsg:'Updating system settings...',
 
			      success:function(){
			      //we would usually redirect to do something but our extjs forms retain state, so no refresh needed. 
			    },
 
			      failure:function(form, action){ 
			      if(action.failureType == 'server'){ 
                                obj = Ext.util.JSON.decode(action.response.responseText); 
                                Ext.Msg.alert('Failed to update settings.', obj.errors.reason); 
			      }else{ 
                                Ext.Msg.alert('Warning!', 'Update server is unreachable : ' + action.response.responseText); 
			      } 
			      login.getForm().reset(); 
			    } 
			  }); 
		      } 
		    }] 
		      });
	      });
</script>
</div>
</body>
</html>
HEAD;
?>