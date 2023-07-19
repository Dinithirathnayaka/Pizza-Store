@extends('layouts.frontend')

@section('content')


<section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

    <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Contact Us</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
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
                  <p style="color: #808080"><span style="color: #ffffff">Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
              <div class="col-md-12 mb-3">
                  <p ><span style="color: #ffffff">Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
              <div class="col-md-12 mb-3">
                  <p><span style="color: #ffffff">Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
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
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5 " style="color:#000000 ">
              </div>
        </form>
      </div>
    </div>
  </div></section>

  



@endsection
