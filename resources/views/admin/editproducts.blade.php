@extends('admin.admindash')
@section('product')
<div class="addproduct">
<div class="product-table" >

<div class="editproduct">

<form action="{{ route('editproducts_post', ['id' => $product->id]) }}" method="post">
@csrf
<h4>&nbsp;&nbsp;<u>Edit Product</u></h4>
    <br>
  
    <fieldset style="padding:30px; border:4px solid black" > 

Product name: <input type="text" name="product_name" value="{{ $product->product_name }}">
<select name="category_id">
    <option value="">Select Category</option>
    <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Outdoor</option>
    <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Indoor</option>
    <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Carpets</option>
    <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Beddings</option>
</select>
Set Price: <input type="number" name="price" value="{{ $product->price }}">
Total Stock Available: <input type="number" name="stock" value="{{ $product->stock }}">
Product image: <input type="file" name="image"><br>
<button type="submit">Update</button>

</form>
</fieldset>
</div>
</div>
</div>
@endsection
