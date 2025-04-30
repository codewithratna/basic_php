<?php 
echo "<h1>Loop</h1>";
echo "<h1>for lopp</h1>";

for ($i = 1; $i <= 10; $i++) {
    echo "Number: $i <br>";
}

echo "<h1>while Loop</h1>";
echo "<br>";
$i = 1;

while ($i <= 5) {
    echo "Count: $i <br>";
    $i++;
}

echo "<h1>Do while Loop</h1>";
echo "<br>";

$i = 6;

do {
    echo "Value: $i <br>";
    $i++;
} while ($i <= 5);

echo "<h1>foreach Loop</h1>";
echo "<br>";

$fruits = ["Apple", "Banana", "Mango"];


foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

echo "<br>";
$person = [
    "name" => "Rahim",
    "age" => 25,
    "city" => "Dhaka"
  ];
  
  foreach ($person as $key => $value) {
      echo "$key: $value <br>";
  }
?>