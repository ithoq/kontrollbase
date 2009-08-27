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

function exists($file) {
  if (file_exists($file)) {
    log_message('debug', "Config file: $file exists.");
    return 0;
  } 
  else {
    log_message('debug', "File $file does NOT exist");
    show_error("File '$file' does NOT exist");
    return 1;
  }
}

function removeinstall($file) {
  if (file_exists($file)) {
    log_message('debug', "Install file: $file exists. Removing");
    system("rm -f $file");
    return 0;
  }
  else {
    log_message('debug', "File $file does NOT exist");
    return 0;
  }
}

function writeable($file) {
  if(is_writable($file)) {
    log_message('debug', "Directory $file is writeable.");
    return 0;
  } 
  else {
    log_message('debug', "Directory $file is NOT writeable");
    show_error("Directory '$file' is NOT writeable");
    return 1;
  }
}

function check_writeable() {
  $CI = get_instance();
  $syspath = $g['root'] = $CI->config->item('base_dir');

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

function check_files() {
  $CI = get_instance();
  $syspath = $g['root'] = $CI->config->item('base_dir');

  $installfile="$syspath/install.php";
  $sysconfig="$syspath/system/application/config/config.php";
  $sysdatabase="$syspath/system/application/config/database.php";
  
  //check to see if config files exist
  exists($sysconfig);
  exists($sysdatabase);
  removeinstall($installfile);
}

?>