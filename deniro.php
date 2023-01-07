<?php

$ip = $_SERVER['REMOTE_ADDR'];
$fp = fopen(dirname(__FILE__) . '/_denirolog.txt', 'a+');
$now = date('Y-m-d H:i:s');
fwrite($fp, "{$now} - {$ip}\n");
fclose($fp);

header("Content-Type: image/png");
readfile(dirname(__FILE__) . '/deniro.png');
