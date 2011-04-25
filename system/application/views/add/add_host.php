<?php
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @package Kontrollbase
   * ID: $Id$
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
  print "['".$a['id']."','".$a['server_client_name']."'],\n";
}
print "['','']]});\n\n";

//$server_client_id = '0';
//$server_is_slave = '0';
//$server_type = '0';

print<<<HEAD
var slave = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [['0','no'],['1','yes']]
});

var type = new Ext.data.SimpleStore({
  fields: ['id','state'],
  data: [['0','Production'],['1','Staging'],['2','Development']]
});

Ext.form.VTypes["hostnameVal1"] = /^[a-zA-Z][-.a-zA-Z0-9]{0,254}$/;
Ext.form.VTypes["hostnameVal2"] = /^[a-zA-Z]([-a-zA-Z0-9]{0,61}[a-zA-Z0-9]){0,1}([.][a-zA-Z]([-a-zA-Z0-9]{0,61}[a-zA-Z0-9]){0,1}){0,}$/;
Ext.form.VTypes["ipVal"] = /^([1-9][0-9]{0,1}|1[013-9][0-9]|12[0-689]|2[01][0-9]|22[0-3])([.]([1-9]{0,1}[0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])){2}[.]([1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-4])$/;
Ext.form.VTypes["netmaskVal"] = /(^(128|192|224|24[08]|25[245])\.0\.0\.0$)|(^255\.(0|128|192|224|24[08]|25[245])\.0\.0$)|(^255\.255\.(0|128|192|224|24[08]|25[245])\.0$)|(^255\.255\.255\.(0|128|192|224|24[08]|252)$)/;
Ext.form.VTypes["portVal"] = /^(0|[1-9][0-9]{0,3}|[1-5][0-9]{4}|6[0-4][0-9]{3}|65[0-4][0-9]{2}|655[0-2][0-9]|6553[0-5])$/;
Ext.form.VTypes["multicastVal"] = /^((22[5-9]|23[0-9])([.](0|[1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-5])){3})|(224[.]([1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-5])([.](0|[1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-5])){2})|(224[.]0[.]([1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-5])([.](0|[1-9][0-9]{0,1}|1[0-9]{2}|2[0-4][0-9]|25[0-5])))$/;
Ext.form.VTypes["usernameVal"] = /^[a-zA-Z][-_.a-zA-Z0-9]{0,30}$/;
Ext.form.VTypes["passwordVal1"] = /^.{6,31}$/;
Ext.form.VTypes["passwordVal2"] = /[^a-zA-Z].*[^a-zA-Z]/;
Ext.form.VTypes["hostname"]=function(v){
  if(!Ext.form.VTypes["hostnameVal1"].test(v)){
  Ext.form.VTypes["hostnameText"]="Must begin with a letter and not exceed 255 characters"
  return false;
  }
  Ext.form.VTypes["hostnameText"]="L[.L][.L][.L][...] where L begins with a letter, ends with a letter or number, and does not exceed 63 characters";
  return Ext.form.VTypes["hostnameVal2"].test(v);
}
Ext.form.VTypes["hostnameText"]="Invalid Hostname"
  Ext.form.VTypes["hostnameMask"]=/[-.a-zA-Z0-9]/;
Ext.form.VTypes["ip"]=function(v){
  return Ext.form.VTypes["ipVal"].test(v);
}
Ext.form.VTypes["ipText"]="1.0.0.1 - 223.255.255.254 excluding 127.x.x.x"
  Ext.form.VTypes["ipMask"]=/[.0-9]/;
Ext.form.VTypes["netmask"]=function(v){
  return Ext.form.VTypes["netmaskVal"].test(v);
}
Ext.form.VTypes["netmaskText"]="128.0.0.0 - 255.255.255.252"
  Ext.form.VTypes["netmaskMask"]=/[.0-9]/;
Ext.form.VTypes["port"]=function(v){
  return Ext.form.VTypes["portVal"].test(v);
}
Ext.form.VTypes["portText"]="0 - 65535"
  Ext.form.VTypes["portMask"]=/[0-9]/;
Ext.form.VTypes["multicast"]=function(v){
  return Ext.form.VTypes["multicastVal"].test(v);
}
Ext.form.VTypes["multicastText"]="224.0.1.0 - 239.255.255.255"
  Ext.form.VTypes["multicastMask"]=/[.0-9]/;
Ext.form.VTypes["username"]=function(v){
  return Ext.form.VTypes["usernameVal"].test(v);
}
Ext.form.VTypes["usernameText"]="Username must begin with a letter and cannot exceed 255 characters"
  Ext.form.VTypes["usernameMask"]=/[-_.a-zA-Z0-9]/;
