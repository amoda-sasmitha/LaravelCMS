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
                <h1 class="text-dark px-4 w-100 mx-0 mt-2 pt-3 ">Discover Sri Lanka</h1>
                <h4 class="sub-title px-4  w-75 text-dark pt-1">Adventure lovers, be it the young or the old,</h4>
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
                <h3 class=" text-dark  py-1">Overview</h3>
                <p>
                    Sri Lanka is one of the most exotic getaways in the world. Surrounded by the azure Indian Ocean,
                    this island paradise has contrasting landscapes, stretches of golden sandy beaches and a wealth
                    of wildlife and culture to discover. It is home to 8 UNESCO World Heritage Sites, 15 national
                    parks showcasing spectacular wildlife and nearly 500,000 acres of lush tea estates.</p>
                    
                    <p class="moretext">The island
                    is blessed with waterfalls, rivers, jungles, rain forests and fertile lands for an abundance of
                    rice fields. Sri Lanka is a year-round destination. The best time to experience the south-west
                    coast, where most beach resort are found is from November to April. The ancient city areas as
                    well as the eastern coastal regions are usually visited from April to September, whilst the
                    central highlands are pleasant and cool from January to April.
                </p>
                 </div>
        </div>
    </div>
</section>
<section class="py-4 bg-gray">
    <div class="container">
        <div class="row masonry-item">
        @if ( count($provinces) > 0 )
            @foreach ($provinces as $province)
            <!-- item -->
            <a href="{{url('discover-sri-lanka/'.str_slug($province->name))}}" >
            <div class="col-lg-4 col-md-6 col-sm-12 masonry mt-3 ">
                <div class="shadow">
                    <div class="aslideImages" style="background-image: url('{{ URL::to('/') }}/images/provinces/{{$province->cover}}');">
                    </div>
                    <div class="package-content bg-white p-3">
                        <h3><a href="#">{{$province->name}} </a></h3>
                    </div>
                </div>
            </div>
            </a>
            <!-- Item End -->
            @endforeach
            @endif
        </div>
    </div>
</section>
@include('inc.defaultfooter')
@endsection