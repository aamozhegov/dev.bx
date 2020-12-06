<?php

require_once('./calc.php/');

use \PHPUnit\Framework\TestCase;

class calcTest extends TestCase {
	public function testAdd(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->add(2,2));
	}

	public function testSubtract(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->subtract(8, 4));
	}

	public function testMultiply(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->multiply(2, 2));
	}

	public function testDivide(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->divide(8, 2));
	}

	public function testSqr(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->sqr(16));
	}

	public function testExponentiation(): void {
		$calculator = new Calculator();
		self::assertEquals(4, $calculator->exponentiation(2, 2));
	}

}
