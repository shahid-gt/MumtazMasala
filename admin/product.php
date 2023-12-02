<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['id']				= $request->get('id', 0);
$web['maintitle']		= 'Product';
$web['breadcrumbs'][]	= $web['maintitle'];
$web['subtitle']		= $web['maintitle'].' '.($web['id'] == '0' ? 'New' : 'Edit');
$web['pagetitle']		= $web['company'].' - '.$web['subtitle'];
$web['breadcrumbs'][]	= $web['subtitle'];

$web['table']			= 'products';
$web['editscript']		= 'product.php';
$web['listscript']		= 'products.php';
$web['page']			= 'products';
$web['subpage']			= 'products';
$web['filepath']		= '../uploads/products/';
$web['fileurl']			= '/uploads/products/';
$web['others']			= ['pdf'];

$web['task']			= $request->get('task', '');
$web['err']				= $request->get('err', '');

$web['pg']	= $request->get('pg', 1);
$web['en']	= $request->get('en', 25);
$web['sb']	= $request->get('sb', 'title');
$web['sk']	= $request->get('sk', '');
$web['ob']	= $request->get('ob', 'id');
$web['ot']	= $request->get('ot', 'asc');

$web['fields'] = array();
$web['fields']['category_id']	= array('value' => '0');
$web['fields']['product_title']	= array('value' => '');
$web['fields']['short_desc']	= array('value' => '');
$web['fields']['slug']			= array('value' => '');
$web['fields']['image1']		= array('value' => '');

if ( $web['task'] == 'save' )
{
	foreach($web['fields'] as $k => $v)
		$web['fields'][$k]['value'] = $request->get($k, '');
	if ( $web['fields']['slug']['value'] == '' )
		$web['fields']['slug']['value'] = strtolower(str_replace(' ', '-', $web['fields']['product_title']['value']));
	$web['err'] = '';
	$filefields = ['', 'image1'];
	for( $f = 1; $f < 2; $f++ )
	{
		if ( $web['id'] == 0 && $_FILES["f".$f]["tmp_name"] == '' )
		{
			$web['err'] = 'Please select image file to upload';
			$act = 'error';
		}
	}
	for( $f = 1; $f < count($filefields); $f++ )
	{
		if ( $web['err'] == '' && $_FILES["f".$f]["tmp_name"] != '' )
		{
			$imageext = array('png', 'jpg', 'gif', 'jpeg');
			$fileary = array('png', 'jpg', 'gif', 'jpeg');
			if ( $filefields[$f] == 'pdf' )
			{
				$imageext = array('pdf');
				$fileary = array('pdf');
			}
			$images = $web['filepath'].$_FILES["f".$f]["name"];
			$imgary = explode(".", $images);
			$ext = $imgary[count($imgary)-1];
			if ( !in_array($ext, $fileary) )
			{
				$web['err'] = 'Only '.implode(', ', $fileary).' allowed for image file';
				$act = 'error';
			}
		}
	}
	if ( $web['err'] == '' )
	{
		$primary_id = $app->save($web['table'], $web['fields'], $web['id']);
		$fields = [];
		for( $f = 1; $f < count($filefields); $f++ )
		{
			$images = $web['filepath'].$_FILES["f".$f]["name"];
			$imgary = explode(".", $images);
			$ext = $imgary[count($imgary)-1];
			
			$imagefield = $filefields[$f];
			$old_image_name = $request->get($imagefield, '');
			if ( $_FILES["f".$f]["tmp_name"] != '' )
			{
				if ( $old_image_name != '' && file_exists($web['filepath'].$old_image_name) )
					unlink($web['filepath'].$old_image_name);
				$org_image = str_replace('.'.$ext, '', $_FILES["f".$f]["name"]).'_'.$primary_id.'_'.$f.'.'.$ext.'.webp';
				createthumb($_FILES["f".$f]["tmp_name"], $web['filepath'].$org_image, 220, 220);
				$fields[$imagefield]['value'] = $org_image;
			}
		}
		if ( count($fields) > 0 )
			$app->save($web['table'], $fields, $primary_id);
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

$web['categories'] = $lib->getdropdown('categories', 'id', 'title', $web['fields']['category_id']['value']);

echo $twig->render(str_replace('php', 'html', $web['editscript']), array('web' => $web));
