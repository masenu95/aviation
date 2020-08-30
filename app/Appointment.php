<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
        'doctor_id','applicant_id','date','time',
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
