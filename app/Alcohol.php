<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alcohol extends Model
{
    //
    protected $fillable = [
        'quantity','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
