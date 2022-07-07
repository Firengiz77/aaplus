<?php

namespace App\Helpers;

use Illuminate\Support\Facades\File;

class FileManager
{
    public static function fileUpload($key, $folder)
    {
        $file = rand() . '_' . $key->getClientOriginalName();
        $key->move('uploads/'.$folder, $file);
        return $file;
    }

    public static function fileDelete($folder,$file){
        if (File::exists(public_path('uploads/'. $folder .'/' . $file))) {
            File::delete(public_path('uploads/'. $folder . '/' . $file));
        }
    }
}
