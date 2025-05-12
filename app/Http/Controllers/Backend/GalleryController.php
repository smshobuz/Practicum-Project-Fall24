<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
public function gallery()
{
     $allgallery=Gallery::paginate(9);
     return view('backend.pages.gallery_store',compact('allgallery'));
    
}
 public function store(){
     return view('backend.pages.gallery_create');
 }

 public function create(Request $request)
 {
    $request->validate([
        'title' => 'required|string|max:255',
       'description' => 'required|string',
      
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

    Gallery::create([
        'title' => $request->title,
       'description' => $request->description,
       'image'=>$filename,
       
   ]);
   return redirect()->back()->with('success', 'Form has been submitted');

 }
}
