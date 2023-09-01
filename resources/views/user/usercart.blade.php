@extends('user.usermain')
@section('title', 'Cart')
@section('content')
    @if (!auth()->check())
        <div class="login-message">
            Please log in to view your cart.
        </div>
    @else
    @if(session('success'))
            <div class="cart-success">
              {{ session('success') }}
            </div>
    @endif

@if(session('updated'))
            <div class="cart-updated">
              {{ session('updated') }}
            </div>
    @endif

    <div class="cart-table"><div class="your-cart">YOUR CART </div>
       
        <table>
            <thead>
                <tr>
                    <th>&nbsp;&nbsp;Product Name</th>
                    <th>&nbsp;&nbsp;Quantity</th>
                    <th>&nbsp;&nbsp;Price</th>
                    <th>&nbsp;&nbsp;Total</th>
                    <th>&nbsp;&nbsp;Remove</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>&nbsp;&nbsp;{{$item->product->name}}</td>
                        <td>
                            <form class="update-quantity-form" action="{{ route('cart.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" style="width:50px;">
                                <button type="submit"><i class="ri-refresh-line"></i>Update</button>
                            </form>
                        </td>
                        <td>&nbsp;&nbsp;{{$item->price}}</td>
                        <td>&nbsp;&nbsp;{{$item->quantity * $item->price}}</td>
                        <td>
                            <form class="delete-cart-item-form" action="{{ route('cart.delete', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <button type="submit" style="border-radius:10px; margin-left:25px;"><i class="ri-close-fill"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      
        <div class="total-amount">
        <h3 style="display: inline-block;">Total Amount: </h3>
<h3 style="display: inline-block; color: orange;">Rs.{{ $totalAmount }}</h3>

        </div>
        <div class="checkout-section">
            <div class="checkout-button">
                <!-- Cash on Delivery button form -->
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <button type="submit" name="payment_method" value="cash on delivery">Cash on Delivery</button>
                    <button type="submit" name="payment_method" value="khalti">Pay Online</button>
                    <div class="checkout-button">
                <!-- Khalti payment button -->
               
            </div>
                </form>
            </div>
           
        </div>
        </div>
    @endif

   
@endsection