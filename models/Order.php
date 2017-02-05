<?php namespace PopcornPHP\Market\Models;

use October\Rain\Database\Model;
use Illuminate\Support\Facades\DB;
use October\Rain\Database\Traits\SoftDelete;

class Order extends Model
{
    public $table = 'popcornphp_market_order';

    use SoftDelete;
    protected $dates = ['deleted_at'];

    public $belongsTo = [
        'relUser' => [
            'RainLab\User\Models\User',
            'key' => 'user_id',
        ],
    ];

    public $belongsToMany = [
        'relProduct' => [
            'PopcornPHP\Market\Models\Product',
            'table' => 'popcornphp_market_rel_order_product',
            'timestamps' => true,
            'pivot' => [
                'order_id',
                'product_id',

                'price_purchase',
                'free_shipping',
                'markup_percent',
                'markup_fixed',
                'discount_percent',
                'discount_fixed',
                'price_selling',
                'profit',
                'quantity',
                'total_cost',
                'total_profit',
            ],
        ],
    ];

    public function beforeSave()
    {
        if (isset($this->attributes['id'])) {
            // We believe the total cost and profit
            $products = DB::table('popcornphp_market_rel_order_product')
                ->select('price_purchase', 'price_selling', 'quantity')
                ->where('order_id', $this->attributes['id'])
                ->get();

            $purchase = 0;
            $selling = 0;

            foreach ($products as $key => $product) {
                $purchase = ($product->price_purchase * $product->quantity) + $purchase;
                $selling = ($product->price_selling * $product->quantity) + $selling;
            }

            $this->total_cost = $selling;
            $this->total_profit = $selling - $purchase;
        }
    }
}