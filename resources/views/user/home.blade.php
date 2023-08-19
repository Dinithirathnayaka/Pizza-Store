@extends('layouts.user')

@section('content')
<div class="slider" >
    <!-- fade css -->
    <div class="myslide" style="background-image: url(images/pizza-13.jpg);">
        <div class="txt">
            <p class="text-center">Welcome</p>
            <h1 class="text-center"> WE COOKED YOUR DESIRED<br>PIZZA RECIPE</h1>
            <p class="text-center mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('menu') }}" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide " style="background-image: url(images/pizza-15.jpg);">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Pizza</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('menu') }}" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide" style="background-image: url(images/pizza-12.jpg);">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Burger</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('menu') }}" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide" style="background-image: url(images/pizza-11.jpg);">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Italian Pasta</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('menu') }}" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide" style="background-image: url(images/pizza-14.jpg);">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Lime Juice</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="{{ route('menu') }}" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>


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
<div class="row info ">
    <div class="col-md-4 col-xs-12 contactnum ">
        <div class="icon"><span class="icon-phone"></span></div>
        <div class="text">
            <h5>000 (123) 456 7890</h5>
            <p>A small river named Duden flows</p>
        </div>
    </div>
    <div class="col-md-2 col-xs-12">
        <div class="icon"><span class="icon-my_location"></span></div>
        <div class="text">
            <h5>198 West 21th Street</h5>
            <p>Suite 721 New York NY 10016</p>
        </div>
    </div>
    <div class="col-md-2 col-xs-12 ">
        <div class="icon"><span class="icon-clock-o"></span></div>
        <div class="text">
            <h5>Open Monday-Friday</h5>
            <p>8:00am - 9:00pm</p>
        </div>
    </div>
    <div class="col-md-4 col-xs-12 aboutsocial pt-3 " style="background-color: #FAC564 ">
        <ul class="social-icon">
            <li class=""><a href="#"><span class="fa fa-twitter" style="color: #ffffff"></span></a></li>
            <li class=""><a href="#"><span class="fa fa-facebook" style="color: #ffffff"></span></a></li>
            <li class=""><a href="#"><span class="fa fa-instagram" style="color: #ffffff"></span></a></li>
        </ul>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-xs-12"> <img src="images/about.jpg" class="welcome-img"></div>
    <div class="col-md-6 col-xs-12 welcomeright" style="background-color:#212529">
        <div class="welcome-text " style="color: #ffffff">
            <h2 class="mb-4 mt-4">Welcome to <span class="" style="color: #FAC564">Pizza</span> A Restaurant
            </h2>
        </div>


        <div >
            <p style="color: #808080">On her way she met a copy. The copy warned the Little Blind Text, that where
                it came from it would have been rewritten a thousand times and everything that was left from its
                origin would be the word "and" and the Little Blind Text should turn around and return to its own,
                safe country. But nothing the copy said could convince her and so it didn’t take long until a few
                insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                agency, where they abused her for their.</p>
        </div>
    </div>
</div>

@endsection

