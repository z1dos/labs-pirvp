<?php
$ip = $_SERVER['REMOTE_ADDR'];
$file = file('users.txt');
function trim_array($item)
{
    return trim($item);
}

$file = array_map('trim_array', $file);
if (in_array($ip, $file)) {
    $file = file("users.txt");
    $count = implode("", $file);
    $count++;
    $myfile = fopen("users.txt","w");
    fputs($myfile,$count);
    fclose($myfile);
} else file_put_contents('users.txt', $ip . PHP_EOL, FILE_APPEND);


