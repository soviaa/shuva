<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;

use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    
 
    public function showCart()
    {
        if (!auth()->check()) {
            return redirect()->route('userlogin')->with('error', 'Please log in to view your cart.');
        }
    
        $cartItems = Cart::where('user_id', auth()->user()->id)->get();
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });
    
        return view('user.usercart', compact('cartItems', 'totalAmount'));
    }

    public function addToCart(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('userlogin')->with('error', 'Please log in to add products to your cart.');
        }
    
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
        $cartItem->quantity = $quantity;
        $cartItem->price = $product->price;
        $cartItem->total = $total;
        $cartItem->save();
    
        return redirect()->back()->with('success', 'Product added to your cart.');
    }
    public function updateCartQuantity(Request $request, $id)
{
    $quantity = $request->input('quantity');
    
    $cartItem = Cart::find($id);
    
    if (!$cartItem) {
        return redirect()->back()->withErrors('Cart item not found.');
    }
    
    $cartItem->quantity = $quantity;
    $cartItem->total = $cartItem->price * $quantity;
    $cartItem->save();
    
    return redirect()->back()->with('updated', 'Cart item quantity updated.');
}
public function deleteCartItem($id)
{
    $cartItem = Cart::find($id);
    
    if (!$cartItem) {
        return redirect()->back()->withErrors('Cart item not found.');
    }
    
    $cartItem->delete();
    
    return redirect()->back()->with('updated', 'Cart item deleted.');
}




    public function processCheckout(Request $request)
    {
        // Get the authenticated user
        $user = Auth::user();

        // Get the cart items for the user
        $cartItems = Cart::where('user_id', $user->id)->get();

        // Calculate the total amount
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->quantity * $item->price;
        });

        // Create a new order
        $order = new Order();
        $order->user_id = $user->id;
        $order->total_amount = $totalAmount;
        $order->payment_method = $request->input('payment_method'); // Get the selected payment method from the form
        $order->status = 'pending'; // Default status is pending
        $order->save();

        // Move cart items to order items
        foreach ($cartItems as $cartItem) {
            $order->items()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->price,
                'total' => $cartItem->quantity * $cartItem->price,
            ]);
        }

        // Clear the cart for the user
        $cartItems->each(function ($cartItem) {
            $cartItem->delete();
        });
        if($order->payment_method==='cash on delivery'){
            return redirect()->route('order.confirmation', ['id' => $order->id]);
        }
        elseif($order->payment_method==='khalti'){
            return view('user.khalti', compact('order', 'user'));


        }
        // Redirect to the confirmation page with the order ID
        
    }

    public function showOrderConfirmation($id)
    {
        // Retrieve the order from the database
        $order = Order::findOrFail($id);

        // Display the order confirmation page
        return view('user.checkout', compact('order'));
    }

  
}






