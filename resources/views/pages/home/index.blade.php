@extends('layouts.defaultapp')
@section('content')
@include('inc.homenavbar')
 <!-- Start-Main-Section -->
 <main class="hero-video-banner ">

    <div class="item">

        <video class="filterVideo" autoplay="autoplay" muted="muted" preload="auto" loop>
            <source src="./videos/videoplayback.mp4"
                type="video/mp4">
        </video>
        <div class="hero-slider__content-wrapper">
            <div class="container">
                <div class="row justify-content-lg-center">
                    <div class="col-lg-10 text-center">
                        <div class="hero-slider__content">
                            <h2 class="hero-slider__title">Discover Sri Lanka</h2>
                            {{-- <p class="hero-slider__text">Et ea invidunt magna dolores ut et magna eos sit erat.
                                Dolor et kasd takimata no duo gubergren justo ut nonumy, voluptua accusam at clita
                                ut. Rebum clita accusam nonumy.</p>  --}}
                            <!-- <a class="hero-slider__btn active mr-2" href="about.html"> Get Start</a>
                            <a class="hero-slider__btn" href="contact.html"> Contact Us</a> -->
                        </div>
                    </div>
                </div>
            </div>
                            <!-- searching area -->
            <div class="search_area search_area_three">
                <div class="container">
                        <br>
                        <!--Search Form-->
                        <form class=" row search_area-inner type-form-four homepage_main_search_title"
                         style=" width: 80%;   background: rgba(255, 255, 255, 0.836); border-radius: 60px; ">
                            <div class="form-group icon_down">
                            <select class="selectpicker search-fields form-control">
                                <option value="0"> An Individual </option>
                                <option value="1"> A Family</option>
                                <option value="2"> A Couple</option>
                                <option value="3"> A Company</option>
                                <option value="4"> A Group</option>
                            </select>
                        </div>

                        <div class="form-group icon_down">
                            <select class="selectpicker search-fields form-control">
                                <option value="0"> Adventure </option>
                                <option value="1"> Beach Tour</option>
                                <option value="2"> Cultural Tour</option>
                                <option value="3"> Family</option>
                                <option value="5"> Heli Tours</option>
                                <option value="6"> Luxury Tours</option>
                                <option value="7"> Rail Tours</option>
                                <option value="8"> Ramayana Tours</option>
                                <option value="9"> Relax Tour</option>
                                <option value="10">Round Tours</option>
                                <option value="11">Golf Tours</option>
                                <option value="12">Wedding Planning</option>
                                <option value="13">Honeymoon Tour</option>
                                <option value="14">Gem Tour</option>
                            </select>
                        </div>
                        <div class="form-group icon_down">
                            <select class="selectpicker search-fields form-control">
                                <option value="0"> Ampara </option>
                                <option value="1"> Galle </option>
                                <option value="2"> Mathara</option>
                                <option value="3"> Colombo</option>
                                <option value="4"> Kandy</option>
                            </select>
                        </div>
                        <!-- <div class="form-group">
                            <input type="number" class="zt-control" placeholder="Childs" min="1" max="100">
                        </div>
                        <div class="form-group date input-datepicker">
                            <input type="text" class="form-control " id="datepicker" name="DateFron"
                                data-date-format="yyyy-mm-dd" placeholder="Check In" value="">
                            <span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
                        </div> -->
                        <div>
                            <button type="submit" class="btn-tour"> Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End-searching-area-->
        </div>
    </div>
</main>
<!-- End-Main-Section -->

    <!-- Star - thandpicked-itineraries -->
    <section class="handpicked-itineraries ws-section-spacing bg-gray" style="padding-top: 50px; padding-bottom: 20px;">
        <div class="container-fluid text-center ch_handpicked_text">
            <h3>Handpicked Itineraries</h3>
            <br>
            <center>
            <p>Our team of expert travel consultants have selected a few from our wide range of themed tour itineraries that we believe will offer you an unforgettable holiday in Sri Lanka. </p><p class="mobilevirew_hide" style="text-align: center;"> For those who have different holiday preferences in Sri Lanka, we cater to tailor-made itineraries as per your requests. So do not hesitate to let us know if you need a special itinerary made just for you.</p>
             </center>
            <a  class=" btn btn-sucess btn-md font-weight-bold" href="package-grid.html">View All</a>
                        <div class="row mt-4 px-md-5">
                            <div class="col-lg-12">
                                <div class="destination-slide ">
                                    @if ( count($itineraries) > 0 )
                                        @foreach ($itineraries as $item)                                
                                            <!-- item -->
                                            <div class="item">
                                                <a href="{{url('itineraries/'.str_slug($item->title))}}" >
                                                <div class="place-box">
                                                    <div class=" slideImages" style="background-image: url('{{ URL::to('/') }}/images/itineraries/covers/{{$item->cover}}');  ">
                                                    </div>
                                                    <div class="desi-inner">
                                                        <h4>{{$item->title}}</h4>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        @endforeach    
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                     </div>

    </section>
