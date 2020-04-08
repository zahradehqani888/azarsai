<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;

class ComplaintController extends Controller
{
    public function add(){
        return view('add_complaint') ;
    }
    public function add2(Request $request){
        $this->validate($request,[

            'name'=>'required',
            'family'=>'required',
            'tel'=>'required',
            'message'=>'required'
        ],
            [
                'name.required'=>'نام را وارد کنید.',
                'family.required'=>'نام خانوادگی را وارد کنید.',
                'tel.required'=>'تلفن را وارد کنید.',
                'message.required'=>'پیام خود را وارد کنید.'

            ]
        );
        //return($request);
        Complaint::create([
           'name'=> request('name'), 
            'family'=> request('family'), 
            'tel'=> request('tel'), 
            'email'=> request('email'), 
            'message'=>request('message'),
        ]);
        return back()->with('success','ok');
    }

    public function add22(Request $request)
    {Complaint::create([
        'name'=>request('name'),
        'family'=>request('family'),
        'tel'=>request('tel'),
        'email'=>request('email'),
        'message'=>request('body')
    ]);

    }
    public function show(){
        $complaints=Complaint::all();
        return view('show_complaints',compact('complaints'));
    }
    public function co($id){
       $complaint=Complaint::find($id);
       return view('co_complaint',compact('complaint'));
    }
    public function del1($id)
    {
        return back()->with('del',$id);
    }
    public function delete($id){
        Complaint::find($id)->delete();
        return back()->with('success','ok');
    }
}
