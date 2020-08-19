<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Denideexam extends Model
{
    //
    protected $fillable = [
        'examiner','date','place','detail','user_id'
    ];

    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
