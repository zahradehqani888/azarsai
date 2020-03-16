<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;
use App\Province;

class ProvinceController extends Controller
{
    public function add(){
        return view('add_province') ;
    }
    public function add2(){
      Country::create([
         'name'=>request('title')
      ]); 
      return back()->with('success','ok');
    }
}
