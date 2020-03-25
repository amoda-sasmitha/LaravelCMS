<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provinces;
use App\Destinations;

class ProvincesController extends Controller
{
    public function index(){
        $provinces =  Provinces::orderBy( 'id' , 'asc')->get();
        return view('pages.province.index')->with('provinces' , $provinces );
    }

    public function details($title){
        $title = str_replace('-',' ',$title); 
        $details =  Provinces::where('name',$title)->first();

        if(is_null($details)){
            abort(404);
        }

        $destinations = Destinations::where( 'province_id' , $details->id )->get();
        return view('pages.province.details')->with( ['details' => $details , 'destinations' => $destinations ] );
    }

}
