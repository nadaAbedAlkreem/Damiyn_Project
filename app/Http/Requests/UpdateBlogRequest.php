<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Traits\ImageHandling;



class UpdateBlogRequest extends FormRequest
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
            'image'=>'' ,   
            'title'=>'required|string|max:100' ,
            'content'=>'required|string|max:300' ,
            
        ];
    }

    public function getData():array
    {
        $data =  $this->validated();

        if ($this->hasFile('image')) 
        {
            $imageName = $this->storeImage( "BlogsImage" , $this->file('image'));
            $data['image'] = $imageName  ;
        }
         return $data ; 

 
    }
}