<!-- End-handpicked-itineraries -->




<!-- service-section -->
<section class="service-one ws-section-spacing bg-gray" style="padding-top : 10px !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title ch_handpicked_text">
                    <h2 class="title">Day Tours </h2>
                    <h4 class="sub-title _day_title">Welcome to the beautiful emerald isle known as Sri Lanka! Let us greet you with a salutation of “Ayubowan” which means “May you live long and healthy” and offer you an exciting array of tours to enjoy and turn your vacation into a delight!</h4>
                   
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 day_t_all mb-3"   >
              
                <div class="col-lg-12 col-md-6 col-sm-12" style="background-image: url('{{ URL::to('/') }}/images/main/a.jpg');  height: 810px; background-repeat: no-repeat;"></div>
              
                <div class="day_tours_main_overlay">

                  <!-- <div class="view_all_die">
                        <a href="place-details.html" class="viwe_all_day_tourse_btn" >View All Day Tourse</a>
                    </div> -->
                  
                </div>
                <!-- <img src="images/abt-2.PNG" alt="about-2"> -->
                <!-- <img src="./images/cimages/a.jpg" alt="about-2"> -->
            </div>
            <div class="col-lg-6">
                <div class="row">
                    @if ( count($daytours) > 0 )
                    @foreach ($daytours as $item)   
                    <!-- item -->
                       <div class="col-lg-6 col-md-6 col-sm-12 " data-aos="fade-up">
                        <a href="{{url('daytours/'.str_slug($item->title))}}">
                           <div class="servicebox-one service-type-two day_tours_cards" style="background-image: url('{{ URL::to('/') }}/images/daytours/covers/{{$item->cover}}');">  
                               <div class="day_tours_overlay">
                                   <h3 class="service-box-title">{{$item->title}}
                                </h3>
                               </div>
                           </div>
                        </a>
                       </div>
                   
                    <!-- item end -->
                    @endforeach
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-service-section -->


<!-- about-area -->
<section class="ws-section-spacing bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-content">
                    <h2 style="text-align: center;">Make life easier with Leopard Holidays</h2>
                    <p style="text-align: center;">Eliminate the stress and confusion of panning a holiday for you and your loved ones. Leopard Holidays Tours will arrange everything for you from the time you pack your bags and step out of your home until your holiday to Sri Lanka is complete and you get back home to your routine. From hotel accommodations to air and ground transportation, car rentals and tour packages, Blue Lanka Tours covers it all.</p>
                    
                    <p class="mobilevirew_hide" style="text-align: center;">  Not only will we arrange various modes of transport and types of accommodation for you but you will also have the advantage of early booking discounts, special fares, hotel deals and travel advisories. Our strong working relationship with travel suppliers island-wide and the latest computer reservations technology that we make use of in our offices allows us to provide our clients with the most up-to-date and best value information.</p>

                   
                    <p class="mobilevirew_hide" style="text-align: center;">With the customer’s best interest in mind at all times, we have a strict code of ethics that we follow in providing travel consultation services. Hence you do not have to worry about trusting us with your Sri Lanka tour requirements. We have extensive knowledge in the tourism industry and are equipped with the necessary tools to provide the best quality of service to our clients. Our team of committed travel consultants will go the extra mile to meet your travel needs. </p>
             
                    <center> 
                    <a href="aboutus.html" class="custom_btn read-btn" >Read More</a> 
                </center>   
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- End-about-area -->





<!-- Counter-section -->
<section class="ws-section-spacing bg-img-counter" style="background-image: url('{{ URL::to('/') }}/images/main/slb.jpg');  background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box">
                    <span class="count-icon"><i class="fas fa-user"></i></span>
                    <h2 class="counter">2240</h2>
                    <h3 class="count-title">Customers</h3>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box">
                    <span class="count-icon"><i class="fas fa-umbrella-beach"></i></span>
                    <h2 class="counter">540</h2>
                    <h3 class="count-title">Destination</h3>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box">
                    <span class="count-icon"><i class="fas fa-luggage-cart"></i></span>
                    <h2 class="counter">3340</h2>
                    <h3 class="count-title">Tours</h3>
                </div>
            </div>
            <!-- item -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="counter-box">
                    <span class="count-icon"><i class="fas fa-life-ring"></i></span>
                    <h2 class="counter">240</h2>
                    <h3 class="count-title">Support Cases</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-Counter-section -->


