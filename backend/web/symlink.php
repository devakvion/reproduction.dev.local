<?php
exit;
echo __DIR__;exit;
$target = '/home/reproduction/yii2/frontend/web';
$link = '/home/reproduction/public_html';
var_dump(symlink($target, $link));
echo readlink($link);