<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roadWorthyRenewalDate extends Model
{
    //road worthy
    protected $fillable=[
        'renewalDate',
        'expiringDate',
        'vehicle_id'
    ];

    public function vehicle(){

        return $this->belongsTo('App\vehicles');

    }

}
