@extends('layouts.defaultapp')
@inject('plan', 'App\PlanDetails')
@section('title',$itinerary->title)
@section('content')
@include('inc.defaultnavbar')
 <!-- Banner-area -->
 <section class="same-section-spacing-image"
 style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), 
 url('{{ URL::to('/') }}/images/itineraries/covers/{{$itinerary->cover}}');">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div>
             <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">{{$itinerary->title}}</h2>
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
         <div class="col-md-8 py-2 mt-2">
            {!!$itinerary->description!!}
             <h3 class="m-0 pb-2 text-dark title">At a glance</h3>
             <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_one_image}});
                         min-height: 220px; background-size: cover; background-position-y: center;">
                     </div>
                     <h6 class="text-center text-dark py-2">{{$itinerary->activity_one_title}}</h6>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_two_image}});
                         min-height: 220px; background-size: cover; background-position-y: center;">
                     </div>
                     <h6 class="text-center text-dark py-2">{{$itinerary->activity_two_title}}</h6>
                 </div>
                 <div class="col-lg-4 col-md-4 col-sm-12">
                     <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_three_image}});
                         min-height: 220px; background-size: cover; background-position-y: center;">
                     </div>
                     <h6 class="text-center text-dark py-2">{{$itinerary->activity_three_title}}</h6>
                 </div>
             </div>
         </div>
         <div class="col-md-4 pt-1 ">
             <ul class="list-group">
                 <li class="list-group-item">
                     <h6 class="m-0  text-dark"><b>Trip Length</b></h6>
                     <p class="mb-0 sub-title">{{$itinerary->length}}</p>
                 </li>
                 <li class="list-group-item">
                     <h6 class="m-0 pt-1 text-dark"><b>Price</b></h6>
                     <p class="mb-0 sub-title">{{$itinerary->price}}</p>
                 </li>
                 <li class="list-group-item">
                     <h6 class="m-0 pt-1 text-dark"><b>When to Go</b></h6>
                     <p class="mb-0 sub-title">{{$itinerary->whentogo}}</p>
                 </li>
                 <li class="list-group-item">
                     <h6 class="m-0 pt-1 text-dark"><b>Transfers</b></h6>
                     <p class="mb-0 sub-title">{{$itinerary->transfers}}</p>
                 </li>
                 <li class="list-group-item">
                     <h6 class="m-0 pt-1 text-dark"><b>Want to Join ?</b></h6>
                     <button class="mt-2 btn btn-success btn-sm px-4"><b>Book Now</b></button>
                 </li>
             </ul>
         </div>
         <div class="col-md-8">
         </div>
     </div>


 </div>
 @if ( count($places) > 0  )
</section>
<!-- End-Package-Section -->
<section class="pb-2 pt-2 bg-gray">
 <div class="container-fluid">
     <div class="row px-md-5 ">
         <div class="col-lg-12">
             <div class=" pt-3 pb-2">
                 <h2 style="font-size: 32px;" class="text-dark text-center pb-3">Places You Will Stay</h2>
             </div>
             <!-- ------------------------------------- -->
             <div class="destination-slide">
                 @foreach ( $places  as $accommodation )       
                 <!-- item -->
                 <div class="item">
                    <a href="{{url('accommodations/'.str_slug($accommodation->title))}}">
                     <div class="place-box">
                         <div class=" slideImages"
                         style="background-image: url('{{ URL::to('/') }}/images/accommodation/covers/{{$accommodation->cover}}');  ">
                         
                        </div>
                        <div class="desi-inner">
                            <h4>{{$accommodation->title}} </h4>
                        </div>
                    </div>
                    </a>
                </div>
                <!-- item end-->
                @endforeach
             </div>
             <!------------------------------------- -->
         </div>
     </div>
 </div>
</section>
@endif

@if( count($picture_yourself) > 0  )
<!--Picture Yourself Section -->
<section class="pb-4 pt-4 bg-dark">
 <div class="container-fluid">
     <div class="row px-md-5">
         <div class="col-lg-12">
             <div class=" pt-3 pb-2">
                 <h2 style="font-size: 32px;" class="text-white text-center pb-3">Things not to miss in this tour
                 </h2>
             </div>
             <div class="row">    
                @foreach ($picture_yourself as $item)
                <!-- item -->
                <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <div>
                        <div class="service-box-icon"> <img
                                src="{{ URL::to('/') }}/images/picture_yourself/{{$item->image}}"
                                style="width : 60px; height : 60px;"></div>
                        <p class="service-box-desc text-white pt-2">{{$item->title}}</p>

                    </div>
                </div>
                <!-- item end -->
                @endforeach       
             </div>
         </div>
     </div>
 </div>
</section>
@endif
<section class="pb-4 pt-4 bg-white">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <ul class="nav nav-tabs" id="myTab" role="tablist">
                 @foreach ($tour_data as $item)     
                 <li class="nav-item">
                 <a class="nav-link {{$loop->index == 0 ? "active" : "" }}" id="tab{{$item->id}}" data-toggle="tab" href="#h{{$item->id}}" role="tab"
                     aria-controls="h{{$item->id}}" aria-selected="{{$loop->index == 0 ? "true" : "false" }}">{{$item->title}}</a>
                </li>
                @endforeach
             </ul>
             <div class="tab-content" id="myTabContent">
                @foreach ($tour_data as $item)     
                <?php $details = $plan::where('trip_plan_id' , $item->id)->get();   ?>
                 <div class="tab-pane fade {{$loop->index == 0 ? "show active" : "" }}" id="h{{$item->id}}" role="tabpanel" aria-labelledby="tab{{$item->id}}">
                     <div class="row pt-4">
                         <table class="w-100 table">
                             <tbody class="wrapper w-100 ">
                                @foreach ($details as $detail)  
                                 <tr>
                                     <td class="w-100">
                                         <div class="row  justify-content-center  py-1">
                                             <div class="col-lg-2 col-md-3  col-sm-4 col-10 px-4 pt-2">
                                                 <img id="image_preview_1"
                                                     src="{{ URL::to('/') }}/images/tripplan/{{$detail->image}}"
                                                     class="btn  p-0   img-fluid "
                                                     style="max-height: inherit !important;">
                                             </div>
                                             <div class="col-lg-10 col-md-8 col-sm-8 col-12 px-4 pt-2">
                                                 <div class="d-flex flex-row">
                                                 <span class=" btn-md rounded border border-primary mt-sm-1 text-primary px-3 py-1">Day
                                                    {{$detail->day_no}}</span>
                                                 <h3 class="mt-2 ml-2">{{$detail->title}}</h3>
                                                 </div>
                                                <p class="pt-2 ">{{$detail->description}}</p>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                 @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
                 @endforeach
             </div>
         </div>
     </div>
 </div>
</section>
@include('inc.defaultfooter')
@endsection