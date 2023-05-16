<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin nav.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons+Sharp">
    <link rel="stylesheet" href="{{ asset('css/form.css')}}">

    <title>Dashboard</title>
</head>
<body>

     <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    
                    <img src="\images\shuva.PNG" width="150" height="60" alt="logo" />
                    
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp"> close</span>
                </div>
            </div>
            <div class="sidebar">
              
                <a href="{{route('product')}}">
                    <span class="material-icons-sharp"> dashboard</span>
                    <h3>Products</h3>
                    
                </a>
                <a href="#">
                    <span class="material-icons-sharp">monitoring</span>
                    <h3>Sales</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">group</span>
                    <h3>Users</h3>
                </a>
                <a href="{{ route('adminlogout') }}">
                    <span class="material-icons-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        @yield('product')
     </div>
   
</body>
</html>
