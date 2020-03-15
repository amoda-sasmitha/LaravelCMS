<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;
use App\Places;
use App\Itineraries;
use App\Daytours;
use App\Destinations;

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
        return view('home');
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
        $itineraries =  Itineraries::orderBy( 'id' , 'desc')->limit(5)->get();
        $params = [ 'itineraries' => $itineraries ];
        return view('pages.home.search')->with($params);
    }
}
