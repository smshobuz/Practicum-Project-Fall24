<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('backend.pages.login');
    }
    public function do_login(Request $request){
        // dd($request->all());
        $credential=$request->except('_token');
       // dd($credential);
        $check=(Auth::attempt($credential));

        if($check)
        {
            // notify()->success('Login Successfully');
            return redirect()->route('home');
        }
        else
        {
      return redirect()->back() ;
     }
    }
   public function logout(){
    Auth::logout();
    return redirect()->route('login');

   }
}
