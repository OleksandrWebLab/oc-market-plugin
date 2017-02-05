<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Rel_Product_Property_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_rel_product_property', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->integer('product_id')->unsigned();
            $table->integer('property_id')->unsigned();
            $table->integer('value_id')->unsigned();

            $table->primary(['product_id', 'property_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_rel_product_property');
    }
}