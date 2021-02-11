<?php

namespace App\Decorator\Starbuzz\Beverages;

use App\Decorator\Starbuzz\Beverages\Beverage;

class Qahwa extends Beverage
{
    protected $description = 'Qahwa';
    
    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 7;
    }
}