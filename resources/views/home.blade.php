@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper" >

    @include('inc.adminnavbar')
<div class="container-fluid mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
