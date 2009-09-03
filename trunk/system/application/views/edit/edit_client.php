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
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/ext-all.css" />
<link rel="stylesheet" type="text/css" href="$nroot/includes/extjs/resources/css/xtheme-slate.css" />

<script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
<script type="text/javascript" src="$nroot/includes/extjs/ext-all.js"></script>
HEAD;

print "\n
<script type=\"text/javascript\">";

foreach($client as $key => $value) {
  foreach($value as $vKey => $vValue) {
    if($vKey == 'id') { $server_client_id=$vValue; }
    if($vKey == 'server_client_name') { $server_client_name=$vValue; }
    if($vKey == 'server_client_email') { $server_client_email=$vValue; }
    if($vKey == 'server_client_phone') { $server_client_phone=$vValue; }
    if($vKey == 'creation_time') { $creation_time=$vValue; }
  }
}

print<<<HEAD
  Ext.onReady(function(){
		Ext.QuickTips.init();
		
		var host = new Ext.FormPanel({ 
		  renderTo: document.body,
		      buttonAlign: 'right',
		      width:390,
		      labelWidth:120,
		      url:'$nroot/index.php/edit/subclient/', 
		      frame:true, 
		      title:'Edit Client', 
		      defaultType:'textfield',
		      monitorValid:true,
		      items:[
                             {
			     name:'server_client_id',
                                 inputType: 'hidden',
                                 value: '$server_client_id',
                                 allowBlank:false
                                 },
                             {
                             fieldLabel:'Name',
                                 name:'server_client_name',
                                 inputType: 'text',
                                 width:250,
                                 value: '$server_client_name',
                                 allowBlank:false
                                 },
			     {
			     fieldLabel:'Email',
				 name:'server_client_email',
				 inputType: 'text',
				 width:250,
				 vtype:'email',
				 value: '$server_client_email',
				 allowBlank:false
				 },
			     {
			     fieldLabel:'Phone',
				 name:'server_client_phone',
				 inputType: 'text',
				 width:250,
				 value: '$server_client_phone',
				 allowBlank:false
				 }
			     ],      
		      buttons:[
			       { 
			       text:'Edit Client',
				   formBind: true, 
				   handler:function(){ 
				   host.getForm().submit({ 
				     method:'POST', 
					 waitTitle:'Connecting.', 
					 waitMsg:'Editing client...',
					 setTimeout:10,
					 
					 success:function(){
                                           var redirect = '$nroot/index.php/show/clients/';
                                           window.location = redirect;
				       },
					 
					 failure:function(form, action){ 
					 if(action.failureType == 'server'){ 
					   obj = Ext.util.JSON.decode(action.response.responseText); 
					   Ext.Msg.alert('Failed to edit client.', obj.errors.reason); 
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
