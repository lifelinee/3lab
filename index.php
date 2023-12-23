<?php

require_once 'vendor/autoload.php';

use PizzaLibrary\PizzaStore\NewYorkPizzaStore;
use PizzaLibrary\PizzaStore\MoscowPizzaStore;

$nyStore = new NewYorkPizzaStore();
$moscowStore = new MoscowPizzaStore();

echo "Ordering a cheese pizza from New York Pizza Store:\n";
$nyCheesePizza = $nyStore->orderPizza('cheese');
echo "\n";

echo "Ordering a pepperoni pizza from moscow Pizza Store:\n";
$moscowPepperoniPizza = $moscowStore->orderPizza('pepperoni');
echo "\n";

echo "Received pizza from New Moscow Pizza Store:\n";
echo get_class($nyCheesePizza) . "\n\n";

echo "Received pizza from moscow Pizza Store:\n";
echo get_class($moscowPepperoniPizza) . "\n\n";
