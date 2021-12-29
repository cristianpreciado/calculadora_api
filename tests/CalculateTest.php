<?php

namespace App\Tests;

use App\Service\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{
    public function testSum()
    {
        $calculate = new Calculate("add");
        $result = $calculate->calculate(2, 2);
        $this->assertEquals(4, $result);
    }

    public function testSub()
    {
        $calculate = new Calculate("sub");
        $result = $calculate->calculate(2, 2);
        $this->assertEquals(0, $result);
    }

    public function testMult()
    {
        $calculate = new Calculate("mul");
        $result = $calculate->calculate(2, 2);
        $this->assertEquals(4, $result);
    }

    public function testDiv()
    {
        $calculate = new Calculate("div");
        $result = $calculate->calculate(2, 2);
        $this->assertEquals(1, $result);
    }

    public function testDivByZero()
    {
        $calculate = new Calculate("div");
        $result = $calculate->calculate(2, 0);
        $this->assertEquals("No se puede dividir por 0", $result);
    }

    public function testInvalidOperation()
    {
        $calculate = new Calculate("invalid");
        $result = $calculate->calculate(2, 2);
        $this->assertEquals('Operacion invalid no soportada, operaciones validas: add = +, sub = -, mul = *, div = /', $result);
    }
}