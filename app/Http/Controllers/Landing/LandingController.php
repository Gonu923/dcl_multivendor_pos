<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('landing.about');
    }

    public function services(){
        return view('landing.contact');
    }

    public function message(){
        return view('landing.message');
    }

    public function partner(){
        return view('landing.partner');
    }

    public function enterprise(){
        return view('landing.enterprise');
    }

    public function media(){
        return view('landing.media');
    }

    public function contact(){
        return view('landing.contact');
    }
}
