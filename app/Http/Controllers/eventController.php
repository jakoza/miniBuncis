<?php

namespace App\Http\Controllers;

use App\event;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function store(Request $request){
        event::create([
            'event_name'=>$request->event_name,
            'event_type'=>$request->event_type,
            'event_date'=>$request->event_date,
            'event_location'=>$request->event_location,
            'event_duration'=>$request->event_duration,
            'event_guest'=>$request->event_guest
        ]);
        return back();
    }
}
