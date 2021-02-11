<?php

namespace App\Decorator\Starbuzz\Condiments;

class Herbs extends CondimentDecorator
{
    protected $description = 'Meachba';

    public function getDescription()
    {
        return $this->beverage->getDescription().", ".$this->description;
    }

    public function cost()
    {
        return $this->beverage->cost() + 1;
    }
}