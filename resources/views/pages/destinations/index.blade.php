@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">List of Destinations</h1>
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
                @if( count($destinations) > 0 )
                <table style="color: #5a5c69; !important" class="table table-image table-light table-bordered">
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($destinations as $destination)  
                      <tr>
                      <th class="py-3"  scope="row">{{$destination->id}}</th>
                          <td class="w-25 py-3">
                            <h6><b>{{$destination->title}}</b><span class="ml-2 px-2 py-1 badge badge-info">{{$destination->district}} District</span></h6>
                              <img src="{{ URL::to('/') }}/images/destinations/covers/{{$destination->cover}}" class="img-fluid img-thumbnail" >
                              <div>
                                <a href="{{url('destinations/'.str_slug($destination->title))}}" class="btn btn-success btn-sm mr-1 mt-2"><b>Live Preview</b></a>
                                <button type="button" data-id="{{$destination->id}}"  class="btn btn-danger btn-sm mr-1 mt-2 delete"><b>Remove</b></button>
                                
                              </div>
                            </td>
                            <td class="py-3">{!!$destination->description!!}</td> 
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                  {{$destinations->links()}} 
                @else
                    <p>No destinations Found</p>
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
                <form action="{{url('destination')}}" method="POST" class="remove-record-model">
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
