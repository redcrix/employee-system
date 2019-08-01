<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

// App\Http\Controllers\Auth\RegisterController.php
    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fitst_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'emp_id' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'experience' => 'required|string|max:255',
            'joining _date' => 'required|date|max:255',
            'leaving _date' => 'required|date|max:255',
            'gender' => 'required|boolean|max:255',
            'salary' => 'required|string|max:255',
            'dob' => 'required|date|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|digits:10|unique:users',
            'designation' => 'required|string|max:255',
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

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'emp_id' => $data['emp_id'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'experience' => $data['experience'],
            'designation' =>$data['designation'],
            'designation' =>$data['designation'],
            'joining _date' => $data['joining _date'],
            'leaving _date' => $data['leaving _date'],
            'gender' => $data['gender'],
            'salary' =>$data['salary'],
            'dob' =>$data['dob'],
            'mobile' =>$data['mobile'],
            'address' =>$data['address'],
            'token' => str_random(40) . time(),
        ]);

        $user->notify(new UserActivate($user));

        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect()->route('login')
            ->with(['success' => 'Congratulations! your account is registered, you will shortly receive an email to activate your account.']);
    }

    /**
     * @param $token
     */
    public function activate($token = null)
    {
        $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->to('/')
                ->with(['error' => 'Your activation code is either expired or invalid.']);
        }

        $user->update(['token' => null, 'active' => User::ACTIVE]);

        return redirect()->route('login')
            ->with(['success' => 'Congratulations! your account is now activated.']);
    }
}
