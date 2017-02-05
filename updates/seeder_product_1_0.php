<?php namespace PopcornPHP\Market\Updates\Seeder;

use October\Rain\Database\Updates\Seeder;
use PopcornPHP\Market\Models\Product;

class Seeder_Product_1_0 extends Seeder
{
    public function run()
    {
        Product::create([
            'category_id' => 17,
            'name' => 'iPhone 7 Black',
            'slug' => 'iphone-7-black',
            'vendor_code' => 'xxx1',
            'condition' => 'new',
            'is_enabled' => true,
            'short_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'price_purchase' => '1000',
            'free_shipping' => false,
            'markup_percent' => 10,
            'markup_fixed' => 0,
            'discount_percent' => 3,
            'discount_fixed' => 0,
        ]);

        Product::create([
            'category_id' => 17,
            'name' => 'iPhone 7 Gold',
            'slug' => 'iphone-7-gold',
            'vendor_code' => 'xxx2',
            'condition' => 'new',
            'is_enabled' => true,
            'short_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'price_purchase' => '1200',
            'free_shipping' => false,
            'markup_percent' => 10,
            'markup_fixed' => 0,
            'discount_percent' => 3,
            'discount_fixed' => 0,
        ]);

        Product::create([
            'category_id' => 17,
            'name' => 'iPhone 7 Rose',
            'slug' => 'iphone-7-rose',
            'vendor_code' => 'xxx3',
            'condition' => 'new',
            'is_enabled' => true,
            'short_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'price_purchase' => '1250',
            'free_shipping' => false,
            'markup_percent' => 15,
            'markup_fixed' => 0,
            'discount_percent' => 3,
            'discount_fixed' => 0,
        ]);

        Product::create([
            'category_id' => 17,
            'name' => 'iPhone 7 Silver',
            'slug' => 'iphone-7-silver',
            'vendor_code' => 'xxx4',
            'condition' => 'new',
            'is_enabled' => true,
            'short_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'price_purchase' => '1100',
            'free_shipping' => false,
            'markup_percent' => 10,
            'markup_fixed' => 0,
            'discount_percent' => 3,
            'discount_fixed' => 0,
        ]);

        Product::create([
            'category_id' => 17,
            'name' => 'iPhone 7 Jet Black',
            'slug' => 'iphone-7-jet-black',
            'vendor_code' => 'xxx5',
            'condition' => 'new',
            'is_enabled' => true,
            'short_description' => 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem',
            'price_purchase' => '1350',
            'free_shipping' => false,
            'markup_percent' => 16,
            'markup_fixed' => 0,
            'discount_percent' => 5,
            'discount_fixed' => 0,
        ]);
    }
}