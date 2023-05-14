@extends('layouts.app')
@section('content')
<div class="adminlogin">
<div class="adloginbg"><img src="/images/loginbg.jpg" alt="carpet"></div>
<div class="adminwrapper">
   

         <div class="admintitle">
           Admin Login Form
         </div>
         <form action="#" method="post">
         @csrf
            <div class="field">
            
               <input type="text" name='email' required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name='password' required>
               <label>Password</label>
            </div>
            <div class="content">
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
           
         </form>
      </div>

</div>
</div>

</div>
@endsection