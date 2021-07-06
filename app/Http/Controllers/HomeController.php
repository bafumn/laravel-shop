<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index()
    {
        $products = Product::paginate(10);
        $latest = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('home/index', compact('products', 'latest'));
    }

    public function contact()
    {
        return view('home/contact');
    }

    public function about()
    {
        return view('home/about');
    }
}
