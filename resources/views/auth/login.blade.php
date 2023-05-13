@extends('layouts.app')

@section('content')

<div class="userwrapper">
   

         <div class="usertitle">
            Login Form
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
               <!-- <div class="checkbox">
                  <input type="checkbox" id="remember-me">
                  <label for="remember-me">Remember me</label>
               </div> -->
               <!-- <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div> -->
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="{{ route('register') }}">Signup now</a>
            </div>
         </form>
      </div>

</div>

@endsection
