<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index(Category $category)
    {
        $categories = Category::all();
        return view('home/index', ['categories' => $categories]);
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
