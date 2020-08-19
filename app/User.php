<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'email', 'password','phone', 'occupation', 'postal_addr','postal_code','telephone',
        'dob','nationality','id_no','gender','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function flightiformation(){
        return $this->hasOne('App\Flightiformation');
    }

    public function denideexam(){
        return $this->hasOne('App\Denideexam');
    }

    public function accident(){
        return $this->hasOne('App\Accident');
    }

    public function alcohol(){
        return $this->hasOne('App\Alcohol');
    }

    public function tobacco(){
        return $this->hasOne('App\Tobaccoproduct');
    }
}
