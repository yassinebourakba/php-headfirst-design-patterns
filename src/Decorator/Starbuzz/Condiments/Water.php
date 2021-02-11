<?php

namespace App\Decorator\Starbuzz\Condiments;

class Water extends CondimentDecorator
{
    protected $description = 'qraa del ma';

    public function getDescription()
    {
        return $this->beverage->getDescription()." w ".$this->description;
    }

    public function cost()
    {
        return $this->beverage->cost() + 2;
    }
}