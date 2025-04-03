<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeScreenController extends Controller
{

    public function index()
    {
        // Pass menu items to the view if needed
        $menuItems = [
            'Espresso',
            'Cappuccino',
            'Latte',
            'Mocha',
            'Americano',
            'Macchiato',
            'Iced Coffee',
            'Cold Brew',
            'Hazelnut Coffee',
            'Cold Coffee'
        ];

        return view('homescreen.index', compact('menuItems'));
    }
}