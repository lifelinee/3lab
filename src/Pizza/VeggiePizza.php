<?php

namespace PizzaLibrary\Pizza;

use PizzaLibrary\Pizza\Pizza;
class VeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Veggie Pizza';
        $this->sauce = 'Pesto Sauce';
        $this->toppings = ['Tomatoes', 'Onions', 'Mushrooms', 'Spinach', 'Feta Cheese'];
    }

    public function prepare(): void
    {
        echo "Preparing {$this->name}:\n";
        echo "Added sauce: {$this->sauce}\n";
        echo "Added toppings: " . implode(', ', $this->toppings) . "\n";
    }
}
