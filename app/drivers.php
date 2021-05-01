<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drivers extends Model
{
    //
    protected $fillable=[
        'name',
        'tel',
        'email',
        'vehicle_id'
    ];
    public function vehicle(){

        return $this->belongsTo(vehicles::class);

    }


}
