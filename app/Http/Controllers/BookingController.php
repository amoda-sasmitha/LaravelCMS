<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\ContactUs;
use App\Mail\ContactUsMail;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
       
         $booking = new Booking;
         $booking->trip_id = $request->input('trip_id');
         $booking->fullname = $request->input('name');
         $booking->nationality = $request->input('nationality');
         $booking->phone = $request->input('phone');
         $booking->email = $request->input('email');
         $booking->arrival_date = $request->input('adate');
         $booking->departure_date = $request->input('ddate');
         $booking->no_adults = $request->input('adultcount');
         $booking->no_children = $request->input('childrencount');
         $booking->notes = $request->input('notes');    
         Mail::to('amoda@konekt.lk')->send(new BookingMail($booking));
         $booking->save();
         return back()->with('success', "You post has been saved to system, We will contact you soon" );
    }

    public function contactus(Request $request)
    {
     $contactus = new ContactUs;
     $contactus->name = $request->input('name');
     $contactus->email = $request->input('email');
     $contactus->phone = $request->input('phone');
     $contactus->notes = $request->input('notes');

     Mail::to('amoda@konekt.lk')->send(new ContactUsMail($contactus));
     $contactus->save();
     return back()->with('success', "You note has been saved to system, We will contact you soon" );
    }
    
}
