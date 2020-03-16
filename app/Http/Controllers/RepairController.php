<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;
use function Sodium\compare;

class RepairController extends Controller
{
    public function repair_branch()
    {
        return view('repair_branch');
    }

    public function repair()
    {
        return view('repair');
    }


    public function add(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'national_code'=>'required',
            'tel'=>'required',
            'model'=>'required',
            'serial_no'=>'required|min:16|max:16',
            'imei'=>'required|min:15|max:16',
            'date_in'=>'required',
            'garanty_date'=>'required',
            'message'=>'required',
            'status'=>'required',
        ],[
            'name.required'=>'نام را وارد کنید.',
            'national_code.required'=>'کد ملی را وارد کنید.',
            'tel.required'=>'شماره تماس را وارد کنید.',
            'model.required'=>'مدل گوشی را وارد کنید.',
            'serial_no.required'=>'شماره سریال را وارد کنید.',
            'serial_no.min'=>'شماره سریال باید 16 کاراکتر باشد.',
            'serial_no.max'=>'شماره سریال باید 16 کاراکتر باشد.',
            'imei.required'=>'کد IMEI را وارد کنید.',
            'imei.min'=>'کد IMEI باید 15 کاراکتر باشد.',
            'imei.max'=>'کد IMEI باید 15 کاراکتر باشد.',
            'date_in.required'=>'تاریخ تحویل را وارد کنید.',
            'garanty_date.required'=>'انقضای گارانتی را وارد کنید.',
            'message.required'=>'علت خرابی را وارد کنید.',
            'status.required'=>'وضعیت را انتخاب کنید.',
        ]);
       // $code=md5(time());

        Repair::create([
            'name'=>request('name'),
            'national_code'=>request('national_code'),
            'tel'=>request('tel'),
            'model'=>request('model'),
            'serial_no'=>request('serial_no'),
            'imei'=>request('imei'),
            'date_in'=>request('date_in'),
            'garanty_date'=>request('garanty_date'),
            'message'=>request('message'),
            'status'=>request('status'),
           // 'activation_code'=>$code,
            'branch_name'=>auth()->user()->name,

        ]);
       return back()->with('success','ok');
        
    }

    public function result(Request $request)
    {
        $this->validate($request,[
            'serial_no'=>'required|min:16|max:16',
            'imei'=>'required|min:15|max:16',
           // 'activation_code'=>'required'
        ],[
            'serial_no.required'=>'شماره سریال را وارد کنید.',
            'serial_no.min'=>'شماره سریال باید 16 کاراکتر باشد.',
            'serial_no.max'=>'شماره سریال باید 16 کاراکتر باشد.',
            'imei.required'=>'کد IMEI را وارد کنید.',
            'imei.min'=>'کد IMEI باید 15 کاراکتر باشد.',
            'imei.max'=>'کد IMEI باید 15 کاراکتر باشد.',
           // 'activation_code.required'=>'کد پیگیری را وارد کنید.',
        ]);
        $activation_code= $request->activation_code;
        $serial_no=$request->serial_no;
        $imei=$request->imei;
        $result=Repair::all()->where('imei',$imei)->where('serial_no',$serial_no);
       // $result=Repair::all();
        return view('result_repair',compact('result'));
    }

    public function all()
    {
        $all=Repair::all()->where('branch_name',auth()->user()->name);
        //return $all;
       return view('all_repairs',compact('all'));
    }

    public function edit($id)
    {
        $result=Repair::find($id);
        return view('edit_repair',compact('result'));
    }

    public function edit2($id)
    {
        $result=Repair::find($id);
        $result->status=request('status');
        $result->save();
        return back()->with('success','ok');
    }

    public function adminrepair()
    {
        $all=Repair::all();
        return view('repair_admin',compact('all'));
    }

}
