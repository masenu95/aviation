<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eye extends Model
{
    //
    protected $fillable = [
        'righteye','lefteye','botheyes','test','doctor_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
