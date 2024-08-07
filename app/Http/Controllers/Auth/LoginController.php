<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }


    public function showLoginForm()
    {
            
        foreach($uni as $key =>$value)
        {
            if ($key == 'student') {
                foreach ($value as $val =>$v){
                    
                    if ($v['name'] == 'nada') {
                        print('hello'.$v['name']);
                    }
                }     
            }
            }
         return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->credentials();


        if (Auth::guard('phone')->attempt($credentials)) 
        {
             return  parent::successResponse() ; 
        }

        return parent::errorResponse()  ;
    }

    public function logout(Request $request)
    {
       Auth::guard('phone')->logout();

  
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
