<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
       
        return view('pages.about');
    }

    public function congrats(){
       
        return view('auth.congrats');
    }

    public function oath(){
       
        return view('auth.oath');
    }

    public function avator(){
       
        return view('auth.avator');
    }
  

    public function home(){
     
        return view('pages.home');
    }
   
}
