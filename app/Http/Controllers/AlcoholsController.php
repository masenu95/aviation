<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alcohol;
use App\Tobaccoproduct;
use Auth;

class AlcoholsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medical=Tobaccoproduct::where('user_id',Auth::user()->id)->latest('created_at')->first();
        if($medical){
            return redirect()->route('medication.index');
        }
        else{
        return view("tobacco.create");
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

        return view("alcohol.create");
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
            return redirect()->route('alcohol.index')->with('Your have successful complete previous step please proceed with this step');   
        } elseif($answer=='1') {
          
            $validate=$request->validate([
                'quantity'=> 'required|string|max:255',
            ]);

            $alcohol=Alcohol::create([
                'quantity'=>$request['quantity'],
                'user_id'=>Auth::user()->id
            ]);

            if ($alcohol) {
                return redirect()->route('alcohol.index')->with('Your have successful complete previous step please proceed with this step'); 
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
