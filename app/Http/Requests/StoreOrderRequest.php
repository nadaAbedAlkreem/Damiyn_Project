<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class StoreOrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'mobile_phone_vendor' => ['required','numeric','digits:10'],
            'type_request' => ['required', 'string'],
            'description' => ['required', 'string', 'max:500'],
        
        ];
    }
    public function getData()
    {
        $data =  $this->validated();
        $user_currnt = Auth::guard('phone')->user();
        $data['user_id'] = $user_currnt->id ;     
        $data['code'] = $data['type_request'].substr((string)Str::uuid() , 0 , 4) ;       
        return $data;
    }
 
}
