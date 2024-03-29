<?php

// require 'vendor/autoload.php';

namespace katayunoMadrid;


 class FizzBuzz{


 	/**
 	*	Al añadir los segundo requisitos aparacen casos dobles fuera de la especificacion
 	*	Encontrar un 5 tiene mayor prioridad que un 3.
 	*   
 	*   $number, numero entero
 	*	Devuelve String, que toma valor FizzBuzz, Buff, Fizz o el valor del numero
 	*/
	public function kataFizzBuzz($number) {
		if ($this->isDivisible($number,15)){
			return 'FizzBuzz';
		} elseif($this->isDivisible($number,5) || $this->haveNumber($number,5)){
			return 'Buzz';
		}elseif($this->isFizz($number)){
			return 'Fizz';		
		} else{
			return $number;
		}
	}

	public function isFizz($number){
		return $this->isDivisible($number,3) || $this->haveNumber($number,3);
	}

	public function isBuzz($number){
		return $this->haveNumber($number,5);
	}

	public function isDivisible($dividendo,$divisor){
		return ($dividendo % $divisor == 0);
	}

	public function haveNumber($check, $number){
		return substr_count("$check", "$number") != false;
	}

	// @Todo falta tener en cuenta caso dobles
	// Revisar para recordar los requisitos.
}

