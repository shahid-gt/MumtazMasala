<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['id']				= $request->get('id', 0);
$web['maintitle']		= 'Category';
$web['breadcrumbs'][]	= $web['maintitle'];
$web['subtitle']		= $web['maintitle'].' '.($web['id'] == '0' ? 'New' : 'Edit');
$web['pagetitle']		= $web['company'].' - '.$web['subtitle'];
$web['breadcrumbs'][]	= $web['subtitle'];

$web['table']			= 'categories';
$web['editscript']		= 'category.php';
$web['listscript']		= 'categories.php';
$web['page']			= 'categories';
$web['subpage']			= 'categories';
$web['filepath']		= '../uploads/categories/';
$web['fileurl']			= '/uploads/categories/';

$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 25);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['title']			= array('value' => '');
$web['fields']['slug']			= array('value' => '');

if ( $web['task'] == 'save' )
{
	foreach($web['fields'] as $k => $v)
		$web['fields'][$k]['value'] = $request->get($k, '');
	if ( $web['fields']['slug']['value'] == '' )
		$web['fields']['slug']['value'] = strtolower(str_replace(' ', '-', $web['fields']['title']['value']));
	$web['err'] = '';
	if ( $web['err'] == '' )
	{
		$primary_id = $app->save($web['table'], $web['fields'], $web['id']);
	}
}

if ( $web['id'] > 0 && $web['err'] == '' )
{
	$sql  = "SELECT * FROM ".$app->getPrefix().$web['table'];
	$sql .= " WHERE id = ?";
	$params = array($web['id']);
	$rows = $app->getList($sql, $params);
	foreach( $web['fields'] as $k => $v )
		$web['fields'][$k]['value'] = $rows[0][$k];
}

echo $twig->render(str_replace('php', 'html', $web['editscript']), array('web' => $web));
