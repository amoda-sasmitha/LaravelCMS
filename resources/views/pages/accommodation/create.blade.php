@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Accommodation Form</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>


        <!-- Content Row -->

        <div id="form_errors">
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Sorry!</strong> There were problems with your form data.<br><br>
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

                <!-- Project Card Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Add Accommodation</h6>
                    </div>
                    <div class="card-body">
                        <form id="accommodation_form" method="post" action="{{url('accommodation')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-sm-8 pb-3">
                                    <h3 class="small font-weight-bold">Accommodation Title </h3>
                                    <input class="form-control" id="title" name="title"
                                        placeholder="Ex : Santani Wellness Resort & Spa  " type="text">
                                        
                                </div>
                                <div class="col-sm-4 pb-3">
                                    <h3 class="small font-weight-bold">Accommodation Category </h3>
                                    <select class="form-control" id="exampleFormControlSelect1" name="category">
                                        <option selected value="Ayuruveda">Ayuruveda</option>
                                        <option value="Boutique">Boutique</option>
                                        <option value="Beach">Beach</option>
                                        <option value="Bungalows and Manisons">Bungalows and Manisons</option>
                                        <option value="Camping">Camping</option>
                                        <option value="Colombo Hotels">Colombo Hotels</option>
                                        <option value="Cultural">Cultural</option>
                                        <option value="Boutique">Boutique</option>
                                        <option value="Golf Resort">Golf Resort</option>
                                        <option value="Hill Country">Hill Country</option>
                                    </select>
                                </div>
                                <div class="col-md-12 pb-3">
                                    <h3 class="small font-weight-bold">Detailed Description </h3>
                                    <textarea style="color : black; !impotant" id="classic-ckeditor5" name="description"
                                        rows="15">Tell something about accommodation</textarea>
                                    <small class="text-muted">Add any notes here.</small>
                                </div>
                                <div class="col-md-12 pb-3">
                                    <h3 class="small font-weight-bold">Upload Images </h3>
                                    <input type="file" name="images[]" id="images" class="inputfile" multiple>
                                    <label class="btn btn-primary" for="images">Upload Images</label>
                                    <input type="file" name="cover" id="cover" class="inputfile">
                                    <label class="btn btn-primary" for="cover">Upload Cover</label>
                                    <div class="mt-2 pb-2 dvPreview "></div>
                                    <div class="mt-2 pb-2 dvcoverPreview "></div>
                                </div>

                            </div>
                            <div class="d-flex flex-row-reverse">
                                <button class="btn btn-danger ml-2" type="button">Clear</button>
                                <button class="btn btn-success ml-2" type="submit">Submit Accommodation</button>
                            </div>
                        </form>
                    </div>

                </div>


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

        jQuery(document).on('change', '#images.inputfile', function () {
            imagesPreview(this, 'div.dvPreview', " Galary Images Added");
        });
        jQuery(document).on('change', '#cover.inputfile', function () {
            imagesPreview(this, 'div.dvcoverPreview', " Cover Image Added");
        });
    });

    $('#accommodation_form').on('submit', function() {
        var count = 0;
        var errors = [];
        var form = $("#form_errors");

        if(!$.trim( $('#title').val() ) ){
            errors.push("Title is required")
            count++ 
        }

        if(!$.trim( $('#classic-ckeditor5').val() ) ){
            errors.push("Description is required")
            count++ 
        }

        if( $('#images').get(0).files.length == 0 ){
            errors.push("At least one image required")
            count++ 
        } 

        if( $('#cover').get(0).files.length == 0 ){
            errors.push("Cover image required")
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
