<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends SmartyController
{
    public function homePage()
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $pageTitle = "Home Page";
        $appName = config('app.name');
        $products = Product::orderBy('created_at', 'DESC')->simplePaginate(6);
        $categories = Category::orderBy('created_at', 'DESC')->get();

        // Generate routes for template use
        $allProductsRoute = route('allProducts');
        $addToCartRoute = route('addToCart');

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('allProductsRoute', $allProductsRoute);
        $this->assignSmarty('addToCartRoute', $addToCartRoute);

        return $this->renderSmarty('homePage.tpl', compact('pageTitle', 'appName', 'products', 'categories'));
    }

    // 
    public function aboutUs()
    {
        $this->assignGlobalAssets();

        $pageTitle = "About Us";
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/aboutUs.tpl', compact('pageTitle'));
    }

    // 
    public function contactUs()
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $pageTitle = "Contact Us";
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/contactUs.tpl', compact('pageTitle'));
    }

    public function faq()
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $pageTitle = "Frequently Ask Questions";
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/faq.tpl', compact('pageTitle'));
    }


    public function policy()
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $pageTitle = "Policy";
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/policy.tpl', compact('pageTitle'));
    }


    public function myLogs()
    {
        $pageTitle = "My Logs";
        $collection = Activity::where('user', auth()->user()->email)->orderBy('created_at', 'DESC')->get();
        return view('my-logs', compact('pageTitle', 'collection'));
    }

    public function productsPage($category)
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $categoryName = Category::where('id', $category)->first();
        $pageTitle = $categoryName->name;
        $products = Product::where('category', $category)->simplePaginate(6);
        $countProducts = $products->count();
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/products.tpl', compact('pageTitle', 'products', 'countProducts'));
    }

    public function allProducts()
    {
        $this->assignGlobalAssets(); // This is to import global assets

        $pageTitle = "All Products";
        $products = Product::orderBy('created_at', 'DESC')->simplePaginate(6);
        $countProducts = $products->count();
        $categories = Category::orderBy('created_at', 'DESC')->get();

        $this->assignSmarty('categories', $categories);
        $this->assignSmarty('auth', auth());

        return $this->renderSmarty('pages/allProducts.tpl', compact('pageTitle', 'products', 'countProducts'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);

        // Decode other_pictures JSON in PHP
        $product->other_pictures_array = $product->other_pictures ? json_decode($product->other_pictures, true) : [];

        // Capitalize status in PHP
        $product->status_formatted = ucfirst($product->status);

        // Get related products from the same category
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->limit(4)
            ->get();

        // Also decode other_pictures for related products
        foreach ($relatedProducts as $relatedProduct) {
            $relatedProduct->other_pictures_array = $relatedProduct->other_pictures ? json_decode($relatedProduct->other_pictures, true) : [];
        }

        $this->assignGlobalAssets();
        $this->assignSmarty('product', $product);
        $this->assignSmarty('relatedProducts', $relatedProducts);

        return $this->renderSmarty('pages/productDetails.tpl');
    }
}
