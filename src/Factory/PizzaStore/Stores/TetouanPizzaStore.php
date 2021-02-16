<?php

namespace App\Factory\PizzaStore\Stores;

use App\Factory\PizzaStore\Ingrediens\TetouanPizzaIngrediensFactory;
use App\Factory\PizzaStore\Pizza\APizza;
use App\Factory\PizzaStore\Pizza\QuatreFromages;

class TetouanPizzaStore extends APizzaStore
{
    public function createPizza(string $type): APizza
    {
        $ingredients_factory = new TetouanPizzaIngrediensFactory();
        
        if($type == 'quatre fromages') {
            return new QuatreFromages('Quatre fromages tetouaniya', $ingredients_factory);
        }
    }
}