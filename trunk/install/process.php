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

  //error_reporting(E_ALL);
  //ini_set('display_errors', false);
  //ini_set('html_errors', true);

//POST data from setup.php
$MYSQL_R_USER = $_POST['mysql_r_user'];
$MYSQL_R_PASS = $_POST['mysql_r_pass'];
$MYSQL_R_DB = $_POST['mysql_r_db'];
$MYSQL_R_HOST = $_POST['mysql_r_host'];

$MYSQL_A_USER = $_POST['mysql_a_user'];
$MYSQL_A_PASS = $_POST['mysql_a_pass'];

$WEB_ROOT = $_POST['web_root'];
$BASE_DIR = $_POST['base_dir'];
$ERROR_LOG = "$BASE_DIR/system/logs/sys_error.log";
$DEBUG_LOG = "$BASE_DIR/system/logs/sys_debug.log";
$INSTALL_LOG = "$BASE_DIR/system/logs/sys_install.log";

$SQLFILE = "$BASE_DIR/install/sql/kontrollbase-schema-2.0.1.sql";

function logger($data,$INSTALL_LOG) {
  $data = "$data \n";
  if (!$handle = fopen("$INSTALL_LOG", 'a')) {
    echo "{success: false, errors: { reason: 'Cannot open file: $filename' }}";
    exit;
  }
  if (fwrite($handle, $data) === FALSE) {
    echo "{success: false, errors: { reason: 'Cannot write to file: $filename' }}";
    exit;
  }
  fclose($handle);
  return 0;
}

