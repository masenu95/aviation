<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Urinal extends Model
{
    //
    protected $fillable = [
        'ph','sugar','protein','apperance','blood','applicant_id','doctor_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }

}
