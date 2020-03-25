@extends('layouts.defaultapp')
@section('title',"Accommodations in Sri Lanka")
@section('content')
@include('inc.defaultnavbar')
<!-- Banner-area -->
<section class="same-section-spacing-image"
    style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url({{asset('images/main/colombo-night.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">Accommodations in Sri Lanka</h2>
                    <!-- <hr style="border-top: 2px solid white;" class="my-0 w-75 mx-4"/> -->
                    <h4 class="sub-title px-4 w-75 text-white pt-1">Find the best places to stay in Sri Lanka for all budgets and comfort levels.</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="pt-4 pb-5 bg-gray ">
    <div class="container">
        {{-- <div class="row " >
            <div class="col-12 py-2" >
                    <div >
                        <a class="btn btn-md m-1 btn-outline-success  active " class="btn_outline_disabel" href="#">All</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Ayurveda (9)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Beach (30)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Boutique (33)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Bungalows and Mansions (9)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Camping (8)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Colombo Hotels (6)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Cultural (18)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Golf Resort (2)</a>
                        <a class="btn btn-md m-1 btn-outline-success " href="#" class="btn_outline_disabel">Hill country (19)</a>
                    </div>
                </div>
        </div> --}}
        <div class="row  pt-4">
            @if( count($accommodations) > 0 )
                @foreach ($accommodations as $accommodation) 
                    <!-- item -->
                    <div class="col-lg-6 col-md-6 col-sm-12  mb-3"  data-aos="fade-up" >
                        <div class="package-one h-100 card border-0">
                            <a href="{{url('accommodations/'.str_slug($accommodation->title))}}">
                                <div class="bslideImages"
                                    style="background-image: url('{{ URL::to('/') }}/images/accommodation/covers/{{$accommodation->cover}}'); ">
                                </div>
                            </a>
                            <div class="package-content">
                                <h3><a href="{{url('accommodations/'.str_slug($accommodation->title))}}">{{$accommodation->title}}</a></h3>
                                <p class="two-lines">{{strip_tags($accommodation->description)}} </p>
                                <ul class="ct-action">
                                    <li><a href="{{url('accommodations/'.str_slug($accommodation->title))}}" class="booking-btn">View More</a></li>
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Item End -->
                @endforeach
            @else
                <p>No Accommodations Found</p>
            @endif
        </div>
    </div>
</section>
<!-- End-Package-Section -->
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
                    <a href="#" class="site-button white">See Promotion Tours</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6"></div>
        </div>
    </div>
</section> -->
<!-- End-offer-section -->
<!-- Partner-section -->
<!-- <section class=" bg-white pb-5 pt-3">
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
    </div>
</section> -->
<!-- End-Partner-section -->
@include('inc.defaultfooter')

@endsection
