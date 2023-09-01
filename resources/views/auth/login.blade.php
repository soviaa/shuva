@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="userlogin">
<div class="loginbg"><img src="/images/loginbg.jpg" alt="carpet"></div>
<div class="userwrapper">
@if(session('error'))
    <div class="alert alert-danger" style="font-size: 14px; padding: 5px; width: 60%; margin: 0 auto;">{{ session('error') }}</div>
    
@endif

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
</div>

</div>

@endsection
