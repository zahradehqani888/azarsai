<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
    public function add(){
        return view('add_color');
    }
    
    public function add2(){
        Color::create([
           'name'=> request('name') 
        ]);
        return back();
    }
}
