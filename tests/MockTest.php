<?php

namespace AndreusTimm\PHPUnit;

use PHPUnit\Framework\TestCase;

class MockTest extends TestCase
{
	public function testDivide()
	{
		$mock = $this->createMock(Simple::class);
        $mock->expects($this->any())
            ->method('divide')
            ->willReturn(5);

		$service = new SimpleService($mock);
		$result = $service->dividingService(10);

		$this->assertEquals(5, $result);
	}
}
