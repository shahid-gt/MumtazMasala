<?php
$web = array();
$web['theme'] = 'default';
define('APP_PATH', str_replace('admin', '', str_replace('config', '', __DIR__)).'/');
define('INI_PATH', APP_PATH.'config/config.ini');
$template_path	= array(APP_PATH.'/admin/themes/'.$web['theme']);
$cache_path		= APP_PATH.'/admin/cache';
$web['themepath'] = '../admin/themes/'.$web['theme'];
require(APP_PATH.'config/config.php');
$web['host'] = 'http'.($lib->isSecure() ? 's' : '').'://'.$_SERVER['HTTP_HOST'].'/';
