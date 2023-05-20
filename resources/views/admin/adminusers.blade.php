@extends('admin.admindash')
@section('user')
<div class="user-table" >
<br><br>
<h4>&nbsp;&nbsp;<u>Product List</u></h4>

    <table class="table" >
        
    <thead class="thead-dark">
        <tr style="background-color:#69A4A0;">
            <th scope="col">&nbsp;&nbsp;ID</th>
            <th scope="col">&nbsp;&nbsp;First Name</th>
            <th scope="col">&nbsp;&nbsp;Last Name</th>
            <th scope="col">&nbsp;&nbsp;Email</th>
            <th scope="col">&nbsp;&nbsp;Phone Number</th>
          
</tr>
</thead>

<tbody>
@foreach($data as $users)
    <tr>
    <th scope="row">&nbsp;&nbsp;{{$users->id}}</td>
    <td>&nbsp;&nbsp;{{$users->f_name}}</td>
    <td>&nbsp;&nbsp;{{$users->l_name}}</td>
    <td>&nbsp;&nbsp;{{$users->email}}</td>
    <td>&nbsp;&nbsp;{{$users->phone}}</td>
   
</tr>
@endforeach
</tbody>
    </table>
   
   
</div>
@endsection