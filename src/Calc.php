<?php

namespace Calculator;

class Calculator
{
    private float $a;
    private float $b;
    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    public function sum(): float
    {
        return $this->a + $this->b;
    }
    public function mul(): float
    {
        return $this->a * $this->b;
    }
    public function dif(): float
    {
        return $this->a - $this->b;
    }
    public function div(): float
    {
        return $this->a / $this->b;
    }
}
