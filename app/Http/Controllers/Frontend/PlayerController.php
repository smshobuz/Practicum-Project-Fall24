<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PlayerController extends Controller
{
    public function registrationForm()
    {
        return view('frontend.pages.registration');
    }


    public function registration(Request $request)
    {
       //validation

    //    dd($request->all()); 
       $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed',
            'mobile_number'=>'required|min:11|max:11'
       ]);

       if ($validate->fails())
       {
        
        notify()->error($validate->getMessageBag());

        return redirect()->back();


       }
      

       //file handle
       $fileName='';
       if($request->hasFile('image'))
       {
        $image=$request->file('image');
        //generate name
        $fileName=date('Ymdhis').'.'.$image->getClientOriginalExtension();
        //now store image in local filesystem
        $image->storeAs('/frontend/uploads',$fileName);
       }
      

       //query

       Registration::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
        'address'=>$request->address,
        'mobile'=>$request->mobile_number,
        'image'=>$fileName
       ]);

    //    notify()->success('Customer Registration Success.');
       return redirect()->route('frontend.home');
    }

    public function login(Request $request)
    {
      //dd($request->all());
       
        //validate

      $checkValidation = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
      ]);
      //dd($checkValidation);
      $playerInput = $request->except('_token');
   //   dd($playerInput);
      $checkLogin = auth('playerGuard')->attempt($playerInput);
   //  dd($checkLogin);
      if ($checkLogin){
       // $player = auth('playerGuard')->user();
        return redirect()->route('frontend.home')->with("Login successfull");
      }
        else {
            return redirect()->back()->with("login failed");
        }
        
    }
    public function logout()
    {
        auth('playerGuard')->logout();
        return redirect()->route('frontend.home')->with("logout");
    }
    public function view(){
      $player=Player::all();
      return view('frontend.pages.player',compact('player'));
    }
}
