<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eye;
use App\Audiogram;
use App\Specialtest;


class EyeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('doctor.bp.create',['applicant'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validate=$request->validate([
      "right" => "required",
      "left" => "required",
      "both" => "required",
      "rightinterm" =>"required",
      "leftinterm" => "required",
      "bothinterm" => "required",
      "egc-date" => "required",
      "audiogramright" => "required",
      "audiogramleft" => "required",
      "egc-result" =>"required",
      "egc-next" => "required",
      "bgroup-date" => "required",
      "bgroup-result" =>"required",
      "bgroup-next" => "required",
      "bglucose-date" => "required",
      "bglucose-result" =>"required",
      "bglucose-next" => "required",
      "hiv-date" => "required",
      "hiv-result" => "required",
      "hiv-next" => "required",
      "hb-date" => "required",
      "hb-result" => "required",
      "hb-next" => "required",
      "upt-date" => "required",
      "upt-result" => "required",
      "upt-next" => "required",
      "applicant" => "required",
        ]);

       

        $doctor=Doctor::where('user_id',Auth::user()->id)->first();

        $at6m=Eye::create([
            'righteye'=>$request->right,
            'lefteye'=>$request->left,
            'botheyes'=>$request->both,
            'test'=>'Distance at 6M',
            'doctor_id'	=>$doctor->id,
            'applicant_id'=>$request->applicant,
        ]);

        if($at6m){
            $interm=Eye::create([
                'righteye'=>$request->rightinterm,
                'lefteye'=>$request->leftinterm,
                'botheyes'=>$request->bothinterm,
                'test'=>'Intermediate vision N14 at 100cm',
                'doctor_id'	=>$doctor->id,
                'applicant_id'=>$request->applicant,
            ]);

            if($interm){
                $audio=Audiogram::create([
                    'left'=>$request->audiogramright,
                    'right'=>$request->audiogramleft,
                    'doctor_id'	=>$doctor->id,
                    'applicant_id'=>$request->applicant,
                ]);

                if($audio){
                    $ecg=Specialtest::create([
                        'test'=>'Resting ECG',
                        'date_performed'=>$request->egcdate,
                        'result'=>$request->egcresult,
                        'next_due'=>$request->egcnext,
                        'doctor_id'	=>$doctor->id,
                        'applicant_id'=>$request->applicant,
                    ]);
                }
            }
        }

   
      
    
      "bgroup-date" => "2020-09-17"
      "bgroup-result" => "jkasfsa"
      "bgroup-next" => "2020-09-26"
      "bglucose-date" => "2020-09-17"
      "bglucose-result" => "sdj,sdvjkl"
      "bglucose-next" => "2020-09-29"
      "hiv-date" => "2020-09-07"
      "hiv-result" => "fhjkafhaf"
      "hiv-next" => "2020-09-14"
      "hb-date" => "2020-09-24"
      "hb-result" => "jhsd"
      "hb-next" => "2020-09-16"
      "upt-date" => "2020-09-23"
      "upt-result" => "sdfjshdf"
      "upt-next" => "2020-09-24"
      "applicant" => "1"
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
