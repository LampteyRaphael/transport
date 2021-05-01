<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuditPhotos extends Model
{
    //
    protected $uploads='/AuditImages/';

    protected $fillable=['file'];

    public function getFileAttribute($photo){

        return $this->uploads.$photo;
    }
}
