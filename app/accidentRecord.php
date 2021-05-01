<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accidentRecord extends Model
{
    //


    public function vehicle(){

        return $this->belongsTo('App\vehicles');

    }
}
