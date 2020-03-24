<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
use App\Places;
use App\Itineraries;
use App\Daytours;
use App\Destinations;
use App\Booking;
use App\ContactUs;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminindex()
    {
        $bookings =  Booking::orderBy( 'id' , 'desc')->paginate(10);
        $contactus =  ContactUs::orderBy( 'id' , 'desc')->get();
        $params = [ 'bookings' => $bookings  , 'contactus' => $contactus ];
        return view('home')->with($params);
    }

    public function index(){
        $itineraries =  Itineraries::orderBy( 'id' , 'desc')->limit(5)->get();
        $daytours = Daytours::orderby('id' , 'desc')->limit(6)->get();
        $accommodation = Accommodation::orderby('id' , 'asc')->limit(3)->get();
        $destinations = Destinations::orderby('id' , 'desc')->limit(5)->get();
        $params = [ 'itineraries' => $itineraries , 'daytours' => $daytours , 'accommodation' => $accommodation , 'destinations' => $destinations];
        return view('pages.home.index')->with($params);
    }

    public function search(Request $request){

           
            $itineraries =  Itineraries::where( 'type', 'LIKE', '%'.$request->type.'%')
                                        ->where('looking_for', 'LIKE', '%'.$request->lookingfor.'%')
                                        ->where('places', 'LIKE', '%'.$request->place.'%')->get();
       
             $daytours = Daytours::where( 'type', 'LIKE', '%'.$request->type.'%')
                                 ->where('looking_for', 'LIKE', '%'.$request->lookingfor.'%')
                                 ->where('places', 'LIKE', '%'.$request->place.'%')->get();
         $params = [ 'itineraries' => $itineraries , 'daytours' => $daytours ];
        return view('pages.home.search')->with($params);
    }
}
