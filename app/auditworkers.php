<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class auditworkers extends Model
{
    protected $fillable = [
        'name', 'email', 'phoneNumber','audit_photos_id','photo_id'
    ];


    public function photo(){
        return  $this->belongsTo(Photos::class,'photo_id');
    }

    public function signature(){
        return  $this->belongsTo(AuditPhotos::class,'audit_photos_id');
    }



}
