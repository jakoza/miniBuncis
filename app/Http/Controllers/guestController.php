<?php

namespace App\Http\Controllers;

use App\guest;
use Illuminate\Http\Request;

class guestController extends Controller
{
    public function store(Request $request){
        guest::create([
        'guest_name'=>$request->guest_name,
        'guest_company'=>$request->guest_company,
        'guest_position'=>$request->guest_position,
        'guest_phone_number'=>$request->guest_phone_number    
        ]);
        return back();
    }
}
