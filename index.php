<?php

require 'katayunoMadrid/FizzBuzz.php';



echo " Katayuno madrid";
echo "<br>";

$fizzBuzz = new katayunoMadrid\FizzBuzz();

echo "<ul>";


for($i = 1;$i<=100;$i++){
  echo "<li>";
  echo $fizzBuzz->kataFizzBuzz($i);
  echo "</li>";  
}
echo "</ul>";

?>