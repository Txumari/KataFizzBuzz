<?php

require 'katayunoMadrid/FizzBuzz.php';

require 'psysh';

echo " Katayuno madrid";
echo "<br>";

$fizzBuzz = new katayunoMadrid\FizzBuzz();

echo "<ul>";


for($i = 1;$i<=100;$i++){
	\Psy\Shell::debug(get_defined_vars());

  echo "<li>";
  echo $fizzBuzz->kataFizzBuzz($i);
  echo "</li>";  
}
echo "</ul>";

?>