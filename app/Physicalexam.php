<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physicalexam extends Model
{
    //
    protected $fillable=[
       'weight','height','bmi','eyecolor','haircolor','doctor_id','applicant_id'	
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
