<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EyeController extends Controller
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
    public function create($id)
    {
        //
        return view('doctor.bp.create',['applicant'=>$id]);
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
      "right" => "required",
      "left" => "required",
      "both" => "required",
      "rightinterm" =>"required",
      "leftinterm" => "required",
      "bothinterm" => "required",
      "egc-date" => "required",
      "egc-result" =>"required",
      "egc-next" => "required",
      "bgroup-date" => "required",
      "bgroup-result" =>"required",
      "bgroup-next" => "required",
      "bglucose-date" => "required",
      "bglucose-result" =>"required",
      "bglucose-next" => "required",
      "hiv-date" => "required",
      "hiv-result" => "required",
      "hiv-next" => "required",
      "hb-date" => "required",
      "hb-result" => "required",
      "hb-next" => "required",
      "upt-date" => "required",
      "upt-result" => "required",
      "upt-next" => "required",
      "applicant" => "required",
        ]);

        dd($request);
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
