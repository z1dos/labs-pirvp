<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = file('users.txt');
function trim_array($item)
{
    return trim($item);
}

$file = array_map('trim_array', $file);
if (in_array($ip, $file)) {
    $count = 0;
    $cou = file_put_contents('users.txt', $count++ . PHP_EOL, FILE_APPEND);
    return $cou;
} else file_put_contents('users.txt', $ip . PHP_EOL, FILE_APPEND);

