<?php

namespace PizzaLibrary\PizzaStore;

use PizzaLibrary\Pizza\CheesePizza;
use PizzaLibrary\Pizza\PepperoniPizza;
use PizzaLibrary\Pizza\VeggiePizza;
use PizzaLibrary\Pizza\Pizza;

class NewYorkPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        if ($type === 'cheese') {
            return new CheesePizza();
        } elseif ($type === 'pepperoni') {
            return new PepperoniPizza();
        } elseif ($type === 'veggie') {
            return new VeggiePizza();
        } else {
            throw new \InvalidArgumentException("Invalid pizza type: $type");
        }
    }
}
