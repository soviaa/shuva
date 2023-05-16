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

</tbody>
    </table>
    <a href="{{route('addproducts')}}"><input type="button" value="Add Products"></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#"><input type="button" value="Edit Products"></a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="#"><input type="button" value="Delete Products"></a>&nbsp;&nbsp;&nbsp;&nbsp;
</div>
@endsection