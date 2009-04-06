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
          <content:encoded><![CDATA[";
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
  print "
<item>
 <name>hostname</name>
 <data>$server_hostname</data>
</item> 
<item>
 <name>load</name>
 <data>$os_load_15</data>
</item> 
<item>
 <name>mem used</name>
 <data>$mem_perc %</data> 
</item> 
<item>
 <name>QPS</name> 
 <data>$queries_per_second</data>
</item> 
<item>
 <name>schema</name>
 <data>$num_schema</data>
</item> 
<item>
 <name>tables</name>
 <data>$num_tables</data>
</item> 
<item>
 <name>conn</name>
 <data>$num_connections</data>
</item> 
<item>
 <name>sum data</name>
 <data>$length_data</data> 
</item> 
<item>
 <name>sum index</name>
 <data>$length_index</data>
</item> 
<item>
 <name>total_size</name>
 <data>$total_size</data>
</item> 
<item>
 <name>num innodb</name>
 <data>$engine_count_innodb</data>
</item> 
<item>
 <name>num myisam</name>
 <data>$engine_count_myisam</data>
</item> 
<item>
 <name>myisam_data</name>
 <data>$engine_myisam_size_data</data> 
</item> 
<item>
 <name>myisam_index</name>
 <data>$engine_myisam_size_index</data> 
</item> 
<item>
 <name>myisam_total</name>
 <data>$engine_myisam_size_total</data>
</item> 
<item>
 <name>innodb_data</name>
 <data>$engine_innodb_size_data</data>
</item> 
<item>
 <name>innodb_index</name>
 <data>$engine_innodb_size_index</data>
</item> 
<item>
 <name>innodb_total</name>
 <data>$engine_innodb_size_total</data>
</item>]]>
         </content:encoded>
      </item>
";

}

print "</channel>
</rss>";
//end of page
