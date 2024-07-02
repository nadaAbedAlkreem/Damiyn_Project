<?php
namespace App\Traits;

 use Illuminate\Support\Facades\Storage;



 trait ImageHandling
{
    public function storeImage($name_path , $image)
    {
        
        $path = 'uploads/images/'.$name_path.'/';
        $name_image = time()+rand(1,10000000).'.'.$image->getClientOriginalExtension();
        Storage::disk('public')->put($path.$name_image, file_get_contents( $image ));
        return $path.$name_image; 
    }
}