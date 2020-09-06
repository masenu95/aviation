<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restingpulse extends Model
{
    //
    protected $fillable=[ 
        'ratebpm','rythm_reg','rythm_irreg','doctor_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
