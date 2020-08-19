<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Accident;
use App\Alcohol;
use Auth;

class AccidentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical=Alcohol::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('tobacco.index');
        }
        else{
        return view("alcohol.create");
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
        $medical=Accident::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('alcohol.index');
        }
        else{
        return view("accident.create");
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

        $answer=$request['med'];
        if ($answer=='0') {
            return redirect()->route('accident.index')->with('Your have successful complete previous step please proceed with this step');   
        } elseif($answer=='1') {
          
            $validate=$request->validate([
                'date'=>'required',
                'place'=>'required|string',
                'detail'=>'required',
            ]);

            $accident=Accident::create([
                'date'=>$request['date'],
                'place'=>$request['place'],
                'detail'=>$request['detail'],
                'user_id'=>Auth::user()->id
            ]);

            if ($accident) {
                return redirect()->route('accident.index')->with('Your have successful complete previous step please proceed with this step'); 
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