<?php

namespace App\Creational\AbstractFactory;

use App\Creational\AbstractFactory\AbstractProductA;

/**
 * Concrete Products are created by corresponding Concrete Factories.
 */
class ConcreteProductA1 implements AbstractProductA
{
    public function usefulFunctionA(): string
    {
        return "The result of the product A1.";
    }
}