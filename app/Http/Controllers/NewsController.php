<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Comment;

class NewsController extends Controller
{
    
    public function add(){
        return view('add_news');
    }
    public function add2(Request $request){
        $this->validate($request,[
           'image'=>'required|mimes:jpg,jpeg,png',
            'title'=>'required',
            'body'=>'required'
        ],
                [
                    'title.required'=>'عنوان خبر را وارد کنید.',
                    'body.required'=>'متن خبر را وارد کنید.',
                    'image.required'=>'عکس را وارد کنید.',
                    'image.mimes'=>'فرمت عکس قابل قبول نیست.'
                    
                ]
        );
       $file= request()->file('image');
       $image_path='assets/images/newsimages';
      $image_name= $file->getClientOriginalName();
      $file->move(public_path($image_path),$image_name);
      
        News::create([
           'title'=> request('title'),
            'body'=> request('body'),
            'image'=>$image_name 
        ]);
        return back()->with('success','ok');
    }
    
    public function show(){
        $news=News::all();
        return view('show_news',compact('news'));
    }
    public function co($id){
        $news=News::find($id);
        $allnews=News::all();
        //$comment=News::find($id)->newscomments;
        //$comments=Comment::all();
        //$latest= News::latest(4);
        return view('co_news',compact('news'),compact('allnews'));
    }
    public function edit(){
        $news=News::all();
        return view('edit_news',compact('news'));
    }
    public function delete($id){
        News::find($id)->delete();
        return back()->with('success','ok');
    }
    public function update($id){
        $news=News::find($id);
        return view('update_news',compact('news'));
    }
    public function update2($id){
       $news=News::find($id);
       
       if((request()->file('image'))==null){
       $news->title= request('title');
       $news->body=request('body');
       }
       
       else{
       $news->title= request('title');
       $news->body=request('body');
       $file= request()->file('image');
       $image_path='assets/images/newsimages';
       $image_name= $file->getClientOriginalName();
       $file->move(public_path($image_path),$image_name);
       $news->image=$image_name;
       }
       
       $news->save();
       return back()->with('success','ok');
    }
            
}
