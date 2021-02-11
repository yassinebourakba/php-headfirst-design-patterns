<?php

require __DIR__.'/../../../vendor/autoload.php';

use App\Decorator\Starbuzz\Beverages\Atay;
use App\Decorator\Starbuzz\Condiments\Herbs;
use App\Decorator\Starbuzz\Condiments\Water;

$afak_wahd = new Water(new Herbs(new Atay()));

echo '-me : bch7al akhay dik '.$afak_wahd->getDescription();
echo PHP_EOL;
echo '-serbay : jatek akhay '.$afak_wahd->cost().' drahem';
echo PHP_EOL;