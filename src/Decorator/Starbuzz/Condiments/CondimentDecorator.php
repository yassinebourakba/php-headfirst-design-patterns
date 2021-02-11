<?php

namespace App\Decorator\Starbuzz\Condiments;

use App\Decorator\Starbuzz\Beverages\Beverage;

abstract class CondimentDecorator extends Beverage
{
    protected $beverage;

    /**
     * Class constructor.
     */
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function getDescription();
}
