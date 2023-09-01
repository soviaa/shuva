

@extends('admin.admindash')

@section('order')
<div class="product-table" >
    <h2><u>Ordered Items</u></h2>

    @if ($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>Item ID</th>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                    <td scope="row">&nbsp;&nbsp;{{$order->id}}</td>
                    <td>&nbsp;&nbsp;{{$order->order_id}}</td>
                    <td>&nbsp;&nbsp;{{$order->product_name}}</td>
                    <td>&nbsp;&nbsp;{{$order->quantity}}</td>
                    <td>&nbsp;&nbsp;{{$order->price}}</td>
                    <td>&nbsp;&nbsp;{{$order->total}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    <div>
    @endif
@endsection
