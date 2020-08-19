<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tobaccoproduct;
use Auth;

class TobaccoproductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("medication.create");

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("tobacco.create");
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
            return redirect()->route('tobacco.index')->with('Your have successful complete previous step please proceed with this step');   
        } elseif($answer=='1') {
          
            $validate=$request->validate([
                'state'=> 'required|string|max:255',
                'amount'=>'required',
                'years'=>'required|string',
                
            ]);

            $tobacco=Tobaccoproduct::create([
                'status'=>'current',
                'datestopped'=>'up to now',
                'state'=>$request['state'],
                'amount'=>$request['amount'],
                'years'=>$request['years'],
                'user_id'=>Auth::user()->id
            ]);

           
            
        } elseif($answer=='2') {
            
            $validate=$request->validate([
                'datestopped'=> 'required|string|max:255',
                
            ]);

            $tobacco=Denideexam::create([
             
                'datestopped'=>$request['datestopped'],
             
            ]);
        }

        if ($tobacco) {
            return redirect()->route('tobacco.index')->with('Your have successful complete previous step please proceed with this step'); 
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
