<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingScreenController extends Controller
{
    //
    public function index()
    {
        return view('landingscreen.index');
    }

    public function home()
    {
        return view('homescreen.index');
    }
}
