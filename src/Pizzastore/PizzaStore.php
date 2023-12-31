<?php

namespace PizzaLibrary\PizzaStore;

use PizzaLibrary\Pizza\Pizza;

abstract class PizzaStore
{
    abstract public function createPizza(string $type): Pizza;

    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();

        return $pizza;
    }
}
