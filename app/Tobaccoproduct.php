<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tobaccoproduct extends Model
{
    //

    protected $fillable = [
        'status','state','datestopped','status','amount','years','user_id'
      ];
  
      
      public function user(){
          return $this->belongsTo('App\User');
      }
}
