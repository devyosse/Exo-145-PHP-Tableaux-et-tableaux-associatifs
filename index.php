<?php

// Premiere ligne

$fruits = array("Apple", "Banana", "Orange");
echo count($fruits);
echo " _ ";
echo $fruits[1];
//Deuxieme ligne


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo "<br><br>Ben is " . $age['Ben'] . " years old.<br><br>";

foreach($age as $x => $y) {
    echo "<br>Key=" .$x  . ", Value=" . $y;
}



//Troisieme ligne

$colors = array("red", "green", "blue", "yellow");
$result = array_values($colors);
echo "<br><br>";
print_r($result);

echo "<br><br>";

sort($colors);
print_r($colors);

echo "<br><br>";

rsort($colors);
print_r($colors);

echo "<br><br>";

// Quatrieme ligne

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
sort($age);
print_r($age);



