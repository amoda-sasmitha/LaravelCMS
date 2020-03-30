@extends('layouts.defaultapp')
@section('title','Our Story')
@section('content')
@include('inc.defaultnavbar')

  <!-- Banner-area -->
  <section class="same-section-spacing-image"
  style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url('{{asset('images/main/wp1857995.jpg')}}');">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div>
                  <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">Our Story</h2>
                  <!-- <hr style="border-top: 2px solid white;" class="my-0 w-75 mx-4"/> -->
                  {{-- <h4 class="sub-title px-4 w-75 text-white pt-1">Adventure lovers, be it the young or the old,
                      are sure to enjoy this tour itinerary.</h4> --}}
              </div>
          </div>
      </div>
  </div>
  </div>
</section>
<!-- End-banner-area -->
<!-- about-area -->
<section class="py-5 about-three">
  <div class="container">
      <div class="row">
          <div class="col-lg-8">

              <h2 class="pb-2">We make the best for all our customers</h2>
           <p>Leopard holidays was conceptualized and designed by Antyra Solutions, in order to help you discover Sri Lanka through her fascinating history, culture and heritage.

              The country’s colourful past has given birth to intriguing tales which have been passed down through the generations. These tales are sewn into the fabric of Sri Lankan society, and they continue to influence the narrative of the country. They provide insight into the traditions, beliefs and ways of life of the people who have inhabited this land for thousands of years. They highlight the endurance and strength of a fiercely resilient people who overcome adversity with a smile on their face and warmth in their hearts. 
           </p>
              <p>
              They tell the story of Sri Lanka – a land of natural beauty, delightful people and a captivating past.
              
              Join us on this journey of discovery, and let the Leopard holidays inspire you to visit this wonderful and exciting island that has brought joy to so many.
              
              If you want to be featured in Leopard holidays, email us at  <b>info@leopardholidays.com </b></p>
              <!-- <div class="about-content">
              <a href="#" class="read-btn">Read More</a>
             </div> -->
              <!-- <div class="_auto_hight">
                  <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                      eiusmod tempor incididunt ut labore et dolore .</p>
              </div> -->
              
          </div>
          <div class="col-lg-4">
              <div data-aos="fade-left" data-aos-duration="90000"  data-aos-delay="500"  data-aos-offset="200"  data-aos-mirror="true">
                  <img src="{{asset('images/main/leopard.jfif')}}" class="img-fluid" style="width: 100%;" >
              </div>
            
          </div>
      </div>


 
  </div>
</section>
<!-- End-about-area -->

<!-- start messages -->




<!-- end messages -->




