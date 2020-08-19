<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    //
    protected $fillable = [
        'date','place','detail','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
