<?php

namespace AndreusTimm\PHPUnit;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
	public function testDivide()
	{
		$simple = new Simple(10);
		$result = $simple->divide(2);

		$this->assertEquals(5, $result);
	}

	public function testDivideBigNumber()
	{
		$simple = new Simple(200_000_000_000);
		$result = $simple->divide(2);

		$this->assertEquals(100_000_000_000, $result);
	}

	public function testDivideNegative()
	{
		$simple = new Simple(20);
		$result = $simple->divide(-2);

		$this->assertEquals(-10, $result);
	}

	public function testDivideNegativeBigNumber()
	{
		$simple = new Simple(200_000_000_000);
		$result = $simple->divide(-2);

		$this->assertEquals(-100_000_000_000, $result);
	}

	public function testDivideNegativeByNegative()
	{
		$simple = new Simple(-20);
		$result = $simple->divide(-2);

		$this->assertEquals(10, $result);
	}

	public function testDivideByZero(){
		$simple = new Simple(20);
		$this->expectException(\InvalidArgumentException::class);
		$simple->divide(0);
	}

	public function testMultiply()
	{
		$simple = new Simple(10);
		$result = $simple->multiply(2);

		$this->assertEquals(20, $result);
	}

	public function testSubtract(){
		$simple = new Simple(12);
		$result = $simple->subtract(1);

		$this->assertEquals(1, $result);
	}

	public function testePower(){
		$simple = new Simple(3);
		$result = $simple->power(2);

		$this->assertEquals(9, $result);
	}

	public function testSqrt(){
		$simple = new Simple(9);
		$result = $simple->sqrt();

		$this->assertEquals(3, $result);
	}

}