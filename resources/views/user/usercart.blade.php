@extends('user.usermain')

@if(session('error'))
    <div class="alert alert-danger" style="font-size: 14px; padding: 5px; width: 60%; margin: 0 auto;">{{ session('error') }}</div>
@endif

@section('content')
    @if (!auth()->check())
        <div class="login-message">
            Please log in to view your cart.
        </div>
    @else
        <table>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{$item->product->name}}</td>
                        <td>
                            <form class="update-quantity-form" action="{{ route('cart.update', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity * $item->price}}</td>
                        <td>
                            <form class="delete-cart-item-form" action="{{ route('cart.delete', ['id' => $item->id]) }}" method="POST">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="total-amount">
            <h3>Total Amount: Rs.{{ $totalAmount }}</h3>
        </div>
        <div class="checkout-section">
            <div class="checkout-button">
                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    <button type="submit">Checkout</button>
                </form>
            </div>
        </div>
    @endif
@endsection
