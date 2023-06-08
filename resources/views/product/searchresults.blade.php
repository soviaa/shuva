@extends('layouts.app')

@section('content')
    <h2>Search Results</h2>

    @if(isset($data) && count($data)>0)
    <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Item</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td><img src="/images/products/{{$product->image}}" alt="" style="height:50%,width:50%"></td>
                        <td>{{ $product->price }}</td>
                    </tr>
                @endforeach
        
    @else
    <td colspan="4">No result found</td>
    @endif
    </tbody>
        </table>     
@endsection
