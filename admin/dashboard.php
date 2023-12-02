<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['pagetitle'] = $web['company'].' System - Dashboard';
$web['maintitle'] = 'Dashboard';
$web['err'] = '';

echo $twig->render('dashboard.html', array('web' => $web));
