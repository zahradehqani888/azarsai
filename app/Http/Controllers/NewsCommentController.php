<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsComment;

class NewsCommentController extends Controller
{
    public function add($id){
        if(auth()->user()){
        NewsComment::create([
         'body'=>request('body'),
         'news_id'=>$id, 
         'user_id'=>auth()->user()->id,
        ]);
        }
    else{
        return back()->with('error','ok');
    }
        return back();
                
    }
    public function reply($id){
        $ncomment= NewsComment::find($id);
        return view('reply_page',compact('ncomment'));
    }
    public function reply2($comment,$id){
        if(auth()->user()){
        NewsComment::create([
            'rbody'=>request('rbody'),
            'ruser'=>auth()->user()->name,
            'user_id'=>$id,
            'body'=>$comment,
            'news_id'=>$id,
        ]);
        }
    else{
        return back()->with('error','ok');
    }
        return back();
     }
}
