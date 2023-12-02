<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['search']['title']			= 'Widget Title';

$web['maintitle']		= 'Home Widgets';
$web['pagetitle']		= $web['company'].' - '.$web['maintitle'];
$web['subtitle']		= 'Welcome to '.$web['company'];
$web['breadcrumbs'][]	= $web['maintitle'];
$web['showaddbtn']		= '0';

$web['table']			= 'widgets';
$web['editscript']		= 'widget.php';
$web['listscript']		= 'widgets.php';
$web['page']			= 'widgets';
$web['subpage']			= 'widgets';
$web['filepath']		= '../uploads/widgets/';
$web['fileurl']			= '/uploads/widgets/';

$web['id']				= $request->get('id', '');
$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 25);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

if ( $web['task'] == 'delete' )
{
	$removeid	= $request->get('removeid', '');
	$sql  = "DELETE FROM ".$app->getPrefix().$web['table'];
	$sql .= " WHERE id in(".implode(",", $removeid).")";
	$app->execute($sql);
}

$params = [];
$sql = "SELECT * FROM ".$app->getPrefix().$web['table'];
if ( $web['sk'] != "" )
{
	$sbary = explode('__', $web['sb']);
	if ( isset($sbary[1]) && $sbary[1] == 'n' )
		$sql .= " HAVING ".$sbary[0]." = ?";
	else
		$sql .= " HAVING ".$sbary[0]." LIKE ?";
	$params[] = "%".$web['sk']."%";
}
$sql .= " ORDER BY ".$web['ob']." ".$web['ot'];

$web['rows'] = $app->getList($sql, $params, $web['pg'], $web['en']);
$web['total_pages'] = $app->getPages();
$web['subtitle'] = '<span>&nbsp;&nbsp;[No records]</span>';
if ( $app->getTotal() > 0 )
	$web['subtitle'] = '<span>&nbsp;&nbsp;[' . $app->getStart() . ' to ' . $app->getEnd() . ' out of ' . $app->getTotal() . ']</span>';

echo $twig->render(str_replace('php', 'html', $web['listscript']), array('web' => $web));
