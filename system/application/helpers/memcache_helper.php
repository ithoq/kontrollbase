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

function memcache_start() {
  $CI = get_instance();

  $memenable = FALSE;
  $memcache = $CI->config->item('memcache_enabled');
  if($memcache == TRUE) {
    log_message('debug', "Memcache enabled in config");
    $memcache_ip = $CI->config->item('memcache_ip');
    $memcache_port = $CI->config->item('memcache_port');
    $memcache = $CI->cache->useMemcache($memcache_ip, $memcache_port);
    if(!$memcache) {
      log_message('debug', "Memcache connection failure.");
      show_error("Memcache library not enabled correctly. Please check configuration.");
      $CI->phpsession->clear('memcache_active');
    }
    else {
      log_message('debug', "Memcache active!");
      $CI->phpsession->save('memcache_active',TRUE);      
    }
  }
  else {
    log_message('debug', "Memcache not enabled in config.");
    $CI->phpsession->clear('memcache_active');
  }
  }
?>
