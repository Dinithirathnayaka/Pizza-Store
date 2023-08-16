@extends('layouts.user')

@section('content')
<div class="slider" style="background-image: linear-gradient(to bottom, transparent, #231F1F),url(images/bg_1.jpg);">
    <!-- fade css -->
    <div class="myslide ">
        <div class="txt">
            <p class="text-center">Welcome</p>
            <h1 class="text-center"> WE COOKED YOUR DESIRED<br>PIZZA RECIPE</h1>
            <p class="text-center mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide ">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Pizza</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/bg_1.png') }}"  class="sliderimg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Burger</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/burger-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Italian Pasta</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/pasta-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Lime Juice</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/drink-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>



    <!-- /fade css -->

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>

    </div>

</div>
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Contact Us</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="contactinfo pt-5 pb-5">
        <div class="container newcontainer ">
            <div class="row block-9">
                <div class="col-md-6 col-xs-12 contact-info ">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4" style="color: #ffffff">Contact Information</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p style="color: #808080"><span style="color: #ffffff">Address:</span> 198 West 21th Street,
                                Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Email:</span> <a
                                    href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Website:</span> <a href="#">yoursite.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xs-12 ">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-controlnew" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-controlnew" placeholder="Your Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-controlnew" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-controlnew" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 "
                                style="color:#000000 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
