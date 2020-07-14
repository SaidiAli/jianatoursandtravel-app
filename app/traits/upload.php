<?php
namespace App\traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


trait upload {

    public function upload(Request $request, $input, $type, $model, $suffix, $id)
    {
        $image = $request->file($input);
        $filename = $suffix .  '.' . $image->getClientOriginalExtension();
        $save_path = storage_path() . '/app/public/'. $model .'/' . $id . '/images/'. $type. '/' . $suffix . '/';
        $path = $save_path . $filename;
        $public_path = '\storage\\'.$model.'\\' . $id . '\images\\' . $type .'\\'. $suffix . '\\' . $filename;

        // Make the user a folder and set permissions
        File::makeDirectory($save_path, $mode = 0755, true, true);

        // Save the file to the server
        Image::make($image)->save($path);

        // Save the public image path
        return $public_path;
    }
}