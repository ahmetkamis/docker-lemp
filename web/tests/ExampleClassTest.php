<?php

use PHPUnit\Framework\TestCase;
use App\ExampleClass;

// Example Test

class ExampleClassTest extends TestCase
{

    public function testReturnA() {
        $s = new ExampleClass();
        $a = $s->returnA();

        $this->assertEquals("A", $a);
    }

}