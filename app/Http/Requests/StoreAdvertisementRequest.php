<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
//advertisement
use App\Traits\ImageHandling;

class StoreAdvertisementRequest extends FormRequest
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
            'image'=>'required' ,   
        ];
    }
    public function getData():array
    {
        $data =  $this->validated();

        if ($this->hasFile('image')) 
        {
            $imageName = $this->storeImage( "AdvertisementImage" , $this->file('image'));
            $data['image'] = $imageName  ;
            return $data ; 
         } else {
            return response()->json(['error' => 'No image file found.'], 400);
        }
 
    }
}
