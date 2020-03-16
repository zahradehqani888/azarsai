<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function add($id){
        if(auth()->user()){
        Comment::create([
           'user_id'=> auth()->user()->id,
           'news_id'=>$id,
           'flag'=>0,
           'body'=> request('body') 
        ]);
    }
    else{
        return back()->with('er','ok');
    }
        return back();
    }
}
