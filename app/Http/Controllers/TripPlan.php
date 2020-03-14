<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itineraries;
use App\Daytours;
use App\TripPlans as TripPlanModel;
use App\PlanDetails;

class TripPlan extends Controller
{
    public function index($trip_id){
        return $trip_id;
    }

    public function create($trip_id){
        if($trip_id >= 10000 ){
            $type =  "daytour";
            $details = Daytours::find($trip_id);
        }else{
            $type = "itinerary";
            $details = Itineraries::find($trip_id);
        }
        return view('pages.tripplan.create')->with(['id' => $trip_id , 'type' => $type  ,  'title' => $details->title]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'day_count' => 'required',
            'title' => 'required',       
        ]);

        if($request->hasfile('image'))
        {
           foreach($request->file('image') as $file)
           {
               $name = rand().time().'.'.$file->extension();
               $file->move( public_path().'/images/tripplan/', $name);  
               $images[] = $name;  
           }
        }

        $tripplan = new TripPlanModel;
        $tripplan->trip_id = $request->trip_id;
        $tripplan->trip_type = $request->type;
        $tripplan->title = $request->title;
        $tripplan->day_count = $request->day_count;
        $tripplan->save();

        $newID =  $tripplan->id;

        foreach ( $request->day_title as $key => $day_title ) {
           
            $plandetails = new PlanDetails;
            $plandetails->trip_plan_id = $newID;

            if( $request->type == 'itinerary'){
                $plandetails->day_no = $request->day_no[$key];
            }else{
                $plandetails->day_no = 1;
            }
            $plandetails->title = $request->day_title[$key];
            $plandetails->description = $request->description[$key];
            $plandetails->image = $images[$key];
            $plandetails->save();
      }



    return back()->with('success', "You post has been saved to database" );
    }
}
