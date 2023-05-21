@extends('admin.admindash')
@section('product')
<div class="product-table" >
<br><br>
<h4>&nbsp;&nbsp;<u>Product List</u></h4>

    <table class="table" >
        
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Name</th>
            <th scope="col">&nbsp;&nbsp;Category</th>
            <th scope="col">&nbsp;&nbsp;Price</th>
            <th scope="col">&nbsp;&nbsp;Stock</th>
          
</tr>
</thead>

<tbody>
@foreach($data as $product)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$product->id}}</td>
    <td>&nbsp;&nbsp;{{$product->product_name}}</td>
    <td>&nbsp;&nbsp;{{$product->category_name}}</td>
    <td>&nbsp;&nbsp;{{$product->price}}</td>
    <td>&nbsp;&nbsp;{{$product->stock}}</td>
    <td>&nbsp;&nbsp;<a href="deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a></td>
</tr>
@endforeach
</tbody>
    </table>
    <a href="{{route('addproducts')}}"><input type="button" value="Add Products"></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#"><input type="button" value="Edit Products"></a>&nbsp;&nbsp;&nbsp;&nbsp;
   
</div>
@endsection