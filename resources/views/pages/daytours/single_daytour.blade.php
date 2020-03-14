@extends('layouts.defaultapp')
@section('title',$daytour->title)
@section('content')
@include('inc.defaultnavbar')
 <!-- Banner-area -->
 <section class="same-section-spacing-image"
 style="background-image: linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.6) 70%), url('{{ URL::to('/') }}/images/daytours/covers/{{$daytour->cover}}');">
 <div class="container">
     <div class="row">
         <div class="col-lg-12">
             <div>
                 <h2 class="text-white px-4 w-100 mx-0 mt-2 pt-3 ">{{$daytour->title}}</h2>

             </div>
         </div>
     </div>
 </div>
 </div>
</section>
<!-- End-banner-area -->
<!-- Start-Package-Section -->
<section class="pt-4 bg-gray">
 <div class="container">

     <div class="row pb-3 row-eq-height">
         <div class="col-lg-3  col-md-3 col-sm-6 col-6 px-2 py-2 ">
             <div class="servicebox-one-a rounded border-0 shadow card h-100 bg-white rounded">
                 <div class="service-box-icon-a"><i class="fas fa-route"></i></div>
                 <h3 class="service-box-title-a">Is This Tour for Me?</h3>
             <p class="service-box-desc-a">{{$daytour->isthisforme}}</p>
             </div>
         </div>
         <!-- item -->
         <div class="col-lg-3  col-md-3 col-sm-6 col-6 px-2 py-2 ">
             <div class="servicebox-one-a rounded border-0 shadow card h-100 bg-white rounded">
                 <div class="service-box-icon-a"><i class="fab fa-avianex"></i></div>
                 <h3 class="service-box-title-a">Can It be Tailor Made</h3>
                 <p class="service-box-desc-a">{{$daytour->canittailormade}}</p>
             </div>
         </div>
         <!-- item -->
         <div class="col-lg-3  col-md-3 col-sm-6 col-6 px-2 py-2 ">
             <div class="servicebox-one-a rounded border-0 shadow card h-100 bg-white rounded">
                 <div class="service-box-icon-a"><i class="fas fa-bullhorn"></i></div>
                 <h3 class="service-box-title-a">When to Go</h3>
                 <p class="service-box-desc-a">{{$daytour->whentogo}}</p>
             </div>
         </div>
         <!-- item -->
         <div class="col-lg-3  col-md-3 col-sm-6 col-6 px-2 py-2 ">
             <div class="servicebox-one-a rounded border-0 shadow card h-100 bg-white rounded">
                 <div class="service-box-icon-a"><i class="fas fa-suitcase"></i></div>
                 <h3 class="service-box-title-a">Transfers</h3>
                 <p class="service-box-desc-a">{{$daytour->transfers}}</p>
             </div>
         </div>

     </div>
 </div>
</section>
<!-- End-Package-Section -->
<section class="py-4">
 <div class="container" >
     <div class="row" >
         <div class="col-md-12 py-2 ">
             <h3 class="m-0  text-dark title">Trip Description</h3>
         <p>{!!$daytour->description!!}</p>
         </div>

         <div class="col-12">
             <h3 class="m-0 pb-2 text-dark title">At a glance</h3>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-12">
             <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_one_image}});
                     min-height: 220px; background-size: cover; background-position-y: center;">
             </div>
            <h6 class="text-center text-dark py-2">{{$daytour->activity_one_title}}</h6>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-12">
             <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_two_image}});
                     min-height: 220px; background-size: cover; background-position-y: center;">
             </div>
             <h6 class="text-center text-dark py-2">{{$daytour->activity_two_title}}</h6>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-12">
             <div class=" pt-1 px-2 rounded" style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_three_image}});
                     min-height: 220px; background-size: cover; background-position-y: center;">
             </div>
             <h6 class="text-center text-dark py-2">{{$daytour->activity_three_title}}</h6>
         </div>
     </div>
 </div>
</section>
<!--Picture Yourself Section -->
@if( count($picture_yourself) > 0 )
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

@if ( count($tourplan) > 0 )
<section class="pb-4 pt-4 bg-white">
 <div class="container">
     <div class="row">
         <div class="col-md-12">
             <div class="tab-content" id="myTabContent">
                 <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                     <div class="row pt-4">
                         <table class="w-100 table">
                             <tbody class="wrapper w-100 ">
                                 @foreach ($tourplan as $planitem)
                                 <tr>
                                     <td class="w-100">
                                         <div class="row  justify-content-center  py-1">
                                             <div class="col-lg-2 col-md-3  col-sm-4 col-10  px-4 pt-2">
                                                 <img id="image_preview_1"
                                                     src="{{ URL::to('/') }}/images/tripplan/{{$planitem->image}}"
                                                     class="btn  p-0   img-fluid "
                                                     style="max-height: inherit !important;">
                                             </div>
                                             <div class="col-lg-10 col-md-8 col-sm-8 col-12 px-4 pt-2">
                                                 <div class="d-flex flex-row">
                                                    
                                                 <h3 class="mt-2 ml-2">{{$planitem->title}}</h3>
                                                 </div>
                                                 <p class="pt-2 ">{{$planitem->description}}</p>
                                             </div>
                                         </div>
                                     </td>
                                 </tr>
                                @endforeach
                             </tbody>
                         </table>
                     </div>
                 </div>
                 <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>

             </div>
         </div>
     </div>
 </div>
</section>
@endif
@include('inc.booking')
@include('inc.defaultfooter')
@endsection