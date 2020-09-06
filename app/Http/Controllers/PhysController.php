<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Doctor;
use App\Physicalexam;
use App\Bloodpressure;
use App\Restingpulse;
use App\Urinal;
use App\Aspect;

class PhysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('doctor.bp.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        return view('doctor.phy.create',['applicant'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation

        
        $validate=$request->validate([
            'weight'=> 'required|numeric|max:255',
            'height'=> 'required|numeric|max:255',
            'bmi'=> 'required|string|max:255',
            'eyecolor'=> 'required|string|max:255',
            'haircolor'=> 'required|string|max:255',
            'ratebpm'=> 'required|string|max:255',
            'rythm_reg'=> 'required|string|max:255',
            'rythm_irreg'=> 'required|string|max:255',
            'systolic'=> 'required|string|max:255',
            'diastolic'=> 'required|string|max:255',
            'ph'=> 'required|string|max:255',
            'sugar'=> 'required|string|max:255',
            'protein'=> 'required|string|max:255',
            'appearance'=> 'required|string|max:255',
            'blood'=> 'required|string|max:255',
            'mental'=> 'required|string|max:255',
            'behavior'=> 'required|string|max:255',
            'physical'=> 'required|string|max:255',
            'advice'=> 'required|string|max:255',
         
   		
        ]);
            $doctor=Doctor::where('user_id',Auth::user()->id)->first();

            			
        $phy=Physicalexam::create([
            'weight'=>$request->weight,
            'height'=>$request->height,
            'bmi'=>$request->bmi,
            'eyecolor'=>$request->eyecolor,
            'haircolor'=>$request->haircolor,
            'doctor_id'=>$doctor->id,
          	'applicant_id'=>$request->applicant,
        ]);

        if ($phy) {
                $bp=Bloodpressure::create([
                    'systolic'=>$request->weight,
                    'diastolic'=>$request->weight,
                    'doctor_id'=>$doctor->id,
                    'applicant_id'=>$request->applicant,
                ]);

                if($bp){
                    $restpulse=Restingpulse::create([
                        'ratebpm'=>$request->ratebpm,
                        'rythm_reg'=>$request->rythm_reg,
                        'rythm_irreg'=>$request->rythm_irreg,
                        'doctor_id'=>$doctor->id,
                        'applicant_id'=>$request->applicant,
                    ]);

                    if($restpulse){
                        				
                    $urinal=Urinal::create([
                        'ph'=>$request->ph,
                        'sugar'=>$request->sugar,
                        'protein'=>$request->protein,
                        'apperance'=>$request->appearance,
                        'blood'=>$request->blood,
                        'doctor_id'=>$doctor->id,
                        'applicant_id'=>$request->applicant,
                        ]);

                        if($urinal){
                            $aspect=Aspect::create([
                                'mental'=>$request->mental,
                                'behavior'=>$request->behavior,
                                'physical'=>$request->physical,
                                'advice'=>$request->advice,
                                'doctor_id'=>$doctor->id,
                                'applicant_id'=>$request->applicant,
                            ]);

                            if($aspect){
                                return redirect()->route('phy.index')->with(['success'=>'Your have successful complete previous step please proceed with this step','applicant'=>$request->applicant]); 	
                            }
                        }
                       
                    }
                }
        
            
        } else {
            # code...
        }
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