<!-- about-area -->
{{-- <section class="py-5 bg-white">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="center-title ">
                  <h2 class="title">Our History</h2>
                  <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-md-12">
              <div class="main-timeline">
                  <div class="timeline" data-aos="fade-up">
                      <a href="#" class="timeline-content">
                          <div class="timeline-icon">
                              <i class="fa fa-globe"></i>
                          </div>
                          <h3 class="title">Best Travel Agent</h3>
                          <p class="description">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                          </p>
                      </a>
                  </div>
                  <div class="timeline" data-aos="fade-up">
                      <a href="#" class="timeline-content">
                          <div class="timeline-icon">
                              <i class="fa fa-users"></i>
                          </div>
                          <h3 class="title">Amazing Tour</h3>
                          <p class="description">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                          </p>
                      </a>
                  </div>
                  <div class="timeline" data-aos="fade-up">
                      <a href="#" class="timeline-content">
                          <div class="timeline-icon">
                              <i class="fa fa-users"></i>
                          </div>
                          <h3 class="title">Trust & Safety</h3>
                          <p class="description">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                          </p>
                      </a>
                  </div>
                  <div class="timeline" data-aos="fade-up">
                      <a href="#" class="timeline-content">
                          <div class="timeline-icon">
                              <i class="fa fa-users"></i>
                          </div>
                          <h3 class="title">Ticket Booking</h3>
                          <p class="description">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer males uada tellus
                              lorem, et condimentum neque commodo
                          </p>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End-about-area -->

<!-- offer-section -->
<!-- <section class="offer-area-three same-section-spacing">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 col-md-12">
              <div class="add-area ">
                  <h3>1000 $ for person - 6 nights</h3>
                  <h2>Discount <span class="text-theme">10-30% </span> Off</h2>
                  <p>If you’re looking for a truly memorable family break here you find the lowest price on the
                      right hotel for you. It's indescribable. Stay up to date and check out the deals for these
                      trending destinations.</p>
                  <a href="package-list.html" class="site-button white">See Promotion Tours</a>
              </div>
          </div>
          <div class="col-lg-6 col-md-6"></div>
      </div>
  </div> -->
</section>
<!-- End-offer-section -->
<!-- service-section -->
<section class="service-one py-5 bg-gray">
  <div class="container">
      <div class="row">
          <div class="col-lg-12" >
              <div class="center-title ">
                  <h2 class="title">Why Choose Us</h2>
                  <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4>
              </div>
          </div>
      </div>
      <div class="row">
          <!-- <div class="col-lg-6">
              <img src="images/abt-2.PNG" alt="about-2">
          </div> -->
          <div class="col-lg-12">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in">
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fas fa-route"></i></div>
                          <h3 class="service-box-title">Best Travel Agent</h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
                  <!-- item -->
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in">
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fab fa-avianex"></i></div>
                          <h3 class="service-box-title">Best Price </h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit .
                          </p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
                  <!-- item -->
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in">
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fas fa-bullhorn"></i></div>
                          <h3 class="service-box-title">Trust & Safety</h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
                  <!-- item -->
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in">
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fa fa-home"></i></div>
                          <h3 class="service-box-title">Amazing Tour</h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
                  <!-- item -->
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in">
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fas fa-ticket-alt"></i></div>
                          <h3 class="service-box-title">Ticket Booking</h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
                  <!-- item -->
                  <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="zoom-in" >
                      <div class="servicebox-one service-type-two bg-white shadow">
                          <div class="service-box-icon"><i class="fa fa-bed"></i></div>
                          <h3 class="service-box-title">Hotel Booking</h3>
                          <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit .
                          </p>
                          <!-- <a class="btn" href="#">See more</a> -->
                      </div>
                  </div>
              </div>
          </div>

      </div>
  </div>
</section> --}}
<!-- End-service-section -->



<!-- start socail media feed -->
  <!-- <section class="service-one ws-section-spacing ">
     <div class="container"> 

      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fleopardholidays%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=591621561619223" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
     </div>
  
  
  </section> -->

<!-- end socail media feed -->


<!-- our team start -->


<section class="service-one py-5 ">
<div class="container">
<div class="row mt-5">

<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
  <div class="servicebox-one ">
      <div class="service-box-icon"><i class="fas fa-route"></i></div>
      <h3 class="service-box-title">Best Travel Agent</h3>
      {{-- <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore .</p> --}}
  </div>
</div>

<!-- item -->
<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
  <div class="servicebox-one ">
      <div class="service-box-icon"><i class="fab fa-avianex"></i></div>
      <h3 class="service-box-title">Best Price Guarantee</h3>
      {{-- <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore .</p> --}}
  </div>
</div>
<!-- item -->
<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
  <div class="servicebox-one ">
      <div class="service-box-icon"><i class="fas fa-shield-alt"></i></div>
      <h3 class="service-box-title">Trust & Safety</h3>
      {{-- <p class="service-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore .</p> --}}
  </div>
</div>
</div>



</div>
</section>
{{-- 
<!-- Partner-section -->
<section class="same-section-spacing bg-gray">
<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <div class="center-title ">
              <h2 class="title">Our Partners</h2>
              <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <div class="client-slide">
                  <!-- item -->
               <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-tripadvicer.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-trustpilot.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-tripadvicer.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-trustpilot.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-trustpilot.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/featured-logo-trustpilot.jpg" alt="">
                  </div>
              </div>
              <!-- item -->
              <div class="item">
                  <div class="img-wapper">
                      <img src="./images/partners/national-geographic-traveler-logo.jpg" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</section> --}}
<!-- End-Partner-section -->
@include('inc.defaultfooter')
@endsection