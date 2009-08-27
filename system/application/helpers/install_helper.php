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

function check_install() {
  //check to see if config files exist
  
  //system/application/config/config.php
  //system/application/config/database.php

  // use file_exists() 

  //else {
  // return 0;
  //}
}

function writeable($file) {
  if(is_writable($file)) {
    log_message('debug', "$file is writeable");
    return 0;
  } 
  else {
    log_message('debug', "$file is NOT writeable");
    show_error("Directory '$file' is NOT writeable");
    return 1;
  }
}

function check_writeable() {
  $CI = get_instance();
  $syspath = $g['root'] = $CI->config->item('base_dir');
  $file_information = "writeable";

  //dirs we need to check 
  $pages = "$syspath/includes/pages";
  $graphs = "$syspath/includes/graphs";
  $logs = "$syspath/system/logs";
  $cache = "$syspath/system/cache";

  writeable($pages);
  writeable($graphs);
  writeable($logs);
  writeable($cache);
  
}

?>