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

$revid = ""; // revision number 

logger("BaseDir: $BASE_DIR",$INSTALL_LOG);
logger("WebRoot: $WEB_ROOT",$INSTALL_LOG);

function logger($data,$INSTALL_LOG) {
  $date = date("c");
  $data = "$date - process.php - $data\n";
  if (!$handle = fopen("$INSTALL_LOG", 'a')) {
    echo "{success: false, errors: { reason: 'Cannot open log file: $filename' }}";
    exit;
  }
  if (fwrite($handle, $data) === FALSE) {
    echo "{success: false, errors: { reason: 'Cannot write to log file: $filename' }}";
    exit;
  }
  fclose($handle);
  return 0;
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
//
// MySQL Database connections settings for select queries
// mysql> GRANT SELECT on dbname.* to \'<user>\'@\'<host>\' identified by \'<password>\';
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
//
// MySQL Database connections settings for insert/update/delete queries
// mysql> GRANT INSERT,UPDATE,DELETE on dbname.* to \'<user>\'@\'<host>\' identified by \'<password>\';
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
$config[\'google_uacct\']= "";
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
$config[\'memcache_enabled\'] = FALSE;
$config[\'memcache_ip\']= \'127.0.0.1\';
$config[\'memcache_port\'] = \'11211\';
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
$config[\'ci_version\'] = \'1.7.0\'; #CodeIgniter Framework Version
$config[\'extjs_version\'] = \'3.0.0\'; #ExtJS Framework Version
$config[\'kb_version\'] = \'2.0.1\'; #Kontrollbase major version
$config[\'kb_revision\'] = "'.$revid.'"; #Kontrollbase revision number
/* End of file config.php */
/* Location: ./system/application/config/config.php */
?>';

function makefile($filename,$data,$INSTALL_LOG) {
  logger("Starting makefile for $filename",$INSTALL_LOG);
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
    $err="PHP Pre-req check: DOM missing";
    array_push($mm_php, "dom");
    logger("Unable to locate dom prerequisite",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  else {
    logger("Prerequisite dom located",$INSTALL_LOG);
  }

  
  if (!(in_array("mbstring",$lm_php))) {
    $err="PHP Pre-req check: php-mbstring missing";
    array_push($mm_php,"mbstring");
    logger("Unable to locate mbstring prerequisite",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  else {
    logger("Prerequisite mbstring located",$INSTALL_LOG);
  }

  
  if (!(in_array("mysql", $lm_php))) {
    $err="PHP Pre-req check: php-mysql missing.";
    array_push($mm_php, "mysql");
    logger("Unable to locate mysql prerequisite",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  else {
    logger("Prerequisite mysql located",$INSTALL_LOG);
  }
  
  if (!(in_array("xml", $lm_php))) {
    $err="PHP Pre-req missing: php-xml";
    array_push($mm_php, "xml");
    logger("Unable to locate xml prerequisite",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  else {
    logger("Prerequisite xml located",$INSTALL_LOG);
  }
    
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
    array_push($mm_perl, Parser.pm);
    logger("Prerequisite XML/Parser.pm located",$INSTALL_LOG);
  }
  else {
    $err = "Unable to locate XML/Parser.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  
  if (!empty($xml_s)) {
    array_push($mm_perl, SimpleObject.pm);
    logger("Prerequisite XML/SimpleObject.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate XML/SimpleObject.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  
  if (!empty($dbi)) {
    array_push($mm_perl, DBI.pm);
    logger("Prerequisite DBI.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate DBI.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  }
  
  if (!empty($mcu)) {
    array_push($mm_perl, Units.pm);
    logger("Prerequisite /Math/Calc/Units.pm located",$INSTALL_LOG);
  }
  else {
    $err="Unable to locate /Math/Calc/Units.pm prerequisite";
    logger("$err",$INSTALL_LOG);
    echo "{success: false, errors: { reason: '$err' }}";
    exit;
  } 
  
  if (empty($xml_p) || empty($xml_s) ||  empty($dbi) ||  empty($mcu)) {    
    return(1);
  }
  else {
    return(0);
  }
}

function get_revision($INSTALL_LOG,$BASE_DIR) {
  logger("Starting get_revision function",$INSTALL_LOG);
  $version_file = "$BASE_DIR/version.txt"; // we initially get this from subverion on each commit
  logger("version_file:$version_file",$INSTALL_LOG);
  $handle = fopen($version_file, "r");
  if(!$handle) {
    logger("Failed to get version from $BASE_DIR/version.txt",$INSTALL_LOG);
    echo "{success: false, errors: { reason: Failed to open version.txt file' }}";
  }
  else {
    $revid = fgets ($handle);
    logger("revid:$revid",$INSTALL_LOG);
  }
}

logger("Installation beginning",$INSTALL_LOG);
get_revision($INSTALL_LOG,$BASE_DIR); //populate revid value for config.php file
$s0 = check_prerequisites_php($INSTALL_LOG);
if($s0 == 0) {
  $s1 = check_prerequisites_perl($INSTALL_LOG);
  if($s1 == 0) {
    $s2 = setup_db($MYSQL_R_HOST,$MYSQL_A_USER,$MYSQL_A_PASS,$MYSQL_R_DB,$SQLFILE,$INSTALL_LOG);
    if($s2 == 0) {
      $s3 = makefile("$BASE_DIR/system/application/config/config.php",$configfile,$INSTALL_LOG);
      if($s3 == 0) {
	$s4 = makefile("$BASE_DIR/system/application/config/database.php",$dbfile,$INSTALL_LOG);
	if($s4 == 0) {     
	  logger("success, end.",$INSTALL_LOG);
	  echo "{success: true}";
	  exit;
	}
	else { //s4 fail
	  logger("Failed to create $BASE_DIR/system/application/config/database.php. Installer Exiting.",$INSTALL_LOG);
	  echo "{success: false, errors: { reason: Failed to create $BASE_DIR/system/application/config/database.php' }}";
	  exit;
	}
      } // s3 fail
      else {
	logger("Failed to create $BASE_DIR/system/application/config/config.php. Installer Exiting.",$INSTALL_LOG);
	echo "{success: false, errors: { reason: 'Failed to create $BASE_DIR/system/application/config/config.php' }}";
	exit;
      }
    } // s2 fail  
    else {
      logger("Failed to import schema file. Installer Exiting.",$INSTALL_LOG);
      echo "{success: false, errors: { reason: 'Failed to import schema file' }}";
      exit;
    }   
  } // s1 fail
  else {
    logger("Failed to meet Perl prerequisite requrements. Installer Exiting.",$INSTALL_LOG);
    echo "{success: false, errors: { reason: 'Failed to meet Perl prerequisite requrements' }}";
    exit;
  }
 } //s0 fail
 else {
   logger("Failed to meet PHP prerequisite requrements. Installer Exiting.",$INSTALL_LOG);
   echo "{success: false, errors: { reason: 'Failed to meet PHP prerequisite requrements' }}";
   exit;
  }

