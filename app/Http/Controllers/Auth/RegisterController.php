<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Applicant;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   protected function validator(array $data)
   {
    return Validator::make($data, [
        'fname' => ['required', 'string', 'max:255'],
        'lname' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'phone' => ['required', 'string', 'max:12', 'unique:users'],
        'gender' => ['required'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user=User::count();
        if($user<1){
            return User::create([
                'fname' => ucfirst($data['fname']),
                'lname' => ucfirst($data['lname']),
                'postal_code' => ucfirst($data['postal_code']),
                'postal_addr' => ucfirst($data['postal_addr']),
                'phone' => ucfirst($data['phone']),
                'telephone' => ucfirst($data['telephone']),
                'dob' => ucfirst($data['dob']),
                'nationality' => ucfirst($data['nationality']),
                'id_no' => ucfirst($data['id_no']),
                'gender' => ucfirst($data['gender']),
                'occupation' => ucfirst($data['occupation']),
                'email' => ucfirst($data['email']),
                'role_id'=>1,
                'password' => Hash::make($data['password']),
            ]);
        }else{
            $user= User::create([
                'fname' => ucfirst($data['fname']),
                'lname' => ucfirst($data['lname']),
                'postal_code' => ucfirst($data['postal_code']),
                'postal_addr' => ucfirst($data['postal_addr']),
                'phone' => ucfirst($data['phone']),
                'telephone' => ucfirst($data['telephone']),
                'dob' => ucfirst($data['dob']),
                'nationality' => ucfirst($data['nationality']),
                'id_no' => ucfirst($data['id_no']),
                'gender' => ucfirst($data['gender']),
                'occupation' => ucfirst($data['occupation']),
                'email' => ucfirst($data['email']),
                'password' => Hash::make($data['password']),
                'role_id'=>4,
            ]);
            if($user){
                    $applicant=Applicant::create([
                        'user_id'=>$user->id,
                    ]);
                    return $user;
            }
        }
    
    }
}
