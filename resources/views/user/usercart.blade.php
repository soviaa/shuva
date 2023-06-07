@extends('user.usermain')
@section('content')
<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cartItems as $item)
            <tr>
                <td>{{$item->product->name}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity * $item->price}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection