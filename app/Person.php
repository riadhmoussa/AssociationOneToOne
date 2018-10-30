<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public $table = 'persons';
    //one to one
    public function Credit(){
        return $this->hasOne('App\Credit');
    }
}
