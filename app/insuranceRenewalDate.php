<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insuranceRenewalDate extends Model
{
       protected $fillable=[
            'renewalDate',
            'expiringDate',
            'vehicle_id'
        ];

    public function vehicle(){

        return $this->belongsTo('App\vehicles');

    }

}
