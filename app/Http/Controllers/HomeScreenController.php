<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class HomeScreenController extends Controller
{

    public function index()
    {
        // $menus = Menu::all();
        $menus = Menu::latest()->take(5)->get();

        return view('homescreen.index', compact('menus'));
    }
}