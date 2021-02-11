<?php

namespace App\Decorator\Starbuzz\Beverages;

use App\Decorator\Starbuzz\Beverages\Beverage;

class Atay extends Beverage
{
    protected $description = 'Atay';
    
    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 5;
    }
}
