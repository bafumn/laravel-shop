<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends BaseController
{
    public function show($id)
    {
        $category = Category::where('id', $id)->firstOrFail();
        $products = $category->products()->paginate(10);
        $latest = Product::orderBy('created_at', 'desc')->take(3)->get();
        return view('category/show', compact('category', 'products', 'latest'));
    }
}
