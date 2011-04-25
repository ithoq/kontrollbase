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
$title = "Data Summary";
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
    <generator>'.$nroot.'/index.php/rss/summary/</generator>
    <language>en</language>';

foreach($data as $key => $value) {
  foreach($value as $k => $v) {
    if($k == 'server_list_id') { $server_list_id=$v;}
    if($k == 'server_hostname') { $server_hostname=$v;}
  }
  print "
      <item>
        <title>$title for $server_hostname</title>
        <link>$nroot/index.php/main/host/$server_list_id</link>
        <pubDate>$date</pubDate>
        <dc:creator>Kontrollbase admin</dc:creator>
          <content:encoded><![CDATA[
<table border='1px'>";

  foreach($value as $k => $v) {
    if($k == 'server_list_id') { $server_list_id=$v;}
    if($k == 'server_hostname') { $server_hostname=$v;}
    if($k == 'os_load_15') { $os_load_15=$v;}
    if($k == 'mem_perc') { $mem_perc=$v;}
    if($k == 'queries_per_second') { $queries_per_second=$v;}
    if($k == 'num_schema') { $num_schema=$v;}
    if($k == 'num_tables') { $num_tables=$v;}
    if($k == 'num_connections') { $num_connections=$v;}
    if($k == 'length_data') { $length_data=$v;}
    if($k == 'length_index') { $length_index=$v;}
    if($k == 'total_size') { $total_size=$v;}
    if($k == 'engine_count_innodb') { $engine_count_innodb=$v;}
    if($k == 'engine_count_myisam') { $engine_count_myisam=$v;}
    if($k == 'engine_myisam_size_data') { $engine_myisam_size_data=$v;}
    if($k == 'engine_myisam_size_index') { $engine_myisam_size_index=$v;}
    if($k == 'engine_myisam_size_total') { $engine_myisam_size_total=$v;}
    if($k == 'engine_innodb_size_data') { $engine_innodb_size_data=$v;}
    if($k == 'engine_innodb_size_index') { $engine_innodb_size_index=$v;}
    if($k == 'engine_innodb_size_total') { $engine_innodb_size_total=$v;}
  }
  print "<tr>
<td>server_hostname</td><td>$server_hostname</td></tr><tr>
<td>os_load_15</td><td>$os_load_15</td></tr><tr>
<td>mem_perc</td><td>$mem_perc %</td></tr><tr>
<td>QPS</td><td>$queries_per_second</td></tr><tr>
<td>num_schema</td><td>$num_schema</td></tr><tr>
<td>num_tables</td><td>$num_tables</td></tr><tr>
<td>num_connections</td><td>$num_connections</td></tr><tr>
<td>length_data</td><td>$length_data</td></tr><tr>
<td>length_index</td><td>$length_index</td></tr><tr>
<td>total_size</td><td>$total_size</td></tr><tr>
<td>engine_count_innodb</td><td>$engine_count_innodb</td></tr><tr>
<td>engine_count_myisam</td><td>$engine_count_myisam</td></tr><tr>
<td>engine_myisam_size_data</td><td>$engine_myisam_size_data</td></tr><tr>
<td>engine_myisam_size_index</td><td>$engine_myisam_size_index</td></tr><tr>
<td>engine_myisam_size_total</td><td>$engine_myisam_size_total</td></tr><tr>
<td>engine_innodb_size_data</td><td>$engine_innodb_size_data</td></tr><tr>
<td>engine_innodb_size_index</td><td>$engine_innodb_size_index</td></tr><tr>
<td>engine_innodb_size_total</td><td>$engine_innodb_size_total</td></tr></table>]]>
         </content:encoded>
      </item>
";

}

print "</channel>
</rss>";
//end of page
