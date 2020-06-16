<?php

namespace App\Http\Controllers;

use App\company;
use Illuminate\Http\Request;

class companyController extends Controller
{
    public function store(Request $request){
        company::create([
            'company_name'=>$request->company_name,
            'event_part'=>$request->event_id
        ]);
    }
}
