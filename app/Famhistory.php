<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Famhistory extends Model
{
    //

        //
        protected $fillable = [
            'family_id','user_id','date'
        ];
    
        
        public function user(){
            return $this->belongsTo('App\User');
        }
}
