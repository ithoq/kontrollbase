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
	  $basedir = $this->config->item('base_dir');
	  $xmlurl = read_file("http://kontrollsoft.com/feed/rss");
	  
	  $rss =  simplexml_load_file("http://kontrollsoft.com/feed");
	  if ($rss) {
	    $string = "<table>\n";
	    foreach ($rss->channel->item as $item) {
	      $date = $item->pubDate; 
	      $title = $item->title;
	      $desc = $item->description;
	      $link = $item->link;
	      
	      $string .= "<tr><td><strong>$title</strong></td></tr>\n";
	      $string .= "<tr><td>$date</td></tr>\n";
	      $string .= "<tr><td>$desc</td></tr>\n";
	      $string .= "<tr><td>$link</td></tr>\n";
	      
	      $catcount=0;
	      $category='';
	      foreach($item->category as $cat) {
		if($category == '') {
		  $category=$cat[$catcount];
		}
		else {
		  $category = $category.",".$cat[$catcount];
		}
	      }
	      $string .= "<tr><td>$category</td></tr>\n";
	    }        
	    $g['news'] = $string;
	    $this->load->view('news/current',$g);
	  }
	  else {
	    $string = "<table><tr><td>No news today</td></tr></table>";
	    $g['news'] = $string;
            $this->load->view('news/current',$g);
	  }
	}
}


?>