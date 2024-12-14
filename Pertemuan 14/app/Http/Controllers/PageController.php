<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('web_home');
    }

    public function about(){
        return view('web_about');
    }

    public function contact(){
        return view('web_contact');
    }
}