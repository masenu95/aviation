<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physicalexam extends Model
{
    //
    protected $fillable=[
       'weight','height','bmi','eyecolor','haircolor'	
    ];
}
