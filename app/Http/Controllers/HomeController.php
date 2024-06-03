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
        // Fetch products from the database
        $products = Product::all();

        // Log the fetched products (you might want to limit the data logged for readability and security)
        Log::info('Fetched products: ', $products->toArray());

        // Pass the products to the 'home' view
        return view('home', compact('products'));
    }
}