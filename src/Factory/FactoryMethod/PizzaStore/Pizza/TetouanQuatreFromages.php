<?php

namespace App\Factory\FactoryMethod\PizzaStore\Pizza;

class TetouanQuatreFromages extends APizza
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->name = 'Quatre Fromages tetouaniya';
        $this->toppings = ['Mozarella', 'Edam', 'Cheddar', 'Gouda'];
    }
}