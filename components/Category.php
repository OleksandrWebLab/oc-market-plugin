<?php namespace PopcornPHP\Market\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;

class Category extends ComponentBase
{
    public $categoryPage;

    public $categorySlug;
    public $categorySlugParam;

    public $categorySlugAjax;
    public $categorySlugAjaxParam;


    public $productPage;

    public $productSlug;
    public $productSlugParam;

    public function componentDetails()
    {
        return [
            'name' => 'Category Component',
            'description' => 'Display the product catalog'
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
            'categorySlugAjax' => [
                'title' => 'Ajax slug',
                'group' => 'Category page',
                'type' => 'string',
                'default' => '{{ :ajax }}',
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
        $this->categorySlugAjax = $this->property('categorySlugAjax');
        $this->categorySlugAjaxParam = $this->paramName('categorySlugAjax');


        $this->productPage = $this->property('productPage');

        $this->productSlug = $this->property('productSlug');
        $this->productSlugParam = $this->paramName('productSlug');
    }

    public function onRun()
    {
        $this->initComponent();
    }
}