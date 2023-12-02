<?php
$role = array('s', 'a');
require(__DIR__.'/config.php');
$pwd = $request->get('pwd', '');
$web['fields'] = array();
$web['fields']['pwd']['value']	= md5($pwd);
$ref_id = $app->save('users', $web['fields'], $session->get('uid'));

echo 'Password has been changed';