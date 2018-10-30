<?php

namespace App\Http\Controllers;

use App\Credit;
use Illuminate\Http\Request;

class creditController extends Controller
{
    //
    public function addcredit(Request $request){
        if($request->isMethod('post')){
           $newCredit = new Credit();
            $newCredit->credit_number=$request->input('credit_number');
            $newCredit->exp_date=$request->input('exp_date');
            $newCredit->person_id=$request->input('person_id');
            $newCredit->save();
            return redirect('credits');
        }else{
            return view('AddCredit');
        }
    }
    /*public function AllCredit(){
        $credit=Credit::all();
        $arr=Array('credit'=>$credit);
        return view("product.view",$arr);
    }*/
}
