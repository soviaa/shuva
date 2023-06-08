

@extends('admin.admindash')

@section('order')
    <h2>All Orders</h2>

    @if ($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>User</th>
                    <th></th>
                    <th>Phone Number</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                    <th scope="row">&nbsp;&nbsp;{{$order->id}}</td>
                    <td>&nbsp;&nbsp;{{$order->user_fname}}</td>
                    <td>&nbsp;&nbsp;{{$order->user_lname}}</td>
                    <td>&nbsp;&nbsp;{{$order->phone}}</td>
                    <td>&nbsp;&nbsp;{{$order->total_amount}}</td>
                    <td>&nbsp;&nbsp;{{$order->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
