<?php

namespace App\Factory\PizzaStore\Ingrediens;

class RabatPizzaIngrediensFactory extends APizzaIngrediensFactory
{
    public function createDough()
    {
        echo 'Dough rbatiya';
        echo PHP_EOL;
    }

    public function createSauce()
    {
        echo 'Sauce rbatiya';
        echo PHP_EOL;
    }

    public function createCheese()
    {
        echo 'Cheese rbati';
        echo PHP_EOL;
    }

    public function createVeggies()
    {
        foreach (['ttefa7', 'khizu'] as $veggy) {
            echo $veggy;
            echo PHP_EOL;
        }
    }
}