<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Product; // Make sure you have the Product model

class HomeController extends Controller
{
    public function index()
    {
        // // Fetch products from the database
        // $products = Product::all(); // You can use paginate or any other method as needed

        // // Pass the products to the view
        // return view('home', compact('products'));

        $products = Product::all(); // Fetch products from the database
        Log::info('Fetched products: ' . $products); // Log the fetched products

        return view('home', compact('products')); // Pass products to the 'home' view
    }
}