<?php

namespace App\Factory\PizzaStore\Stores;

use App\Factory\PizzaStore\Ingrediens\RabatPizzaIngrediensFactory;
use App\Factory\PizzaStore\Pizza\APizza;
use App\Factory\PizzaStore\Pizza\QuatreFromages;

class RabatPizzaStore extends APizzaStore
{
    public function createPizza(string $type): APizza
    {
        $ingredients_factory = new RabatPizzaIngrediensFactory();
        
        if($type == 'quatre fromages') {
            return new QuatreFromages('Quatre fromages rbatiya', $ingredients_factory);
        }
    }
}