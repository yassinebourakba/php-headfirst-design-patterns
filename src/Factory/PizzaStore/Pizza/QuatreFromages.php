<?php

namespace App\Factory\PizzaStore\Pizza;

class QuatreFromages extends APizza
{
    public function prepare()
    {
        echo 'Preparing '.$this->name;
        echo PHP_EOL;
        $this->ingrediens_factory->createDough();
        $this->ingrediens_factory->createSauce();
        $this->ingrediens_factory->createCheese();
    }
}