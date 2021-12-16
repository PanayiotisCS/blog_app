<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;

trait UploadImage
{
    public function UserImageUpload($query)
    {
        $image_name = Str::random(20);
        $ext = strtolower($query->getClientOriginalExtension());
        $image_full_name = $image_name.'.'.$ext;
        $date = date("Y/m/d");
        $upload_path = 'storage/images/'.$date.'/';
        $image_url = $upload_path.$image_full_name;
        $success = $query->move($upload_path,$image_full_name);
    
        return $image_url;
    }
}