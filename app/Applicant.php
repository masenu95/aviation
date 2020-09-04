<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    //
        //
        protected $fillable = [
            'user_id',
        ];
    
        
        public function user(){
            return $this->belongsTo('App\User');
        }
    
        public function doctors(){
            return $this->belongsToMany('App\Doctor');
        }

     
}
