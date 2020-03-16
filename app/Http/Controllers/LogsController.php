<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Auth;

class LogsController extends Controller
{
    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email'=>'required|unique:users',
            'pass'=>'required',
            're-pass'=>'required|same:pass'

        ],
            [
                'name.required'=>'نام  را وارد کنید',
                'email.required'=>'ایمیل  را وارد کنید',
                'email.unique'=>'ایمیل  تکراری است',
                'pass.required'=>'رمز عبور  را وارد کنید',
                're-pass.required'=>'تکرار رمز عبور را وارد کنید',
                're-pass.same'=>'رمز عبور صحیح نمی باشد'

            ]
        );

        User::create([
            'email'=>request('email'),
            'name'=>request('name'),
            'password'=>Hash::make(request('pass'))


        ]);
        return back()->with('success','ok');


    }
    public function login(){
        return view('login');
    }



    /**
     *
     */
    public function logs(){
        $email=request('email');
        $password=(request('password'));
        //$t=Hash::check('plain-text', $hashedPassword);

        $user=User::all()->where('email',$email)->first();

        if (Hash::check($password,$user->password)){
            return view('home_page');
        }
        else{
            echo 'error';
        }

        //dd($t);
        dd($user->password);
        }
}
