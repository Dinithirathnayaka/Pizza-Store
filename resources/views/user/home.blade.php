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

@endsection

