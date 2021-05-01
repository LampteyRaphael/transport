<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicing extends Model
{
    //entries of database for servicing of vehicles
    protected $fillable=[
        'description',
        'amount',
        'garageName',
        'datePresented',
        'dateReturned',
        'vehicle_id',
    ];

    public function vehicle(){

        return $this->belongsTo('App\vehicles');

    }

}
