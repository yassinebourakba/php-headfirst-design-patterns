<?php

namespace App\Factory\PizzaStore\Ingrediens;

class TetouanPizzaIngrediensFactory extends APizzaIngrediensFactory
{
    public function createDough()
    {
        echo 'Dough tetouaniya';
        echo PHP_EOL;
    }

    public function createSauce()
    {
        echo 'Sauce tetouaniya';
        echo PHP_EOL;
    }

    public function createCheese()
    {
        echo 'Djben';
        echo PHP_EOL;
    }

    public function createVeggies()
    {
        foreach (['mloukhiya', 'krafss'] as $veggy) {
            echo $veggy;
            echo PHP_EOL;
        }
    }
}