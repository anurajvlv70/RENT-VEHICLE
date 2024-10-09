<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carData;

class carController extends Controller
{
    public function carHave(){
        return view('carHave');
    }

    public function carStore(Request $request){
        $details=carData::create([
                'name'=>$request->name,
                'brand'=>$request->brand,
                'rate'=>$request->rate,
                'phone'=>$request->phone,
    
            ]);
            return view('carHave');
    }
    public function carTake($id){
    
        $user=carData::where('id',$id)->first();
        return view('confirm');
        $user->delete();
        return redirect()->route('all-details');
       
       }

       public function back(){
        return view('carWant');
       }


       public function carDel($id){
    
        $user=carData::where('id',$id)->first();
        $user->delete();
        return redirect()->route('all-details');
       }


       public function carEdit(Request $request){
        $id=$request->input('id');
        $user=carData::where('id',$id)->first();
        $detail=$user->update([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'rate'=>$request->rate,
            'phone'=>$request->phone,
    
        ]);
        return redirect()->route('all-details');
        }


       public function allRecord(){
    
        $details=carData::all();
        return view('carWant',compact('details'));
       }
    
       public function edit2($id){
    
        $user=carData::where('id',$id)->first();
        return view('carEdit',compact('user'));
       }
    
}
