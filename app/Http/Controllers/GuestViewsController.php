<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class GuestViewsController extends Controller
{
    public function guestindex() {
        return view('GuestViews.guestindex');
    }
    
    public function guestaccountancy(){
        return view('GuestViews.guestaccountancy');
    }
    
    public function guestcomputer(){
        return view('GuestViews.guestcomputer');
    }

    public function guesteducation(){
        return view('GuestViews.guesteducation');
    }

    public function guesthotelmanagement(){
        return view('GuestViews.guesthotelmanagement');
    }

    public function guestnursing(){
        return view('GuestViews.guestnursing');
    }
}
