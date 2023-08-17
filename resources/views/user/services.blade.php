@extends('layouts.user')

@section('content')

<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">

                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>

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
