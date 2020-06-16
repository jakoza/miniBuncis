<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function store(Request $request){
        company::create([
            'event_id'=>$request->event_part,
            'company_name'=>$request->company_name
            
        ]);
        return back();
    }
}
