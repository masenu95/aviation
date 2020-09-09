<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    //
    protected $fillable =[
        'recommendation','datefrom','dateto','occupation','user_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
