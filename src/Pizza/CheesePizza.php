<?php

namespace PizzaLibrary\Pizza;
use PizzaLibrary\Pizza\Pizza;

class CheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Cheese Pizza';
        $this->sauce = 'Tomato Sauce';
        $this->toppings = ['Mozzarella Cheese'];
    }

    public function prepare(): void
    {
        echo "Preparing {$this->name}:\n";
        echo "Added sauce: {$this->sauce}\n";
        echo "Added toppings: " . implode(', ', $this->toppings) . "\n";
    }
}
