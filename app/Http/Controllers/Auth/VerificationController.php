<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use App\Http\Requests\Verify2FARequest;
use App\Models\User;// 
use App\Models\UserCode;//
use App\Services\SmsService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Carbon\Carbon;


class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

 
    protected $smsService;

    public function __construct(SmsService $smsService)
    {
        $this->smsService = $smsService;
    }

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('signed')->only('verify');
    //     $this->middleware('throttle:6,1')->only('verify', 'resend');
    // }

    public function send2FACode(Request $request )
    {     
        
         $code = rand(10000, 99999);
         Session::put('2fa_code', $code);
         $user_currnt = Auth::guard('phone')->user();
         if(!$user_currnt)
         {
            return response()->json(['message' => 'User not found'], 404);

         }

         if ($user_currnt->failed_attempts >= 3 && Carbon::parse($user_currnt->last_attempt_at)->addHour()->isFuture()) 
         {
            return response()->json(['message' => 'Too many failed attempts. Try again after an hour.'], 429);
         }

         $userId = Auth::guard('phone')->id(); 
         $deleteRowNews= UserCode::where('user_id' , $userId)->delete(); 


         $user_code =  UserCode::create(
         [
            "code"=>$code , 
            "user_id" => $user_currnt->id , 
         ]);
        //   $response = $this->smsService->sendSms($user_currnt->phone, "Your verification code is: $code");
          return redirect()->route('verify-2fa');
    }

    public function showVerify2FAForm()
    {    
         
         return view('auth.verify-2fa');
    }

    public function verify2FACode(Request $request)
    {
         $phone  =   $request['phone'] ;  
         $id  =   $request['id'] ;  
 
         $code =intval($request['num1'].$request['num2'].$request['num3'].$request['num4'].$request['num5'] ); 
         $user_code = UserCode::where('user_id' , $id)->first();
         $user_currnt = User::where("id",$id )->first(); 
    
        if ($user_code->code == $code) 
            {
                Session::forget('2fa_code');
                $user_currnt->failed_attempts = 0;
                $user_currnt->last_attempt_at = now();
                $user_currnt->save();
                $deleteRowNews= UserCode::where('user_id' , $id)->delete();

                Auth::login($user_currnt);
                return response()->json(['message' => 'Verification successful'], 200);
            } else
            {
                $user_currnt->failed_attempts += 1;
                $user_currnt->last_attempt_at = now();
                $user_currnt->save();

                if ($user_currnt->failed_attempts >= 3) {
                    return response()->json(['message' => 'Too many failed attempts. Try again after an hour.'], 429);
                }
                return response()->json(['message' => 'Incorrect code'], 400);


            }
    }
    public function rsend2FACode($userId)
    {     
          if($userId != null)
         {
            $deleteRowNews= UserCode::where('user_id' , $userId)->delete();
            $code = rand(10000, 99999);
            Session::put('2fa_code', $code);
            $user_currnt = Auth::guard('phone')->user();
            if ($user_currnt->failed_attempts >= 3 && Carbon::parse($user_currnt->last_attempt_at)->addHour()->isFuture()) {
                return response()->json(['message' => 'Too many failed attempts. Try again after an hour.'], 429);
            }

            $user_currnt->failed_attempts += 1;
            $user_currnt->last_attempt_at = now();
            $user_currnt->save();
            $user_code =  UserCode::create(
            [
               "code"=>$code , 
               "user_id" => $user_currnt->id , 
            ]);
           //   $response = $this->smsService->sendSms($user_currnt->phone, "Your verification code is: $code");
           return response()->json(['message' => 'Verification code sent'], 200);
        }else
        {
            return response()->json([
                'message' => 'Missing or invalid data'
            ], 400);
        }
     
    }

}
