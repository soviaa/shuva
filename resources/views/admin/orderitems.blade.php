

@extends('admin.admindash')

@section('order')
    <h2>All Orders</h2>

    @if ($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <table>
            <thead>
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
                    <th scope="row">&nbsp;&nbsp;{{$order->id}}</td>
                    <td>&nbsp;&nbsp;{{$order->order_id}}</td>
                    <td>&nbsp;&nbsp;{{$order->product_name}}</td>
                    <td>&nbsp;&nbsp;{{$order->quantity}}</td>
                    <td>&nbsp;&nbsp;{{$order->price}}</td>
                    <td>&nbsp;&nbsp;{{$order->total}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
