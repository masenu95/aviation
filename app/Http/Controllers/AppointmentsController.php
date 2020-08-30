<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use Auth;
use Mail;
class AppointmentsController extends Controller
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
        $validate=$request->validate([
            'date'=> 'required',
            'hr'=> 'required',
            'min'=> 'required',
        ]);
        $theseMatch=[
            'date'=>$request->date,
            'applicant_id'=>$request->applicant,
        ];
        $check=Appointment::where($theseMatch)->count();
        if($check<1){

            $appointment=Appointment::create([
                'doctor_id'=>Auth::user()->id,
                'applicant_id'=>$request->applicant,
                'date'=>$request->date,
                'time'=>$request->hr.':'.$request->min,
            ]);

            if($appointment){
             
                $data = array('name'=>"Virat Gandhi");
   
                Mail::send(['text'=>'mail'], $data, function($message) {
                $message->to('masenu95@gmail.com', 'Tutorials Point')->subject
                    ('Laravel Basic Testing Mail');
                $message->from('infoaviation@gmail.com','Virat Gandhi');
                 });
            echo "Basic Email Sent. Check your inbox.";
            }
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
