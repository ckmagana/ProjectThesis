<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionViewsController extends Controller
{
    public function home(){
        return view('SessionViews.home');
    }

    public function accountancy(){
        return view('SessionViews.accountancy');
    }

    public function computer(){
        return view('SessionViews.computer');
    }

    public function education(){
        return view('SessionViews.education');
    }

    public function hotelmanagement(){
        return view('SessionViews.hotelmanagement');
    }
    public function nursing(){
        return view('SessionViews.nursing');
    }
}
