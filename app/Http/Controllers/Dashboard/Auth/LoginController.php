<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\LoginAdminsRequest;
use Illuminate\Support\Facades\Auth;


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
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 

    public function showLoginForm()
    {
         return view('dashboard.auth.login');
    }

    public function login(LoginAdminsRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials))
        {   
            $admin = Auth::guard('admin')->user();
            $user_id = $admin->id; 
            $admin_user = Admin::find($user_id); 
             if ($admin_user) {

                 Auth::guard('admin')->login($admin_user);
                 return response()->json([
                    'status' => true,
                    ], 202); 
            }else
            {
                return response()->json([
                    'errors' => "not found user",
                ], 404);      
            }      
            
           
        }
            else 
        {       
            return response()->json([
                'errors' => "email and password not correct",
            ], 422);    
        }
    }

    public function destroy(Request $request)
    {
      Auth::guard('admin')->logout();

        $this->guard->logout();
 
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
