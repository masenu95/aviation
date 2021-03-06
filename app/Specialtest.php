<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialtest extends Model
{
    //
    protected $fillable = [
        'test','date_performed','result','next_due','doctor_id','applicant_id'
    ];

    public function applicant(){
        return $this->belongsTo('App\Applicant');
    }

    public function doctor(){
        return $this->belongsTo('App\Doctor');
    }
}
