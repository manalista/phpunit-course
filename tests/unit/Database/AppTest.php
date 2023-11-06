<?php

namespace AndreusTimm\PHPUnit\Database;

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase
{
    public function testReadPersons()
    {
        $app = new App();
        $this->assertCount(2, $app->readPersons());
    }
}