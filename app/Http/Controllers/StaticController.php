<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function About(){
        return view('about');
    }
    public function Store(){
        return "<h1>store</h1>";
    }
    public function contact()
    {
        return view('contact');
    }
}
