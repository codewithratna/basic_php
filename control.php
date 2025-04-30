<?php 
echo "<h1>Statement</h1>";
echo "<h1>if</h1>";

$rakib = 100;

if ($rakib <=5000) {
    echo "if you you can't give me 100tk than give me 5000tk.";
}

echo "<br>";
echo "<h1>else</h1>";
$rabik = 20;

if ($rakib <= 22) {
    echo "You will not merriege.";
} else {
    echo "You will get merriege.";
}


echo "<br>";
echo "<h1>elseif</h1>";
$mark = 85;

if ($mark >= 90) {
    echo "Grade: A";
} elseif ($mark >= 80) {
    echo "Grade: B";
} else {
    echo "Grade: C or lower";
}


echo "<br>";
echo "<h1>switch </h1>";

$mts = "Sunday";
$jamuna = "Fluter";

switch ($jamuna) {
    case "Working day":
        echo "Start of the week!";
        break;
    case "Sunday":
        echo "Weekend is coming!";
        break;
    default:
        echo "all others day working.";
}
