<?php

namespace App\Http\Controllers;

use App\Credit;
use App\Person;
use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function view()
    {

            $person= new Person();
        $person->username="riadh";
        $person->save();

        $credit = new Credit();
        $credit->credit_number='5854';
        $credit->exp_date='2015-10-10';
        $credit->person_id=$person->id;
        $credit->save();

        $person1= new Person();
        $person1->username="bayen";
        $person1->save();

        $person2= new Person();
        $person2->username="narjes";
        $person2->save();

        return view('view');

    }
    public function display(){
        $per = Person::find(1);
        echo '<br/>';
        echo 'username : '.$per->username;
        echo '<br/>';

        echo 'credit cart number : '.$per->credit->credit_number;
        echo '<br/>';
}
public function di(){
        return view('credits');
}
}
