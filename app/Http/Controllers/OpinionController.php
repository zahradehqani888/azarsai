<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;

class OpinionController extends Controller
{
    public function show()
    {
        return view('show_opinion');
    }
}
