<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shuva Furniture & Furnishing</title>
    <!-- stylesheet: -->

   
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <a href="{{ route('products') }}" class="logo"><img src="/images/shuva.PNG" width="300" height="90" alt="logo" ></a>
        <div class="wrapper">
        
        <div class="main">
        
            <form action="{{ route('product.search') }}" class="search">
                <input type="text" placeholder="Search store" name="q">
               <button type="submit" style="border:none;color:white"><a href="{{ route('product.search') }}"><i class="ri-search-2-line"></i></a></button>
            </form>
            <!-- -->
            @auth
      <li>
        <a href="#">Hello, {{ Auth::user()->firstname }}</a>
      </li>
      <li><a href="{{ route('logout') }}">Logout</a></li>
    @else
    <div class="dropdown">
            <a href="#" class="user"><i class="ri-user-3-line"></i>Log In</a>
                <div class="dropdown-content">
                 <a href="{{ route('userlogin') }}">User</a>
                <a href="{{ route('adminlogin') }}">Admin</a>
            </div>
            </div>
            
            <!-- <div class="dropdown-content">
                <a href="#">Buyer</a>
                <a href="#">Admin</a>
            </div> -->
            <a href="{{ route('register') }}">Register</a>
        </div>
    @endauth
           
    </header>
    <div class="header2">
        <ul class="nav2">
        <li class="{{ request()->is('outdoor') ? 'active' : '' }}"><a href="{{ route('outdoor') }}" >Outdoor</a></li>
        <li class="{{ request()->is('indoor') ? 'active' : '' }}"><a href="{{ route('indoor') }}" >Indoor</a></li>
        <li class="{{ request()->is('carpets') ? 'active' : '' }}"><a href="{{ route('carpets') }}"  >Carpets</a></li>
        <li class="{{ request()->is('beddings') ? 'active' : '' }}"><a href="{{ route('beddings') }}" >Beddings</a></li>
                <li><a href="{{ route('cart.show') }}" ><i class="ri-shopping-cart-line"></i>Cart</a></li>
            </ul>
    </div>
</body>
</html>