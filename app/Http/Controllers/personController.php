<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class personController extends Controller
{
    //
    public function addperson(Request $request){

        if($request->isMethod('post')){
            $newPerson = new Person();
            $newPerson->username=$request->input('username');
            $newPerson->save();
            $person=Person::all();
            $arr=Array('person'=>$person);
            return view("AddPerson",$arr);
        }else{
            $person=Person::all();
            $arr=Array('person'=>$person);
            return view("AddPerson",$arr);
        }
    }

    public function AllPerson(){
        $person=Person::all();
        $arr=Array('person'=>$person);
        return view("AddCredit",$arr);
    }
    public function afficherperson($id){
        $p=Person::find($id);
        $arr=Array('p'=>$p);
return view('person',$arr);
    }
}
