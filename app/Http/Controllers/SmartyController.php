<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Services\SmartyTemplateService;
use Illuminate\Routing\Controller;
use App\Models\Category;

class SmartyController extends Controller
{
    protected $smarty;

    public function __construct(SmartyTemplateService $smarty)
    {
        $this->smarty = $smarty;
    }

    protected function renderSmarty($template, $data = [])
    {
        return response($this->smarty->render($template, $data));
    }

    protected function assignSmarty($key, $value)
    {
        $this->smarty->assign($key, $value);
    }

    protected function assignGlobalAssets()
    {
        // Generate asset URLs for global use
        $websiteAssetsUrl = asset('website/assets/');
        $assetBaseUrl = asset('products/');
        $validationJsUrl = asset('validation.js');
        $accountAssetsUrl = asset('account/assets/');

        // Generate all commonly used routes
        $routes = [
            'homePageRoute' => route('homePage'),
            'allProductsRoute' => route('allProducts'),
            'addToCartRoute' => route('addToCart'),
            'myCartRoute' => route('myCart'),
            'registerRoute' => route('register'),
            'loginRoute' => route('login'),
            'logOutRoute' => route('logOut'),
            'aboutUsRoute' => route('aboutUs'),
            'contactUsRoute' => route('contactUs'),
            'faqRoute' => route('faq'),
            'policyRoute' => route('policy'),
            'adminDashboardRoute' => route('adminDashboard'),
            'sellerDashboardRoute' => route('sellerDashboard'),
            'myOrderRoute' => route('myOrder'),
            'productsPageRoute' => url('products/'),
            'productDetailsRoute' => url('product/'),
            'allProducts' => route('allProducts'),
        ];

        // Get config values
        $appName = config('app.name');

        // Get session messages
        $sessionError = session('error');
        $sessionSuccess = session('success');
        $sessionInfo = session('info');

        // Get cart count for authenticated users
        $cartCount = 0;
        if (auth()->check() && auth()->user()->role == 'buyer') {
            // Make sure to use the correct Cart model and field names
            $cartCount = Cart::sum('quantity');
        }

        // Assign global assets and routes
        $this->assignSmarty('websiteAssetsUrl', $websiteAssetsUrl);
        $this->assignSmarty('assetBaseUrl', $assetBaseUrl);
        $this->assignSmarty('validationJsUrl', $validationJsUrl);
        $this->assignSmarty('accountAssetsUrl', $accountAssetsUrl);
        $this->assignSmarty('auth', auth());
        $this->assignSmarty('csrf_field', csrf_field());
        $this->assignSmarty('appName', $appName);
        $this->assignSmarty('sessionError', $sessionError);
        $this->assignSmarty('sessionSuccess', $sessionSuccess);
        $this->assignSmarty('sessionInfo', $sessionInfo);
        $this->assignSmarty('cartCount', $cartCount); // This is crucial

        // Assign all routes
        foreach ($routes as $key => $route) {
            $this->assignSmarty($key, $route);
        }

        // Get categories
        $categories = Category::where('status', 'active')->orderBy('created_at', 'DESC')->get();
        $this->assignSmarty('categories', $categories);
    }
}
