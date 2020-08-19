<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
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
        if (Auth::user()->role_id==1) {
            $users=User::where('role_id',2)->get();
            return view('admin.accessor.index',['users'=>$users,'i'=>1]);
        }elseif(Auth::user()->role_id==2){
            $users=User::where('role_id',3)->get();
            return view('accessor.doctor.index',['users'=>$users,'i'=>1]);
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
        if (Auth::user()->role_id==1) {
            return view('admin.accessor.create');
        }elseif(Auth::user()->role_id==2){
            $users=User::where('role_id',3)->get();
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
        if (Auth::user()->role_id==1) {
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
            'role_id'=>2,
        ]);
       

        if($user){
            return redirect()->route('accesor.index')->with('success',$user->fname.' '.$user->lname.' is registered'); 
        }
    }elseif(Auth::user()->role_id==2){
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
             return redirect()->route('accesor.index')->with('success',$user->fname.' '.$user->lname.' is registered'); 
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
          //
          if (Auth::user()->role_id==1) {
            $user=User::where('id',$id)->first();
            return view('admin.accessor.edit',['user'=>$user]);
        } elseif (Auth::user()->role_id==2) {
            $user=User::where('id',$id)->first();
            return view('accessor.doctor.edit',['user'=>$user]);
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
        if (Auth::user()->role_id==1) {
            $user=User::where('id',$id)->first();
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
                ]);
               
                    if($user){
                        return redirect()->route('accesor.index')->with('success',$user->fname.' '.$user->lname.' is updated'); 
                    }
                
            }
        }elseif (Auth::user()->role_id==2) {
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
