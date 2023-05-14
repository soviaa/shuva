@extends('admin.admindash')
@section('product')
<div class="addproduct">

<form action="adminbook" method="POST">
    <br>
<fieldset style="padding:30px; border:4px solid #69A4A0;" > 
<legend><h4>&nbsp;&nbsp;<u>Add Books</u></h4></legend>
@csrf
<input type="number" name="id" placeholder="Enter ID">
 &nbsp;&nbsp;<input type="text" name="title" placeholder="Enter Title">
 &nbsp;&nbsp;<input type="text" name="edition" placeholder="Enter edition"><br><br>
</form>
</div>
@endsection