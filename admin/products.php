<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['search']['title']			= 'Category Title';
$web['search']['product_title']	= 'Product Title';

$web['maintitle']		= 'Products';
$web['pagetitle']		= $web['company'].' - '.$web['maintitle'];
$web['subtitle']		= 'Welcome to '.$web['company'];
$web['breadcrumbs'][]	= $web['maintitle'];

$web['table']			= 'products';
$web['editscript']		= 'product.php';
$web['listscript']		= 'products.php';
$web['page']			= 'products';
$web['subpage']			= 'products';
$web['filepath']		= '../uploads/products/';
$web['fileurl']			= '/uploads/products/';

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
$sql  = "SELECT t.*, c.title FROM ".$app->getPrefix().$web['table']." t";
$sql .= " LEFT JOIN ".$app->getPrefix()."categories c ON c.id = t.category_id";
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
