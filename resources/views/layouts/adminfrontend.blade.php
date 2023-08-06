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
        
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
        @yield('styles')
        <!-- Fonts -->
       

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="">

       <!-- Side navbar -->
<div class="admin_main">
  <div class="leftbar">
    <div class="sidenav-header">
   
      <img src="{{ asset('images/admin-panel.png') }}"   class="logoicon" alt="main_logo">
      <span class="ms-1 font-weight-bold">Admin panel</span>
      </a>
    </div>
    <hr/>

    <div class="sidenav_bottom">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{ route('admin.dashboard') }}" class="nav-link"><span><img src="{{ asset('images/house.png') }}" alt=""  class="navicon"></span>Dashboard</a></li>
        <li class="nav-item"><a href="{{ route('admin.users') }}" class="nav-link"><span><img src="{{ asset('images/user.png') }}" alt=""  class="navicon"></span>Users</a></li>
        <li class="nav-item"><a href="{{ route('admin.product') }}" class="nav-link"><span><img src="{{ asset('images/order.png') }}" alt=""  class="navicon"></span>Products</a></li>
        <li class="nav-item"><a href="{{ route('admin.orders') }}" class="nav-link"><span><img src="{{ asset('images/checkout.png') }}" alt=""  class="navicon"></span>Orders</a></li>
        <li class="nav-item"><a href="{{ route('admin.category') }}" class="nav-link"><span><img src="{{ asset('images/category.png') }}" alt=""  class="navicon"></span>Category</a></li>
    </ul>
    </div>
 </div>

 <div class="rightbar">
  @yield('content')
 </div>
</div>
     

        
  
       
  

       

        <footer >
     
        </footer>



      @yield('scripts')
       <script>
            const navLinks = document.querySelectorAll(".nav-link");

            navLinks.forEach((link) => {
            link.addEventListener("click", function () {
                navLinks.forEach((otherLink) => {
                otherLink.parentNode.classList.remove("active");
                });
                this.parentNode.classList.add("active");
            });
            });
       </script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
</html>
