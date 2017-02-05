<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Rel_Order_Product_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_rel_order_product', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();

            $table->double('price_purchase', 10, 2)->default(0);
            $table->boolean('free_shipping')->default(false);
            $table->double('markup_percent', 10, 3)->default(0);
            $table->string('markup_fixed', 7)->default(0);
            $table->double('discount_percent', 10, 3)->default(0);
            $table->string('discount_fixed', 7)->default(0);
            $table->double('price_selling', 10, 2)->default(0);
            $table->double('profit', 10, 2)->default(0);
            $table->integer('quantity')->unsigned()->default(1);
            $table->double('total_cost', 10, 2)->default(0);
            $table->double('total_profit', 10, 2)->default(0);

            $table->timestamps();

            $table->primary(['order_id', 'product_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_rel_order_product');
    }
}