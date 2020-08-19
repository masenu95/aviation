<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccesorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Auth::user()->role_id==2) {
            $users=User::where('role_id',3)->get();
            return view('accessor.doctor.index',['users'=>$users,'i'=>1]);
        }else{

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
        if (Auth::user()->role_id==2) {
            return view('accessor.doctor.create');
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
        if (Auth::user()->role_id==2) {
        $pass='aviation123456';

       $user=User::create([
            'fname' => ucfirst($request['fname']),
            'lname' => ucfirst($request['lname']),
            'postal_code' => ucfirst($request['postal_code']),
            'postal_addr' => ucfirst($request['postal_addr']),
            'phone' => ucfirst($request['phone']),
            'telephone' => ucfirst($request['telephone']),
            'dob' => ucfirst($request['dob']),
            'nationality' => ucfirst($request['nationality']),
            'id_no' => ucfirst($request['id_no']),
            'gender' => ucfirst($request['gender']),
            'occupation' => ucfirst($request['occupation']),
            'email' => ucfirst($request['email']),
            'password' => Hash::make($pass),
            'role_id'=>3,
        ]);
       

        if($user){
            $doctor=Doctor::create([
                'user_id'=>$user->id,
            ]);
            if($doctor){
                return redirect()->route('accesor.index')->with('success',$user->fname.' '.$user->lname.' is registered');   
            }

          
        }
    }else{
        
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
          //
          if (Auth::user()->role_id==2) {
            $user=User::where('id',$id)->first();
            return view('accessor.doctor.edit',['user'=>$user]);
        }else{

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
        if (Auth::user()->role_id==2) {
            $user=User::where('id',$id)->first();
            $pass='aviation123456';
            if($user){
                $user->update([
                    'fname' => ucfirst($request['fname']),
                    'lname' => ucfirst($request['lname']),
                    'postal_code' => ucfirst($request['postal_code']),
                    'postal_addr' => ucfirst($request['postal_addr']),
                    'phone' => ucfirst($request['phone']),
                    'telephone' => ucfirst($request['telephone']),
                    'dob' => ucfirst($request['dob']),
                    'nationality' => ucfirst($request['nationality']),
                    'id_no' => ucfirst($request['id_no']),
                    'gender' => ucfirst($request['gender']),
                    'occupation' => ucfirst($request['occupation']),
                    'email' => ucfirst($request['email']),
                    'password' => Hash::make($pass),
                ]);


               
                    if($user){

                      
                        return redirect()->route('accesor.index')->with('success',$user->fname.' '.$user->lname.' is updated'); 
                    }
                
            }
        }else{

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
