@extends('layouts.frontend')

@section('content')

    <section class=" home-slider owl-carousel img" style="background-color: black;">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
  
              <div class="aboutdiv col-md-7 col-sm-12 text-center ftco-animate">
                  <h1 class="mb-3 mt-5 bread">About</h1>
                  <p class="breadcrumbs"><span class="mr-2 homeabout" style="color: #ffffff"><a href="index.html">Home</a></span> <span>About</span></p>
              </div>
  
            </div>
          </div>
        </div>
      </section>

      <section class="aboutsection">
        <div class="row">
          <div class="col-md-6 col-xs-12">	<img src="images/about.jpg" class="welcome-img" alt=""></div>
          <div class="col-md-6 col-xs-12 welcomeright">
            <div class="welcome-text " style="color: #ffffff">
              <h2 class="mb-4 mt-4">Welcome to <span class="fa fa-pizza">Pizza</span> A Restaurant</h2>
            </div>
            <span class="fa fa-envelope"></span>
            <span class="fas fa-pizza"></span>
            <div> 
              <p style="color: #808080">On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
            </div>
          </div>
        </div>
   

      
      <div class="container pb-5">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4 mt-4">Our Chef</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            
          </div>
        </div>
        <div class="row " style="display: flex">
        	<div class="cheft col-lg-3 col-md-6 col-xs-12  justify-content-center text-center">
        		<img src="images/person_2.jpg" class="img-fluid" alt="">
            <div class="info text-center">
              <h6>Tom Smith</h6>
              <span class="position">Hair Specialist</span>
              <div class="text">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
            
            
        	</div>
        	<div class="cheft col-lg-3 col-md-6 col-xs-12  justify-content-center text-center">
            <img src="images/person_3.jpg" class="img-fluid" alt="">
            <div class="info text-center">
              <h6>Tom Smith</h6>
              <span class="position">Hair Specialist</span>
              <div class="text">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
        		</div>
            <div class="cheft col-lg-3 col-md-6 col-xs-12  justify-content-center text-center">
              <img src="images/person_4.jpg" class="img-fluid" alt="">
              <div class="info text-center">
                <h6>Tom Smith</h6>
                <span class="position">Hair Specialist</span>
                <div class="text">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>

            <div class="cheft col-lg-3 col-md-6 col-xs-12  justify-content-center text-center">
              <img src="images/person_1.jpg" class="img-fluid" alt="">
              <div class="info text-center">
                <h6>Tom Smith</h6>
                <span class="position">Hair Specialist</span>
                <div class="text">
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
        	</div>
      </div>
    </section>


      <div class="row ">
        <div class="col-md-6 col-sm-12 ">
           add map
        </div>
        <div class="col-md-6 col-sm-12 contactright">
            <h4 class="mb-3 aboutcontact">Contact Us</h4>
            <form action="#" class="appointment-form">
                <div class="mb-4 mt-5 d-me-flex ">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="First Name">
                    </div>
                </div>
                <div class="mb-4 d-me-flex ">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-4 form-group ">
          <textarea name="" id=""  rows="3" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="mb-4 form-group">
          <input type="submit" value="Send" class="btn py-3 px-4">
        </div>
            </form>
        </div>
      </div>

 



@endsection
