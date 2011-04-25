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

$nroot = substr_replace($root,"",-1);
$title = "Alerts Summary";
$date = date(DATE_RFC822); //Wed, 11 Feb 2009 16:34:08 +0000

//start rss xml 
print '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0"
xmlns:content="http://purl.org/rss/1.0/modules/content/"
xmlns:wfw="http://wellformedweb.org/CommentAPI/"
    xmlns:dc="http://purl.org/dc/elements/1.1/"
    xmlns:atom="http://www.w3.org/2005/Atom"
    xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
    >

<channel>
    <title>Kontrollbase - MySQL Monitoring and Analysis - '.$title.'</title>
    <atom:link href="'.$nroot.'" rel="self" type="application/rss+xml" />
    <link>'.$nroot.'</link>
    <description>Kontrollbase - RSS - '.$title.'</description>
    <pubDate>Wed, 11 Feb 2009 16:34:08 +0000</pubDate>
    <generator>'.$nroot.'/index.php/rss/alerts/</generator>
    <language>en</language>';

foreach($alerts as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'server_list_id') { $server_list_id=$v;}
    if($k == 'server_hostname') { $server_hostname=$v;}
    if($k == 'alert_name') { $alert_name=$v;}
  }
  print "
      <item>
        <title>$server_hostname - $alert_name</title>
        <link>$nroot/index.php/main/host/$server_list_id</link>
        <pubDate>$date</pubDate>
        <dc:creator>Kontrollbase admin</dc:creator>
          <content:encoded><![CDATA[";
  //  foreach($alerts as $key => $value) {
    foreach($value as $k => $v) {
      if($k == 'alert_name') { $alert_name=$v;}
      if($k == 'alerts_current_id') { $alerts_current_id=$v;}
      if($k == 'alert_desc') { $alert_desc=$v;}
      if($k == 'alert_links') { $alert_links=$v;}
      if($k == 'alert_solution') { $alert_solution=$v;}
      if($k == 'server_list_id') { $server_list_id=$v;}
      if($k == 'server_hostname') { $server_hostname=$v;}
    }

  print "
<b>description</b>: $alert_desc<br>
<b>solution</b>: $alert_solution<br>
<b>links</b>: $alert_links<br>
]]>     </content:encoded>
      </item>
";

}

print "</channel>
</rss>";
//end of page
