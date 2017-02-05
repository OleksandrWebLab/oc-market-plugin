<?php namespace PopcornPHP\Market\Updates\Seeder;

use October\Rain\Database\Updates\Seeder;
use PopcornPHP\Market\Models\Property;

class Seeder_Property_1_0 extends Seeder
{
    public function run()
    {
        $root = Property::create([
            'name' => 'Brands',
            'slug' => 'brands',
            'is_filter_enable' => true,
            'is_show_full' => true,
        ]);

        $root->relPropertyValue()->create([
            'name' => 'Apple',
            'slug' => 'Apple',
        ]);

        $root->relPropertyValue()->create([
            'name' => 'Samsung',
            'slug' => 'Samsung',
        ]);

        $root->relPropertyValue()->create([
            'name' => 'Xiaomi',
            'slug' => 'Xiaomi',
        ]);


        $root = Property::create([
            'name' => 'Screen diagonal',
            'slug' => 'diagonal',
            'is_filter_enable' => true,
            'is_show_full' => false,
        ]);

        $root->relPropertyValue()->create([
            'name' => '5',
            'slug' => '5',
        ]);

        $root->relPropertyValue()->create([
            'name' => '5.5',
            'slug' => '5.5',
        ]);

        $root->relPropertyValue()->create([
            'name' => '6',
            'slug' => '6',
        ]);


        $root = Property::create([
            'name' => 'Weight',
            'slug' => 'weight',
            'is_filter_enable' => true,
            'is_show_full' => false,
        ]);

        $root->relPropertyValue()->create([
            'name' => '<250',
            'slug' => '250',
        ]);

        $root->relPropertyValue()->create([
            'name' => '251-400',
            'slug' => '251',
        ]);

        $root->relPropertyValue()->create([
            'name' => '400<',
            'slug' => '400',
        ]);
    }
}