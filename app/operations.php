<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operations extends Model
{
    //operations data entry
    protected $fillable=[
        'driver_id',
        'departurePoint',
        'departureMileage',
        'destination',
        'date',
        'officerAssigned',
        'assignmentCompletionTime',
        'arrivalMileage',
        'vehicle_id'
    ];

    public function vehicle(){

        return $this->belongsTo(vehicles::class);

    }


    public function driver(){

        return $this->belongsTo(drivers::class);

    }


}
