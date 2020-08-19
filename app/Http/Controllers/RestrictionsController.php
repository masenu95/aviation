<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restriction;
use Auth;
use App\Disease;

class RestrictionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $diseases=Disease::all();
        return view("medhistory.create",['diseases'=>$diseases]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("medication.create");
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

        $answer=$request['med'];
        if ($answer=='0') {
            return redirect()->route('restriction.index')->with('Your have successful complete previous step please proceed with this step');   
        } elseif($answer=='1') {
          
            $validate=$request->validate([
               
                'detail'=>'required',
            ]);

            $medical=Restriction::create([
                'detail'=>$request['detail'],
                'user_id'=>Auth::user()->id
            ]);

            if ($medical) {
                return redirect()->route('restriction.index')->with('Your have successful complete previous step please proceed with this step'); 
            } else {
                # code...
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
