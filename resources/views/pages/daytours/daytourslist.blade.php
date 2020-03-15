@extends('layouts.defaultapp')
@section('title','Explore Sri Lanka')
@section('content')
@include('inc.defaultnavbar')

 <!-- Banner-area -->
 <section class="same-section-spacing-image"
 style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url({{asset('images/main/Badulla.jpg')}});">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div>
                 <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">Explore Sri Lanka</h2>
                 <!-- <hr style="border-top: 2px solid white;" class="my-0 w-75 mx-4"/> -->
                 <h4 class="sub-title px-4 w-75 text-white pt-1">Enjoy A Day Tour In Sri Lanka</h4>
             </div>
         </div>
     </div>
 </div>
 </div>
</section>
<!-- End-banner-area -->
 <!-- about-area -->
 <section class="ws-section-spacing bg-white" style="padding-top: 50px; padding-bottom: 10px;">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="about-content">
                     <h2 style="text-align: center; text-align: left; font-size: 1.8rem; margin-bottom: 10px;">Make life easier with Leopard Holidays</h2>
                     <p style="text-align: left;">Welcome to the beautiful greenery island known as Sri Lanka! Let us welcome you with a salutation of “Ayubowan” which means “May you live long and healthy”.
                         Tours that take you from the commercial capital Colombo to the Up Country; to the sights and sounds of the crowded towns of the deep Down South; to the sacred cities located in the Cultural belt and to the Northern coastal areas where the rich cultural heritage of our island.
                         
                     </p>
                    
                     <p style="text-align: left;">Come and take a look at the variety of tours on offer and we at Leopard holidays will be happy to be of assistance!
                         
                     </p>
             
                 </div>
             </div>
             
         </div>
     </div>
 </section>
 <!-- End-about-area -->
<!-- Start-Package-Section -->
<section class="py-5 bg-gray">
 <div class="container">
     <div class="row">
        @if( count($daytours) > 0 )
        @foreach ($daytours as $daytour) 
         <!-- item -->
         <div class="col-lg-4 col-md-6 col-sm-12 mb-3" data-aos="fade-up">
             <div class="package-one h-100 card border-0">
                <a href="{{url('daytours/'.str_slug($daytour->title))}}">
                    <div class="aslideImages"
                        style="background-image: url({{ URL::to('/') }}/images/daytours/covers/{{$daytour->cover}});">
                    </div>
                </a>
                 <div class="package-content">
                 <h3><a href="{{url('daytours/'.str_slug($daytour->title))}}">{{$daytour->title}}</a></h3>
                     <p class="two-lines">{{strip_tags($daytour->description)}}</p>

                 </div>
             </div>
         </div>
         <!-- Item End -->
         @endforeach
        @else
            <p>No Daytours Found</p>
        @endif

     </div>
 </div>
</section>

@include('inc.defaultfooter')
@endsection
