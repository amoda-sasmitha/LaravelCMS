@extends('layouts.defaultapp')
@section('title','Tailor-Made')
@section('content')
@include('inc.defaultnavbar')

<!-- Banner-area -->
<section class="same-section-spacing-image"
 style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url('{{asset('images/arealsrilanka.jpg')}}');">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div>
                 <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">It’s great to be beside the  beautiful seaside </h2>

             </div>
         </div>
     </div>
 </div>
 </div>
</section>
<!-- End-banner-area -->

<center>
 <!-- Star - thandpicked-itineraries -->
 <section class="handpicked-itineraries ws-section-spacing bg-white" style="padding-top: 20px; padding-bottom: 20px; max-width: 1200px">
        <div class="container-fluid ">
            <h2>Tailor-Made Sri Lanka Holidays</h2>
            <br>
         
            <p style="line-height: 34px; text-align: justify;
            text-justify: inter-word; ">Leopard Holidays and our team of friendly consultants work tirelessly to create exciting Sri Lanka tailor-made holidays for guests who want to tour this beautiful island.

Whether you are looking to explore Sri Lanka’s beaches, wildlife, birds, greenery, history, and culture or even the warm and friendly people of the rural areas, we have just the holiday package for you. Sri Lanka is currently the number one tourist destination and is renowned for its diverse landscapes. Whilst these are specialized packages mostly focusing on a few aspects of the country, we have also lined up a few itineraries that cover all these landscapes in one tour.

If any of our prepared itineraries are not meeting your requirements, we will gladly make alterations to cater to your requests. Our intimate and personalized services have served travellers for many years while dealing with the most discerning preferences and yet managed to successfully come up with an ideal itinerary</p>
            
        </div>
 </section>

 </center>
 <section class="handpicked-itineraries ws-section-spacing bg-gray" style="padding-top: 50px">
 <div class="container-fluid text-center ch_handpicked_text">
            <h2 class="font-weight-bold text-dark ">Get in Touch</h2>
 </div>
 @include('inc.booking', ['trip_id' => 9999 ]))
 </section>

 <!-- Testimonial-section -->
<section class="same-section-spacing  bg-gray Testimonial-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title ">
                    <h2 class="title">What Travellers Say About Us</h2>
                    <h4 class="sub-title"> <b>Leopard Holidays </b> is purely motivated by the exploding desire of proudly facilitating opportunities to the global community that wish to experience a touch of paradise by visiting the choice destination, Sri Lanka.</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="testi-slide-one">
                    <div class="item customer_revie">
                        <img src="{{ URL::to('/') }}/images/tripadvisor/1.jpg" alt="Leopard Holidays">
                        <div class="testi-content">
                            <p>We completed a three days two nights safari tour with Leopard Holidays. As we had only 5 days in Sri Lanka, we wanted to see the Sri Lankan wildlife. After contacting Leopard Holidays, we compared their packages with few tour operators and decided to book our trip with Leopard Holidays.</p>
                            <span class="rating"> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                            <h4>
                                AmithJay
                            </h4>
                            <p>Three days two nights </p>
                        </div>
                    </div>
                    <div class="item customer_revie">
                        <img src="{{ URL::to('/') }}/images/tripadvisor/2.jpg" alt="Leopard Holidays">
                        <div class="testi-content">
                            <p>Nilushka organized for us a 5 day trip with Alvis. Alvis picked us up at airport at 2.am on Wednesday, directly and safely drove to Anaradhapura, made as great visit right away, explained everything very well, really kind, makes anything you want happen. </p>
                            <span class="rating"> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                            <h4>Hugo B
                            </h4>
                            <p>Amazing 5 days experience Alvis.</p>
                        </div>
                    </div>
                    <div class="item customer_revie">
                        <img src="{{ URL::to('/') }}/images/tripadvisor/3.jpg" alt="Leopard Holidays">
                        <div class="testi-content">
                            <p>I traveled alone from Colombo to Kandy and back for a research trip. It was my first time in Sri Lanka and Nilu single-handedly made this trip easy and successful. He was very helpful when I needed to communicate with the locals.</p>
                            <span class="rating"> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                            <h4>Jean</h4>
                            <p>Nilu is an amazing guide</p>
                        </div>
                    </div>
                    <div class="item customer_revie">
                        <img src="{{ URL::to('/') }}/images/tripadvisor/4.jpg" alt="Leopard Holidays">
                        <div class="testi-content">
                            <p>The trip was very enjoyable. The tour guide cum chauffeur Mr. Nilushka is a very good companion. He drove perfectly told us all interesting things and timed our visits to the optimum level. He is humble, co-operative and also takes the role of translator in tricky situations.</p>
                            <span class="rating"> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                            <h4>Gudivada R</h4>
                            <p>Holiday trip in Sri Lanka December 25 to 30 </p>
                        </div>
                    </div>
                    <div class="item customer_revie">
                        <img src="{{ URL::to('/') }}/images/tripadvisor/5.jpg" alt="Leopard Holidays">
                        <div class="testi-content">
                            <p>It’s was my first trip to over seas with my friends I enjoyed a lot in srilanka . Special thanks to leopard holidays for giving us such a enjoyable tour and giving us such a good and well mannerd person for guiding us.</p>
                            <span class="rating"> <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i></span>
                            <h4>allavi2988</h4>
                            <p>Wonderful tour </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-Testimonial-section -->



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
                     {{-- <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/featured-logo-tripadvicer.jpg" alt="">
                        </div>
                    </div> --}}
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
                    <div class="item">
                        <div class="img-wapper">
                            <img src="{{ URL::to('/') }}/images/partners/trip2019.jpg" alt="">
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