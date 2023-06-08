@extends('admin.admindash')
@section('product')
<div class="editproduct">

<form action="{{route('editproducts')" method="POST">
@csrf

    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;" > 
<legend><h4>&nbsp;&nbsp;<u>Edit Products</u></h4></legend>
Product name: <input type="text" name="product_name">
<select name="category_id" > <option value="">Select Category</option>

     <option value="1" name="#">Outdoor</option>
     <option value="2" name="#">Indoor</option>
     <option value="3" name="#">Carpets</option>
     <option value="4" name="#">Beddings</option>
</select>
Set Price: <input type="number" name="price">
Total Stock Available: <input type="number" name="stock">
Product image: <input type="file" name="image"><br>
<button type="submit">Update</button>

</form>
</div>
@endsection