<?php namespace PopcornPHP\Market\Components;

use Cms\Classes\ComponentBase;

class Basket extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Basket Component',
            'description' => 'Shopping basket'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}