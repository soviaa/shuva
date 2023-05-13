@extends('layouts.app')

@section('content')
<div class="regwrapper">
   

         <div class="usertitle">
            Register Form
         </div>
         <form method="post" action="{{ route('register') }}" >
         @csrf
            <div class="field">
            
               <input type="text"  name='firstname' required>
               <label>First name</label>
            </div>
            <div class="field">
            
               <input type="text" name='lastname' required >
               <label>Last name</label>
            </div>
            <div class="field">
               <input type="text" name='email' required >
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="text"  name='phone' required>
               <label>Phone number</label>
            </div>
            <div class="field">
               <input type="password" name='password' required >
               <label>Password</label>
            </div>
            <div class="content">
               <!-- <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div> -->
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
            </div>
            <div class="field">
               <input type="submit" value="Register">
            </div>
            
         </form>
      </div>

</div>
@endsection
