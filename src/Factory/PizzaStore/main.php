<?php

require __DIR__.'/../../../vendor/autoload.php';

use App\Factory\PizzaStore\Stores\RabatPizzaStore;
use App\Factory\PizzaStore\Stores\TetouanPizzaStore;

$store_rabat = new RabatPizzaStore();
$store_rabat->orderPizza('quatre fromages');

echo PHP_EOL;

$store_tetouane = new TetouanPizzaStore();
$store_tetouane->orderPizza('quatre fromages');