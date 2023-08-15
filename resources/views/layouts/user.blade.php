<!DOCTYPE html>
<html lang="en">

<head>


    <title>Pizza Store</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/menucarosul.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>


    <script src="https://kit.fontawesome.com/eb896d6758.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <div class="toplogo"><img src="images/pizza-slicelogo.png" alt="" class="logoimg">
                <div class="toplogocontent">Pizza</div>
            </div>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('menu') }}" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="{{ route('cart.index') }}" class="nav-link">Cart</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    <footer class="ftco-footer ftco-section img ">

        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5" style="text-align: left">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p style="color: #FFFFFFB3">Far far away, behind the word mountains, far from the countries
                            Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="footer_social">
                            <div class="fa fa-twitter "></div>
                            <div class="fa fa-facebook"></div>
                            <div class="fa fa-instagram"></div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5" style="text-align: left">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <img src="images/image_1.jpg" alt="" class="footerimg">

                            <div class="text" style="text-align: left">
                                <h3 class="heading" style="color: #FFFFFFE3; font-size:16px"><a href="#">Even the
                                        all-powerful Pointing has no control about</a></h3>
                                <div class="meta" style="text-align: left">
                                    <div><a href="#" style="color: #808080 ; margin: 5px;"><span
                                                class="fa fa-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#" style="color: #808080 ; margin: 5px;"><span
                                                class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#" style="color: #808080 ; margin: 5px;"><span
                                                class="fa fa-file"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <img src="images/image_2.jpg" alt="" class="footerimg">
                            <div class="text" style="text-align: left">
                                <h3 class="heading" class="heading" style="color: #FFFFFFE3; font-size:16px"><a
                                        href="#">Even the all-powerful Pointing has no control about</a></h3>
                                <div class="meta" style="text-align: left">
                                    <div><a href="#" style="color: #808080 ; margin: 5px"><span
                                                class="fa fa-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#" style="color: #808080 ;  margin: 5px;"><span
                                                class="fa fa-user"></span> Admin</a></div>
                                    <div><a href="#" style="color: #808080 ; margin: 5px;"><span
                                                class="fa fa-file"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5" style="text-align: left">
                    <div class="ftco-footer-widget mb-4 ml-md-4" style="text-align: left">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Cooked</a></li>
                            <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Deliver</a></li>
                            <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Quality Foods</a>
                            </li>
                            <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Mixed</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5" style="text-align: left">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3" style="text-align: left">
                            <div class="deteil">
                                <div class="fa fa-map-marker" style="color: #FFFFFFB3"></div>
                                <div class="text">203 Fake St. Mountain View, San Francisco, California, USA</div>
                            </div>
                            <div class="deteil">
                                <div class="fa fa-phone" style="color: #FFFFFFB3"></div>
                                <div class="text">+2 392 3929 210</div>
                            </div>
                            <div class="deteil">
                                <div class="fa fa-envelope" style="color: #FFFFFFB3"></div>
                                <div class="text">info@yourdomain.com</div>
                            </div>
                            {{-- <ul>
                        <li><span class="text" >203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                        <li><a href="#"><span class="fa fa-phone" style="color: #FFFFFFB3" ></span><span class="text" >+2 392 3929 210</span></a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span><span class="text" >info@yourdomain.com</span></a></li>
                      </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p class="footerpara" style="color:#FFFFFFE3">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        function showDiv(divId) {
            var divs = document.querySelectorAll('div[id^="div"]');
            for (var i = 0; i < divs.length; i++) {
                if (divs[i].id === divId) {
                    divs[i].style.display = 'block';
                } else {
                    divs[i].style.display = 'none';
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            var activeDivId = localStorage.getItem('activeDiv');
            if (activeDivId) {
                showDiv(activeDivId);
            } else {

                showDiv('div1');
            }
        });
    </script>





</body>

</html>