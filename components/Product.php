<?php namespace PopcornPHP\Market\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;

class Product extends ComponentBase
{
    public $categoryPage;

    public $categorySlug;
    public $categorySlugParam;


    public $productPage;

    public $productSlug;
    public $productSlugParam;

    public function componentDetails()
    {
        return [
            'name' => 'ProductSingle Component',
            'description' => 'Display product page'
        ];
    }

    public function defineProperties()
    {
        return [
            'categoryPage' => [
                'title' => 'Category page',
                'group' => 'Category page',
                'type' => 'dropdown',
            ],
            'categorySlug' => [
                'title' => 'Category slug',
                'group' => 'Category page',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ],

            'productPage' => [
                'title' => 'Product page',
                'group' => 'Product page',
                'type' => 'dropdown',
            ],
            'productSlug' => [
                'title' => 'Product slug',
                'group' => 'Product page',
                'type' => 'string',
                'default' => '{{ :slug }}',
            ],
        ];
    }

    public function getCategoryPageOptions()
    {
        return Page::sortBy('baseFileName')
            ->lists('url', 'baseFileName');
    }

    public function getProductPageOptions()
    {
        return Page::sortBy('baseFileName')
            ->lists('url', 'baseFileName');
    }

    public function initComponent()
    {
        $this->categoryPage = $this->property('categoryPage');

        $this->categorySlug = $this->property('categorySlug');
        $this->categorySlugParam = $this->paramName('categorySlug');


        $this->productPage = $this->property('productPage');

        $this->productSlug = $this->property('productSlug');
        $this->productSlugParam = $this->paramName('productSlug');
    }

    public function onRun()
    {
        $this->initComponent();
    }
}