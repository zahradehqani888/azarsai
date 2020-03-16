<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogComment;
class BlogCommentController extends Controller
{
    public function add($id){
        if(auth()->user()){
        BlogComment::create([
         'body'=>request('body'),
        'blog_id'=>$id, 
            'user_id'=>auth()->user()->id,
        ]);
        }
    else{
        return back()->with('error','ok');
    }
        return back();
                
    }
}
