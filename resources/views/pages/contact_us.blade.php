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
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="contact-box">
                    <div class="icon-box">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Address </h4>
                        <p style="margin: 0px ; font-size: 14px;" > Leopard Holidays (Pvt) Limited </p>
                        <p  style="margin: 0px ; font-size: 14px"> No : 98 B, De Mel Watte Road, Nawala, </p>
                        <p  style="margin: 0px; font-size: 14px"> Koswatta, Colombo, Sri Lanka. </p>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="contact-box">
                <a href="http://www.leopardholidays.com/">
                    <div class="icon-box">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Website </h4>
                        <p style="margin: 0px ; font-size: 14px" > www.leopardholidays.com </p>
                    </div>
                    </a>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <div class="contact-box">
                <a href="mailto:info@leopardholidays.com">
                    <div class="icon-box">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Email </h4>
                        <p style="margin: 0px ; font-size: 14px" > info@leopardholidays.com</p>
                    </div>
                     </a>
                </div>
            </div>
            <!-- item -->
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 ">
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
            </div> -->
            <!-- item -->
          
            <!-- item -->
            <div class="col-lg-3 col-md-6 col-sm-12 ">
                <a href="tel:+94777999223" >
                <div class="contact-box">
                    <div class="icon-box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="con-diss">
                        <h4> Hotline </h4>
                        <p style="margin: 0px ; font-size: 14px" >+94 77 79 99 223 </p>
                    </div>
                    </a>

                </div>
            </div>
           
        </div>
        <div class="row mt-5">
    

            <div class="col-lg-6 col-md-12 mt-3">
                @if(session('success'))
                <div class="alert alert-success " role="alert">
                    {{ session('success') }}
                </div>   
                @endif
            <form class="contact-form" style=" padding: 5px;" method="POST" action="{{url('contactus')}}">
                @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="uname" placeholder="Name" name="name"
                                    required>
                            </div>

                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" id="pwd" placeholder="Email"
                                    name="email" required>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <input type="tel"  class="form-control" id="pwd" placeholder="Contact Number"
                                    name="phone" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="5" id="comment" required
                              name="notes"   placeholder="Whats on your mind ? "></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn-1" style="background-color: #fb9827 ;color:white;   box-shadow: 0px 0px 19px 5px rgba(181, 181, 181, 0.6);">Send</button>
                </form>
            </div>
            <div class="col-lg-6 col-md-12">


                <div class="map mt-2"   title="name">
                    <!-- newly added map  -->
                    <div class="mapouter " style="width: 100%;"><div   class="gmap_canvas"><iframe width="100%"  height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=No%20%3A%2098%20B%2C%20De%20Mel%20Watte%20Road%2C%20Nawala%2C%20%20Koswatta%2C%20Colombo%2C%20Sri%20Lanka.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:644px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div>
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
                <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/trip2019.jpg" alt="">
                        </div>
                    </div>
                        <!-- item -->
                     <!-- <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/featured-logo-tripadvicer.jpg" alt="">
                        </div>
                    </div> -->
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


<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="606" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=No%20%3A%2098%20B%2C%20De%20Mel%20Watte%20Road%2C%20Nawala%2C%20%20Koswatta%2C%20Colombo%2C%20Sri%20Lanka.&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org">embedgooglemap.org</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:606px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:606px;}</style></div> -->