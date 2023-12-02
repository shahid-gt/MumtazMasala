<?php
$role = array('a');
require(__DIR__.'/config.php');
$web['video_url']	= $request->get('video_url', '');

$ary = $lib->getYoutubeImage($web['video_url']);

echo $ary['video_image'];
echo '||';
echo $ary['video_title'];
echo '||';
echo $ary['video_code'];
