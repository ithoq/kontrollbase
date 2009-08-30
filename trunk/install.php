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

function head_m($nroot) {
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
    Ext.onReady(function(){                                                                                                                                                                                                                   
		  Ext.Msg.alert('Config files already exist.', 'Click ok to go to the main page.', function(btn, text){
				  if (btn == 'ok'){
				    var redirect = '$nroot/index.php';
				    window.location = redirect;
				  }
				})});
  </script>
      </head>
      <body>
      
HEAD;
}

function head_i($nroot) {
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
    Ext.onReady(function(){                                                                                                                                                                                                                   
		  Ext.Msg.alert('Config files do not exist!', 'Click ok to start the install process.', function(btn, text){
				  if (btn == 'ok'){
				    var redirect = '$nroot/install/overview.php';
				    window.location = redirect;
				  }
				})});
  </script>
      </head>
      <body>
      
HEAD;
}

function check_install() {
  $nroot = $_SERVER['PHP_SELF'];
  $server = $_SERVER['SERVER_NAME'];
  $nroot = rtrim($nroot, "/install.php");

  $syspath = $_SERVER['SCRIPT_FILENAME'];
  $syspath = rtrim($syspath, ".php");
  $syspath = rtrim($syspath, "/install");

  $sysconfig="$syspath/system/application/config/config.php";
  $sysdatabase="$syspath/system/application/config/database.php";
  
  //check to see if config files exist
  $install_sc = exists($sysconfig);
  $install_sd = exists($sysdatabase);

  if($install_sc == 1) {
    head_i($nroot);
  }
  elseif($install_sd == 1) {
    head_i($nroot);
  }
  else {
    head_m($nroot);
  }
}

function exists($file) {
  if (file_exists($file)) {
    return 0;
  } 
  else {
    return 1;
  }
}

check_install();

?>