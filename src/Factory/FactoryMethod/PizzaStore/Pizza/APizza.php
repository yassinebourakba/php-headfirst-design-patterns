<?php

namespace App\Factory\FactoryMethod\PizzaStore\Pizza;

abstract class APizza
{
    protected $name;
    protected $toppings = [];

    public function prepare()
    {
        echo 'Preparing '.$this->name.'..'.PHP_EOL;
        
        echo 'Adding toppings: '.PHP_EOL;
        foreach ($this->toppings as $topping) {
            echo '- chi haja d '.$topping.PHP_EOL;
        }
        
        echo 'Prepared.'.PHP_EOL;
    }

    public function bake()
    {
        echo 'Baking it..'.PHP_EOL;
    }

    public function cut()
    {
        echo 'Cuting it..'.PHP_EOL;
    }

    public function box()
    {
        echo 'To the box..'.PHP_EOL;
    }
}