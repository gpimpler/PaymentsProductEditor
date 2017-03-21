<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        return Product::get();
    }

    public function product($id)
    {
        return Product::find($id);
    }

    public function styles($product_id)
    {
        return Product::find($product_id)->styles()->pluck('style');
    }
}
