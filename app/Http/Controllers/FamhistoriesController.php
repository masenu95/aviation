<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Famhistory;
use App\Family;
use App\Doctor;
use App\Applicant;

class FamhistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home')->with('message','Congratulation ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medical=Famhistory::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('select.create');
        }
        else{
        $families=Family::all();
        $doctors=Doctor::all();
        return view('family.create',['families'=>$families,'doctors'=>$doctors]);
        }
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

       
        date('Y.m.d');
        foreach ($request['family'] as $family) {
         $medical=Famhistory::create([
                'family_id'=>$family,
                'user_id'=>Auth::user()->id,
                'date'=>date('Y.m.d'),
         ]);
        }

        $doctor=Doctor::where('id',$request['doctor'])->first();
        $applicant=Applicant::where('user_id',Auth::user()->id)->first();
        $doctor->applicants()->attach( $applicant->id);
        return redirect()->route('home')->with('message','Your have successful complete previous step please proceed with this step');
        
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
