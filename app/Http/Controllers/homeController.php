<?php

namespace App\Http\Controllers;

use App\company;
use App\event;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $events = event::all();
        $companies = company::all();
        return view('welcome',compact('events'), compact('companies'));
    }
    public function createEvent(){
        return view('createEvent');
    }
    public function createCompany(){
        $events = event::all();
        return view('createCompany',compact('events'));
    }
    public function createGuest(){
        return view('createGuest');
    }
}
