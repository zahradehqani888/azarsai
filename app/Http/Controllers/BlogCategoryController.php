<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;

class BlogCategoryController extends Controller
{
    public function add(){
        return view('add_category');
    }
    public function add2(){
        BlogCategory::create([
          'name'=> request('name')  
        ]);
        return back()->with('success','ok');
    }
  
}
