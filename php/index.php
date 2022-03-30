<?php

$x = array();
$y = array();
$n = rand(25, 100);
$times = 0;
$max = 0;
$newMax = 0;

function getArrX($n, $x)
{
    for ($i = 0; $i <= $n; $i++) {
        $x[$i] = rand(1, 100);
    }
    echo('<br>');
    echo('<pre>' . 'Массив х:');
    print_r($x);
    echo('</pre>');
}


for ($i = 0; $i <= $n; $i++) {
    $x[$i] = rand(1, 100);
    $y[$i] = $x[$i];
    if ($y[$i] % 2) unset($y[$i]);
}

function fiveTimes($y, $max, $times)
{
    while ($times <= 4) {
        $times++;
        maxInY($y, $max);
    }
    finalMaxInY($y, $max);
}

function maxInY($y, $max)
{
    foreach ($y as $i) if ($max < $i) $max = $i;
    unset($y[$max]);
}

function finalMaxInY($y, $max)
{
    foreach ($y as $i) if ($max < $i) $max = $i;
    viewMaxAfterDelete($max);
}

function viewMaxAfterDelete($max)
{
    echo('<br>' . '<pre>' . 'Максимальное значене в y:' . $max . '</pre>');
}

echo getArrX($n, $x);
echo fiveTimes($y, $max, $times);
echo('<br>');
echo('<pre>' . 'Массив y:');
print_r($y);
echo('</pre>');
