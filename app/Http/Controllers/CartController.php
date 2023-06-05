<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    
 
    public function showCart()
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Please log in to view your cart.');
        }
    
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
    
        return view('user.usercart', compact('cartItems'));
    }
    
    public function addToCart(Request $request)
    {
        
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
    
        $product = Product::find($productId);
    
        if (!$product) {
            return redirect()->back()->withErrors('Product not found.');
        }
    
        $user = Auth::user();
    
        // Calculate the total price
        $total = $product->price * $quantity;
    
        // Create a new cart item
  


        $cartItem = new Cart();
        
        $cartItem->user_id = $user->id;
        $cartItem->product_id = $product->id;
        $cartItem->quantity =$quantity;
        $cartItem->price = $product->price;
        $cartItem->total = $total;
        $cartItem->save();
    
        return redirect()->back()->with('success', 'Product added to cart.');
    }
    
}    