<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MembersController extends Controller
{
    public function club_members_role()
    {
        $allmembers=Member::all();
        return view('backend.pages.club_members_store',compact('allmembers'));
    }
    public function club_members_store()
    {
        $allmembers=Member::all();
        return view('backend.pages.club_members_create',compact('allmembers'));
    }
    
   
    public function club_members_create(Request $request)
    {
        
             $validation=Validator::make($request->all(),[
        
          'name'=>'required',
          'email'=>'required',
          'phone'=>'required',
          'role'=>'required',
          'image'=>'required'


             
        ]);

        $filename='';
        
if($request->hasFile('image'))
{

    $file=$request->file('image');

    $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
    // dd($request->all());
  



    $file->storeAs('/backend/uploads',$filename);
}

        Member::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'role'=>$request->role,
            'image'=>$filename,
            
        ]);
        return redirect()->back()->with('success', 'Form has been submitted');
    }
    public function role_delete($id){
        Member::find($id)->delete();
        return redirect()->back()->with('success', 'Player deleted successfully!');

    }
}
