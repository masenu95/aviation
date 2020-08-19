<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //
    protected $fillable = [
        'user_id',
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function applicants(){
        return $this->belongsToMany('App\Applicant');
    }
}
