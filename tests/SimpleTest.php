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
}
