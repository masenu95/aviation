<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Clinicalexam;
use App\Doctor;

class ClinicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('doctor.phy.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $doctor=Doctor::where('user_id',Auth::user()->id)->first();

        $these=[
            'doctor_id'=>$doctor->id,
            'applicant_id'=>$id,
        ];
        $date=date("Y-m-d H:i:s");
       
        return view('doctor.clinic.create',['applicant'=>$id]);
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
            'head'=> 'required|string|max:255',
            'ent'=> 'required|string|max:255',
            'opthalmology'=> 'required|string|max:255',
            'chest'=> 'required|string|max:255',
            'cardio'=> 'required|string|max:255',
            'abdomen'=> 'required|string|max:255',
            'anus'=> 'required|string|max:255',
            'endocrine'=> 'required|string|max:255',
            'psychiatric'=> 'required|string|max:255',
            'neurological'=> 'required|string|max:255',
            'skin'=> 'required|string|max:255',
            'musculoskeletal'=> 'required|string|max:255',
            'general'=> 'required|string|max:255',
            'identifying'=> 'required|string|max:255',
        ]);
            $doctor=Doctor::where('user_id',Auth::user()->id)->first();

        $clinics= Clinicalexam::create([
                'headneck'=>$request->head,
                'entsystem'=>$request->ent,
                'ophthalmology'=>$request->opthalmology,
                'chest'=>$request->chest,
                'cardio'=>$request->cardio,
                'abdomen'=>$request->abdomen,
                'anus'=>$request->anus,
                'endocrine'=>$request->endocrine,
                'psychlatric'=>$request->psychiatric,
                'neurological'=>$request->neurological,
               'skin'=>$request->skin,
               'musculoskeletal'=>$request->musculoskeletal,
               'general'=>$request->general,
               'identifying'=>$request->identifying,
               'doctor_id'=>$doctor->id,
          	   'applicant_id'=>	$request->applicant,						
        ]);
        if ($clinics) {
            return redirect()->route('clinical.index')->with(['success'=>'Your have successful complete previous step please proceed with this step','applicant'=>$request->applicant]); 
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
        return 'masenu';
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
