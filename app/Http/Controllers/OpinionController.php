<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opinion;

class OpinionController extends Controller
{
    public function add()
    {
        return view('add_opinion');
    }

    public function add2(Request $request)
    {$this->validate($request,[

        'name'=>'required',
        'national_code'=>'required',
        'tel'=>'required',
        'model'=>'required',
        'serial_no'=>'required|min:16|max:16',
        'buy_date'=>'required',
        'branch_name'=>'required',
        'city'=>'required',
        'q1'=>'required',
        'q2'=>'required',
        'q3'=>'required',
        'q4'=>'required',
        'q5'=>'required',
        'q6'=>'required',
        'q7'=>'required',
        'q8'=>'required',
        'q9'=>'required',
        'q10'=>'required',

    ],
        [
            'name.required'=>'نام و نام خانوادگی را وارد کنید.',
            'national_code.required'=>'کد ملی را وارد کنید.',
            'tel.required'=>'شماره تماس را وارد کنید.',
            'model.required'=>'مدل گوشی را وارد کنید.',
            'serial_no.required'=>'شماره سریال را وارد کنید.',
            'serial_no.min'=>'شماره سریال باید 16 کاراکتر باشد.',
            'serial_no.max'=>'شماره سریال باید 16 کاراکتر باشد.',
            'buy_date.required'=>'تاریخ خرید را وارد کنید.',
            'branch_name.required'=>'نام نمایندگی را وارد کنید.',
            'city.required'=>'شهر را وارد کنید.',
            'q1.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q2.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q3.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q4.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q5.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q6.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q7.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q8.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q9.required'=>'لطفا به تمام سوالات پاسخ دهید.',
            'q10.required'=>'لطفا به تمام سوالات پاسخ دهید.',


        ]
    );
    //dd($request);

    Opinion::create([
        'name'=> request('name'),
        'national_code'=> request('national_code'),
        'tel'=> request('tel'),
        'model'=> request('model'),
        'serial_no'=> request('serial_no'),
        'buy_date'=> request('buy_date'),
        'branch_name'=> request('branch_name'),
        'city'=> request('city'),
        'q1'=>request('q1'),
        'q2'=>request('q2'),
        'q3'=>request('q3'),
        'q4'=>request('q4'),
        'q5'=>request('q5'),
        'q6'=>request('q6'),
        'q7'=>request('q7'),
        'q8'=>request('q8'),
        'q9'=>request('q9'),
        'q10'=>request('q10'),
    ]);
        return back()->with('success','ok');
        
    }

    public function show()
    {
        $opinions=Opinion::all();
        return view('show_opinion',compact('opinions'));
    }
    public function del1($id)
    {
        return back()->with('del',$id);
    }
    public function delete($id){
       Opinion::find($id)->delete();
       return back()->with('success','ok');
    }


    public function co($id){
        $opinion=Opinion::find($id);
        return view('co_opinion',compact('opinion'));
    }
}
