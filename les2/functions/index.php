<?php
date_default_timezone_set('Europe/Brussels');

$counter = 0;
$seconds = $_GET["s"];

function sum($a, $b)
{
    return $a + $b;
}

function doSomething($a)
{
    return strtoupper($a) . ' - something has been done';
}

function countIt($a)
{
    $a++;
    return $a;
}

function timeInFuture($a = "now")
{
    $str = date('d/m/y - H:m:s', strToTime($a)) . "<br />";
    return $str;
}

echo "sum of 5 + 3 is " . sum(5, 3) . "<br />";
echo sum(7, 10) . "<br />";
echo doSomething('Cyril') . "<br />";

echo $counter . "<br />";
echo countIt($counter) . "<br />";
echo countIt($counter) . "<br />";

echo timeInFuture("+6 hours");
echo timeInFuture("+1 week");
echo timeInFuture();

echo timeInFuture("+" . $seconds . " seconds");
