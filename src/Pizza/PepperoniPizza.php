<?php

namespace PizzaLibrary\Pizza;
use PizzaLibrary\Pizza\Pizza;
class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Pepperoni Pizza';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Pepperoni', 'Mozzarella Cheese', 'Bell Peppers'];
    }

    public function prepare(): void
    {
        echo "Preparing {$this->name}:\n";
        echo "Added sauce: {$this->sauce}\n";
        echo "Added toppings: " . implode(', ', $this->toppings) . "\n";
    }

    public function cut(): void
    {
        echo "Custom cutting method for {$this->name}: Cut into squares.\n";
    }
}
