<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    // public function index()
    // {
    //     $products = Product::all(); // Assuming you have a Product model
    //     return view('home', compact('products'));
    // }
    public function showProductPage()
    {
        $product = Product::find(1); // Replace with appropriate product retrieval logic
        return view('product-page', compact('product'));
    }
    
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
}
