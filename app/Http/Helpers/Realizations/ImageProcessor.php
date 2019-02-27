<?php
/**
 * Created by PhpStorm.
 * User: Sergei
 * Date: 27.02.2019
 * Time: 18:57
 */

namespace App\Http\Helpers\Realizations;


use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageProcessor implements \App\Http\Helpers\Contracts\ImageProcessor
{

    public static function compressAndSave(Request $request, $fileName, $path, $width = 400, $height = 400)
    {
        //get filename with extension
        $filenamewithextension = $request->file($fileName)->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file($fileName)->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;

        //Upload File
        $request->file($fileName)->move($path, $filenametostore);

        $resultPath = '/'.$path.$filenametostore;

        //Resize image here
        $thumbnailpath = public_path($path.$filenametostore);

        $img = Image::make($thumbnailpath)->resize($width, $height, function($constraint) {
            $constraint->aspectRatio();
        });

        $img->save($thumbnailpath);

        return $resultPath;
    }
}