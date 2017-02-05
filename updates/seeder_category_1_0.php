<?php namespace PopcornPHP\Market\Updates\Seeder;

use October\Rain\Database\Updates\Seeder;
use PopcornPHP\Market\Models\Category;

class Seeder_Category_1_0 extends Seeder
{
    public function run()
    {
        $root = Category::create([
            'name' => 'Laptops, tablets',
            'slug' => 'laptops-tablets',
        ]);

        $child = $root->children()->create([
            'name' => 'Notebooks',
            'slug' => 'laptops',
        ]);

        $child->children()->create([
            'name' => 'Stickers',
            'slug' => 'stickers',
        ]);

        $child->children()->create([
            'name' => 'Stands',
            'slug' => 'stands',
        ]);

        $sub_child = $child->children()->create([
            'name' => 'Bags',
            'slug' => 'bags',
        ]);

        $sub_child->children()->create([
            'name' => 'Men\'s',
            'slug' => 'for-man',
        ]);

        $sub_child->children()->create([
            'name' => 'Women\'s',
            'slug' => 'for-women',
        ]);


        $child = $root->children()->create([
            'name' => 'Tablets',
            'slug' => 'tablets',
        ]);

        $child->children()->create([
            'name' => 'Covers',
            'slug' => 'covers',
        ]);

        $child->children()->create([
            'name' => 'Charging device',
            'slug' => 'charging-devices',
        ]);

        $child->children()->create([
            'name' => 'Protective films',
            'slug' => 'protective-films',
        ]);


        $root = Category::create([
            'name' => 'Smartphones',
            'slug' => 'smartphones',
        ]);

        $child = $root->children()->create([
            'name' => 'Price category',
            'slug' => 'price-category',
        ]);

        $child->children()->create([
            'name' => 'Push-button telephone',
            'slug' => 'push-button',
        ]);

        $child->children()->create([
            'name' => 'Budget smartphones',
            'slug' => 'budget-smartphones',
        ]);

        $child->children()->create([
            'name' => 'Business smartphones',
            'slug' => 'business-smartphones',
        ]);

        $child->children()->create([
            'name' => 'Premium smartphones',
            'slug' => 'premium-smartphones',
        ]);

        $child = $root->children()->create([
            'name' => 'Accessories',
            'slug' => 'accessories',
        ]);

        $child->children()->create([
            'name' => 'Covers',
            'slug' => 'covers',
        ]);

        $child->children()->create([
            'name' => 'Headset',
            'slug' => 'headset',
        ]);

        $child->children()->create([
            'name' => 'Headphones',
            'slug' => 'headphones',
        ]);


        $root = Category::create([
            'name' => 'PC Components',
            'slug' => 'accessories-pc',
        ]);

        $root->children()->create([
            'name' => 'Processors',
            'slug' => 'processors',
        ]);

        $child = $root->children()->create([
            'name' => 'Discs',
            'slug' => 'discs',
        ]);

        $child->children()->create([
            'name' => 'HDD',
            'slug' => 'hdd',
        ]);

        $child->children()->create([
            'name' => 'SSD',
            'slug' => 'ssd',
        ]);
    }
}