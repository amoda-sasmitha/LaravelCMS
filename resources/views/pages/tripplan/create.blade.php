@extends('layouts.app')

@section('content')
<style>
input[type=checkbox] {
    display: none !important;
}
.form-control {
    color : black !important;
}
 </style>
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Trip Plan Form</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>


        <!-- Content Row -->

        <div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>Sorry!</strong> There were problems with your form data. <?=count($errors)?><br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @if(session('success'))
            <div class="alert alert-success " role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                {{ session('success') }}
            </div>
            @endif
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-12 mb-4">
                <form method="post" action="{{url('tripplan')}}" enctype="multipart/form-data">
                    @csrf
                    <!-- Project Card Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header pt-3 pb-1">
                            <h6 class="m-0 font-weight-bold text-primary">Add Trip Plan</h6>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-7 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Tour Title </h3>
                                    <input class="form-control"  name="tour_title" value="{{$title}}" readonly
                                    type="text">
                                </div>
                                <div class="col-md-3 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Tour Type </h3>
                                    <input class="form-control"  name="type" value="{{$type}}" readonly type="text">
                                    <input  name="trip_id" value="{{$id}}"  type="hidden" >
                                </div>
                                <div class="col-md-2 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Num of Days </h3>
                                    @if( $type == 'daytour' )
                                    <input class="form-control"  name="day_count" value="1" readonly type="text" readonly>
                                    @else
                                    <input class="form-control"  name="day_count" placeholder="Ex : 14"  type="text" >     
                                    @endif
                                </div>
                                <div class="col-md-8 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Trip Plan Title </h3>
                                    <input class="form-control"  name="title" 
                                        placeholder="Ex : 14 Days Trip" type="text">
                                </div>
                            </div>

                            {{-- <div class="d-flex flex-row-reverse">
                                <button class="btn btn-danger ml-2" type="button">Clear</button>
                                <button class="btn btn-success ml-2" type="submit">Submit Accommodation</button>
                            </div> --}}
               
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Lets Create Trip Plan
                        <span style="cursor: pointer;"  class="addmore badge badge-success">Add More</span></h6>
                    </div>
                    <div class="card-body">
                        <table class="w-100 table table-striped">
                            <tbody class="wrapper w-100 table-bordered ">
                                <tr>
                                    <td class="w-100">
                                        <div class="row  justify-content-center  py-1">
                                            <div class="col-md-3  col-sm-4  px-2 pt-2">
                                                @if( $type == 'itinerary' )
                                                <h3 class="small font-weight-bold">Day Number</h3>
                                                <input class=" form-control form-control-sm"  name="day_no[]" placeholder="Ex : 1"  type="text" > 
                                                @endif
                                                <h3 class="pt-1 small font-weight-bold">Featured Image</h3>
                                                <label class="mb-0" for="pys_image_1">
                                                    <img  id="image_preview_1" src="{{ URL::to('/') }}/images/system/upload.png" 
                                                    class="btn  border-secondary p-0  img-fluid " data-val="1" >
                                                </label>
                                                <input data-val="1" type="file" id="pys_image_1" name="image[]"  class="inputfile">
                                            </div> 
                                            <div class=" col-md-8 col-sm-8  px-2 pt-2">
                                                <h3 class="small font-weight-bold">Destination Title</h3>
                                                <input class="w-75 form-control form-control-sm"  name="day_title[]" placeholder="Ex : Colombo"  type="text" > 
                                                <h3 class="pt-2 small font-weight-bold">Small Description</h3>
                                                <textarea  class="form-control" name="description[]"
                                                rows="5">Tell something about this</textarea>
                                                <button type="button"  class="mt-2 delete btn btn-danger btn-sm"><b>Remove</b></button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>   
                    </div>
                </div>
               

                <div class="card shadow mb-3">
                    
                    <div class="card-body px-4 py-2">
                        <div class="d-flex flex-row-reverse">
                            <button class="btn btn-danger ml-2" type="button">Clear</button>
                            <button class="btn btn-success ml-2" type="submit">Submit Itinerary</button>
                        </div>
                    </div>
                </div>
            </form>

    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Leopard Holidays 2020</span>
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
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.ckeditor.com/ckeditor5/12.4.0/classic/ckeditor.js"></script>
<script src="{{ asset('js/bootstrap-tagsinput.js') }}"></script>

<script>


  

    jQuery(function () {
        // Multiple images preview in browser
       
        
        $(document).ready(function() {
        var wrapper = $(".wrapper");
        var add_button = $(".addmore");
        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
                x++;
                var item = ( x <= 9 ) ? "0"+x : ""+ x;
            var data  =  ' <tr> <td class="w-100"><div class="row py-1  justify-content-center"><div class="col-md-3  col-sm-4  px-2 pt-2">';
                data +=  '@if( $type == "itinerary" )<h3 class="small font-weight-bold">Day Number</h3><input class=" form-control form-control-sm"  name="day_no[]" placeholder="Ex : 1"  type="text" > @endif';              
                data +=  '<h3 class="pt-1 small font-weight-bold">Featured Image</h3>';              
                data +=  '<label class="mb-0" for="pys_image_'+ x +'">';               
                data +=  '<img  id="image_preview_'+ x +'" src="{{ URL::to('/') }}/images/system/upload.png"  class="btn border border-secondary p-0  img-fluid " data-val="'+x+'" ></label>';                
                data +=  '<input data-val="'+x+'" type="file" id="pys_image_'+ x +'" name="image[]"  class="inputfile"></div>';                    
                data +=  ' <div class=" col-md-8 col-sm-8  px-2 pt-2">';
                data +=  '<h3 class="small font-weight-bold">Destination Title</h3><input class="w-75 form-control form-control-sm"  name="day_title[]" placeholder="Ex : Colombo"  type="text" >'; 
                data +=  '<h3 class="pt-2 small font-weight-bold">Small Description</h3><textarea  class="form-control" name="description[]" rows="5">Tell something about this</textarea>';                              
                data +=  '<button type="button"  class="mt-2 delete btn btn-danger btn-sm"><b>Remove</b></button></div></div></td></tr>';                                 
                $(wrapper).append(data); //add input box
          
        });

        $(wrapper).on("click", ".delete", function(e) {
            console.log($(this).parent('tr'));
            e.preventDefault();
            $(this).closest('tr').remove();
        })

        jQuery(document).on('change', '.inputfile', function () {
            var id = $(this).attr('data-val');
		    readURL(this,id);
        }); 

        function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#image_preview_'+id).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

        

        });


      
});
</script>
<style>
    .imagelist {
        width: 300px;
        height: auto;
    }

</style>


@endsection
