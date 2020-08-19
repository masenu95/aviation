<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restriction extends Model
{
  
    //
    protected $fillable = [
      'detail','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
