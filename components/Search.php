<?php namespace PopcornPHP\Market\Components;

use Cms\Classes\ComponentBase;

class Search extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Search Component',
            'description' => 'Performing search by catalog'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
}