<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommendation;
use Auth;


class RecommendationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::user()->role_id == 2){
            $reco = Recommendation::where('occupation','Doctor')->get();

            return view('accessor.applicant.index',['reco'=>$reco,'i'=>1]);
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
            'recom'=> 'required|max:255',
            'datefrom'=> 'required|string|max:255',
            'dateto'=> 'required|string|max:255',
            'comment'=> 'required|string',
        ]);

        $reco = Recommendation::create([
            'recommendation'=>$request->recom,
            'datefrom'=>$request->datefrom,
            'dateto'=>$request->dateto,
            'occupation'=>Auth::user()->occupation,
            'user_id'=>Auth::user()->id,
            'applicant_id'=>$request->applicant
        ]);

        if($reco){
            return redirect()->route('home')->with('success','successful recomandation arleady sent');
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
        $reco=Recommendation::find($id);
        return view('accessor.applicant.show',['reco'=>$reco]);
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
