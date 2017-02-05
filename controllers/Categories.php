<?php namespace PopcornPHP\Market\Controllers;

use Backend\Classes\Controller;
use Backend\Facades\BackendMenu;

class Categories extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ReorderController',
        'Backend.Behaviors.RelationController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('PopcornPHP.Market', 'market', 'categories');
    }

    public function create($recordId = null, $context = null) {
        $this->bodyClass = 'compact-container';

        $this->asExtension('FormController')->create();
    }

    public function update($recordId = null, $context = null) {
        $this->bodyClass = 'compact-container';

        $this->asExtension('FormController')->update($recordId);
    }

    public function preview($recordId = null, $context = null) {
        $this->bodyClass = 'compact-container';

        $this->asExtension('FormController')->preview($recordId);
    }
}