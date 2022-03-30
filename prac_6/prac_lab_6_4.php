<?php
$file = file('ips.txt');
$hostname = $_SERVER['REMOTE_ADDR'];

if (in_array($hostname, $file)){
    $count = implode("", $file);
    $count++;

    file_put_contents('ips.txt', $count, FILE_APPEND);
} else {
    file_put_contents('ips.txt', $hostname, FILE_APPEND);
}


