<?php

namespace Test\Fizzbuzz;
use Fizzbuzz\Fizzbuzz;

class FizzbuzzTest extends \PHPUnit_Framework_TestCase {

	$fizz = 18;
	function testFizz($fizz){
		$Fizzbuzz = new Fizzbuzz();
		$this->assertEquals("Fizz", $Fizzbuzz->process(3));

	}
}