<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class repairs extends Model
{
    //repairs of car
    protected $fillable=[
        'date',
        'description',
        'amount',
        'garageName',
        'datePresented',
        'dateReturned',
        'vehicle_id'
    ];


    public function vehicle(){

        return $this->belongsTo('App\vehicles');

    }
}
