<?php namespace PopcornPHP\Market\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\SoftDelete;
use Illuminate\Support\Facades\Session;

class Property extends Model
{
    public $table = 'popcornphp_market_property';

    use SoftDelete;
    protected $dates = ['deleted_at'];

    public $hasMany = [
        'relPropertyValue' => [
            'PopcornPHP\Market\Models\PropertyValue',
        ],
        'relPropertyValueCount' => [
            'PopcornPHP\Market\Models\PropertyValue',
            'count' => true,
        ],
    ];

    /**
     * Фильтрация списка свойств для данной категории
     * @param $query
     * @return mixed
     */
    public function scopeFilterProperty($query) {
        if (Session::has('property_ids')) {
            return $query->whereIn('id', Session::get('property_ids'));
        } else {
            return $query;
        }
    }

    /**
     * Список значений свойств для выбора на странице создания товара
     * @return mixed
     */
    public function getValues()
    {
        return $this->relPropertyValue()->where('property_id', $this->id)
            ->lists('name', 'id');
    }

    /**
     * Отображение выбранного значения фильтра на странице товара
     * @return mixed
     */
    public function getValueIdAttribute()
    {
        return $this->relPropertyValue()
            ->where('id', $this->pivot->value_id)
            ->first()
            ->name;
    }
}