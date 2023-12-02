<?php
$role = array('s', 'a');
require(__DIR__.'/config.php');
$session->set('uid', '');
$session->set('username', '');
$session->set('email', '');
$session->set('userrole', '');
$response->redirect('index.php');
exit;

