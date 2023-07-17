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

       <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Chef</h2>
            <p class="flip"><span class="deg1"></span><span class="deg2"></span><span class="deg3"></span></p>
            <p class="mt-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" ><img src="images/person_1.jpg" class="img-fluid" alt=""></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Tom Smith</a></h3>
      					<span class="position">Hair Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
      				<div class="img mb-4" ><img src="images/person_2.jpg" class="img-fluid" alt=""></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Mark Wilson</a></h3>
      					<span class="position">Beard Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" ><img src="images/person_3.jpg" class="img-fluid" alt=""></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Patrick Jacobson</a></h3>
      					<span class="position">Hair Stylist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
      				</div>
        		</div>
        	</div>
        	<div class="col-lg-3 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
      				<div class="img mb-4" ><img src="images/person_4.jpg" class="img-fluid" alt=""></div>
      				<div class="info text-center">
      					<h3><a href="teacher-single.html">Ivan Dorchsner</a></h3>
      					<span class="position">Beard Specialist</span>
      					<div class="text">
	        				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        			</div>
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
