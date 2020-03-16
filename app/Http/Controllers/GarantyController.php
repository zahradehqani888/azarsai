<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Garanty;

class GarantyController extends Controller
{
    public function add()
    {
       return view('add_garanty');
    }

    public function add2(Request $request)
    {
        $this->validate($request,[
            'serial_no'=>'required|min:16|max:16|unique:garanties',
            'imei'=>'required|min:15|max:16|unique:garanties',
            'brand'=>'required',
            'model'=>'required',
            'garanty_type'=>'required',
            'activation_code'=>'required',
            'time_in'=>'required',
            'garanty_date'=>'required',
        ],
            [
                'serial_no.required'=>'شماره سریال را وارد کنید.',
                'serial_no.min'=>'شماره سریال باید 16 کاراکتر باشد.',
                'serial_no.max'=>'شماره سریال باید 16 کاراکتر باشد.',
                'serial_no.unique'=>'شماره سریال تکراری است.',
                'imei.required'=>'کد IMEI را وارد کنید.',
                'imei.min'=>'کد IMEI باید 15 کاراکتر باشد.',
                'imei.max'=>'کد IMEI باید 15 کاراکتر باشد.',
                'imei.unique'=>'کد IMEI تکراری است.',
                'brand.required'=>'برند گوشی را وارد کنید.',
                'model.required'=>'مدل گوشی را وارد کنید.',
                'garanty_type.required'=>'نوع گارانتی را وارد کنید.',
                'activation_code.required'=>'کد فعالسازی را وارد کنید.',
                'time_in.required'=>'تاریخ ثبت گارانتی را وارد گنید.',
                'garanty_date.required'=>'تاریخ انقضای گارانتی را وارد کنید.',

            ]
        );
        Garanty::create([
            'serial_no'=>request('serial_no'),
            'imei'=>request('imei'),
            'brand'=>request('brand'),
            'model'=>request('model'),
            'time_in'=>request('time_in'),
            'garanty_type'=>request('garanty_type'),
            'garanty_date'=>request('garanty_date'),
            'activation_code'=>request('activation_code'),
        ]);
        return back()->with('success','ok');

    }

    public function show()
    {
      return view('show_guarantee');
    }
    public function result(Request $request)
    {
        $this->validate($request,[
            'serial_no'=>'required|min:16|max:16',
            'imei'=>'required|min:15|max:16',
        ],[
            'serial_no.required'=>'شماره سریال را وارد کنید.',
            'serial_no.min'=>'شماره سریال باید 16 کاراکتر باشد.',
            'serial_no.max'=>'شماره سریال باید 16 کاراکتر باشد.',
            'imei.required'=>'کد IMEI را وارد کنید.',
            'imei.min'=>'کد IMEI باید 15 کاراکتر باشد.',
            'imei.max'=>'کد IMEI باید 15 کاراکتر باشد.',
        ]);

        $serial_no=$request->serial_no;
        $imei=$request->imei;
        $result=Garanty::all()->where('imei',$imei)->where('serial_no',$serial_no);
       // dd($result) ;
        return view('result_guarantee',compact('result'));

//        $imie=request('imie');
//        $g=Garanty::all();
       // $g=Garanty::find('$imie')->where('serial_no',request('serial_no'));
      // $g= Garanty::all()->where('serial_no',request('serial_no'))->where('imei',request('imei'))->pluck('serial_no','imei');
//return $g;
       // return view('result_guarantee',compact('g'));
    }
}
