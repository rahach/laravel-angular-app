<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;

class ColorController extends Controller
{

    public function index(){
        
        $color = Color::all();

        return view('details.color', compact('color'));
    }

}
