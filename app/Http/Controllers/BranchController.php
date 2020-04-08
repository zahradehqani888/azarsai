<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Branch;
use App\Province;
use App\News;
use App\City;
use App\AdminProduct;
use App\User;
use DB;
class BranchController extends Controller {

   
    
    
    public function add_new(){
         $countries = DB::table("countries")->pluck("name","id");
            return view('add_branch',compact('countries'));
        }
    
    public function getStateList(Request $request)
        {
            $states = DB::table("states")
            ->where("country_id",$request->country_id)
            ->pluck("name","id");
            return response()->json($states);
        }

        public function getCityList(Request $request)
        {
            $cities = DB::table("cities")
            ->where("state_id",$request->state_id)
            ->pluck("name","id");
            return response()->json($cities);
        }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function add2(Request $request) {
        $this->validate($request, [
            'branchname' => 'required',
            'name' => 'required',
            //'nationalcode'=>'required',
            'email'=>'required|unique:branches',
            'tell' => 'required',
            'mobile' => 'required',
            
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'code'=>'required'
                ],
                [
                    'branchname.required'=>'نام نمایندگی را وارد کنید',
                    'name.required'=>'نام و نام خانوادگی را وارد کنید',
//                    'nationalcode.required'=>'کد ملی  را وارد کنید',
                    'email.required'=>'ایمیل  را وارد کنید',
                    'email.unique'=>'ایمیل  تکراری است',
                    'tell.required'=>'تلفن را وارد کنید',
                    'mobile.required'=>'موبایل را وارد کنید',
                    'country.required'=>'استان را انتخاب کنید',
                    'state.required'=>'شهر را انتخاب کنید',
                    'address.required'=>'آدرس را وارد کنید',
                    'code.required'=>'کدپستی را وارد کنید'
                ]
        );
        Branch::create([
            'country_id'=>request('country'),
            'state_id'=>request('state'),
            'branchname' => request('branchname'),
            'name' => request('name'),
            'nationalcode' => request('nationalcode'),
            'email' => request('email'),
            'tell' => request('tell'),
            'mobile' => request('mobile'),
            'province' => request('country'),
            'city' => request('state'),
            'address' => request('address'),
            'code'=>request('code')
        ]);
        User::create([
           'name'=>request('name'),
            'email'=>request('email'),
            'password'=>Hash::make(request('mobile')),
            'branch'=>1
        ]);
        return back()->with('success','ok');
    }
    
    public function add22(){
        $bb=DB::table('Branch')->pluck('province');
        
        Branch::create([
            'branchname' => request('branchname'),
            'name' => request('name'),
            'tell' => request('tell'),
            'mobile' => request('mobile'),
            'province' => $bb,
            //'city' => request('city'),
            'address' => request('address'),
            
        ]);
        
    }

    public function show() {
        $branches = Branch::all();
        
        return view('show_branches', compact('branches'));
    }

    public function showhome() {
        $branches = Branch::all();
        $news = News::all();
        $products = AdminProduct::all();
        return view('home_page', compact('branches','products','news'));
    }
    
    public function edit(){
        $branches= Branch::all();
        return view('edit_branches',compact('branches'));
    }
    public function del($id)
    {
        return back()->with('del',$id);
    }
    public function delete($id){
        Branch::find($id)->delete();
        return back()->with('success','ok');
    }
    public function update($id){
        $branch=Branch::find($id);
        $countries = DB::table("countries")->pluck("name","id");
        return view('update_branch',compact('countries','branch'));
    }
    public function update2($id){
        $this->validate(request(), [
            'country' => 'required',
            'state' => 'required',
        ],[
            'country.required'=>'استان را انتخاب کنید',
            'state.required'=>'شهر را انتخاب کنید',
        ]);
       $branch= Branch::find($id);
       $branch->country_id= request('country');
       $branch->state_id= request('state');
       $branch->branchname= request('branchname');
       $branch->name= request('name');
       $branch->nationalcode= request('nationalcode');
       $branch->email= request('email');
       $branch->tell= request('tell');
       $branch->mobile= request('mobile');
       $branch->province= request('country');
       $branch->city= request('state');
       $branch->address= request('address');
       $branch->code= request('code');
       $branch->save();
       return back()->with('success','ok');
    }
   

}
