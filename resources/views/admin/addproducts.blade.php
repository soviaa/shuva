@extends('admin.admindash')
@section('product')
<div class="addproduct">
<div class="product-table" >
<form action="{{route('addproducts')}}" method="POST">
@csrf
<h4>&nbsp;&nbsp;<u>Add Product</u></h4>
    <br>
<fieldset style="padding:30px; border:4px solid black" > 
<!-- <legend><h4>&nbsp;&nbsp;<u>Add Products</u></h4></legend> -->
Product name: <input type="text" name="product_name">Select Category
<select name="category_id" >
     <option value="1" name="#">Outdoor</option>
     <option value="2" name="#">Indoor</option>
     <option value="3" name="#">Carpets</option>
     <option value="4" name="#">Beddings</option>
</select>
Product description: <input type="text" name="description">
Set Price: <input type="number" name="price">
Total Stock Available: <input type="number" name="stock">
Product image: <input type="file" name="image"><br>
<button type="submit">Submit</button>

</form>
</div>
</div>
@endsection