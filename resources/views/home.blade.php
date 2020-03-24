@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper" >

    @include('inc.adminnavbar')
<div class="container-fluid mt-3">
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
            <div class="col-12 mt-4">
                @if( count($bookings) > 0 )
                <div class="card bg-white">
                    <div class="card-header"> Bookings</div>      
                <table style="color: #5a5c69; !important" class="table table-light table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Dates</th>
                            <th>Contacts</th>
                            <th>Info</th>
                           
                        </tr>
                    </thead>
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($bookings as $booking)  
                      <tr>
                        <td><b>{{$booking->fullname}}</b>
                            <span class="badge badge-primary px-2 mr-2 ">{{$booking->nationality}}</span>  
                        </td>
                        <td><span class="badge badge-info px-3 mr-2 ">Arrival</span> {{$booking->arrival_date}} <br>
                            <span class="badge badge-info px-2 mr-2 ">Departure</span>  {{$booking->departure_date}}
                        </td>
                        <td><span class="badge badge-success px-3 mr-2 ">Email</span> {{$booking->email}} <br>
                            <span class="badge badge-success px-2 mr-2 ">Phone</span>  {{$booking->phone}}
                        </td>
                          <td class=" py-3">
                            <span class="badge badge-primary px-2 mr-2 ">Adults {{$booking->no_adults}}</span>  
                            <span class="badge badge-primary px-2 mr-2 ">Children {{$booking->no_children}}</span> <br>
                            {{$booking->notes}}
                          </td>
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                  {{$bookings->links()}} 
                @else
                    <p>No Bookings Found</p>
                @endif
                </div>
            </div>
            <div class="col-12 mt-4 mb-4">
                @if( count($bookings) > 0 )
                <div class="card bg-white">
                    <div class="card-header"> Contact Us Submits</div>      
                <table style="color: #5a5c69; !important" class="table table-light table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Notes</th>
                           
                        </tr>
                    </thead>
                    <tbody class="bg-white shadow px-2 py-1">
                      @foreach ($contactus as $item)  
                      <tr>
                        <td><b>{{$item->name}}</b></td>
                        <td> {{$item->email}}</td>
                        <td> {{$item->phone}}</td>
                        <td class="w-50"> {{$item->notes}}</td>
                        </tr>
                    @endforeach  
                    </tbody>
                  </table>  
                @else
                    <p>No Bookings Found</p>
                @endif
                </div>
            </div>

        </div>
</div>
</div>
@endsection
