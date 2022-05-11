<?php
// Извлекаем имя хоста из URL
preg_match('|<title.*?>(.*)</title>|sei',
    "http://www.php.net", $matches);
$host = $matches[1];

// извлекаем две последние части имени хоста
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
echo "доменное имя: {$matches[0]}\n";
