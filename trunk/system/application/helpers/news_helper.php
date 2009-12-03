<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
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

function news() {
  log_message('debug', "news helper function starting");
  $CI = get_instance();
  $news_enable = $CI->config->item('news_enable');

  if($news_enable == TRUE) {
    log_message('debug', "news is enabled");
    $xmlfile = "http://kontrollsoft.com/archives/category/announcement/feed";
    $rss =  simplexml_load_file($xmlfile);
    $items= '';
    if ($rss) {
      foreach($rss->channel->item as $item) {
	$date = $item->pubDate; 
	$date = substr($date, 0, -15);
	$date = trim($date);
	$title = $item->title;
	$title = trim($title);
	$title = substr($title, 0, 160);
	$desc = $item->description;
	$desc = substr($desc, 0, 150);
	$desc = trim($desc);
	$desc .= "...";
	$link = $item->link;
	$link = trim($link);
	
	$items[] = array("date" => "$date",
			 "title" => "$title",
			 "desc" => "$desc",
			 "link" => "<a href=\"$link\" target=\"_blank\">click for more</a>");
      }
      return $items;    
    }
    else {
      $items = array(array("date" => "NULL",
			   "title" => "NULL",
			   "desc" => "NULL",
			   "link" => "NULL"));
      return $items;
    }
  }
  elseif($news_enable == FALSE) {
    log_message('debug', "news is disabled or config does not exist");
    $items = array(array("date" => "NULL",
			 "title" => "NULL",
			 "desc" => "News is disabled or your config item is missing. You can enable it in the system/application/config/config.php file.",
			 "link" => "NULL"));
    return $items;
  }
}

?>