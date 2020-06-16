<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function createEvent(){
        return view('createEvent');
    }
    public function createCompany(){
        return view('createCompany');
    }
    public function createGuest(){
        return view('createGuest');
    }
}
