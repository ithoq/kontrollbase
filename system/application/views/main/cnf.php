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

$i = 1;
$nroot = substr_replace($root,"",-1); //remove the trailing slash from the root path

// start the right table
print '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Kontrollbase 2.0.1 - MySQL Monitoring</title>

<link rel="stylesheet" type="text/css" href="'.$nroot.'/includes/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="'.$nroot.'/userguide/css/userguide-nofluff.css" />
</head>
<body>';

if($data) {
  $cnf_file = nl2br($data[0]['cnf_file']);
  $creation_time = $data[0]['creation_time'];
  print "<div id='content'>
<h2>Collected on: $creation_time</h2>
<table class='tableborder'>
<tr><td>$cnf_file</td></td>
</table></div>";
 }
 else {
   print "<div id='content'>
<h1>CNF Files Contents</h1>
<h2>0000-00-00</h2>
<table class='tableborder'>
<tr><td>No Contents</td></td>
</table></div>";
 }

?>
<body>
</body>
</html>