<?php

namespace App\Factory\FactoryMethod\PizzaStore\Pizza;

class RabatQuatreFromages extends APizza
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->name = 'Quatre Fromages rbatiya';
        $this->toppings = ['Mozarella', 'Edam', 'Roque fort', 'Parmesean'];
    }
}