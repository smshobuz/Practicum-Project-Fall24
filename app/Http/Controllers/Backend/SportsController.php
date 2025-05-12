<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sport;

class SportsController extends Controller
{
    public function sports()
    {
        $allsports=Sport::paginate(9);
        return view('backend.pages.sports_store',compact('allsports'));
    }
    public function sports_store()
    {
        return view('backend.pages.sports_create');
    }
    // public function sports_create(Request $request)
    // {
    //     // dd($request->all());
    //    Sport::create([
    //     'name'=>$request->name,
    //     'description'=>$request->description,
    //     'image'=>$request->image,
    //    ]);
    //    return redirect()->back();
    // }
    



    public function sports_create(Request $request)
    {
        // dd($request->all());
       $request->validate([
           'name' => 'required|string|max:100',
          'description' => 'required|string',
          'image'=>'required'
         
       ]);
   
       //File name
       $fileName='';
       if($request->hasFile('image'))
   {
   
       $file=$request->file('image');
   
       $filename=date('Ymdhis').'.'.$file->getClientOriginalExtension();
       // dd($request->all());
       $file->storeAs('/backend/uploads',$filename);
   }
   //store file 
   
    $image = $request->file('image')->store('gallery', 'public');
   
       Sport::create([
           'name' => $request->name,
          'description' => $request->description,
          'image'=>$filename,
          
      ]);
      return redirect()->back()->with('success', 'Form has been submitted');
   
    }
}
