@extends('user.usermain')

@section('content')
<div class="breadcrumbs">
      <a href="/">Home</a> / <span style="color:orange;">Confirmation</span> <!-- Update the breadcrumb text accordingly -->
    </div>
<div class="order-confirmation">
    <h2>Order Confirmation</h2>
    <p>Thank you for your order! Your order has been placed successfully.</p>
    <p>Order ID: {{ $order->id }}</p>
    <p>Total Amount: Rs.{{ $order->total_amount }}</p>
    <p>Payment Method: {{ $order->payment_method }}</p>
    </div>
    <!-- Add any other relevant order details here -->
@endsection
