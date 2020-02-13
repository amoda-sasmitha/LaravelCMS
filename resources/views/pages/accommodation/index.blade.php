@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('inc.adminnavbar')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-3 mt-4">
            <h1 class="h3 mb-0 text-gray-800">List of Accommodation</h1>
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
                @if( count($accommodations) > 0 )
                <table style="color: #5a5c69; !important" class="table table-image table-light table-bordered">
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($accommodations as $accommodation)  
                      <tr>
                      <th class="py-3"  scope="row">{{$accommodation->id}}</th>
                          <td class="w-25 py-3">
                            <h6><b>{{$accommodation->title}}</b><span class="ml-1 badge badge-info">{{$accommodation->category}}</span></h6>
                              <img src="{{ URL::to('/') }}/images/accommodation/covers/{{$accommodation->cover}}" class="img-fluid img-thumbnail" >
                              <div>
                                <button type="button" class="btn btn-success btn-sm mr-1 mt-2"><b>Live Preview</b></button>
                                <button type="button" class="btn btn-danger btn-sm mr-1 mt-2"><b>Remove</b></button>
                                
                              </div>
                            </td>
                            <td class="py-3">{!!$accommodation->description!!}</td> 
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                  {{$accommodations->links()}} 
                @else
                    <p>No Accommodations Found</p>
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
