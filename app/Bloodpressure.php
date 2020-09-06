<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodpressure extends Model
{
    //
    protected $fillable = [
        'systolic','diastolic','doctor_id','applicant_id',
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
