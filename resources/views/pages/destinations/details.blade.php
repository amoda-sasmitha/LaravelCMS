@extends('layouts.defaultapp')
@section('title',$destination->title)
@section('content')
@include('inc.defaultnavbar')
<!-- Banner-area -->
<section class="same-section-spacing-image"
style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url('{{ URL::to('/') }}/images/destinations/covers/{{$destination->cover}}');">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div>
            <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">{{$destination->title}}</h2>
                <!-- <hr style="border-top: 2px solid white;" class="my-0 w-75 mx-4"/> -->
                <h4 class="sub-title px-4 w-75 text-white pt-1"></h4>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="py-4 bg-white">
<div class="container">

    <div class="row pb-3">
        <div class="col-md-12 py-2 mt-2">
            {!!$destination->description!!}
        </div>
        <div class="col-md-8">
        </div>
    </div>
</div>
<div class="container">
    <div class="row masonry-item">
        @if( count(json_decode($destination->images)) > 0 )
        @foreach (json_decode($destination->images) as $image) 
        <!-- item -->
        <div class="col-lg-4 col-md-6 col-sm-12 masonry">
            <div class="gallery-box">
                <img src="{{ URL::to('/') }}/images/destinations/{{$image}}" class="responsive-image" style="min-height: 200px;" alt="gallery">
                <div class="overlay">
                    <a href="{{ URL::to('/') }}/images/destinations/{{$image}}" data-lity><i class="fas fa-search-plus"></i></a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
</section>
<!-- End-Package-Section -->

@include('inc.defaultfooter')
@endsection
