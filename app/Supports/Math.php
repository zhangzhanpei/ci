<?php
namespace App\Supports;

class Math
{
    public function add(int $x, int $y): int {
        return $x + $y;
    }

    public function devide(int $x, int $y) {
        if ($y == 0) {
            return -1;
        }
        return $x / $y;
    }
}
