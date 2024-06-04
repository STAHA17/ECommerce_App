<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Product;
use Illuminate\Support\Facades\Session;
use Auth;

class CartController extends Controller
{

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $quantity = $request->quantity;

        // Add logic to store product in cart
        // You can use sessions or a dedicated cart table in your database

        Session::push('cart', ['product' => $product, 'quantity' => $quantity]);

        return redirect()->route('product.show', $product->id)->with('success', 'Product added to cart!');
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = CartItem::where('product_id', $request->product_id)
                            ->where('user_id', Auth::id())
                            ->first();

        if ($cartItem) {
            // Update quantity if item is already in the cart
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            // Add new item to the cart
            CartItem::create([
                'product_id' => $request->product_id,
                'user_id' => Auth::id(),
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function viewCart()
    {
        $cartItems = CartItem::where('user_id', Auth::id())->get();
        return view('cart', compact('cartItems'));
    }

    public function removeFromCart($id)
    {
        $cartItem = CartItem::where('id', $id)->where('user_id', Auth::id())->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back()->with('success', 'Product removed from cart successfully!');
        }

        return redirect()->back()->with('error', 'Product not found in cart!');
    }
}
