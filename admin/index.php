<?php
//$uri = 'http://123.108.51.99/?"+onmouseover=(abcd(1))';
//$uri = preg_replace('/\+(.*)[\(|\[\]\!\@\#\$\%\^\&\*\\)](.*)[\(|\[\]\!\@\#\$\%\^\&\*\)]/', '', $uri);
//echo $uri;
//exit;

$role = '';
require(__DIR__.'/config.php');
$web['pagetitle'] = 'Welcome to '.$web['company'].' System - Login';
$web['task']	= $request->get('task', '');
$web['email']	= $request->get('email', '');
$web['pwd']		= $request->get('pwd', '');
$web['err']		= $request->get('err', '');
$web['msg']		= $request->get('msg', '');
$web['hide']	= 'forgetpassword';

if ( $web['err'] == 3 )
	$web['err'] = 'You are successfully logged out';

if ( $web['task'] == 'forgetpassword' )
{
	$web['hide']	= 'login';
	$web['err'] = 'Invalid email/username';
	$sql = "SELECT * FROM ".$app->getPrefix()."admin WHERE email = ?";
	$params[] = $web['email'];
	$rows = $app->getList($sql, $params);
	if ( count($rows) > 0 )
	{
		$fields['other']['value'] = base64_encode($web['email'].':'.$rows[0]['id'].date('Ymdhis'));
		$app->save('admin', $fields, $rows[0]['id']);
		$user = $rows[0]['username'];
		$link = 'http://'.$_SERVER['HTTP_HOST'].'/resetpassword.php?q='.$fields['other']['value'];
		$logo = 'http://'.$_SERVER['HTTP_HOST'].'/admin/themes/default/assets/img/logoin.png';
		$html = '';
		$to = $web['email'];
		$fl = __DIR__.'/../emailtemplates/forgetpassword.html';
		$from = "support@spctyre.com";
		$subj = $web['company']." : Reset Password";
		$fldvalue = array('user' => $user, 'link' => $link, 'logo' => $logo, 'company' => $web['company']);
		$lib->send_mail($fl, $to, $from, $subj, "", $fldvalue, true);
		$web['err'] = '';
		$web['msg'] = 'Please check your email';
	}
}

if ( $web['task'] == 'login' )
{
	$web['err'] = 'Invalid username or password';
	$sql = "SELECT * FROM ".$app->getPrefix()."admin WHERE email = ?";
	$params = array($web['email']);
	$rows = $app->getList($sql, $params);
	if ( count($rows) > 0 )
	{
		if ( md5($web['pwd']) == $rows[0]['pwd'] )
		{
			$session->set('uid', $rows[0]['id']);
			$session->set('username', $rows[0]['username']);
			$session->set('email', $rows[0]['email']);
			$session->set('userrole', $rows[0]['userrole']);
			$response->redirect('dashboard.php');
		}
	}
}

echo $twig->render('index.html', array('web' => $web));
