<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;

class MainController extends Controller
{

    public function index(){
       $accommodations =  Accommodation::orderBy( 'id' , 'asc')->paginate(3);
       return view('pages.accommodation.index')->with( 'accommodations' , $accommodations );
    }

    public function list(){
        $accommodations =  Accommodation::orderBy( 'id' , 'asc')->get();
        return view('pages.accommodation.accommodationlist')->with( 'accommodations' , $accommodations );
     }

    public function single_accommodation($title){
        $title = str_replace('-',' ',$title); 
        $accommodation =  Accommodation::where('title',$title)->first(); 
        $related =  Accommodation::where([ ['category', '=' ,$accommodation->category] , [ 'id' , '!=' , $accommodation->id]])->limit(3)->get(); 
        return view('pages.accommodation.single_accommodation')->with( ['accommodation' => $accommodation , 'related'=> $related] );
     }

    public function create(){
        return view('pages.accommodation.create');
    }

    public function tags($query){
        $accommodations = Accommodation::where('title','LIKE','%'.$query.'%')->pluck('title' );
       // $accommodations =  Accommodation::all()->pluck('title' );
        return response($accommodations);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
             'images' => 'required',
            'cover' => 'required',
            'images.*' => 'mimes:png,jpg,jpeg,gif|max:2048',      
            'cover' => 'mimes:png,jpg,jpeg,gif|required|max:5000'
        ]);

        if($request->hasfile('images'))
         {
            foreach($request->file('images') as $file)
            {
                $name = rand().time().'.'.$file->extension();
                $file->move( public_path().'/images/accommodation/', $name);  
                $images[] = $name;  
            }
         }

         if( $request->hasfile('cover') )
         {
             $file = $request->file('cover');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/accommodation/covers/', $name );
             $cover = $name;
             echo $cover;
            
         }

         
         $accommodation = new Accommodation;
         $accommodation->title = $request->input('title');
         $accommodation->description = $request->input('description');
         $accommodation->category = $request->input('category');
         $accommodation->images = json_encode($images);
         $accommodation->cover = $cover;
         $accommodation->save();


    
        return back()->with('success', "You post has been saved to database" );
    }
}
