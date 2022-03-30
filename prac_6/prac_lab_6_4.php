<?php
$file = file('ips.txt');
$hostname = $_SERVER['REMOTE_ADDR'];
$count = implode("", $file);
$count++;

if (in_array($hostname, $file)){
    echo 'Вы уже посещали эту страницу';
} else {
    file_put_contents('ips.txt', $hostname, FILE_APPEND);
}


