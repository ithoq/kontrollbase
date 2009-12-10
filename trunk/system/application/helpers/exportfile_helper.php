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

// write data to report file
function wfile($file,$data) {
  $CI = get_instance();
  $path = $CI->config->item('base_dir');
  $path = "$path/includes/pages";
  $file = "Kontrollbase-analytics-$file.csv";
  $data = "$data\n";
  log_message('debug', "Writing data to $path/$file.");
  if ( ! write_file("$path/$file", $data,'a'))
    {
      log_message('debug','Unable to write the file $path/$file');
    }
}
?>