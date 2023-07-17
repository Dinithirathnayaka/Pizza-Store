<!DOCTYPE html>
<html lang="en">
    <head>
    

        <title>Pizza Store</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.css')}}">

        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
       

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
  

        <!-- Fonts -->
       

        <!-- Styles -->
        <style>
           
        </style>
    </head>
    <body class="">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
                  <a class="navbar-brand" href="index.html"><span class="flaticon-pizza-1 mr-1"></span>Pizza<br><small>Delicous</small></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Menu
                  </button>
              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
                  <li class="nav-item"><a href="menu.html" class="nav-link">Menu</a></li>
                  <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
                  <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                  <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About</a></li>
                  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
              </div>
              </div>
          </nav>
        <!-- END nav -->

        @yield('content')

        <footer class="ftco-footer ftco-section img ">
            <div class="overlay"></div>
          <div class="container-fluid">
            <div class="row mb-5">
              <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">About Us</h2>
                  <p style="color: #FFFFFFB3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                    <li class="ftco-animate"><a href="#"><span class="fa fa-twitter social"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-facebook social"></span></a></li>
                    <li class="ftco-animate"><a href="#"><span class="fa fa-instagram social"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Recent Blog</h2>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                    <div class="text">
                      <h3 class="heading" style="color: #FFFFFFE3; font-size:16px"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#" style="color: #808080 ; margin: 5px;"><span class="fa fa-calendar"  ></span> Sept 15, 2018</a></div>
                        <div><a href="#" style="color: #808080 ; margin: 5px;"><span class="fa fa-user"></span> Admin</a></div>
                        <div><a href="#" style="color: #808080 ; margin: 5px;"><span class="fa fa-file"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                    <div class="text">
                      <h3 class="heading" class="heading" style="color: #FFFFFFE3; font-size:16px"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                      <div class="meta">
                        <div><a href="#" style="color: #808080 ; margin: 5px"><span class="fa fa-calendar"></span> Sept 15, 2018</a></div>
                        <div><a href="#" style="color: #808080 ;  margin: 5px;"><span class="fa fa-user"></span> Admin</a></div>
                        <div><a href="#" style="color: #808080 ; margin: 5px;"><span class="fa fa-file"></span> 19</a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                 <div class="ftco-footer-widget mb-4 ml-md-4">
                  <h2 class="ftco-heading-2">Services</h2>
                  <ul class="list-unstyled">
                    <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3" >Cooked</a></li>
                    <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Deliver</a></li>
                    <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Quality Foods</a></li>
                    <li><a href="#" class="py-2 d-block" style="color: #FFFFFFEB3">Mixed</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                      <ul>
                        <li><span class="fa fa-map" style="color: #FFFFFFB3"></span><span class="text" >203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                        <li><a href="#"><span class="fa fa-phone" style="color: #FFFFFFB3" ></span><span class="text" >+2 392 3929 210</span></a></li>
                        <li><a href="#"><span class="fa fa-envelope"></span><span class="text" >info@yourdomain.com</span></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-center">
    
                <p class="footerpara" style="color:#FFFFFFE3"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
              </div>
            </div>
          </div>
        </footer>

        <script src="js/bootstrap.js"></script>
        <script src="https://kit.fontawesome.com/eb896d6758.js" crossorigin="anonymous"></script>
       
    </body>
</html>
