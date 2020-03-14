@extends('layouts.app')
@inject('pusModel', 'App\PictureYourself')
@inject('TripPlans', 'App\TripPlans')
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">List of Day Tours</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>
        <!-- Content Row -->
        <div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
                 <div class="alert alert-success " role="alert">
                     {{ session('success') }}
                 </div>
             @endif
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-12 m-0 mb-4">
                @if( count($daytours) > 0 )
                <table style="color: #5a5c69; !important" class="table table-image table-light table-bordered">
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($daytours as $daytour)  
                      <?php  $picture_youself = $pusModel::where('trip_id' , $daytour->id)->get(['title', 'image']); 
                             $trip_plans = $TripPlans::where('trip_id' ,$daytour->id )->get('id');
                      ?>
                      <tr>
                          <td class="w-100">
                              <div class="row">
                                <div class="col-md-12" >
                                    <h5><b> {{$daytour->title}}</b></h5>
                                </div>
                                <div class="col-md-8" style=" height: auto;min-height: 200px;">
                                    <div  class=" pt-1 px-2-md px-4-sm rounded"  style="background : url({{ URL::to('/') }}/images/daytours/covers/{{$daytour->cover}});
                                   min-height: 250px; background-size: cover; background-position-y: center;"> 
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-success btn-sm mr-1 mt-2"><b>Live Preview</b></a>
                                        <a href="#" class="btn btn-danger btn-sm mr-1 mt-2"><b>Remove</b></a>
                                        @if( count($trip_plans) > 0 )
                                        <a href="{{ URL::to('/')}}/tripplan/{{$daytour->id}}" class="btn btn-info btn-sm mt-2"><b>View Trip Plan</b></a>  
                                        @else        
                                         <a href="{{ URL::to('/')}}/tripplan/create/{{$daytour->id}}" class="btn btn-info btn-sm mt-2"><b>Create Trip Plan</b></a>
                                        @endif
                                    </div>
                                    <h6 class="m-0 pt-3 pb-1 "><b>Main Description</b></h6>  
                                    {!!$daytour->description!!}

                                    <h6 class="m-0 pb-1 "><b>Activities</b></h6>
                                    <div class="row mt-2">
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_one_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$daytour->activity_one_title}}</h6>
                                        </div>       
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_two_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$daytour->activity_two_title}}</h6>
                                        </div>       
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/daytours/activities/{{$daytour->activity_three_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$daytour->activity_three_title}}</h6>
                                        </div>       
                                    </div>  
                                
                                </div>
                                <div class="col-md-4 pt-1 " >
                                    <ul class="list-group bg-light">
                                      <li class="list-group-item">
                                          <h6 class="m-0  "><b>Is this Tour for me?</b></h6>
                                          <h6 class="m-0">{{$daytour->isthisforme}}</h6>
                                      </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>Can it tailor made?</b></h6>
                                          <h6 class="m-0">{{$daytour->canittailormade}}</h6>
                                     </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>When to Go</b></h6>
                                          <h6 class="m-0">{{$daytour->whentogo}}</h6>
                                      </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>Transfers</b></h6>
                                          <h6 class="m-0">{{$daytour->transfers}}</h6>
                                      </li>
                                    </ul>

                                    <h6 class=" pt-3"><b>Picture YourSelf</b></h6>
                                    <ul class="list-group bg-light">
                                    @foreach ($picture_youself as $p)  
                                    <li class="list-group-item">
                                        <div class="d-flex flex-row pt-2">
                                        {{-- <div  class="rounded" style="width : 30px; height : 30px; background: #043242; padding : 2.5px"> 
                                            <img src="{{ URL::to('/') }}/images/picture_yourself/{{$p->image}}" style="width : 25px; height :25px;">
                                        </div> --}}
                                            <h6 class=" ">{{$p->title}}</h6>
                                        </div>
                                    </li>
                                     @endforeach 
                                    </ul>
                                </div>
                              </div>        
                            </td>
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                  {{$daytours->links()}} 
                @else
                    <p>No daytours Found</p>
                @endif
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>


@endsection
