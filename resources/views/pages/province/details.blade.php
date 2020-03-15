@extends('layouts.defaultapp')
@inject('plan', 'App\PlanDetails')
@section('title','Discover Sri Lanka')
@section('content')
@include('inc.defaultnavbar')
  <!-- Banner-area -->
  <section class="discover-srilanka" style="background-image: url('{{ URL::to('/') }}/images/main/1.jpg');">
    <div class="container align-items-center ">
        <div class="row">
            <div class="col-lg-12">
            <h2 class="text-dark px-4 w-100 mx-0 mt-2 pt-3 ">{{$details->name}}</h2>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="mt-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {!!$details->description!!}
                 </div>
        </div>
    </div>
</section>
<section class="pb-4 bg-white">
    <div class="container">
        <div class="row">
        @if ( count($destinations) > 0 )
        <div class="col-sm-12">
            <h3 class="text-dark pb-2">Destinations</h3>
        </div>
            @foreach ($destinations as $destination)
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 ">
                <a href="{{url('destinations/'.str_slug($destination->title))}}">
                <div class="shadow h-100 card border-0">
                    <div class="aslideImages" style="background-image: url('{{ URL::to('/') }}/images/destinations/covers/{{$destination->cover}}');">
                    </div>
                    <div class="package-content bg-white p-3">
                    <h4><a href="{{url('destinations/'.str_slug($destination->title))}}">{{$destination->title}} </a> 
                        <span class="badge badge-success mx-2 px-2">{{$destination->district}} District</span>
                    </h4>
                    </div>
                </div>
                </a>
            </div>
            <!-- Item End -->
            @endforeach
            @endif
        </div>
    </div>
</section>
@include('inc.defaultfooter')
@endsection