<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    //
    protected $fillable = [
        'name','dose','date','diagnosis','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
