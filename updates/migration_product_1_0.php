<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Product_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_product', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('category_id');

            $table->string('name', 127);
            $table->string('slug', 127);

            $table->string('vendor_code', 63)->unique();
            $table->string('condition', 15);

            $table->boolean('is_enabled');

            $table->string('short_description', 255);
            $table->text('description');

            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();

            $table->double('price_purchase', 12, 2)->default(0);
            $table->boolean('free_shipping')->default(false);
            $table->double('markup_percent', 12, 2)->default(0);
            $table->double('markup_fixed', 12, 2)->default(0);
            $table->double('discount_percent', 12, 2)->default(0);
            $table->double('discount_fixed', 12, 2)->default(0);
            $table->double('price_selling', 12, 2)->default(0);
            $table->double('profit', 12, 2)->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_product');
    }
}