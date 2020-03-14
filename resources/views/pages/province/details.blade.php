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
<section class="my-4 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                {!!$details->description!!}
                 </div>
        </div>
    </div>
</section>
{{-- <section class="py-4 bg-gray">
    <div class="container">
        <div class="row masonry-item">
        @if ( count($provinces) > 0 )
            @foreach ($provinces as $province)
            <!-- item -->
            <div class="col-lg-4 col-md-6 col-sm-12 masonry mt-3 ">
                <div class="shadow">
                    <div class="aslideImages" style="background-image: url('{{ URL::to('/') }}/images/provinces/{{$province->cover}}');">
                    </div>
                    <div class="package-content bg-white p-3">
                        <h3><a href="#">{{$province->name}} </a></h3>
                    </div>
                </div>
            </div>
            <!-- Item End -->
            @endforeach
            @endif
        </div>
    </div>
</section> --}}
@include('inc.defaultfooter')
@endsection