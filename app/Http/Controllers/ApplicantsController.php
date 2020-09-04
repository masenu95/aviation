<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\Doctor;
use App\Selected;
use App\Appointment;
use Auth;


class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users=Doctor::where('user_id',Auth::user()->id)->first();
        return view('doctor.applicant.index',['users'=>$users,'i'=>1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      
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
      
        $applicant=Applicant::find($id);
        $doctor=$applicant->doctors()->where('user_id',Auth::user()->id)->first();

     
        $these=[
            'doctor_id'=>$doctor->id,
            'applicant_id'=>$applicant->id
        ];


        $appointment=Appointment::where($these)->where('date', '>=', date("Y-m-d"))->first();

  
       
       
      return view('doctor.applicant.show',['applicant'=>$applicant,'appointment'=>$appointment]);
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
