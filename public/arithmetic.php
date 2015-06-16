<?php

$firstNumb = 200;
$secondNumb = 100;

function add($a, $b)
{
    return $a + $b;
}

echo add($firstNumb,$secondNumb) . PHP_EOL;

function subtract($a, $b)
{
    return $a - $b;
}

echo subtract($firstNumb,$secondNumb) . PHP_EOL;

function multiply($a, $b)
{
    return $a * $b;
}

echo multiply($firstNumb,$secondNumb) . PHP_EOL;

function divide($a, $b)
{
    return $a / $b;
}

echo divide($firstNumb,$secondNumb) . PHP_EOL;

function modulus($a, $b)
{
    return $a % $b;
}

echo modulus($firstNumb,$secondNumb) . PHP_EOL;


?>

