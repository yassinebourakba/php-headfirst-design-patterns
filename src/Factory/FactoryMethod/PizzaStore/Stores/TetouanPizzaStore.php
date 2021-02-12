<?php

namespace App\Factory\FactoryMethod\PizzaStore\Stores;

use App\Factory\FactoryMethod\PizzaStore\Pizza\APizza;
use App\Factory\FactoryMethod\PizzaStore\Pizza\TetouanQuatreFromages;

class TetouanPizzaStore extends APizzaStore
{
    public function createPizza(string $type): APizza
    {
        if($type == 'quatre fromages')
            return new TetouanQuatreFromages();
    }
}