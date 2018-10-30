<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    //
    public $table = 'credits';
    public function Person(){
        return $this->belongsTo('App\Person');
    }
}
