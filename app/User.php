<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','is_active','role_id','photo_id'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


//    protected $table=['users'];

    public function role(){

        return $this->belongsTo(Role::class);

    }

    public function audit(){

        if ($this->role->name=='audit administrator'  && Auth::user()->is_active==1){
            return true;
        }
        return false;
    }

    public function  transport(){

        if ($this->role->name=='transport administrator'  && Auth::user()->is_active==1){
            return true;
        }
        return false;
    }

    public function photo(){

        return  $this->belongsTo(Photos::class);

    }


}
