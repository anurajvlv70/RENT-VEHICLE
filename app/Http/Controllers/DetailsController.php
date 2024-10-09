<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BregData;


class DetailsController extends Controller
{
    public function bikeHave(){
        return view('bikeHave');
    }

    public function bikeStore(Request $request){
        $details=BregData::create([
                'name'=>$request->name,
                'brand'=>$request->brand,
                'rate'=>$request->rate,
                'phone'=>$request->phone,
    
            ]);
            return view('bikeHave');
    }
    public function bikeTake($id){
        // dd($id);
        $user=BregData::where('id',$id)->first();
        return view('confirm',compact('id'));
        $user->delete();
        return redirect()->route('all-bikedetails');
       
       }

       public function back(){
        return view('bikeWant');
       }


       public function bikeDel($id){
    
        $user=BregData::where('id',$id)->first();
        
        $user->delete();
        return redirect()->route('all-bikedetails');
       }


       public function bikeEdit(Request $request){
        $id=$request->input('id');
        $user=BregData::where('id',$id)->first();
        $detail=$user->update([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'rate'=>$request->rate,
            'phone'=>$request->phone,
    
        ]);
        return redirect()->route('all-bikedetails');
        }


       public function allRecord(){
    
        $details=BregData::all();
        return view('bikeWant',compact('details'));
       }
    
       public function edit($id){
    
        $user=BregData::where('id',$id)->first();
        return view('bikeEdit',compact('user'));
       }
    
}
