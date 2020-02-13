@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">Destination Form</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
        </div>


        <!-- Content Row -->

        <div>
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
                        <h6 class="m-0 font-weight-bold text-primary">Add Destination</h6>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{url('destinations')}}" enctype="multipart/form-data">
                        @csrf
                            <div class="row">
                                <div class="col-sm-12 pb-3">
                                    <h3 class="small font-weight-bold">Destination Title </h3>
                                    <input class="form-control" id="exampleAccount" name="title"
                                        placeholder="Ex : Sigiriya " type="text">
                                </div>
                                <div class="col-sm-6 pb-3">
                                    <h3 class="small font-weight-bold">Destination Province </h3>
                                    <select class="form-control" id="province" name="province">
                                        <option selected value="1">Western Province</option>
                                        <option value="2">Southern Province</option>
                                        <option value="3">Central Province</option>
                                        <option value="4">Eastern Province</option>
                                        <option value="5">Northern Province</option>
                                        <option value="6">North Western Province</option>
                                        <option value="7">North Central Province</option>
                                        <option value="8">Uva Province</option>
                                        <option value="9">Sabaragamuwa Province</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 pb-3">
                                    <h3 class="small font-weight-bold">Destination District</h3>
                                    <select class="form-control" id="district" name="district">
                                        <option selected value="Colombo">Colombo</option>
                                        <option value="Gampaha">Gampaha</option>
                                        <option value="Kalutara">Kalutara</option>
                                       
                                    </select>
                                </div>
                                <div class="col-md-12 pb-3">
                                    <h3 class="small font-weight-bold">Detailed Description </h3>
                                    <textarea style="color : black; !impotant" id="classic-ckeditor5" name="description"
                                        rows="15">Tell something about this destination</textarea>
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
                                <button class="btn btn-success ml-2" type="submit">Submit Destination</button>
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


        var data = {
            1 : ["Colombo", "Gampaha", "Kalutara"],
            2 : ["Galle", "Matara", "Hambantota"],
            3 : ["Kandy", "Matale", "Nuwara Eliya"],
            4 : ["Trincomalee", "Batticaloa", "Ampara"],
            5 : ["Jaffna", "Kilinochchi", "Mannar" ,"Mullaitivu" , "Vavuniya"],
            6 : ["Puttalam", "Kurunegala"],
            7 : ["Anuradhapura", "Polonnaruwa"],
            8 : ["Badulla", "Monaragala"],
            9 : ["Kegalle", "Ratnapura"],
        }

        jQuery(document).on('change', '#province', function () {
           $('#district').empty();
           $.each(data[$(this).val()]  , function( index, value ) {
               if(index == 0 ){
                $('#district').append($("<option></option>").attr("value",value).attr("selected","selected").text(value));
               }else{
                $('#district').append($("<option></option>").attr("value",value).text(value)); 
               }
           });
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
