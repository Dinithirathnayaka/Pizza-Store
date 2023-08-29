<!DOCTYPE html>
<html lang="en">

<head>


    <title>Admin Panel</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1"></script>

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @yield('styles')
    <!-- Fonts -->


    <!-- Styles -->
    <style>
        .page-item.active .page-link {
            background-color: #ffc107 !important;
            color: white;
            /* Optionally change the text color for better visibility */
        }

        .page-link {
            color: black;
        }
    </style>
</head>

<body class="">

    <!-- Side navbar -->
    <div class="admin_main">
        <div class="leftbar">
            <div class="sidenav-header">

                <img src="{{ asset('images/control-panel.png') }}" class="logoicon" alt="main_logo">
                <span class="ms-1 font-weight-bold light"><span style="color: #fac564">SpiceCraft</span> Admin
                    panel</span>
                </a>
            </div>
            <hr style="color: #fff" />

            <div class="sidenav_bottom">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}"><a
                            href="{{ route('admin.dashboard') }}" class="nav-link"><span><img
                                    src="{{ asset('images/house.png') }}" alt=""
                                    class="navicon"></span>Dashboard</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/users') ? 'active' : '' }}"><a
                            href="{{ route('admin.users') }}" class="nav-link"><span><img
                                    src="{{ asset('images/user.png') }}" alt="" class="navicon"></span>Users</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/product') ? 'active' : '' }}"><a
                            href="{{ route('admin.product') }}" class="nav-link"><span><img
                                    src="{{ asset('images/order.png') }}" alt=""
                                    class="navicon"></span>Products</a>

                    </li>

                    <li class="nav-item ">

                        <button class="dropdown-btn "><a class="nav-link nav-link-toggle">
                                <span><img src="{{ asset('images/checkout.png') }}" alt=""
                                        class="navicon"></span>
                                Orders<span><img src="{{ asset('images/down-arrow.png') }}" alt=""
                                        class="droparrow"></span></span></span>
                            </a>
                        </button>

                        <div class="dropdown-container">
                            <div class="subnav-item mb-3 mt-2"> <span><img src="{{ asset('images/file.png') }}"
                                        alt="" class="navicon"></span><a
                                    href="{{ route('admin.orders.orderhistory') }}" class="sub_link">Order
                                    History</a><br></div>
                            <div class="subnav-item "><span><img src="{{ asset('images/box.png') }}" alt=""
                                        class="navicon"></span><a href="{{ route('admin.orders') }}"
                                    class="sub_link">Pending Orders</a></div>
                        </div>
                        {{-- <a class="nav-link nav-link-toggle" onclick="toggleSubMenu('sub-menu-1')">
                            <span><img src="{{ asset('images/checkout.png') }}" alt="" class="navicon"></span>
                            Orders<span></span>
                        </a>
                        <ul class="sub-menu" id="sub-menu-1">
                            <li class="nav-item mb-2"><a href="{{ route('admin.orders.orderhistory') }}">Order
                                    History</a></li><br>
                            <li class="nav-item"><a href="{{ route('admin.orders') }}">Pending Orders</a>
                            </li>
                        </ul> --}}
                    </li>


                    <li class="nav-item {{ request()->is('admin/category') ? 'active' : '' }}"><a
                            href="{{ route('admin.category') }}" class="nav-link"><span><img
                                    src="{{ asset('images/category.png') }}" alt=""
                                    class="navicon"></span>Category</a>
                    </li>
                    <li class="nav-item {{ request()->is('admin/category') ? 'active' : '' }}"><a
                            href="{{ route('admin.riders') }}" class="nav-link"><span><img
                                    src="{{ asset('images/motorbike.png') }}" alt=""
                                    class="navicon"></span>Riders</a></li>

                    <form action="{{ route('logout') }}" style="display: none;" method="POST" id="logoutfrm">
                        @csrf cart.remove


                    </form>

                    <li class="nav-item"><a onclick="gologout();" class="nav-link"><span><img
                                    src="{{ asset('images/exit.png') }}" alt=""
                                    class="navicon"></span>Logout</a></li>
                </ul>
            </div>
        </div>

        <div class="rightbar">
            @yield('content')
        </div>
    </div>








    {{-- <footer class="admin_footer mx-auto b-block">
     <p>Copyright © 2023 All rights reserved</p>
        </footer>
 --}}


    @yield('scripts')

    <script>
        const navLinks = document.querySelectorAll(".nav-link");

        navLinks.forEach((link) => {
            link.addEventListener("click", function() {
                navLinks.forEach((otherLink) => {
                    otherLink.parentNode.classList.remove("active");
                });
                this.parentNode.classList.add("active");
            });
        });
    </script>

    <script>
        function gologout() {
            console.log("pressed");
            var shouldDelete = confirm('Are you sure to log out?');

            if (!shouldDelete) {
                event.preventDefault(); // Prevent the form submission
            } else {
                $("#logoutfrm").submit();
            }

        }
    </script>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $(".nav-link-toggle").click(function(e) {
                e.preventDefault(); // Prevent default link behavior
                const subMenu = $(this).siblings(".sub-menu");
                subMenu.toggle(); // Toggle the sub-menu
            });
        });
    </script>

    <script>
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
