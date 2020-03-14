<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Accommodation;
use App\PictureYourself;
use App\Places;
use App\Itineraries as ItineraryModel;

class Itineraries extends Controller
{   

    public function index(){
        $itineraries =  ItineraryModel::orderBy( 'id' , 'asc')->paginate(1);
        return view('pages.itineraries.index')->with( 'itineraries' , $itineraries );
     }

     public function list(){
        $itineraries =  ItineraryModel::orderBy( 'id' , 'asc')->get();
      //  var_dump(count($itineraries));
        return view('pages.itineraries.itinerarieslist')->with( 'itineraries' , $itineraries );
     }

    public function create(){
        $accommodations =  Accommodation::select('id', 'title')->orderBy( 'title' , 'asc')->get();
        //var_dump($accommodations);
        return view('pages.itineraries.create')->with( 'accommodations' , $accommodations);
    }

    public function single_itinerary($title){
        $title = str_replace('-',' ',$title); 
        $itinerary =  ItineraryModel::where('title' , $title)->first();
        
        $places =  DB::table('places')
                        ->join('accommodations', 'places.accommodation_id', '=', 'accommodations.id')
                        ->select('accommodations.*')->where('places.trip_id',$itinerary->id)->get();

        $picture_yourself = PictureYourself::where( 'trip_id', $itinerary->id )->get();
        // $tourplan =  DB::table('trip_plans')
        // ->join('plan_details', 'trip_plans.id', '=', 'plan_details.trip_plan_id')
        // ->select('plan_details.*' , 'trip_plans.id as trip_id' )->where('trip_id',$itinerary->id)->get();

        $tour_data =  DB::table('trip_plans')->where('trip_id' , $itinerary->id )->get();

        return view('pages.itineraries.single_itinerary')->with(['itinerary'=> $itinerary , 
        'places' =>  $places , 'picture_yourself' =>  $picture_yourself , 'tour_data' => $tour_data ]);
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required',
        //     'length' => 'required',
        //      'price' => 'required',
        //     'whentogo' => 'required',
        //     'transfers' => 'required',
        //     'description' => 'required',

        //     'type' => 'required',
        //     'looking_for' => 'required',
        //     'places' => 'required',

        //     'activity_one_image' => 'required',
        //     'activity_one_text' => 'required',
        //     'activity_two_image' => 'required',
        //     'activity_two_text' => 'required',
        //     'activity_three_image' => 'required',
        //     'activity_three_text' => 'required',
        //     //'picture_yourself_texts.*' => 'required', 
        //    // 'accommodations.*' => 'required', 
        //      'picture_yourself_images.*' => 'mimes:png,jpg,jpeg,gif|max:1024',      
        //     'cover' => 'mimes:png,jpg,jpeg,gif|required|max:3000'
        // ]);

        if($request->hasfile('picture_yourself_image'))
         {
            foreach($request->file('picture_yourself_image') as $file)
            {
                $name = rand().time().'.'.$file->extension();
                $file->move( public_path().'/images/picture_yourself/', $name);  
                $picture_yourself[] = $name;  
            }
         }

         if( $request->hasfile('cover') )
         {
             $file = $request->file('cover');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/itineraries/covers/', $name );
             $cover = $name;    
         }

         if( $request->hasfile('activity_one_image') )
         {
             $file = $request->file('activity_one_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/itineraries/activities/', $name );
             $activity_one_image = $name;    
         }

         if( $request->hasfile('activity_two_image') )
         {
             $file = $request->file('activity_two_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/itineraries/activities/', $name );
             $activity_two_image = $name;    
         }

         if( $request->hasfile('activity_three_image') )
         {
             $file = $request->file('activity_three_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/itineraries/activities/', $name );
             $activity_three_image = $name;    
         }

        $itinerary = new ItineraryModel;
        $itinerary->title = $request->title;
        $itinerary->length = $request->length;
        $itinerary->price = $request->price;
        $itinerary->whentogo = $request->whentogo;
        $itinerary->transfers = $request->transfers;
        $itinerary->description = $request->description;
        $itinerary->cover = $cover;

        $itinerary->type = json_encode($request->type);
        $itinerary->looking_for = json_encode($request->looking_for);
        $itinerary->places = json_encode($request->places);

        $itinerary->activity_one_title = $request->activity_one_text;
        $itinerary->activity_one_image = $activity_one_image;
       
        $itinerary->activity_two_title = $request->activity_two_text;
        $itinerary->activity_two_image = $activity_two_image;
       
        $itinerary->activity_three_title = $request->activity_three_text;
        $itinerary->activity_three_image = $activity_three_image;
        $itinerary->save();

        $tripid = $itinerary->id;

        //picture yourself table
        foreach ( $request->picture_yourself_text as $key => $picture) {
              $pus = new PictureYourself;
              $pus->trip_id = $tripid;
              $pus->title = $picture;
              $pus->image = $picture_yourself[$key];
              $pus->save();
        }

        //places table
        foreach ( $request->accommodations as $accommodation) {
              $places = new Places;
              $places->trip_id = $tripid;
              $places->accommodation_id = $accommodation;
              $places->save();
        }

        return back()->with('success', "You post has been saved to database" );
    }
}
