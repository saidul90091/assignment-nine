<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function home(){
        return view('Home');
    }
    function about(){
        return view('About');
    }
    function projects(){
        return view('Projects');
    }
    function contact(){
        return view('Contact');
    }
}
