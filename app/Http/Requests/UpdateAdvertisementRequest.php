<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ImageHandling;

class UpdateAdvertisementRequest extends FormRequest
{
    use ImageHandling;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image'=>'' ,   
        ];
    }

    public function getData():array
    {
        $data =  $this->validated();

        if ($this->hasFile('image')) 
        {
            $imageName = $this->storeImage( "AdvertisementImage" , $this->file('image'));
            $data['image'] = $imageName  ;
        }
         return $data ; 

 
    }
}
