<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            "logo_header" =>  [''] ,
            "logo_footer" =>  [''], 
            "name_website" =>  ['required', 'string'  , 'max:80'], 
            "header_card_top" =>  ['required', 'string' ,'max:100']   , 
            "content_card_top" =>  ['required', 'string'  , 'max:250'], 
            "video_card_top" =>  [''], 
            "header_card_buttom" =>  ['required', 'string'  ,'max:100'], 
            "content_card_buttom" =>  ['required', 'string' , 'max:250'], 
            "longer_image" =>  [''], 
            "short_image_top" =>  [''], 
            "short_image_buttom" =>  [''], 
            "privacy_policy" =>  ['required', 'string'  ,'max:850'], 
            "TermsConditions" =>  ['required', 'string' ,'max:850'], 
 

        ];
    }
}
