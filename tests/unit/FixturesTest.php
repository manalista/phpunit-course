<?php

namespace AndreusTimm\PHPUnit;

use PHPUnit\Framework\TestCase;

class FixturesTest extends TestCase
{
    private $names;

    private $resource = false;

    public function setUp(): void
    {
        $this->names = [
            'Christian',
            'Nicole',
            'Ben'
        ];

        if (!$this->resource) {
            $this->resource = true;
        }
    }

    public function tearDown(): void
    {
        if ($this->resource) {
            $this->resource = false;
        }
    }

	public function testMethod1()
	{
        $this->assertCount(3, $this->names);
		$this->names[] = 'Surprise!';
        $this->assertCount(4, $this->names);
	}

    public function testMethod2()
    {
        $this->assertCount(3, $this->names);
        array_splice($this->names, 1, 1);
        $this->assertCount(2, $this->names);   
    }
}
