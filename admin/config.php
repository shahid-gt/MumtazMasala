<?php
$web = array();
$web['theme'] = 'default';
$web['skin'] = 'blue';
$web['boxskin'] = 'success';
define('APP_PATH', str_replace('admin', '', str_replace('config', '', __DIR__)));
define('INI_PATH', APP_PATH.'config/config.ini');
$template_path	= array(APP_PATH.'/admin/themes/'.$web['theme']);
$cache_path		= APP_PATH.'/admin/cache';
$web['themepath'] = '../admin/themes/'.$web['theme'];
$yr1 = date('Y');
$yr2 = date('Y')+1;
$web['year'] = $yr1.'-'.$yr2;
require(APP_PATH.'config/config.php');
$web['showaddbtn'] = '1';
if ( !preg_match('/index|extra/', $_SERVER['PHP_SELF']) && !in_array($session->get('userrole'), $role) )
	$response->redirect("index.php?err=3");
