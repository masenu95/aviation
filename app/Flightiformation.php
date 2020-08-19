<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flightiformation extends Model
{
    //

    protected $fillable = [
        'licence_no','licence_type','type_of_flight','last_six','last_twelve','total','flying_intended','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
