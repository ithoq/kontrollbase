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

//generate data store for clients
print "\n
<script type=\"text/javascript\">
var clients = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [";

foreach ($clients as $a) {
  // $clientlist[$a['id']]=$a['server_client_name'];
  print "['".$a['id']."','".$a['server_client_name']."'],\n";
}
print "['','']]});\n\n";

foreach($server as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $server_list_id=$vValue; }
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
    if($vKey == 'server_mysql_host') { $server_mysql_host=$vValue; }
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
}

print<<<HEAD
var slave = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [['0','no'],['1','yes']]
});

var type = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [['0','Production'],['1','Staging'],['2','Development']]
});

var active = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [['0','no'],['1','yes'],['2','error']]
});

  Ext.onReady(function(){
		Ext.QuickTips.init();
		
		var host = new Ext.FormPanel({ 
		  renderTo: document.body,
		      buttonAlign: 'right',
		      width:390,
		      labelWidth:120,
		      url:'$nroot/index.php/edit/subhost/', 
		      frame:true, 
		      title:'Host Settings', 
		      defaultType:'textfield',
		      monitorValid:true,
		      items:[
			     {
                             fieldLabel:'Server_list_id',
                                 name:'server_list_id',
                                 inputType: 'hidden',
                                 width:250,
                                 value: '$server_list_id',
                                 allowBlank:false
                                 },
			     {
			     fieldLabel:'IP Address',
				 name:'server_ipaddress',
				 inputType: 'text',
				 width:250,
				 value: '$server_ipaddress',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Hostname',
				 name:'server_hostname',
				 inputType: 'text',
				 width:250,
				 value: '$server_hostname',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SSH User',
				 name:'server_ssh_user',
				 inputType: 'text',
				 width:250,
				 value: '$server_ssh_user',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Port',
				 name:'server_mysql_port',
				 inputType: 'text',
				 width:250,
				 value: '$server_mysql_port',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL DB',
				 name:'server_mysql_db',
				 inputType: 'text',
				 width:250,
				 value: '$server_mysql_db',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Host',
				 name:'server_mysql_host',
				 inputType: 'text',
				 width:250,
				 value: '$server_mysql_host',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL User',
				 name:'server_mysql_user',
				 inputType: 'text',
				 width:250,
				 value: '$server_mysql_user',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Pass',
				 name:'server_mysql_pass',
				 inputType: 'password',
				 width:250,
				 value: '$server_mysql_pass',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Socket',
				 name:'server_mysql_socket',
				 inputType: 'text',
				 width:250,
				 value: '$server_mysql_socket',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Address',
				 name:'server_snmp_local_address',
				 inputType: 'text',
				 width:250,
				 value: '$server_snmp_local_address',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Port',
				 name:'server_snmp_port',
				 inputType: 'text',
				 width:250,
				 value: '$server_snmp_port',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP rocommunity',
				 name:'server_snmp_rocommunity',
				 inputType: 'text',
				 width:250,
				 value: '$server_snmp_rocommunity',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Version',
				 name:'server_snmp_version',
				 inputType: 'text',
				 width:250,
				 value: '$server_snmp_version',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Thrreshold QPS',
				 name:'threshold_queries_per_second',
				 inputType: 'text',
				 width:250,
				 value: '$threshold_queries_per_second',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Threshold SBM',
				 name:'threshold_seconds_behind_master',
				 inputType: 'text',
				 width:250,
				 value: '$threshold_seconds_behind_master',
				 allowBlank:false
				 },
			     {
			     xtype: 'combo',
				 name: 'server_client_id',
				 fieldLabel: 'Client',
                                 valueField: 'id',
				 hiddenName: 'server_client_id',
				 hiddenValue: '$server_client_id',
				 mode: 'local',
				 store: clients,
				 displayField: 'state',
				 width: 120,
                                 emptyText:'Select Client',
                                 typeAhead: true,
                                 value: '$server_client_name',
                                 triggerAction: 'all'
				 },
			     {
			     xtype: 'combo',
				 name: 'server_is_slave',
				 fieldLabel: 'Slave',
				 valueField:'id',
				 hiddenName: 'server_is_slave',
				 hiddenValue: '$server_is_slave',
				 mode: 'local',
				 store: slave,
				 displayField: 'state',
				 width: 120,
				 emptyText:'Replication',
				 typeAhead: true,
				 value: '$server_is_slave',
				 triggerAction: 'all'
				 },
			     {
			     xtype: 'combo',
				 name: 'server_type',
				 fieldLabel: 'Type',
				 valueField:'id',
				 hiddenName: 'server_type',
				 hiddenValue: '$server_type',
				 mode: 'local',
				 store: type,
				 displayField: 'state',
				 width: 120,
				 emptyText:'Server Type',
				 typeAhead: true,
				 value: '$server_type',
				 triggerAction: 'all'
				 },
			     {
			     xtype: 'combo',
				 name: 'active',
				 fieldLabel: 'Active',
				 valueField:'id',
				 hiddenName: 'active',
				 hiddenValue: '$active',
				 mode: 'local',
				 store: active,
				 displayField: 'state',
				 width: 120,
				 emptyText:'Active',
				 typeAhead: true,
				 value: '$active',
				 triggerAction: 'all'
				 }
			     ],      
		      buttons:[
			       { 
			       text:'Update Settings',
				   formBind: true, 
				   handler:function(){ 
				   host.getForm().submit({ 
				     method:'POST', 
					 waitTitle:'Connecting.', 
					 waitMsg:'Updating host settings...',
					 setTimeout:10,
					 
					 success:function(){
                                           var redirect = '$nroot/index.php/show/hosts/';
                                           window.location = redirect;
				       },
					 
					 failure:function(form, action){ 
					 if(action.failureType == 'server'){ 
					   obj = Ext.util.JSON.decode(action.response.responseText); 
					   Ext.Msg.alert('Failed to update settings.', obj.errors.reason); 
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
