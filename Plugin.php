<?php namespace PopcornPHP\Market;

use System\Classes\PluginBase;
use Backend\Facades\Backend;

class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    public function pluginDetails()
    {
        return [
            'name'        => 'Market',
            'description' => 'Free market for October CMS',
            'author'      => 'Alexander Shapoval',
            'icon'        => 'icon-shopping-cart',
            'homepage'    => 'https://popcornphp.github.io',
        ];
    }

    public function registerComponents()
    {
        return [
            'PopcornPHP\Market\Components\Basket'   => 'marketBasket',
            'PopcornPHP\Market\Components\Category' => 'marketCategory',
            'PopcornPHP\Market\Components\Product'  => 'marketProduct',
            'PopcornPHP\Market\Components\Search'   => 'marketSearch',
        ];
    }

    public function register()
    {
        $this->registerConsoleCommand('fr.pm', 'PopcornPHP\Market\Console\ForceRefresh');
    }

    public function registerNavigation()
    {
        return [
            'market' => [
                'label'       => 'Market',
                'url'         => Backend::url('popcornphp/market/products'),
                'icon'        => 'icon-shopping-cart',
                'iconSvg'     => 'plugins/popcornphp/market/assets/images/icon.svg',
                'permissions' => ['popcornphp.market.*'],
                'order'       => 100,

                'sideMenu' => [
                    'products'   => [
                        'label' => 'Products',
                        'icon'  => 'icon-cube',
                        'url'   => Backend::url('popcornphp/market/products'),
                    ],
                    'orders'     => [
                        'label' => 'Orders',
                        'icon'  => 'icon-shopping-cart',
                        'url'   => Backend::url('popcornphp/market/orders'),
                    ],
                    'categories' => [
                        'label' => 'Categories',
                        'icon'  => 'icon-archive',
                        'url'   => Backend::url('popcornphp/market/categories'),
                    ],
                    'properties' => [
                        'label' => 'Properties',
                        'icon'  => 'icon-stack-overflow',
                        'url'   => Backend::url('popcornphp/market/properties'),
                    ],
                ],
            ],
        ];
    }
}