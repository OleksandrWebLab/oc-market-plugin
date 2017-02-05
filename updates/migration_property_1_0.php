<?php namespace PopcornPHP\Market\Updates;

use October\Rain\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class Migration_Property_1_0 extends Migration
{
    public function up()
    {
        Schema::create('popcornphp_market_property', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name', 127);
            $table->string('slug', 127)->unique();

            $table->boolean('is_filter_enable');
            $table->boolean('is_show_full');

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('popcornphp_market_property_value', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('property_id')->index()->nullable();

            $table->string('name', 31);
            $table->string('slug', 31)->unique();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('popcornphp_market_property_value');
        Schema::dropIfExists('popcornphp_market_property');
    }
}