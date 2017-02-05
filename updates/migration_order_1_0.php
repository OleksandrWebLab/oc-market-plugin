<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Order_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_order', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id');

            $table->string('city', 63)->nullable();
            $table->string('address', 127)->nullable();
            $table->string('phone', 31)->nullable();
            $table->string('comment', 255)->nullable();

            $table->string('status', 15)->nullable();

            $table->double('total_cost', 12, 2)->default(0);
            $table->double('total_profit', 12, 2)->default(0);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_order');
    }
}