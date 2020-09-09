<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicalhistory extends Model
{
    //
    protected $fillable = [
        'disease_id','user_id','date'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function disease(){
        return $this->belongsTo('App\Disease');
    }
}
