<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audiogram extends Model
{
    //
    protected $fillable = [
        'left','right','doctor_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
