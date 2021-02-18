<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use Illuminate\Http\Request;
use Bouncer;
class RegisterInvestorController extends Controller
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

   // use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
   // protected $redirectTo = '/admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
            
            return view('register.index');
       
        
        
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function registeruser(array $data)
    {
        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        // ]);

        $user = User::create($request->all());

              //

        // Return success
    return response()->json(
      [
        'status' => '200',
        'data' => $user,
        'message' => 'success'
      ],200
    );

       // return response()->json("hello");
    }

    public function store(Request $request)
    {
        if ((User::where('email', $request->email)->doesntExist())) {
        $user = User::create($request->all());
        Bouncer::assign('Customer')->to($user);

        // Return success
    return response()->json(
      [
        'status' => '200',
        'data' => $user,
        'message' => 'success',
      ],200
    );
    }
    else{
        return response()->json(
      [
        'status' => '200',
        'data' => $user,
        'message' => 'already exist',
      ],200);
    }

              //


    }
}
