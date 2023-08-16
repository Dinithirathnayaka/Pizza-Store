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
    <section class="ftco-services pt-5 pb-5">

        <div class="container pt-5 pb-5">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Our Services</h2>
                    <p style="color: #5C3D03">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12 servicediv">
                    <div class="media d-block text-center block-6 services">
                        <div class="serviceIcon  mx-auto d-block justify-content-center align-items-center mb-5 mt-5">
                            <img src="images/diet.png" class="fas" />
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Healthy Foods</h3>
                            <p style="color: #5C3D03">Even the all-powerful Pointing has no control about the blind texts it
                                is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 servicediv">
                    <div class="media d-block text-center block-6 services">
                        <div class="serviceIcon  mx-auto d-block justify-content-center align-items-center mb-5 mt-5">
                            <img src="images/food-delivery.png" class="fas" />

                        </div>
                        <div class="media-body">
                            <h3 class="heading">Fastest Delivery</h3>
                            <p style="color: #5C3D03">Even the all-powerful Pointing has no control about the blind texts it
                                is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 servicediv">
                    <div class="media d-block text-center block-6 services">
                        <div class="serviceIcon  mx-auto d-block justify-content-center align-items-center mb-5 mt-5">
                            <img src="images/pizza.png" class="fas" />
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Original Recipes</h3>
                            <p style="color: #5C3D03">Even the all-powerful Pointing has no control about the blind texts it
                                is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-service">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section e text-center">
                    <h2 class="" style="color: #ffffff">Hot Meals</h2>
                    <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span>
                    </p>
                    <p class="mt-5" style="color: #808080">Far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-center ">
                    <div class="menu-wrap">
                        <img src="images/pizza-1.jpg" class="menu-img" />

                        <div class="text">
                            <h5>Itallian Pizza</h5>
                            <p style="color: #808080">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia.</p>
                            <p class="price"><span style="color: #ffc107">$2.90</span></p>
                            <p><a href="#" class="btn-service ">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="menu-wrap">
                        <img src="images/pizza-2.jpg" class="menu-img" />

                        <div class="text">
                            <h5>Itallian Pizza</h5>
                            <p style="color: #808080">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia.</p>
                            <p class="price"><span style="color: #ffc107"> $2.90</span></p>
                            <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="menu-wrap">
                        <img src="images/pizza-7.jpg" class="menu-img" />

                        <div class="text">
                            <h5>Itallian Pizza</h5>
                            <p style="color: #808080">Far far away, behind the word mountains, far from the countries
                                Vokalia and Consonantia.</p>
                            <p class="price"><span style="color: #ffc107">$2.90</span></p>
                            <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center ">
                    <div class="menu-wrap">
                        <img src="images/pizza-4.jpg" class="menu-img" />
                        <div class="text">
                            <h5>Itallian Pizza</h5>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                            <p class="price"><span style="color: #ffc107">$2.90</span></p>
                            <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
