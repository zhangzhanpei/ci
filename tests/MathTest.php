<?php
use App\Supports\Math;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
    protected $m;

    public function setUp()
    {
        $this->m = new Math();
    }

    public function testAdd()
    {
        $this->assertEquals(3, $this->m->add(1, 2));
    }

    public function testDevide()
    {
        $this->assertEquals(-1, $this->m->devide(1, 0));
        $this->assertEquals(3, $this->m->devide(6, 2));
    }

    public function additionDataProvider()
    {
        return [[1, 2, 3], [1, -1, 0]];
    }

    /**
     * @dataProvider additionDataProvider
     */
    public function testAdd2($a, $b, $expected)
    {
        $this->assertEquals($expected, $this->m->add($a, $b));
    }
}
