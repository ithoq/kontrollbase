<?php  
  /**
   * Kontrollbase
   *
   * An open source MySQL monitoring and analytics application
   *
   * @packageKontrollbase
   * @authorMatt Reid
   * @copyrightCopyright (c) 2009 Matt Reid, Kontrollbase LLC
   * @licensehttp://kontrollsoft.com/kontrollbase/userguide/general-LICENSE.php
   * @linkhttp://kontrollbase.cm
   * @sinceVersion 2.0.1
   * @filesource
   */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$active_group = "write";
$active_record = TRUE;
//
// MySQL Database connections settings for select queries
// mysql> GRANT SELECT on dbname.* to '<user>'@'<host>' identified by '<password>';
$db['read']['hostname'] = "localhost";
$db['read']['username'] = "kb_app";
$db['read']['password'] = "password";
$db['read']['database'] = "kontrollbase";
$db['read']['dbdriver'] = "mysql";
$db['read']['dbprefix'] = "";
$db['read']['pconnect'] = TRUE;
$db['read']['db_debug'] = FALSE;
$db['read']['cache_on'] = FALSE;
$db['read']['cachedir'] = "";
$db['read']['char_set'] = "utf8";
$db['read']['dbcollat'] = "utf8_general_ci";
//
// MySQL Database connections settings for insert/update/delete queries
// mysql> GRANT INSERT,UPDATE,DELETE on dbname.* to '<user>'@'<host>' identified by '<password>';
$db['write']['hostname'] = "localhost";
$db['write']['username'] = "kb_app";
$db['write']['password'] = "password";
$db['write']['database'] = "kontrollbase";
$db['write']['dbdriver'] = "mysql";
$db['write']['dbprefix'] = "";
$db['write']['pconnect'] = TRUE;
$db['write']['db_debug'] = FALSE;
$db['write']['cache_on'] = FALSE;
$db['write']['cachedir'] = "";
$db['write']['char_set'] = "utf8";
$db['write']['dbcollat'] = "utf8_general_ci";
/* End of file database.php */
/* Location: ./system/application/config/database.php */
?>
