<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    public function show($id)
    {
        $product = Product::where('id', $id)->firstOrFail();
        return view('product/show', compact('product'));
    }
}
