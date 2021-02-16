<?php

namespace App\Factory\PizzaStore\Stores;

use App\Factory\PizzaStore\Pizza\APizza;

abstract class APizzaStore
{
    final public function orderPizza(string $type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        echo 'Haana a m3lem, bss7tu'.PHP_EOL;
    }

    abstract public function createPizza(string $type): APizza;
}