<?php

namespace App\Decorator\Starbuzz\Beverages;

abstract class Beverage
{
    protected $description = 'Unkown';

    abstract public function getDescription();

    abstract public function cost();
}