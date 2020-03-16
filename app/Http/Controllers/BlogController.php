<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogCategory;

class BlogController extends Controller
{
    public function add(){
        $category=BlogCategory::all();
        return view('add_article',compact('category'));
    }
      public function add2(Request $request){
        $this->validate($request,[

           'image'=>'required|mimes:jpg,jpeg,png',
            'title'=>'required',
            'body'=>'required'
        ],
                [

                    'title.required'=>'عنوان مقاله را وارد کنید.',
                    'body.required'=>'متن مقاله را وارد کنید.',
                    'image.required'=>'عکس را وارد کنید.',
                    'image.mimes'=>'فرمت عکس قابل قبول نیست.'
                    
                ]
        );
       $file= request()->file('image');
       $image_path='assets/images/blogimages';
      $image_name= $file->getClientOriginalName();
      $file->move(public_path($image_path),$image_name);
      
        Blog::create([
            'category'=>request('category'),
           'title'=> request('title'),
            'body'=> request('body'),
            'image'=>$image_name 
        ]);
        return back()->with('success','ok');
    }
    public function show(){
        $articles=Blog::all();
        return view('show_articles',compact('articles'));
    }
    public function co($id){
        $article=Blog::find($id);
        $comment=Blog::find($id)->blogcomments;
        return view('co_article',compact('article'),compact('comment'));
    }

    public function edit()
    {
        $articles=Blog::all();
        return view('edit_article',compact('articles'));
    }

    public function update($id)
    {
        $article=Blog::find($id);
        $category=BlogCategory::all();
        return view('update_article',compact('article','category'));
    }

    public function update2($id)
    {
        $article=Blog::find($id);

        if((request()->file('image'))==null){
            $article->category= request('category');
            $article->title= request('title');
            $article->body=request('body');
        }

        else{
            $article->category= request('category');
            $article->title= request('title');
            $article->body=request('body');
            $file= request()->file('image');
            $image_path='assets/images/newsimages';
            $image_name= $file->getClientOriginalName();
            $file->move(public_path($image_path),$image_name);
            $article->image=$image_name;
        }

        $article->save();

        return back()->with('success','ok');

    }

    public function delete($id)
    {
        Blog::find($id)->delete();
        return back()->with('success','ok');
    }
}
