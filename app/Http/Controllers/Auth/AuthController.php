<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|max:255',
    //         'email' => 'required|email|max:255|unique:users',
    //         'password' => 'required|confirmed|min:6',
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => bcrypt($data['password']),
    //     ]);
    // }

    
    public function postLogin(LoginRequest $request)
    {
        $logValue = $request->input('log');
     
        $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
     
        $credentials = [$logAccess => $logValue, 'password' => $request->input('password')];
        // dd($this->auth->attempt($credentials, $request->has('memory')));
        
        if ($this->auth->attempt($credentials, $request->has('memory')))
        {
            return redirect('/');
        }
     
        return redirect('/auth/login')
        ->with('error', trans('front/login.credentials'))
        ->withInput($request->only('email'));
    }

    public function postRegister(
    RegisterRequest $request,
    UserRepository $user_gestion)
    {
        $user = $user_gestion->store($request->all());
     
        $this->auth->login($user);
     
        return redirect('/')->with('ok', trans('front/register.ok'));
    }


}
