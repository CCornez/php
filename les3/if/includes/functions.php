<?php
date_default_timezone_set('Europe/Brussels');

function getHello($fn, $n, $g = "x")
{

    // variables format

    $fn =  ucwords(strtolower($fn));
    $n = ucwords(strtolower($n));
    $g = strtolower($g);

    // get hours

    $hour = (int)date("H");

    // greeting

    $greeting = "Good evening";
    if ($hour < 6) {
        $greeting = "Good night";
    } elseif ($hour < 10) {
        $greeting = "Good morning";
    } elseif ($hour < 17) {
        $greeting = "Good day";
    }

    // title

    switch ($g) {
        case 'f':
            $title = "Ms.";
            $usedName = $n;
            break;
        case 'x':
            $title = "";
            $usedName = $fn;
            break;
        default:
            $title = "Mr.";
            $usedName = $n;
            break;
    }

    // return

    return "$greeting $title $usedName !";
}
