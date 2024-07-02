<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

 
class User extends Authenticatable implements AuthenticatableContract
{
    use HasApiTokens, Notifiable  ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone', // Add this line if you're using phone numbers for 2FA
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected function credentials(Request $request)
    {
        return $request->only($phone);
    }
    public function orders()
    {
     return $this->hasMany('App\Models\Order', 'user_id' , 'id');
    }
    public function rating()
    {
       return $this->hasMany('App\Models\Rating',  'user_id' , 'id');

    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];}


    
