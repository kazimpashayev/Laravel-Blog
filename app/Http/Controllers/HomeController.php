<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    public function index() {
        return view('front.home');
    }

    public function about() {
        return view('front.about');
    }
   
    public function post() {
        return view('front.post');
    }

    public function contact() {
        return view('front.contact');
    }

   
}
