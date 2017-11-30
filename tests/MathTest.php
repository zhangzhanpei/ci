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

    public function testDevide()
    {
        $m = new Math();
        $this->assertEquals(-1, $m->devide(1, 0));
        $this->assertEquals(3, $m->devide(6, 2));
    }
}
