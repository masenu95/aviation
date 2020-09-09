<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reguser = User::all()->count();
        $accesor = User::where('role_id',2)->count();
        $doctor = User::where('role_id',3)->count();
        if (Auth::user()->role_id==1) {
            return view('admin.home',['reguser'=>$reguser,'accesor'=>$accesor,'doctor'=>$doctor]);
        }else if(Auth::user()->role_id==2){
            return view('accessor.home');
        }else if(Auth::user()->role_id==3){
            return view('doctor.home');
        }else if(Auth::user()->role_id==4){
            return view('home');
        }
       
    }
}
