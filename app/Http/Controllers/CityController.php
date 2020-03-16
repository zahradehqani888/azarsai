<?php

namespace App\Http\Controllers;

use App\Country;
use App\State;
use Illuminate\Http\Request;
use App\City;
use App\province;

class CityController extends Controller
{
    public function add(){
        $country=Country::all();
        return view('add_city', compact('country'));
    }
    public function add2(){
        State::create([
            'country_id'=>request('province'),
            'name'=>request('title')
        ]);
        return back()->with('success','ok');
    }
}
