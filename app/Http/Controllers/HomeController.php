<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function panel(){
        if(!auth()->user()) {
            return view('auth\login');
        }
        elseif(auth()->user()->admin==1) {
            $branches = Branch::all();
            return view('admin', compact('branches'));
        };
    }
    public function logout(Request $request){
       Auth::logout();
       return redirect('/');
       parent::logout($request);
    }

    
}
