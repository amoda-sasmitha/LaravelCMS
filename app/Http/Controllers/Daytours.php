<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Daytours as DaytoursModel;
use App\PictureYourself;
use App\TripPlans;
use App\PlanDetails;

class Daytours extends Controller
{

    public function index(){
        $daytours =  DaytoursModel::orderBy( 'id' , 'asc')->paginate(1);
        return view('pages.daytours.index')->with('daytours' , $daytours );
    }

    public function list(){
        $daytours =  DaytoursModel::orderBy( 'id' , 'asc')->get();
        return view('pages.daytours.daytourslist')->with( 'daytours' , $daytours );
     }

     public function single_daytour($title){
        $title = str_replace('-',' ',$title); 
        $daytour =  DaytoursModel::where('title',$title)->first(); 
        $picture_yourself =  PictureYourself::where([ ['trip_id', '=' ,$daytour->id]])->get(); 
        $tourplan =  DB::table('trip_plans')
                     ->join('plan_details', 'trip_plans.id', '=', 'plan_details.trip_plan_id')
                     ->select('plan_details.*')->where('trip_id',$daytour->id)->get();
        return view('pages.daytours.single_daytour')->with( ['daytour' => $daytour , 'picture_yourself' => $picture_yourself , 'tourplan' => $tourplan] );
     }


    public function create(){
        return view('pages.daytours.create');
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required',
            
        //     'is_this_for_me' => 'required',
        //      'can_it_be_tailor_made' => 'required',
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
            
        //      'picture_yourself_images.*' => 'mimes:png,jpg,jpeg,gif|max:1024',      
        //     'cover' => 'mimes:png,jpg,jpeg,gif|required|max:3000'
        // ]);

        $activity_two_image = "";
        $activity_three_image = "";

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
             $file->move( public_path().'/images/daytours/covers/', $name );
             $cover = $name;    
         }

         if( $request->hasfile('activity_one_image') )
         {
             $file = $request->file('activity_one_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/daytours/activities/', $name );
             $activity_one_image = $name;    
         }

         if( $request->hasfile('activity_two_image') )
         {
             $file = $request->file('activity_two_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/daytours/activities/', $name );
             $activity_two_image = $name;    
         }

         if( $request->hasfile('activity_three_image') )
         {
             $file = $request->file('activity_three_image');
             $name =  rand().time().'.'.$file->extension();
             $file->move( public_path().'/images/daytours/activities/', $name );
             $activity_three_image = $name;    
         }

         //
        $daytour = new DaytoursModel;
        $daytour->title = $request->title;
        $daytour->transfers = $request->transfers;
        
        $daytour->isthisforme = $request->is_this_for_me;
        $daytour->canittailormade = $request->can_it_be_tailor_made;
        $daytour->whentogo = $request->whentogo;
        $daytour->description = $request->description;
        $daytour->cover = $cover;

        $daytour->type = json_encode($request->type);
        $daytour->looking_for = json_encode($request->looking_for);
        $daytour->places = json_encode($request->places);

        $daytour->activity_one_title = $request->activity_one_text;
        $daytour->activity_one_image = $activity_one_image;
       
        $daytour->activity_two_title = $request->activity_two_text;
        $daytour->activity_two_image = $activity_two_image;
       
        $daytour->activity_three_title = $request->activity_three_text;
        $daytour->activity_three_image = $activity_three_image;
        $daytour->save();

        $tripid = $daytour->id;

        //picture yourself table
        foreach ( $request->picture_yourself_text as $key => $picture) {
              $pus = new PictureYourself;
              $pus->trip_id = $tripid;
              $pus->title = $picture;
              $pus->image = $picture_yourself[$key];
              $pus->save();
        }

        return back()->with('success', "You post has been saved to database" );
    }

    public function destroy(Request $request){
        $id=$request->input('id');
        $picture_yourself = PictureYourself::where('trip_id',$id)->delete();
        DaytoursModel::destroy($id);
        
        return back()->with('success', "You post has been deleted successfully" );
    }
}
