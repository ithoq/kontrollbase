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

$nroot = $_SERVER['PHP_SELF'];
$server = $_SERVER['SERVER_NAME'];
$nroot = rtrim($nroot, "/overview.php");
$nroot = rtrim($nroot, "/install");

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
    
    <script type="text/javascript" src="$nroot/includes/extjs/adapter/ext/ext-base.js"></script>
    <script type="text/javascript" src="$nroot/includes/extjs/ext-all-debug.js"></script>
    
    <script type="text/javascript">
    Ext.onReady(function(){                                                                                                                                                                                                                   
		  Ext.Msg.alert('Before we continue...', "Please <a href='http://kontrollsoft.com/kontrollbase/userguide/installation-webapp.php'>read the database setup document</a> before continuing.<br><br><h2>Getting the database ready</h2>You will need to create the schema and users on your database.<br><br><h3>On the database server</h3><code>shell> mysql -uroot -p --host=localhost<br>mysql> create database kontrollbase;<br>mysql> grant all on kontrollbase.* to 'kb_admin'@'localhost' identified by 'password';<br>mysql> grant all on kontrollbase.* to 'kb_app'@'localhost' identified by 'password';<br>mysql> grant select,super,process,replication client on *.* to 'kontrollbase'@'webapp_server' identified by 'password';</code><br><br><h3>System Commands</h3>Make sure all files are owned by the webserver user. The following command assumes you installed to /var/www/html/kontrollbase and that the webs-server is running under the 'apache' user and group.<br><br><code>shell> cd /var/www/html/kontrollbase<br>shell> chown -R apache:apache *<br>shell> mysql --user=kb_admin -p --host=localhost kontrollbase < /var/www/html/kontrollbase/install/sql/kontrollbase-2.0.1.sql</code>", function(btn, text){
				  if (btn == 'ok'){
				    var redirect = '$nroot/install/setup.php';
				    window.location = redirect;
				  }
				})});
  </script>
      </head>
      <body>
      
HEAD;


?>