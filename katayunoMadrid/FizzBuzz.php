<?php

// require 'vendor/autoload.php';

namespace katayunoMadrid;


 class FizzBuzz{

	public function kataFizzBuzz($number){
		if ($this->isDivisible($number,15)) {
			return 'FizzBuzz';
		}elseif($this->isDivisible($number,3) || $this->haveNumber($number,3)){
			return 'Fizz';
		} elseif($this->isDivisible($number,5) || $this->haveNumber($number,5)){
			return 'Buzz';
		} 
		else{
			return $number;
		}
	}

	public function isDivisible($dividendo,$divisor){
		return ($dividendo % $divisor == 0);
	}

	public function haveNumber($check, $number){
		return substr_count("$check", "$number");
	}

	// @Todo falta tener en cuenta caso dobles
	// Revisar para recordar los requisitos.
	

 	// Before refactorizacion

	// public function divisibleFive($number){
	// 	return ($number % 5 == 0);
	// }

	// public function haveFive($number){
	// 	return strpos($number, '5');
	// }

	// public function divisibleThreeFive($number){
	// 	return $this->divisibleFive($number) && $this->divisibleThree($number);
	// }

}

