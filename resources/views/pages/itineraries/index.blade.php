@extends('layouts.app')
@inject('placesModel', 'App\Places')
@inject('accommodationModel', 'App\Accommodation')
@inject('pusModel', 'App\PictureYourself')
@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid mx-1">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">List of Itineraries</h1>
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
            <div class="col-12 mb-4">
                @if( count($itineraries) > 0 )
                <table style="color: #5a5c69; !important" class="table table-image table-light table-bordered">
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($itineraries as $itinerary)  
                      <?php  $places = $placesModel::where('trip_id' , $itinerary->id)->pluck('accommodation_id');
                             $accommodations = $accommodationModel::whereIn('id' , $places )->get(['id', 'title' , 'cover']);  
                             $picture_youself = $pusModel::where('trip_id' , $itinerary->id)->get(['title', 'image']);
                             ?>
                      <tr>
                          <td class="w-100">
                              <div class="row">
                                <div class="col-md-12" >
                                    <h5><b> {{$itinerary->title}}</b></h5>
                                </div>
                                <div class="col-md-8" style=" height: auto;min-height: 200px;">
                                    <div  class=" pt-1 px-2-md px-4-sm rounded"  style="background : url({{ URL::to('/') }}/images/itineraries/covers/{{$itinerary->cover}});
                                   min-height: 250px; background-size: cover; background-position-y: center;"> 
                                    </div>
                                <div>
                                    <a href="{{url('itineraries/'.str_slug($itinerary->title))}}" class="btn btn-success btn-sm mr-1 mt-2"><b>Live Preview</b></a>
                                    <button type="button" data-id="{{$itinerary->id}}"  class="btn btn-danger btn-sm mr-1 mt-2 delete"><b>Remove</b></button>
                                    <a href="{{ URL::to('/')}}/tripplan/create/{{$itinerary->id}}" class="btn btn-info btn-sm  mt-2"><b>Create Trip Plan</b></a>
                                </div>
                                </div>
                                <div class="col-md-4 pt-1 " >
                                    <ul class="list-group">
                                      <li class="list-group-item">
                                          <h6 class="m-0  "><b>Trip Length</b></h6>
                                          <h6 class="m-0">{{$itinerary->length}}</h6>
                                      </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>Price</b></h6>
                                          <h6 class="m-0">{{$itinerary->price}}</h6>
                                     </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>When to Go</b></h6>
                                          <h6 class="m-0">{{$itinerary->whentogo}}</h6>
                                      </li>
                                      <li class="list-group-item">
                                          <h6 class="m-0 pt-1 "><b>Transfers</b></h6>
                                          <h6 class="m-0">{{$itinerary->transfers}}</h6>
                                      </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 py-2 mt-2">   
                                    <h6 class="m-0 pb-1 "><b>Main Description</b></h6>  
                                    {!!$itinerary->description!!}
                                </div>  
                                <div class="col-md-8">   
                                    <h6 class="m-0 pb-1 "><b>Activities</b></h6>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_one_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$itinerary->activity_one_title}}</h6>
                                        </div>       
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_two_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$itinerary->activity_two_title}}</h6>
                                        </div>       
                                        <div class="col-md-4 col-sm-12" >
                                            <div  class=" pt-1 px-2 rounded"  style="background : url({{ URL::to('/') }}/images/itineraries/activities/{{$itinerary->activity_three_image}});
                                                min-height: 250px; background-size: cover; background-position-y: center;"> 
                                            </div>
                                            <h6 class="text-center font-weight-bold pt-2">{{$itinerary->activity_three_title}}</h6>
                                        </div>       
                                    </div>  
                                </div>
                                <div class="col-md-4 py-2 mt-2">    
                                    <h6 class="m-0 pb-2"><b>Picture YourSelf</b></h6>
                                    @foreach ($picture_youself as $p)  
                                    <div class="d-flex flex-row pt-2">
                                    <div  class="rounded bg-success" style="width : 30px; height : 30px;"> 
                                        <img src="{{ URL::to('/') }}/images/picture_yourself/{{$p->image}}" style="width : 30px; height : 30px;">
                                    </div>
                                        <h6 class="pl-2 ">{{$p->title}}</h6>
                                    </div>
                                     @endforeach 
                                </div>
                                

                              
                              </div>        
                            </td>
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                  {{$itineraries->links()}} 
                @else
                    <p>No Itineraries Found</p>
                @endif
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
 {{-- Delete modal --}}
 <div id="applicantDeleteModal" class="modal modal-danger fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width:55%;">
        <div class="modal-content">
             <form action="{{url('itinerary')}}" method="POST" class="remove-record-model">
            @method('delete')
            @csrf

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
               
            </div>
            <div class="modal-body">
                <h6>Are you sure you want delete this record ?</h6>
                <input type="hidden" name="id" id="app_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger waves-effect remove-data-from-delete-form">Delete</button>
            </div>

             </form>
        </div>
    </div>
</div>
 {{-- Delete modal --}}
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


<script>
    $(document).on('click','.delete',function(){
        var userID=$(this).attr('data-id');
        $('#app_id').val(userID); 
        $('#applicantDeleteModal').modal('show'); 
    });
    </script>
@endsection
