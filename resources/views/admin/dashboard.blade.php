<!DOCTYPE html>
<html lang="en">
    <head>
    

        <title>Admin Panel</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
        
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  
        @yield('styles')
        <!-- Fonts -->
       

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <div class="toplogo"><img src="images/pizza-slicelogo.png" alt=""  class="logoimg"><div class="toplogocontent" >Admin Panel</div></div>
          
                 
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a></li>
                    <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link">Users</a></li>
                    <li class="nav-item"><a href="{{ route('admin.product') }}" class="nav-link">Products</a></li>
                    <li class="nav-item"><a href="{{ route('admin.orders') }}" class="nav-link">Orders</a></li>
                    <li class="nav-item"><a href="{{ route('admin.category') }}" class="nav-link">Category</a></li>
                </ul>
              </div>
              </div>
          </nav>
        <!-- END nav -->

        @yield('content')

        <footer >
     
        </footer>





      @yield('scripts')
       
    </body>
</html>
