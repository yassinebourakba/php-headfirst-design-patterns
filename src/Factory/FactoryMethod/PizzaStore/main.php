<?php

use App\Factory\FactoryMethod\PizzaStore\Stores\RabatPizzaStore;
use App\Factory\FactoryMethod\PizzaStore\Stores\TetouanPizzaStore;

require __DIR__.'/../../../../vendor/autoload.php';

$store_rabat = new RabatPizzaStore();
$store_rabat->orderPizza('quatre fromages');

echo PHP_EOL;

$store_tetouane = new TetouanPizzaStore();
$store_tetouane->orderPizza('quatre fromages');