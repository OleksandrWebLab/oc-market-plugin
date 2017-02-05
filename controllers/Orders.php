<?php namespace PopcornPHP\Market\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Orders extends Controller
{
    public $implement = [
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('PopcornPHP.Market', 'market', 'orders');
    }
}