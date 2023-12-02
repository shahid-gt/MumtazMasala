<?php
require_once(__DIR__.'/config.php');
$web['pagetitle'] = 'Welcome to '.$web['company'];
$uri = explode('/', $_SERVER['REQUEST_URI']);
$web['uri'] = $uri;
$web['breadcrumb'] = '';
$web['page'] = '';
$root = true;

// if ( isset($uri[1]) && $uri[1] != '' && $uri[1] != 'index.php' )
// {
// 	$root = false;
// 	// Categories
// 	$sql = "SELECT id FROM ".$app->getPrefix()."categories WHERE slug = ?";
// 	$params = array($uri[1]);
// 	$rws = $app->getList($sql, $params);
// 	if ( !empty($rws) )
// 	{
// 		if ( isset($uri[2]) )
// 		{
// 			$params = str_replace('?', '', $uri[2]);
// 			$arys = explode('&', $params);
// 			foreach( $arys as $ary )
// 			{
// 				$tmpary = explode('=', $ary);
// 				$request->set($tmpary[0], $tmpary[1]);
// 			}
// 		}
// 		$request->set('category_id', $rws[0]['id']);
// 		require('products.php');
// 		exit;
// 	}
// }

if ( $root )
	require('home.php');
else
	require('404.php');
