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

function head_d($nroot,$syspath,$w_logs,$w_includes,$w_config) {
  $d_logs = "$syspath/system/logs";
  $d_includes = "$syspath/includes";
  $d_config = "$syspath/system/application/config";

  if($w_logs == 1) { $w_logs = "FAIL"; } else { $w_logs = "OK"; }
  if($w_includes == 1) { $w_includes = "FAIL"; } else { $w_includes = "OK"; }
  if($w_config == 1) { $w_config = "FAIL"; } else { $w_config = "OK"; }

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
                  Ext.Msg.alert('Installer Failure.', 'Directory Check: FAIL<br>$d_logs = $w_logs<br>$d_includes=$w_includes<br>d_config=$w_config<br>Please correct the permissions.', function(btn, text){
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

function head_m($nroot,$syspath,$install_sc,$install_sd) {
  $sysconfig="$syspath/system/application/config/config.php";
  $sysdatabase="$syspath/system/application/config/database.php";
  if($install_sc == 1) { $install_sc = "EXISTS"; } else { $install_sc = "OK"; }
  if($install_sd == 1) { $install_sd = "EXISTS"; } else { $install_sd = "OK"; }

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
		  Ext.Msg.alert('Installer Failure.', 'Config files check: FAIL<br>$sysconfig=$install_sc<br>$sysdatabase=$install_sd<br>Please remove config files if you want to reinstall.', function(btn, text){
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

function head_i($nroot,$syspath,$d_logs,$d_includes,$d_config) {
  $len = ((strlen($syspath)) + 1) ;
  $d_logs = substr($d_logs,$len);
  $d_includes = substr($d_includes,$len);
  $d_config = substr($d_config,$len);
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
		  Ext.Msg.alert('The Kontrollbase Installer', '<table><tr><td>Config File Check</td><td><img src="includes/images/check-red.png" width="16" height="20"></td></tr><tr><td>Directory $d_logs:</td><td><img src="includes/images/check-red.png" width="16" height="20"></td></tr><tr><td>Directory $d_includes:</td><td><img src="includes/images/check-red.png" width="16" height="20"></td></tr><tr><td>Directory $d_config:</td><td><img src="includes/images/check-red.png" width="16" height="20"></td></tr></table>', function(btn, text){
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

function dir_writeable($file) {
  if(is_writable($file)) {
    return 0;
  }
  else {
    return 1;
  }
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
  $d_logs = "$syspath/system/logs";
  $d_includes = "$syspath/includes";
  $d_config = "$syspath/system/application/config";
  
  //check to see if config files exist
  $install_sc = exists($sysconfig);
  $install_sd = exists($sysdatabase);
  $w_logs = dir_writeable($d_logs);
  $w_includes = dir_writeable($d_includes);
  $w_config = dir_writeable($d_config);

  if(($install_sc == 0) && ($install_sd == 0) && ($w_logs == 0) && ($w_includes == 0) && ($w_config == 0)) {
    head_i($nroot,$syspath,$d_logs,$d_includes,$d_config);
  }
  elseif(($install_sc == 1) || ($install_sd == 1)) {
    head_m($nroot,$syspath,$install_sc,$install_sd);
  }
  else {
    head_d($nroot,$syspath,$w_logs,$w_includes,$w_config);
  }
}

function exists($file) {
  if (file_exists($file)) {
    return 1;
  } 
  else {
    return 0;
  }
}

check_install();

?>