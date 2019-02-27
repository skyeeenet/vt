<?php
/**
 * Created by PhpStorm.
 * User: Sergei
 * Date: 27.02.2019
 * Time: 18:51
 */

namespace App\Http\Helpers\Contracts;

use Illuminate\Http\Request;

interface ImageProcessor
{
    public static function compressAndSave(Request $request, $fileName, $path, $width = 400, $height = 400);
}