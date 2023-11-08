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

	public function testMultiply()
	{
		$simple = new Simple(10);
		$result = $simple->multiply(2);

		$this->assertEquals(20, $result);
	}

	public function testSum()
	{
		$simple = new Simple(10);
		$result = $simple->sum(10);

		$this->assertEquals(20, $result);
	}

	public function testSubtract()
	{
		$simple = new Simple(10);
		$result = $simple->subtract(5);

		$this->assertEquals(5, $result);
	}

	public function testDivideByZero()
	{
		$simple = new Simple(20);
		$this->expectException(\InvalidArgumentException::class);
		$simple->divide(0);
	}
}
