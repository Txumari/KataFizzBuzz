<?php

namespace katayunoMadrid\Test;

use katayunoMadrid\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase {


	public function testIsNumber(){
		$fizz = new FizzBuzz();
		$this->assertEquals(1,$fizz->kataFizzBuzz(1));
	}

	public function testDivisibleThree(){
		$fizz = new FizzBuzz();
		$this->assertEquals('Fizz',$fizz->kataFizzBuzz(3));
	}

	public function testHaveThree(){
		$fizz = new FizzBuzz();
		$this->assertEquals('Fizz',$fizz->kataFizzBuzz(13));
	}

	public function testDivisibleFive(){
		$fizz = new FizzBuzz();
		$this->assertEquals('Buzz',$fizz->kataFizzBuzz(5));
	}

	// Este caso prueba el orden. Buzz es prioritario vs Fizz
	public function testHaveFive(){
		$fizz = new FizzBuzz();
		$this->assertEquals('Buzz',$fizz->kataFizzBuzz(53));
	}

	public function testIsDivisibleThreeFive(){
		$fizz = new FizzBuzz();
		$this->assertEquals('FizzBuzz',$fizz->kataFizzBuzz(15));
	}
	
	public function testIsFizz(){
		$fizz = new FizzBuzz();
		$this->assertEquals('Fizz',$fizz->kataFizzBuzz(3));
	}

}