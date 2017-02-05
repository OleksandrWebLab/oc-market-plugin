<?php namespace PopcornPHP\Market\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\NestedTree;

class Category extends Model
{
    public $table = 'popcornphp_market_category';

    use SoftDelete;
    protected $dates = ['deleted_at'];

    use NestedTree;

    public $hasMany = [
        'relProduct' => [
            'PopcornPHP\Market\Models\Product',
        ],
        'relProductCount' => [
            'PopcornPHP\Market\Models\Product',
            'count' => true,
        ],
    ];

    public $belongsToMany = [
        'relProperty' => [
            'PopcornPHP\Market\Models\Property',
            'table' => 'popcornphp_market_rel_category_property',
        ],
    ];

    public $attachOne = [
        'icon' => [
            'System\Models\File',
        ],
        'image' => [
            'System\Models\File',
        ],
    ];

    public function setUrl($pageName, $controller)
    {
        $params = [
            'id' => $this->id,
            'slug' => $this->slug,
        ];

        return $this->url = $controller->pageUrl($pageName, $params);
    }

    public function filterFields($fields, $context = null) {
        /**
         * Скрываем поле свойств на странице создания категории,
         * и если категория не является последнего уровня
         */
        if ($context == 'create' || $this->getChildCount() > 0) {
            $fields->relProperty->hidden = true;
        }
    }

    /**
     * Scope для получения категорий последнего уровня вложенности
     * @param $query
     * @return mixed
     */
    public function scopeJustLeaves($query)
    {
        $grammar = $this->getConnection()->getQueryGrammar();

        $rightCol = $grammar->wrap($this->getQualifiedRightColumnName());
        $leftCol = $grammar->wrap($this->getQualifiedLeftColumnName());

        return $query->whereRaw($rightCol . ' - ' . $leftCol . ' = 1');
    }
}