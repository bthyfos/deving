<?php

namespace App\Http\Controllers\Auth;


use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin');
    }
   public function showLoginForm()
   {
       return view('auth.admin-login');
   }


   public function login(Request $request)
   {
       //return true;
       $this->validate($request,[
           'email'=>'required|email',
           'password'=>'required'
       ]);

       if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password], $request->remember))
       {
            return redirect()->intended(route('admin.dashboard'));
       }
       return redirect()->back()->withInput($request->only('email','remember'));


   }

}
