<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['libraries'] = array('database',
			       'phpsession',
			       'Cache');

$autoload['helper'] = array('url',
			    'form',
			    'number',
			    'file',
			    'audit',
			    'auth',
			    'filecheck',
			    'variables',
			    'memcache',
			    'googleanalytics',
			    'versioncheck');

$autoload['plugin'] = array();
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
/* End of file autoload.php */
/* Location: ./system/application/config/autoload.php */