Ext.form.VTypes["password"]=function(v){
  if(!Ext.form.VTypes["passwordVal1"].test(v)){
    Ext.form.VTypes["passwordText"]="Password length must be 6 to 31 characters long";
    return false;
  }
  Ext.form.VTypes["passwordText"]="Password must include atleast 2 numbers or symbols";
  return Ext.form.VTypes["passwordVal2"].test(v);
}
Ext.form.VTypes["passwordText"]="Invalid Password"
  Ext.form.VTypes["passwordMask"]=/./;

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

		var host = new Ext.FormPanel({ 
		  renderTo: document.body,
		      bodyStyle:'padding:5px 5px 0',
		      buttonAlign: 'right',
		      width:390,
		      labelWidth:100,
		      url:'$nroot/index.php/add/subhost/', 
		      frame:true, 
		      title:'Add Host', 
		      defaultType:'textfield',
		      monitorValid:true,
		      items:[
			     {
			     fieldLabel:'IP Address',
				 vtype: 'ip',
				 name:'server_ipaddress',
				 inputType: 'text',
				 width:250,
				 minLength: 7,
                                 maxLength: 15,
				 value: '0.0.0.0',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Hostname',
				 vtype: 'hostname',
				 name:'server_hostname',
				 inputType: 'text',
				 width:250,
				 value: 'server_hostname',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SSH User',
				 vtype: 'username',
				 name:'server_ssh_user',
				 inputType: 'text',
				 width:250,
				 value: 'kontrollbase',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Port',
				 vtype: 'port',
				 name:'server_mysql_port',
				 inputType: 'text',
				 width:250,				 
				 value: '3306',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL DB',
				 name:'server_mysql_db',
				 inputType: 'text',
				 width:250,
				 value: 'mysql',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Host',				 
				 name:'server_mysql_host',
				 inputType: 'text',
				 width:250,
				 value: 'localhost',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL User',
				 vtype: 'username',
				 name:'server_mysql_user',
				 inputType: 'text',
				 width:250,
				 value: 'kontrollbase',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Pass',
				 vtype: 'password',
				 name:'server_mysql_pass',
				 inputType: 'password',
				 width:250,
				 minLength: 6,
				 maxLength: 32,
				 id: 'pass',
				 value: 'password',
				 allowBlank:false
				 },
			     {
			     fieldLabel: 'Confirm Pass',
				 name: 'server_mysql_pass_cfm',
				 width:250,
				 vtype: 'password',
				 inputType: 'password',
				 initialPassField: 'pass',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'MySQL Socket',
				 name:'server_mysql_socket',
				 inputType: 'text',
				 width:250,
				 value: '/var/lib/mysql/mysql.sock',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Address',
				 name:'server_snmp_local_address',
				 inputType: 'text',
				 width:250,
				 minLength: 7,
                                 maxLength: 15,
				 value: '127.0.0.1',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Port',
				 vtype: 'port',
				 name:'server_snmp_port',
				 inputType: 'text',
				 width:250,
				 maxLength: 5,
				 value: '161',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP rocommunity',
				 name:'server_snmp_rocommunity',
				 inputType: 'text',
				 width:250,
				 value: 'public',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'SNMP Version',
				 name:'server_snmp_version',
				 inputType: 'text',
				 width:250,
				 value: '1',
				 maxLength: 1,
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Thrreshold QPS',
				 name:'threshold_queries_per_second',
				 inputType: 'text',
				 width:250,
				 value: '1000',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Threshold SBM',
				 name:'threshold_seconds_behind_master',
				 inputType: 'text',
				 width:250,
				 value: '3600',
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
				 width: 140,
                                 emptyText:'Select Client',
                                 typeAhead: true,
                                 value: 'server client name?',
                                 triggerAction: 'all'
				 },
			     {
			     xtype: 'combo',
				 name: 'server_is_slave',
				 fieldLabel: 'Replication',
				 valueField:'id',
				 hiddenName: 'server_is_slave',
				 hiddenValue: 'server_is_slave',
				 mode: 'local',
				 store: slave,
				 displayField: 'state',
				 width: 140,
				 emptyText:'Replication',
				 typeAhead: true,
				 value: 'server is a slave?',
				 triggerAction: 'all'
				 },
			     {
			     xtype: 'combo',
				 name: 'server_type',
				 fieldLabel: 'Type',
				 valueField:'id',
				 hiddenName: 'server_type',
				 hiddenValue: 'server_type',
				 mode: 'local',
				 store: type,
				 displayField: 'state',
				 width: 140,
				 emptyText:'Server Type',
				 typeAhead: true,
				 value: 'server role type?',
				 triggerAction: 'all'
				 },
			     {
			     fieldLabel:'Notes',
				 name:'server_notes',
				 xtype: 'textarea',
				 inputType: 'text',
				 width:250,
				 height:80,
				 value: '$server_notes',
				 allowBlank:true
				 }
			     ],      
		      buttons:[
			       {
                               text:'Cancel',
                                   handler:function(){
                                   var redirect = '$nroot/index.php/show/hosts/';
                                   window.location = redirect;
                                 }
                               },
			       { 
			       text:'Submit Host',
				   formBind: true, 
				   handler:function(){ 
				   host.getForm().submit({ 
				     method:'POST', 
					 waitTitle:'Connecting.', 
					 waitMsg:'Adding host...',
					 setTimeout:10,
					 
					 success:function(){
                                           var redirect = '$nroot/index.php/show/hosts/';
                                           window.location = redirect;
				       },
					 
					 failure:function(form, action){ 
					 if(action.failureType == 'server'){ 
					   obj = Ext.util.JSON.decode(action.response.responseText); 
					   Ext.Msg.alert('Failed to add server.', obj.errors.reason); 
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
