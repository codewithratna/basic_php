<?php 

//Operators and Expressions

echo "<h1>Arithmetic Operators</h1>";
/*$a = 10;
$b = 3;
echo $a + $b;   // 13
echo $a - $b;   // 7
echo $a * $b;   // 30
echo $a / $b;   // 3.33
echo $a % $b;   // 1*/

$r = 20;
$f = 10;
echo $r + $f;   //30
echo $r - $f;  //10
echo $r * $f;   //200
echo $r / $f;  //2
echo $r % $f;  //2


echo "<h1>Assignment</h1>";
/*
$x = 5;
$x += 3;   // $x = $x + 3; $x = 8
$x *= 2;   // $x = $x * 2; $x = 16*/

$y = 10;
$y += 2; 
$y *= 3;


echo "<h1>Comparison</h1>";
$a = 5;
$b = "5";

var_dump($a == $b);   // true (value)
var_dump($a === $b);  // false (value and type)
var_dump($a != $b);   // $r == $ -> ! false
var_dump($a !== $b);  // $r === $f -> ! true

echo "<h1>Logical</h1>";
if ($a > 2 && $b < 10) { echo "Valid"; }
if ($a > 5 || $b < 2) { echo "One is true"; }

