<?php namespace PopcornPHP\Market\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\SoftDelete;
use Illuminate\Support\Facades\Session;

class Product extends Model
{
    public $table = 'popcornphp_market_product';

    use SoftDelete;
    protected $dates = ['deleted_at'];

    public $belongsTo = [
        'relCategory' => [
            'PopcornPHP\Market\Models\Category',
            'key' => 'category_id',
        ],
    ];

    public $belongsToMany = [
        'relProperty' => [
            'PopcornPHP\Market\Models\Property',
            'table' => 'popcornphp_market_rel_product_property',
            'scope' => 'FilterProperty',
            'pivot' => [
                'value_id',
            ],
        ],
    ];

    public $attachMany = [
        'images' => [
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

    /**
     * Получаем категории последнего уровня вложенности
     * @return mixed
     */
    public function getRelCategoryOptions() {
        return Category::justLeaves()
            ->lists('name', 'id');
    }

    /**
     * Выбор свойств, в зависимости от категории
     * @param $fields
     * @param null $context
     */
    public function filterFields($fields, $context = null) {
        if ($context == 'create') {
            $fields->relProperty->hidden = true;
        }

        if ($context == 'update') {
            Session::remove('property_ids');

            $properties = Category::where('id', $fields->relCategory->value)
                ->first()
                ->relProperty()
                ->lists('id');

            Session::set('property_ids', $properties);
        }
    }

    public function beforeSave()
    {
        if (!isset($this->relations['pivot'])) { // Сохранение товара в "каталоге"
            // Подсчет прибыли и стоимости продажи
            $price_purchase = $this->price_purchase;

            $markup = $price_purchase * ($this->markup_percent / 100) + $this->markup_fixed;
            $discount = $price_purchase * ($this->discount_percent / 100) + $this->discount_fixed;

            $this->price_selling = $price_purchase + $markup - $discount;
            $this->profit = $this->price_selling - $price_purchase;
        } else { // Сохранение товара в "заказе"
            // Установить значения по умолчанию, если отсутствуют индивидуальные значения
            if ($this->pivot->price_purchase == null) {
                $this->pivot->price_purchase = $this->price_purchase;
            }

            if ($this->pivot->markup_percent == null) {
                $this->pivot->markup_percent = $this->markup_percent;
            }

            if ($this->pivot->markup_fixed == null) {
                $this->pivot->markup_fixed = $this->markup_fixed;
            }

            if ($this->pivot->discount_percent == null) {
                $this->pivot->discount_percent = $this->discount_percent;
            }

            if ($this->pivot->discount_fixed == null) {
                $this->pivot->discount_fixed = $this->discount_fixed;
            }

            if ($this->pivot->quantity == null) {
                $this->pivot->quantity = 1;
            }

            // Подсчет прибыли и стоимости продажи для каждого товара в заказе
            $price_purchase = $this->pivot->price_purchase;
            $markup_percent = $this->pivot->markup_percent;
            $markup_fixed = $this->pivot->markup_fixed;
            $discount_percent = $this->pivot->discount_percent;
            $discount_fixed = $this->pivot->discount_fixed;
            $quantity = $this->pivot->quantity;

            $markup = $price_purchase * ($markup_percent / 100) + $markup_fixed;
            $discount = $price_purchase * ($discount_percent / 100) + $discount_fixed;

            $this->pivot->price_selling = $price_purchase + $markup - $discount;
            $this->pivot->profit = $this->pivot->price_selling - $price_purchase;

            // Подсчет общей стоимости и прибыли
            $this->pivot->total_cost = $this->pivot->price_selling * $quantity;
            $this->pivot->total_profit = $this->pivot->profit * $quantity;
        }
    }
}