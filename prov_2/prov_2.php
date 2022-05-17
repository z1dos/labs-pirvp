<?php

$x = array();
$y = array();
$n = rand(1, 100);
$times = 0;
$max = 0;

function isPrime($n)
{
    if ($n == 2)
        return true;
    if ($n % 2 == 0)
        return false;
    $i = 3;
    $max_factor = (int)sqrt($n);
    while ($i <= $max_factor) {
        if ($n % $i == 0)
            return false;
        $i += 2;
    }
    return true;
}

for ($i = 0; $i <= $n; $i++) {
    $x[$i] = rand(1, 100);
    $y[$i] = $x[$i];
    if (!isPrime($y[$i])) unset($y[$i]);
}

arsort($y);
$y = array_slice($y, 5);

function FinalMaxInY($y)
{
    $maxValue = max($y);
    echo('<br>' . '<pre>' . 'Максимальное значене в y:' . $maxValue . '</pre>');
}

function decY($y)
{
    for ($i = 0; $i <= $y[$i]; $i++) {
        $y[$i] = decbin($i);
    }
    echo('<br>');
    echo('<pre>' . 'Массив y в двоичной системе:');
    print_r($y);
    echo('</pre>');
}

echo('<br>');
echo('<pre>' . 'Массив х:');
print_r($x);
echo('</pre>');

FinalMaxInY($y);

echo('<br>');
echo('<pre>' . 'Массив y:');
print_r($y);
echo('</pre>');

decY($y);
