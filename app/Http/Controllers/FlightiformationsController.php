<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flightiformation;
use Auth;

class FlightiformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $d=strtotime("-2 Months");
        $date=date("Y-m-d H:i:s",$d);
        $flight=Flightiformation::where('user_id',Auth::user()->id)->where('created_at','>',$date)->first();

        return view('flight.index',['flight'=>$flight]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $d=strtotime("-2 Months");
        $date=date("Y-m-d H:i:s",$d);
        $flight=Flightiformation::where('user_id',Auth::user()->id)->where('created_at','>',$date)->first();

        if($flight){
            return view('flight.edit',['flight'=>$flight]);
        }  else{   
        return view('flight.create');
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
        $flight=Flightiformation::where('user_id',Auth::user()->id)->first();

        if($flight){
            return redirect()->route('flightinfo.index')->with('success flight information is added'); 
        }  else{    
        $flightinfo=Flightiformation::create([
            'licence_no' => ucfirst($request['licence_no']),
            'licence_type' => ucfirst($request['licence_type']),
            'type_of_flight' => ucfirst($request['type_of_flight']),
            'last_six' => intval($request['last_six']),
            'last_twelve' => intval($request['last_twelve']),
            'total' => intval($request['last_six'])+intval($request['last_twelve']),
            'flying_intended' => ucfirst($request['flying_intended']),
            'user_id' => Auth::user()->id,
        ]);
        
    }

        if($flightinfo){
            return redirect()->route('flightinfo.index')->with('success flight information is added'); 
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
        $flight=Flightiformation::where('id',$id)->first();
        if($flight){
            return view('flightinfo.edit',['flight'=>$flight]);
        
        } else{
            return redirect()->back();
        }
        
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
        $flight=Flightiformation::where('id',$id)->first();
        if($flight){
            $flight->update([
                'licence_no' => ucfirst($request['licence_no']),
                'licence_type' => ucfirst($request['licence_type']),
                'type_of_flight' => ucfirst($request['type_of_flight']),
                'last_six' => intval($request['last_six']),
                'last_twelve' => intval($request['last_twelve']),
                'total' => intval($request['last_six'])+intval($request['last_twelve']),
                'flying_intended' => ucfirst($request['flying_intended']),
            ]);
            if($flight){
                return redirect()->route('medical.create')->with('success flight information is added'); 
            }
    
        }

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