<!-- Desination-slide -->
<section class="py-5 desination-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title ">
                    <h2 class="title">Popular Destinations</h2>
                    <!-- <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="destination-slide">
                    @if( count($destinations) > 0 )
                        @foreach ($destinations as $item)
                        <!-- item -->
                        <div class="item">
                            <div class="place-box">
                                <div class="">
                                    <img src="{{ URL::to('/') }}/images/destinations/covers/{{$item->cover}}" alt="">
                                </div>
                                <div class="desi-inner">
                                    <h4>{{$item->title}} </h4>
                                </div>
                            </div>
                        </div>
                        <!-- item end -->
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End-Desination-slide -->

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
<!-- Blog-section -->
<section class="ws-section-spacing blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="center-title ">
                    <h2 class="title">Accommodation</h2>
                    <!-- <h4 class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua minim veniam.</h4> -->
                </div>
            </div>
        </div>
        <div class="row">
            @if ( count($accommodation) > 0 )
                    @foreach ($accommodation as $item)   
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="package-one blog-box" style="height: 500px;">
                    <div class="img-wapper">
                        <img style="height: 200px;" src="{{ URL::to('/') }}/images/accommodation/covers/{{$item->cover}}" alt="Leopard Holiday">
                    </div>
                    <div class="package-content">
                    <h3><a href="{{url('accommodations/'.str_slug($item->title))}}" >{{$item->title}}</a></h3>
                       
                        <p>Located in the Cultural Triangle, Amaya Hills Kandy offers a hillside retreat overlooking Heerassagala Forest. Featuring traditional Sri Lankan architecture, it has an outdoor pool, a spa and a restaurant.

                        </p>
                        <a href="{{url('accommodations/'.str_slug($item->title))}}" 
                            style="background-color : #fb9827;"
                            class="btn btn-sm px-2 text-white">Read More <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            
        </div>
    </div>
</section>
<!-- End-Blog-section -->

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


 <!-- Start Contatc Us -section -->
 <section class="same-section-spacing bg-white" style="padding-top: 20px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 "  data-aos="flip-left">
                <a href="tel:+94777999223" class="block-link">
                <div class=" hm_contatcus_div call-us">
                    <img style="width: 50px; display: inline-block; position: absolute; left: 10px; top: 28px;" src="{{ URL::to('/') }}/images/contactus/call_us.png">
                    <h5>Talk to Us</h5>
                    <p>(+94) 777 999 223</p>
                    <p>To find a local destination expert</p>
                </div>
               </a>
            </div>
            <div class="col-md-4 "  data-aos="flip-left">
                <a href="mailto:info@leopardholidays.com" class="block-link">
                    <div class=" hm_contatcus_div call-us">
                        <img style="width: 50px; display: inline-block; position: absolute; left: 10px; top: 28px;" src="{{ URL::to('/') }}/images/contactus/meet_us.png">
                        <h5>Write To Us</h5><p>Send an enquiry by email</p><p>info@leopardholidays.com</p>
                    </div>
                   </a>
            </div>
            <div class="col-md-4 "  data-aos="flip-left">
                <a href="#" class="block-link">
                    <div class=" hm_contatcus_div call-us">
                        <img style="width: 50px; display: inline-block; position: absolute; left: 10px; top: 28px;" src="{{ URL::to('/') }}/images/contactus/enquire.png">
                        <h5>Get in touch</h5>
                        <p>Form details</p>
                        <p>To find a local destination expert</p>
                        <!-- new commit dfgdfgdgf-->
                    </div>
                   </a>
            </div>
        </div>
    </div>
</section>
<!-- end Contatc Us -section -->





<div class="question-inner call-us"></div> </a>





<!-- social-section -->
<!-- <section class="same-section-spacing bg-white">
<div class="container">
    <div class="row">
        <div class="col-lg-6">
        </div>
        <div class="col-lg-6">
        </div>
    </div>
</div> -->
</section>
<!-- End-social-section -->



@include('inc.defaultfooter')
@endsection