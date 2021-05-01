<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicles extends Model
{
    //vehicles details
    protected $fillable=[
        'id',
        'make',
        'regNo',
        'chasisNo',
        'yearMade',
        'purchaseDate',
        'colour',
        'countryOfOrigin',
        'cubicCentimeter',
        'fuel'
    ];

    public function roadworthy(){

        return $this->belongsTo('App\roadWorthyRenewalDate');
    }

    public function getMakeAttribute($value){

       return $this->attributes['make']=ucwords($value);
    }


  //  public function setNameAttribute($value){
//
//        return $this->attributes['name']=strtoupper($value);
//    }



}
