

@extends('admin.admindash')

@section('order')
<div class="product-table" >
    <h2><u>All Orders</u></h2>

    @if ($orders->isEmpty())
        <p>No orders found.</p>
    @else
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">User</th>
                    <th scope="col"></th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                    <td scope="row">&nbsp;&nbsp;{{$order->id}}</td>
                    <td>&nbsp;&nbsp;{{$order->user_fname}}</td>
                    <td>&nbsp;&nbsp;{{$order->user_lname}}</td>
                    <td>&nbsp;&nbsp;{{$order->phone}}</td>
                    <td>&nbsp;&nbsp;{{$order->total_amount}}</td>
                    <td>&nbsp;&nbsp;{{$order->status}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
    @endif
@endsection
