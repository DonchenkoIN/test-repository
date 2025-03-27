<?php

namespace DonchenkoIn\TestPackage\Tests;

use DonchenkoIn\TestPackage\Facades\TestFacade;

class ExampleTest extends TestCase
{
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    public function test_sum_function(): void
    {
        $this->assertEquals(10, TestFacade::sum(5, 5));
    }

}