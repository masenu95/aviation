<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clinicalexam extends Model
{
    //
        protected $fillable = [
              'headneck','entsystem','ophthalmology','chest','cardio','abdomen','anus','endocrine','psychlatric', 
              'neurological','skin','musculoskeletal','general','identifying','doctor_id','applicant_id', 
        ];

        public function applicant(){
            return $this->belongsTo('App\Applicant');
        }

        public function doctor(){
            return $this->belongsTo('App\Doctor');
        }

}
