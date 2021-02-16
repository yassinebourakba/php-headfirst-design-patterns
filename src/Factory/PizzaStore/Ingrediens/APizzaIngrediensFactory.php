<?php

namespace App\Factory\PizzaStore\Ingrediens;

abstract class APizzaIngrediensFactory
{
    abstract function createDough();

    abstract function createSauce();

    abstract function createCheese();

    abstract function createVeggies();
}