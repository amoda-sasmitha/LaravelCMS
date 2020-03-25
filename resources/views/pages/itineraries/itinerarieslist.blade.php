@extends('layouts.defaultapp')
@section('title','Itineraries')
@section('content')
@include('inc.defaultnavbar')
<!-- Banner-area -->
<section class="same-section-spacing-image"
    style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.3) 70%), url({{asset('images/main/grid-itineraries3.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">Your Trip Your Way</h2>
                    <!-- <hr style="border-top: 2px solid white;" class="my-0 w-75 mx-4"/> -->
                    <h4 class="sub-title px-4 w-75 text-white pt-1">Adventure lovers, be it the young or the old,
                        are sure to enjoy this tour itinerary.</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="py-5 bg-gray">
    <div class="container">
        <div class="row ">
        @if ( count($itineraries) > 0 )
        @foreach ($itineraries as $item)

            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4" data-aos="fade-up">
                <div class="package-one h-100 card border-0 ">
                    <a href="{{url('itineraries/'.str_slug($item->title))}}" >
                    <div class="aslideImages"
                        style="background-image: url('{{ URL::to('/') }}/images/itineraries/covers/{{$item->cover}}');">
                    </div>
                    </a>
                    <div class="package-content">
                    <h3><a href="{{url('itineraries/'.str_slug($item->title))}}" >{{$item->title}}</a></h3>
                        <p class="two-lines">{{strip_tags($item->description)}}</p>
                        <ul class="ct-action">
                            <li>  <a href="{{url('itineraries/'.str_slug($item->title))}}" >View More</a></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Item End -->
            @endforeach
            @endif


        </div>
    </div>
</section>
@include('inc.defaultfooter')
@endsection
