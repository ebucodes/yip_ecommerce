<?php

namespace App\Http\Controllers;

use App\Http\Controllers\SmartyController;
use App\Models\Category;
use App\Models\Product;

class HomeController extends SmartyController
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to E-Shop',
            'products' => Product::latest()->take(8)->get(),
            'categories' => Category::all(),
        ];

        return $this->renderSmarty('home/index.tpl', $data);
    }
}
