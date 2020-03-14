@extends('layouts.defaultapp')
@section('title','Contact Us')
@section('content')
@include('inc.defaultnavbar')
 <!-- Banner-area -->
 <section class="same-section-spacing bg-banner" style="background-image: url('./images/contactus/cover.png'); background-repeat: no-repeat ; background-size: cover;">
       
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>Contact Us</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="same-section-spacing ">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <div class="contact-box">
                    <div class="icon-box">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Address </h4>
                        <p> No. 369/1, Pahala Kosgama, Kosgama, Colombo, Sri Lanka. </p>
                    </div>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <a href="tel:+94777300852" >
                <div class="contact-box">
                    <div class="icon-box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Contact No. </h4>
                        <p>+94 71 22 99 339 </p>
                    </div>
                    </a>
                    
                </div>
            </div>
            <!-- item -->
          
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12 ">
                <a href="tel:+94777300852" >
                <div class="contact-box">
                    <div class="icon-box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Hotline </h4>
                        <p>+94 77 79 99 223 </p>
                    </div>
                    </a>

                </div>
            </div>
           
        </div>
        <div class="row mt-5">
    

            <div class="col-lg-6 col-md-12 mt-3">
                <form class="contact-form" style=" padding: 5px;">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="uname" placeholder="Name" name="Name"
                                    required="">
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="pwd" placeholder="Email"
                                    name="Email" required="">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="tel"  class="form-control" id="pwd" placeholder="Contact Number"
                                    name="Email" required="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="5" id="comment"
                                placeholder="Whats on your mind ? "></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn-1" style="background-color: #fb9827 ;color:white;  box-shadow: 1px 2px #b1aeae;">Send</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">


                <div class="map mt-2"   title="name">
                    <!-- newly added map  -->
                    <div class="mapouter " style="width: 100%;"><div  style="width: 500px !important;" class="gmap_canvas"><iframe width="100%"  height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=pahala%20kosgama&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:644px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:644px;}</style></div>
                    <!-- newly added map  -->

                </div>



            </div>
        </div>
    </div>
</section>
<!-- End-Package-Section -->
<!-- Partner-section -->
<section class="same-section-spacing bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title ">
                    <h2 class="title">Our Partners</h2>
                    <!-- <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="client-slide">
                        <!-- item -->
                     <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/featured-logo-tripadvicer.jpg" alt="">
                        </div>
                    </div>
                    <!-- item -->
                    <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/booking.png" alt="">
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/featured-logo-trustpilot.jpg" alt="">
                        </div>
                    </div>
                   
                    <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/national-geographic-traveler-logo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-Partner-section -->
@include('inc.defaultfooter')
@endsection
