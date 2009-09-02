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

  // @ $type = host/client/user
  // @ id = id of $type
  // @ $page = from whence we came
$nroot = substr_replace($root,"",-1);

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
    <script type="text/javascript" src="$nroot/includes/extjs/ext-all-debug.js"></script>
    
    <script type='text/javascript'>
    var processResult=function(btn, text) {
    if (btn == 'yes'){
      var redirect = '$nroot/index.php/delete/$type/$id';
      window.location = redirect;
    }
    if (btn == 'no'){
      var redirect = '$nroot/index.php/$page';
      window.location = redirect;
    }};

Ext.onReady(function(){
	      Ext.Msg.show({
		title:'Confirm Delete.',
		    msg: 'Are you sure you want to delete $type $id?',
		    buttons: Ext.Msg.YESNO,
		    fn: processResult,
		    animEl: 'elId',		    
		    })
		});

  </script>
      </head>
      <body>
      
HEAD;


?>