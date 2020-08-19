<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Disease;
use App\Medicalhistory;
use App\Famhistory;

class MedicalhistoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $medical=Famhistory::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('famhistory.create');
        }
        else{
            return redirect()->route('famhistory.create');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $medical=Medicalhistory::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('famhistory.create');
        }
        else{
        $diseases=Disease::all();
        return view('medhistory.create',['diseases'=>$diseases]);
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
        foreach ($request['disease'] as $disease) {
         $medical=Medicalhistory::create([
                'disease_id'=>$disease,
                'user_id'=>Auth::user()->id,
                'date'=>date('Y.m.d'),
         ]);
        }
        return redirect()->route('medhistory.index')->with('Your have successful complete previous step please proceed with this step');
        
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
