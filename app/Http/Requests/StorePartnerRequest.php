<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ImageHandling;


class StorePartnerRequest extends FormRequest
{
    use ImageHandling;

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
            'logo'=>'required' ,   
            'name'=>'required|string|max:100' ,
             
        ];
    }
    public function getData():array
    {
        $data =  $this->validated();

        if ($this->hasFile('logo')) 
        {
            $imageName = $this->storeImage( "PartnerImage" , $this->file('logo'));
            $data['logo'] = $imageName  ;
            return $data ; 
         } else {
            return response()->json(['error' => 'No image file found.'], 400);
        }
 
    }
}
