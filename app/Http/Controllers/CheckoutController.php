<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Retrieve the cart from the session
        $cart = session('cart', []);

        return view('checkout.index', compact('cart'));
    }
}
