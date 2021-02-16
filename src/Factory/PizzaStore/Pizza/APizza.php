<?php

namespace App\Factory\PizzaStore\Pizza;

use App\Factory\PizzaStore\Ingrediens\APizzaIngrediensFactory;

abstract class APizza
{
    protected $ingrediens_factory;
    
    public $name;
    protected $dough;
    protected $sauce;
    protected $cheese;
    protected $veggies;

    public function __construct(string $name, APizzaIngrediensFactory $pizza_ingrediens_factory)
    {
        $this->name = $name;
        $this->ingrediens_factory = $pizza_ingrediens_factory;
    }
    
    abstract public function prepare();

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