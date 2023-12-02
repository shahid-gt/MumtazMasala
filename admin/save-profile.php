<?php
$role = array('s', 'a');
require(__DIR__.'/config.php');
$web['fields'] = array();
$web['fields']['first_name']['value']	= $request->get('first_name', '');
$web['fields']['last_name']['value']	= $request->get('last_name', '');
$web['fields']['username']['value']		= $web['fields']['first_name']['value'].' '.$web['fields']['last_name']['value'];
$web['fields']['mobile']['value']		= $request->get('mobile', '');
$ref_id = $app->save('users', $web['fields'], $session->get('uid'));

$session->set('first_name', $web['fields']['first_name']['value']);
$session->set('last_name', $web['fields']['last_name']['value']);
$session->set('username', $web['fields']['first_name']['value'].' '.$web['fields']['last_name']['value']);

echo $web['fields']['first_name']['value'].' '.$web['fields']['last_name']['value'];