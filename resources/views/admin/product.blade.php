@extends('admin.admindash')
@section('product')
<div class="product-table" >
<br><br>
<h4>&nbsp;&nbsp;<u>Product List</u></h4>

    <table class="table">
        
    <thead class="thead-dark">
    <th scope="col" style="padding:0px; background-color:white; border:none; ">&nbsp;&nbsp;<div class="addbutton"><a href="{{route('addproducts')}}"><input type="button" value="Add Products" class="btn btn-outline-primary"></a></div></th>
    
        <tr>
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;Name</th>
            <th scope="col">&nbsp;&nbsp;Category</th>
            <th scope="col" style="padding-left:180px; padding-right:180px;">&nbsp;&nbsp;Description</th>
            <th scope="col">&nbsp;&nbsp;Price</th>
            <th scope="col">&nbsp;&nbsp;Stock</th>
            <th scope="col">&nbsp;&nbsp;Action</th>
            <th scope="col">&nbsp;&nbsp;</th>

          
</tr>
</thead>

<tbody> 
@foreach($data as $product)
    <tr>
    <td scope="row">&nbsp;&nbsp;{{$product->id}}</td>
    <td>&nbsp;&nbsp;{{$product->product_name}}</td>
    <td>&nbsp;&nbsp;{{$product->category_name}}</td>
    <td>&nbsp;&nbsp;{{$product->description}}</td>
    <td>&nbsp;&nbsp;{{$product->price}}</td>
    <td>&nbsp;&nbsp;{{$product->stock}}</td>
    <td>&nbsp;&nbsp;<a href="deleteproduct/{{$product->id}}" class="btn btn-danger">Delete</a></td>
    <td>&nbsp;&nbsp;<a href="{{ route('editproducts', ['id' => $product->id]) }}" class="btn btn-success">Edit</a></td>
</tr>
@endforeach
</tbody>
    </table>
   
    
   
</div>
@endsection