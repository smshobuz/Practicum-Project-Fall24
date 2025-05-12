<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function trainer(){
        $alltrainer=Trainer::paginate(9);
        return view ('backend.pages.trainer_store',compact('alltrainer'));
    }

    public function trainer_create(Request $request){
          //dd($request->all());
      Trainer::create([
        'name'=>$request->name,
        'address'=>$request->address,
        'experience'=>$request->experience,
        'previous_organization'=>$request->previous_organization,
        'mobile'=>$request->mobile,
 



    ]);
    return redirect()->back();
}  
    

    public function trainer_store(){
        return view('backend.pages.trainer_create');
        
    }
    public function delete($id)
    {
        $alltrainer=Trainer::find($id);
        $alltrainer->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $alltrainer=Trainer::find($id);
        return view('backend.pages.ground_edit',compact('alltrainer'));
        
    }
    public function update(Request $request,$id){
        Trainer::find($id)->update([
        'name'=>$request->name,
        'address'=>$request->address,
        'experience'=>$request->experience,
        'previous_organization'=>$request->previous_organization,
        'mobile'=>$request->mobile,
        ]);
        return redirect()->back();
    }

}
    