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

class News extends Controller {

	function News()
	{
		parent::Controller();	
	}

	function index() {
	  $rss =  simplexml_load_file("http://kontrollsoft.com/archives/category/announcement/feed");
	  $items= '';
	  if ($rss) {
	    $i=1;
	    $c=count($rss->channel->item);
	    foreach ($rss->channel->item as $item) {
	      $date = $item->pubDate; 
	      $date = substr($date, 0, -15);
	      $title = $item->title;
	      $desc = $item->description;
	      $link = $item->link;
	      $items .= "<div class=\"x-tab\" title=\"$date\">
                          <p><b>$title</b></p>
                          <p>&nbsp;</p>
                          <p>$desc</p>
                          <p>&nbsp;</p> 
                          <p><a href='$link' target='_blank'>$link</a></p>
                          </div>\n";
	      $i++;
	    }
	    $g['root'] = $this->config->item('base_url');
	    $g['news'] = $items;
	    $g['total'] = $c;
	    $this->load->view('news/current',$g);
	  }
	  else {
	    $string = "<table><tr><td>No news today</td></tr></table>";
	    $g['root'] = $this->config->item('base_url');
	    $g['news'] = $string;
            $this->load->view('news/current',$g);
	  }
	}
}


?>