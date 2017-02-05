<?php namespace PopcornPHP\Market\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\SoftDelete;

class PropertyValue extends Model
{
    public $table = 'popcornphp_market_property_value';

    use SoftDelete;
    protected $dates = ['deleted_at'];

    public $belongsTo = [
        'relProperty' => [
            'PopcornPHP\Market\Models\Property',
            'key' => 'property_id',
        ]
    ];
}