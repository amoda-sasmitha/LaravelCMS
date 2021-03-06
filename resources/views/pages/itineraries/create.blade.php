@extends('layouts.app')

@section('content')
<style>
input[type=checkbox] {
    display: none !important;
}
 </style>
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Itinerary Form</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>


        <!-- Content Row -->

        <div id="form_errors">
            
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were problems with your form data. <br><br>
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
                <form id="itinerary_form" method="post" action="{{url('itinerary')}}" enctype="multipart/form-data">
                    @csrf
                    <!-- Project Card Example -->
                    <div class="card shadow mb-3">
                        <div class="card-header pt-3 pb-1">
                            <h6 class="m-0 font-weight-bold text-primary">Add Itinerary</h6>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-8 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Itinerary Title </h3>
                                    <input class="form-control"  name="title" id="title"
                                        placeholder="Ex : Adventure Tour in Sri Lanka " type="text">
                                </div>
                                <div class="col-md-4 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Trip Length </h3>
                                    <input class="form-control"  name="length" id="length"
                                        placeholder="Ex : 14 days" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Trip Price </h3>
                                    <input class="form-control"  name="price" id="price"
                                        placeholder="Ex : Contact us for details" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">When to Go </h3>
                                    <input class="form-control"  name="whentogo" id="whentogo"
                                        placeholder="Ex : Any time of the year" type="text">
                                </div>
                                <div class="col-md-4 col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Transfers </h3>
                                    <input class="form-control"  name="transfers" id="transfers"
                                        placeholder="Ex : Airport – Hotel – Tour attractions – Airport" type="text">
                                </div>
                                <div class="col-md-12 pb-3">
                                    <h3 class="small font-weight-bold">Detailed Description </h3>
                                    <textarea style="color : black; !impotant" id="classic-ckeditor5" name="description"
                                        rows="15">Tell something about the itinerary</textarea>
                                </div>
                            </div>

                           
                                <div class="col-md-12 pb-3">
                                    <h3 class="small font-weight-bold">Upload Images </h3>
                                    <input type="file" name="cover" id="cover" class="inputfile">
                                    <label class="btn btn-primary" for="cover">Upload Cover</label>
                                    <div class="mt-2 pb-2 dvcoverPreview "></div>
                                </div>
                            {{-- <div class="d-flex flex-row-reverse">
                                <button class="btn btn-danger ml-2" type="button">Clear</button>
                                <button class="btn btn-success ml-2" type="submit">Submit Accommodation</button>
                            </div> --}}
               
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">these tags helps users to search and filter itineraries</h6>                     
                    </div>
                    <div class="card-body px-4 pt-2">
                        <div class="row">
                            <div class="col-sm-6 px-2 py-2" >
                                <h3 class="small font-weight-bold">Guest Type </h3>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">An Individual</button>
                                    <input type="checkbox" class="hidden" name="type[]" value="An Individual"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">A Family</button>
                                    <input type="checkbox" class="hidden" name="type[]" value="A Family"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">A Couple</button>
                                    <input type="checkbox" class="hidden" name="type[]" value="A Couple"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">A Group</button>
                                    <input type="checkbox" class="hidden" name="type[]" value="A Group"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">A Company</button>
                                    <input type="checkbox" class="hidden" name="type[]" value="A Company"/>
                                </span>
                            </div>
                            <div class="col-sm-6 px-2 py-2" >
                                <h3 class="small font-weight-bold">Looking For </h3>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Adventure</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Adventure"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Cultural Tour</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Cultural Tour"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Family</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Family"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Heli Tours</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Heli Tours"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Luxury Tours</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Luxury Tours"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Honeymoon Tour</button>
                                    <input type="checkbox" class="hidden" name="looking_for[]" value="Honeymoon Tour"/>
                                </span>
                            </div>
                            <div class="col-sm-12 px-2 py-2" >
                                <h3 class="small font-weight-bold">Select Places </h3>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Ampara</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Ampara"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Anuradhapura</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Anuradhapura"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Badulla</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Badulla"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Batticaloa</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Batticaloa"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Colombo</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Colombo"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Galle</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Galle"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Gampaha</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Gampaha"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Hambantota</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Hambantota"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Jaffna</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Jaffna"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Kalutara</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Kalutara"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Kandy</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Kandy"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Kegalle</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Kegalle"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Kilinochchi</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Kilinochchi"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Kurunegala</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Kurunegala"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Mannar</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Mannar"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Matara</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Matara"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Monaragala</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Monaragala"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Mullaitivu</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Mullaitivu"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Nuwara Eliya</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Nuwara Eliya"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Polonnaruwa</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Polonnaruwa"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Puttalam</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Puttalam"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Ratnapura</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Ratnapura"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Trincomalee</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Trincomalee"/>
                                </span>
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">Vavuniya</button>
                                    <input type="checkbox" class="hidden" name="places[]" value="Vavuniya"/>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Activities</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- Activity one  --}}
                            <div class="col-md-4 col-sm-4 pb-3">
                                <h3 class="small font-weight-bold">Activity One </h3>
                                <label style="pointer:cursor !important" class="mb-0" for="activity_one_image">
                                    <img id="activity_one_image_preview"  style="pointer:cursor; !important" role="button" src="{{ URL::to('/') }}/images/system/upload.png" class="btn rounded img-fluid img-thumbnail" alt="...">
                                </label>
                                <input type="file" name="activity_one_image" id="activity_one_image" class="inputfile">
                                <input class="form-control"  name="activity_one_text" id="activity_one_text"
                                    placeholder="Activity One Title" type="text">
                            </div>
                            {{-- Activity two  --}}
                            <div class="col-md-4 col-sm-4 pb-3">
                                <h3 class="small font-weight-bold">Activity Two </h3>
                                <label style="pointer:cursor !important" class="mb-0" for="activity_two_image">
                                    <img id="activity_two_image_preview"  style="pointer:cursor; !important" role="button" src="{{ URL::to('/') }}/images/system/upload.png" class="btn rounded img-fluid img-thumbnail" alt="...">
                                </label>
                                <input type="file" name="activity_two_image" id="activity_two_image" class="inputfile">
                                <input class="form-control"  name="activity_two_text" id="activity_two_text"
                                    placeholder="Activity Two Title" type="text">
                            </div>
                            {{-- Activity three  --}}
                            <div class="col-md-4 col-sm-4 pb-3">
                                <h3 class="small font-weight-bold">Activity Three </h3>
                                <label style="pointer:cursor !important" class="mb-0" for="activity_three_image">
                                    <img id="activity_three_image_preview"  style="pointer:cursor; !important" role="button" src="{{ URL::to('/') }}/images/system/upload.png" class="btn rounded img-fluid img-thumbnail" alt="...">
                                </label>
                                <input type="file" name="activity_three_image" id="activity_three_image" class="inputfile">
                                <input class="form-control"  name="activity_three_text" id="activity_three_text"
                                    placeholder="Activity Three Title" type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Picture Your Self Items
                        <span style="cursor: pointer;"  class="addmore badge badge-success">Add More</span></h6>
                    </div>
                    <div class="card-body">
                        <div class="row wrapper">
                            <div class="col-md-3 col-sm-4  px-2 pt-2">
                                <label class="mb-0" for="pys_image_1">
                                    <img  id="image_preview_1" src="{{ URL::to('/') }}/images/system/upload.png" 
                                    class="btn img-fluid" data-val="1" >
                                </label>
                                <input data-val="1" type="file" id="pys_image_1" name="picture_yourself_image[]"  class="inputfile">
                                <textarea style="border: none;" class="form-control" name="picture_yourself_text[]"
                                rows="2"></textarea>
                                <button type="button"  class="delete btn btn-danger btn-sm btn-block"><b>Remove</b></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-3">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Select the places you will stay</h6>                     
                    </div>
                    <div class="card-body px-4 pt-2">
                        <div class="row">
                            <div class="col-sm-12 px-2 py-2" >
                                <h3 class="small font-weight-bold">Input Accommodations Here </h3>
                                {{-- <input type="text" id="prefetch" class="form-control "  data-role="tagsinput" > --}}
                                
                                @foreach ($accommodations as $accommodation)  
                                <span class="button-checkbox">
                                    <button type="button" class="btn  btn-outline-primary m-1" data-color="primary">{{$accommodation->title}}</button>
                                    <input type="checkbox" class="hidden" name="accommodations[]" value="{{$accommodation->id}}"/>
                                </span>
                                @endforeach  
                            </div>
                        </div>
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


    ClassicEditor
        .create(document.querySelector('#classic-ckeditor5'), {
            minHeight: '300px'
        })
        .catch(error => {
            console.error(error);
        });

    jQuery(function () {
        // Multiple images preview in browser
        var imagesPreview = function (input, placeToInsertImagePreview, type) {

            if (input.files) {
                var filesAmount = input.files.length;
                $(placeToInsertImagePreview).empty();

                for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();

                    reader.onload = function (event) {

                        $($.parseHTML('<img>'))
                            .addClass('img-fluid img-thumbnail imagelist mx-1 my-2')
                            .attr('src', event.target.result)
                            .appendTo(placeToInsertImagePreview);
                    }

                    reader.readAsDataURL(input.files[i]);
                }
                if (filesAmount > 0) {

                    $(placeToInsertImagePreview).append('<div class="card-header">' + filesAmount + type +
                        '</div>');
                }



            }

        };

        function readURL(input , output) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $(output).attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

       
        jQuery(document).on('change', '#cover.inputfile', function () {
            imagesPreview(this, 'div.dvcoverPreview', " Cover Image Added");
        });
        jQuery(document).on('change', '#activity_one_image.inputfile', function () {
            readURL(this , '#activity_one_image_preview' );
        });
        jQuery(document).on('change', '#activity_two_image.inputfile', function () {
            readURL(this , '#activity_two_image_preview' );
        });
        jQuery(document).on('change', '#activity_three_image.inputfile', function () {
            readURL(this , '#activity_three_image_preview' );
        });  



        $('.button-checkbox').each(function () {

// Settings
var $widget = $(this),
    $button = $widget.find('button'),
    $checkbox = $widget.find('input:checkbox'),
    color = $button.data('color'),
    settings = {
        on: {
            icon: 'glyphicon glyphicon-check'
        },
        off: {
            icon: 'glyphicon glyphicon-unchecked'
        }
    };

// Event Handlers
$button.on('click', function () {
    $checkbox.prop('checked', !$checkbox.is(':checked'));
    $checkbox.triggerHandler('change');
    updateDisplay();
});
$checkbox.on('change', function () {
    updateDisplay();
});

// Actions
function updateDisplay() {
    var isChecked = $checkbox.is(':checked');

    // Set the button's state
    $button.data('state', (isChecked) ? "on" : "off");

    // Set the button's icon
    $button.find('.state-icon')
        .removeClass()
        .addClass('state-icon ' + settings[$button.data('state')].icon);

    // Update the button's color
    if (isChecked) {
        $button
            .removeClass('btn-default')
            .addClass('btn-' + color + ' active');
    }
    else {
        $button
            .removeClass('btn-' + color + ' active')
            .addClass('btn-default');
    }
}

// Initialization
function init() {

    updateDisplay();

    // Inject the icon if applicable
    if ($button.find('.state-icon').length == 0) {
        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
    }
}
init();
    });

        $(document).ready(function() {
        var wrapper = $(".wrapper");
        var add_button = $(".addmore");
        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
                x++;
                var item = ( x <= 9 ) ? "0"+x : ""+ x;
            var data  =  '<div class="col-md-3 col-sm-4  px-2 pt-2 ">';
                data +=  '<label class="mb-0" for="pys_image_'+ x +'">';               
                data +=  '<img  id="image_preview_'+ x +'" src="{{ URL::to('/') }}/images/system/upload.png"  class=" btn img-fluid" data-val="'+x+'" ></label>';                
                data +=  '<input data-val="'+x+'" type="file" id="pys_image_'+ x +'" name="picture_yourself_image[]"  class="inputfile">';                    
                data +=  '<textarea style="border: none;" class="form-control" name="picture_yourself_text[]" rows="2"></textarea>';                   
                data +=  '<button type="button" class="delete btn btn-danger btn-sm btn-block"><b>Remove</b></button></div>';                
        
                $(wrapper).append(data); //add input box
          
        });

        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
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


$('#itinerary_form').on('submit', function() {
        var count = 0;
        var errors = [];
        var form = $("#form_errors");

        if(!$.trim( $('#title').val() ) ){
            errors.push("Title is required")
            count++ 
        }

        if(!$.trim( $('#length').val() ) ){
            errors.push("Trip length is required")
            count++ 
        }

        if(!$.trim( $('#price').val() ) ){
            errors.push("Trip price is required")
            count++ 
        }

        if(!$.trim( $('#whentogo').val() ) ){
            errors.push("When to go is required")
            count++ 
        }

        if(!$.trim( $('#transfers').val() ) ){
            errors.push("Transfers is required")
            count++ 
        }

        if(!$.trim( $('#classic-ckeditor5').val() ) ){
            errors.push("Description is required")
            count++ 
        }

        if( $('#cover').get(0).files.length == 0 ){
            errors.push("Cover image required")
            count++ 
        } 

        var type = $("input[name='type[]']").serializeArray();
        if( type.length == 0  ){
            errors.push("At least one type required")
            count++ 
        } 

        var looking_for = $("input[name='looking_for[]']").serializeArray();
        if( looking_for.length == 0  ){
            errors.push("At least one looking for tag is required")
            count++ 
        } 

        var places = $("input[name='places[]']").serializeArray();
        if( places.length == 0  ){
            errors.push("At least one place tag is required")
            count++ 
        } 
        var accommodations = $("input[name='accommodations[]']").serializeArray();
        if( accommodations.length == 0  ){
            errors.push("At least one accommodations tag is required")
            count++ 
        } 

        if( $('#activity_one_image').get(0).files.length == 0 ){
            errors.push("Activity one image is required")
            count++ 
        } 

        if( $('#activity_two_image').get(0).files.length == 0 ){
            errors.push("Activity two image is required")
            count++ 
        } 

        if( $('#activity_three_image').get(0).files.length == 0 ){
            errors.push("Activity three image is required")
            count++ 
        } 

        if(!$.trim( $('#activity_one_text').val() ) ){
            errors.push("Activity one text is required")
            count++ 
        }
       
        if(!$.trim( $('#activity_two_text').val() ) ){
            errors.push("Activity two text is required")
            count++ 
        }
       
        if(!$.trim( $('#activity_three_text').val() ) ){
            errors.push("Activity three text is required")
            count++ 
        }
       

        //----
        form.empty();
        form.removeClass('alert alert-danger');
        
        if(count > 0 ){
            form.addClass('alert alert-danger');
            var list = form.append('<ul></ul>').find('ul');
            errors.forEach(error => {
                list.append(`<li><b>${error}</b></li>`);
            });
           
           return false; 
        }else{
           return true;
        }
       
});
</script>
<style>
    .imagelist {
        width: 300px;
        height: auto;
    }

</style>


@endsection
