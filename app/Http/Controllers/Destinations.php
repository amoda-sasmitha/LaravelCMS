<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinations as DestinationModel;

class Destinations extends Controller
{

    public function index(){
        $destinations = DestinationModel::orderBy('id' , 'asc')->paginate(1);
        return view('pages.destinations.index')->with('destinations' , $destinations);
    }

    public function create(){
        return view('pages.destinations.create');
    }

    public function details($title){
        $title = str_replace('-',' ',$title); 
        $destination = DestinationModel::where('title' , $title)->first();
        return view('pages.destinations.details')->with('destination' , $destination );
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'description' => 'required',
        //      'images' => 'required',
        //     'cover' => 'required',
        //     'images.*' => 'mimes:png,jpg,jpeg,gif|max:2048',      
        //     'cover' => 'mimes:png,jpg,jpeg,gif|required|max:5000'
        // ]);

        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $file)
            {
                $name = rand().time().'.'.$file->extension();
                $file->move( public_path().'/images/destinations/', $name);  
                $images[] = $name;  
            }
         }

         if( $request->hasfile('cover') )
         {
             $file = $request->file('cover');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/destinations/covers/', $name );
             $cover = $name;
             echo $cover;
            
         }

         
         $destination = new DestinationModel;
         $destination->title = $request->input('title');
         $destination->description = $request->input('description');
         $destination->province_id	 = $request->input('province');
         $destination->district	 = $request->input('district');      
         $destination->images = json_encode($images);
         $destination->cover = $cover;
         $destination->save();


    
         return back()->with('success', "You post has been saved to database" );
    }
}
