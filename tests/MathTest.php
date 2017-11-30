<?php
use App\Supports\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    public function testAdd()
    {
        $m = new Math();
        $this->assertEquals(3, $m->add(1, 2));
    }
}
