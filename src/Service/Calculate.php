<?php

namespace App\Service;
use App\Util\Operation;

class Calculate implements Operation
{
    protected $operation;

    public function __construct(string $operation = "")
    {
        $this->operation = $operation;
    }

    public function name() : string{
        return $this->operation;
    }
    public function calculate(int $operatorA, int $operatorB){
        switch ($this->name()) {
            case 'add':
                return $this->add($operatorA, $operatorB);
            case 'sub':
                return $this->sub($operatorA, $operatorB);
            case 'mul':
                return $this->mul($operatorA, $operatorB);
            case 'div':
                if ($operatorB == 0) {
                    return 'No se puede dividir por 0';
                }
                return $this->div($operatorA, $operatorB);
            default:
                return 'Operacion '.$this->name().' no soportada, operaciones validas: add = +, sub = -, mul = *, div = /';
        }
    }

    private function add(int $operatorA, int $operatorB): int
    {
        return $operatorA + $operatorB;
    }

    private function sub(int $operatorA, int $operatorB): int
    {
        return $operatorA - $operatorB;
    }

    private function mul(int $operatorA, int $operatorB): int
    {
        return $operatorA * $operatorB;
    }

    private function div(int $operatorA, int $operatorB): int
    { 
        return $operatorA / $operatorB;
    }
}