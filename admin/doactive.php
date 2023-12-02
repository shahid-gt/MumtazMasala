<?php
$role = array('s', 'a', 'e', 'd');
require(__DIR__.'/config.php');
$tbl = $request->get('tbl', '');
$id = $request->get('id', 0);
$active = $request->get('active', '');
if ( empty($tbl) || empty($id) )
	exit;

$fields = array();
$fields['active']['value'] = $active == '1' ? '0' : '1';
$app->save($tbl, $fields, $id);

$active = $active == '1' ? '0' : '1';
$class = $active == '0' ? 'danger' : 'success';
$icon = $active == '0' ? 'remove' : 'ok';

echo '<button type="button" title="Active/Inactive" onclick="active(\''.$id.'\', \''.$active.'\');" class="btn btn-'.$class.' btn-xs"><span class="glyphicon glyphicon-'.$icon.'" aria-hidden="true"></span></button>';