<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ground;
use Illuminate\Http\Request;

class GroundController extends Controller
{
    public function ground(){
        // return view ('backend.pages.ground');
        $allground=Ground::paginate(9);
        return view ('backend.pages.groundlist',compact('allground'));
    }
public function groundlist(){
    return view('backend.pages.groundform');
}
  
    
    public function groundform(Request $request){
    //    dd($request->all());
        Ground::create([
            'groundname'=>$request->groundname,
            'timeslot'=>$request->timeslot,
            'location'=>$request->location,
            'teamname'=>$request->teamname,



        ]);
        return redirect()->back();

    }
    public function delete($id)
    {
        $allground=Ground::find($id);
        $allground->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $allgrounds=Ground::find($id);
        return view('backend.pages.ground_edit',compact('allgrounds'));
        
    }
    public function update(Request $request,$id){
        Ground::find($id)->update([
            'groundname'=>$request->groundname,
            'timeslot'=>$request->timeslot,
            'location'=>$request->location,
            'teamname'=>$request->teamname,
        ]);
        return redirect()->back();
    }
    
}
