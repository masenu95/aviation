<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspect extends Model
{
    //
    protected $fillable = [
        'mental','behavior','physical','advice','doctor_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}

				