function table_check($table,$MYSQL_DB,$MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS,$INSTALL_LOG) {
  $link = @mysql_connect($MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS);
  if(!$link) {
    $err = mysql_error();
    $err = str_replace("'", '"', $err);
    logger("Database error: $err.",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";    
    exit;
  }
  $tables = mysql_list_tables($MYSQL_DB);
  while(list($temp) = mysql_fetch_array($tables)) {
    if (strtolower($temp) == strtolower($table)) {
      logger("Table $table already exists in $MYSQL_DB. Exiting.",$INSTALL_LOG);
      echo "{success: false, errors: { reason: 'Table $table already exists in $MYSQL_DB' }}";
      exit;
    }
  }
}

function setup_db($MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS,$MYSQL_DB,$SQLFILE,$INSTALL_LOG) {
  logger("starting db install for $MYSQL_HOST,$MYSQL_USER,$MYSQL_DB",$INSTALL_LOG);
  $link = @mysql_connect($MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS);
  if(!$link) {
    $err = mysql_error();
    $err = str_replace("'", '"', $err);
    logger("Database error: $err.",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  logger("Selecting database $MYSQL_DB",$INSTALL_LOG);
  $getdb = @mysql_select_db($MYSQL_DB);
  if(!$getdb) {
    $err = mysql_error();
    $err = str_replace("'", '"', $err);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  //  $tblist = array("alerts_current","alerts_custom","alerts_def","api_users","graphs_custom","graphs_default","server_client","server_list",
  //		  "server_report","server_statistics","system_main","system_pages","system_pruning_audit","system_users","system_users_audit","webapp_sessions");
  //  foreach($tblist as $table) {
  //    logger("Running table check for $table.",$INSTALL_LOG);
  //    table_check($table,$MYSQL_DB,$MYSQL_HOST,$MYSQL_USER,$MYSQL_PASS,$INSTALL_LOG);
  //  }
  
  //  $handle = fopen("$SQLFILE", "rb");
  //  $contents = '';
  //  while (!feof($handle)) {
  //    $contents .= fread($handle, 8192);
  //  }
  //  fclose($handle);
  //  $sql = explode("\n",$contents);
  //  foreach ($sql as $statement) {
  //    if (substr(rtrim($statement, -1) == ';')) {
  //      logger("Query executing: $sql",$INSTALL_LOG);
  //      mysql_query($sql);
  //      if(!$result) {
  //	$err = mysql_error();
  //	$err = str_replace("'", '"', $err);
  //	logger("Database error: $err.",$INSTALL_LOG);
  //	echo "{success: false, errors: { reason: '$err' }}";
  //	exit;
  //      }
  //      $sql = "";
  //    }       
  //  }
}


//randomizer for our session encryption generator
function mkRandPasswd()
{
  define('NUM0', 48);
  define('NUM9', 57);
  define('LETA', 65);
  define('LETZ', 90);
  define('LETa', 97);
  define('LETz', 122);
  $salt = '';
  $passwd = '';

  define('PASSWD_LEN', 10);

  for($nLoop = 0; $nLoop < NUM9 - NUM0 + 1; $nLoop++)
    $salt .= chr(mt_rand(NUM0, NUM9));
  for($ucLoop = 0; $ucLoop < LETZ - LETA + 1; $ucLoop++)
    $salt .= chr(mt_rand(LETA, LETZ));
  for($lcLoop = 0; $lcLoop < LETz - LETa + 1; $lcLoop++)
    $salt .= chr(mt_rand(LETa, LETz));

  $salt = str_shuffle($salt);

  for($gen = 0; $gen < PASSWD_LEN; $gen++)
    $passwd = $passwd . substr($salt, mt_rand() % strlen($salt), 1);

  return array($salt, $passwd);
}

$salt = date('l jS \of F Y h:i:s A U').mkRandPasswd();
$ENCRYPTION_KEY = md5(md5($salt.$salt));

$cfgfile="################################################################################
## NAME: config.cfg
## VERSION: 2.0.1
## DATE: 2009-03-18
## AUTHOR: Matt Reid
## WEBSITE: http://kontrollsoft.com
## EMAIL: kontact@kontrollsoft.com
## LICENSE: PLEASE REFER TO THE LICENSE.txt file bundled with this software release
## to understand your right and options for using this software.
## Copyright 2008 Kontrollsoft LLC
## All rights reserved.
################################################################################
# NOTES
# do not encapsulate anything in quotes.
# the order of these is absolutely important so don't go moving them from 
# one line to the next or anything.
#
# We're splitting the read/write query types for scalability if needed. Feel free
# to use the same settings for each if you don't need to scale in this fashion.
#
# MySQL Database connections settings for select queries
# mysql> GRANT SELECT on dbname.* to '<user>'@'<host>' identified by '<password>';
MYSQL_R_USER=$MYSQL_R_USER
MYSQL_R_PASS=$MYSQL_R_PASS
MYSQL_R_DB=$MYSQL_R_DB
MYSQL_R_HOST=$MYSQL_R_HOST
#
# MySQL Database connections settings for insert/update/delete queries
# mysql> GRANT INSERT,UPDATE,DELETE on dbname.* to '<user>'@'<host>' identified by '<password>';
MYSQL_W_USER=$MYSQL_R_USER
MYSQL_W_PASS=$MYSQL_R_PASS
MYSQL_W_DB=$MYSQL_R_DB
MYSQL_W_HOST=$MYSQL_R_HOST
#
# Error logging 
ERROR_LOG=$ERROR_LOG
DEBUG_LOG=$DEBUG_LOG
#
# Web Stuff - no trailing slash
WEB_ROOT=$WEB_ROOT
#
# USER CREATION - ONLY FOR kontrollbase USER ON CLIENT SERVERS
##############################################################
# mysql> grant select,process,super,replication client on *.* to 'kontrollbase'@'127.0.0.1' identified by '<password>';
";

//db
$dbfile='<?php  
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
if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');
$active_group = "write";
$active_record = TRUE;
$db[\'read\'][\'hostname\'] = "'.$MYSQL_R_HOST.'";
$db[\'read\'][\'username\'] = "'.$MYSQL_R_USER.'";
$db[\'read\'][\'password\'] = "'.$MYSQL_R_PASS.'";
$db[\'read\'][\'database\'] = "'.$MYSQL_R_DB.'";
$db[\'read\'][\'dbdriver\'] = "mysql";
$db[\'read\'][\'dbprefix\'] = "";
$db[\'read\'][\'pconnect\'] = TRUE;
$db[\'read\'][\'db_debug\'] = FALSE;
$db[\'read\'][\'cache_on\'] = FALSE;
$db[\'read\'][\'cachedir\'] = "";
$db[\'read\'][\'char_set\'] = "utf8";
$db[\'read\'][\'dbcollat\'] = "utf8_general_ci";
$db[\'write\'][\'hostname\'] = "'.$MYSQL_R_HOST.'";
$db[\'write\'][\'username\'] = "'.$MYSQL_R_USER.'";
$db[\'write\'][\'password\'] = "'.$MYSQL_R_PASS.'";
$db[\'write\'][\'database\'] = "'.$MYSQL_R_DB.'";
$db[\'write\'][\'dbdriver\'] = "mysql";
$db[\'write\'][\'dbprefix\'] = "";
$db[\'write\'][\'pconnect\'] = TRUE;
$db[\'write\'][\'db_debug\'] = FALSE;
$db[\'write\'][\'cache_on\'] = FALSE;
$db[\'write\'][\'cachedir\'] = "";
$db[\'write\'][\'char_set\'] = "utf8";
$db[\'write\'][\'dbcollat\'] = "utf8_general_ci";
/* End of file database.php */
/* Location: ./system/application/config/database.php */
?>';

$configfile='<?php  
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
if ( ! defined(\'BASEPATH\')) exit(\'No direct script access allowed\');
$config[\'base_url\']= "'.$WEB_ROOT.'"; //USE TRAILING SLASH
$config[\'base_dir\']     = "'.$BASE_DIR.'"; //NO TRAILING SLASH
$config[\'schema_readonly_name\'] = "'.$MYSQL_R_DB.'";
$config[\'index_page\'] = "index.php";
$config[\'uri_protocol\']= "AUTO";
$config[\'url_suffix\'] = "";
$config[\'language\']= "english";
$config[\'charset\'] = "UTF-8";
$config[\'enable_hooks\'] = FALSE;
$config[\'subclass_prefix\'] = \'MY_\';
$config[\'permitted_uri_chars\'] = \'a-z 0-9~%.:_\-\';
$config[\'enable_query_strings\'] = FALSE;
$config[\'controller_trigger\'] = \'c\';
$config[\'function_trigger\'] = \'m\';
$config[\'directory_trigger\'] = \'d\'; 
$config[\'log_threshold\'] = 4;
$config[\'log_path\'] = \'\';
$config[\'log_date_format\'] = \'Y-m-d H:i:s\';
$config[\'cache_path\'] = \'\';
$config[\'encryption_key\'] = "'.$ENCRYPTION_KEY.'";
$config[\'sess_cookie_name\']= \'kontrollbase_session\';
$config[\'sess_expiration\']= 600;
$config[\'sess_encrypt_cookie\']= TRUE;
$config[\'sess_use_database\']= FALSE;
$config[\'sess_table_name\']= \'webapp_sessions\';
$config[\'sess_match_ip\']= FALSE;
$config[\'sess_match_useragent\']= TRUE;
$config[\'sess_time_to_update\'] = 600;
$config[\'cookie_prefix\']= "";
$config[\'cookie_domain\']= "";
$config[\'cookie_path\']= "/";
$config[\'global_xss_filtering\'] = TRUE;
$config[\'compress_output\'] = FALSE;
$config[\'time_reference\'] = \'local\';
$config[\'rewrite_short_tags\'] = FALSE;
/* End of file config.php */
/* Location: ./system/application/config/config.php */
?>';

function makefile($filename,$data,$INSTALL_LOG) {
  logger("starting makefile for $filename",$INSTALL_LOG);
  if (file_exists($filename)) {
    logger("$filename already exists!",$INSTALL_LOG);
    echo "{success: false, errors: { reason: 'Config file: $filename already exists!' }}";
    exit;
  }
  if (!$handle = fopen($filename, 'w')) {
    logger("cannot open $filename",$INSTALL_LOG);
    echo "{success: false, errors: { reason: 'Cannot open file: $filename' }}";
    exit;
  }  
  if (fwrite($handle, $data) === FALSE) {
    logger("cannot write to $filename",$INSTALL_LOG);
    echo "{success: false, errors: { reason: 'Cannot write to file: $filename' }}";
    exit;
  }
  logger("$filename created successfully",$INSTALL_LOG);
  fclose($handle);
  return 0;
}


function array_ereg_search($val, $array) {
  $i = 0;
  $return = array();
  foreach($array as $v) {
    if(eregi($val, $v)) $return[] = $i;
    $i++;
  }
  return $return;
}


function check_prerequisites_php($INSTALL_LOG) {
  
  logger("Beggining PHP prerequisite checks",$INSTALL_LOG);
  
  $lm_php=get_loaded_extensions();
  $mm_php=array();
  
  if (!(in_array("dom",$lm_php))) {
    echo "Don't Got dom <br>";
    array_push($mm_php, "dom");
    logger("Unable to locate dom prerequisite",$INSTALL_LOG);
  }
  else {logger("Prerequisite dom located",$INSTALL_LOG);}
  
  if (!(in_array("mbstring",$lm_php))) {
    echo "Don't Got mbstring";
    array_push($mm_php,"mbstring");
    logger("Unable to locate mbstring prerequisite",$INSTALL_LOG);
  }
  else {logger("Prerequisite mbstring located",$INSTALL_LOG);}
  
  if (!(in_array("mysql", $lm_php))) {
    echo "Don't Got mysql<br>";
    array_push($mm_php, "mysql");
    logger("Unable to locate mysql prerequisite",$INSTALL_LOG);
  }
  else {logger("Prerequisite mysql located",$INSTALL_LOG);}
  
  if (!(in_array("xml", $lm_php))) {
    echo "Don't Got xml<br>";
    array_push($mm_php, "xml");
    logger("Unable to locate xml prerequisite",$INSTALL_LOG);
  }
  else {logger("Prerequisite xml located",$INSTALL_LOG);}
  
  
  if (empty($mm_php)){
    return(0);
  }
  else {
    return(1);
  }
}

function check_prerequisites_perl($INSTALL_LOG) {
  
  logger("Beggining Perl prerequisite checks",$INSTALL_LOG);
  
  $lm_perl = "find `perl -e 'print \"@INC\"'` -name *.pm";
  exec($lm_perl,$output);
  $mm_perl = array();
  
  logger("Beggining Perl prerequisite checks",$INSTALL_LOG);
  
  $xml_p = array_ereg_search('/XML/Parser.pm', $output);
  $xml_s = array_ereg_search('/XML/SimpleObject.pm', $output);
  $dbi = array_ereg_search('DBI.pm', $output);
  $mcu = array_ereg_search('/Math/Calc/Units', $output);
  
  if (!empty($xml_p)) {
    echo "Got Parser.pm <br>";
    array_push($mm_perl, Parser.pm);
    logger("Prerequisite XML/Parser.pm located",$INSTALL_LOG);
  }
  else {
    $err = "Unable to locate XML/Parser.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";

  }
  
  if (!empty($xml_s)) {
    echo "Got SimpleObject.pm <br>";
    array_push($mm_perl, SimpleObject.pm);
    logger("Prerequisite XML/SimpleObject.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate XML/Parser.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
  }
  
  if (!empty($dbi)) {
    echo "Got DBI.pm <br>";
    array_push($mm_perl, DBI.pm);
    logger("Prerequisite DBI.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate Parser.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
  }
  
  if (!empty($mcu)) {
    echo "Got Units.pm <br>";
    array_push($mm_perl, Units.pm);
    logger("Prerequisite /Math/Calc/Units.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate /Math/Calc/Units.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
  } 
  
  if (empty($xml_p) || empty($xml_s) ||  empty($dbi) ||  empty($mcu)) {    
    return(1);
  }
  else {
    return(0);
  }
}

echo ($INSTALL_LOG);
logger("Installation beginning",$INSTALL_LOG);
$s0 = check_prerequisites_php($INSTALL_LOG);
if($s0 == 0) {
  $s1 = check_prerequisites_perl($INSTALL_LOG);
  if($s1 == 0) {
    $s2 = setup_db($MYSQL_R_HOST,$MYSQL_A_USER,$MYSQL_A_PASS,$MYSQL_R_DB,$SQLFILE,$INSTALL_LOG);
    if($s2 == 0) {
      $s3 = makefile("$BASE_DIR/config.cfg",$cfgfile,$INSTALL_LOG);
      if($s3 == 0) {
	$s4 = makefile("$BASE_DIR/system/application/config/config.php",$configfile,$INSTALL_LOG);
	if($s4 == 0) {
	  $s5 = makefile("$BASE_DIR/system/application/config/database.php",$dbfile,$INSTALL_LOG);
	  if($s5 == 0) {     
	    logger("success, end.",$INSTALL_LOG);
	    echo "{success: true}";
	    exit;
	  }
	  else {
	    logger("Failed to create $BASE_DIR/system/application/config/database.php. Installer Exiting.",$INSTALL_LOG);
	    echo "{success: false, errors: { reason: Failed to create $BASE_DIR/system/application/config/database.php' }}";
	    exit;
	  }
	}
	else {
	  logger("Failed to create $BASE_DIR/system/application/config/config.php. Installer Exiting.",$INSTALL_LOG);
	  echo "{success: false, errors: { reason: 'Failed to create $BASE_DIR/system/application/config/config.php' }}";
	  exit;
	}
      }
      else {
	logger("Failed to create $BASE_DIR/config.cfg. Installer Exiting.",$INSTALL_LOG);
	echo "{success: false, errors: { reason: 'Failed to create $BASE_DIR/config.cfg' }}";
	exit;
      }
    }
    else {
      logger("Failed to import schema file. Installer Exiting.",$INSTALL_LOG);
      echo "{success: false, errors: { reason: 'Failed to import schema file' }}";
      exit;
    }   
  }
  else {
    logger("Failed to meet Perl prerequisite requrements. Installer Exiting.",$INSTALL_LOG);
    echo "{success: false, errors: { reason: 'Failed to meet Perl prerequisite requrements' }}";
    exit;
  }
 }
 else {
   logger("Failed to meet PHP prerequisite requrements. Installer Exiting.",$INSTALL_LOG);
   echo "{success: false, errors: { reason: 'Failed to meet PHP prerequisite requrements' }}";
   exit;
 }


