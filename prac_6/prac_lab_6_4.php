<?php
$file = file('ips.txt');

$hostname = $_SERVER['REMOTE_ADDR'];
$myHost = fopen('ips.txt','w');
fputs($myHost, $hostname);
fclose($myHost);

if (!empty($myHost)){
    $count = implode("", $file);
    $count++;

    $myFile = fopen('ips.txt','w');
    fputs($myFile, $count);
    fclose($myFile);
}