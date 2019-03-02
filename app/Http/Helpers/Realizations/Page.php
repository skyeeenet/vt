<?php

namespace App\Http\Helpers\Realizations;


use App\Models\Image;
use App\Models\Slider;
use App\Models\Text;

class Page
{
    public static function getTextById($id) {

        return Text::where('id', $id)->first();
    }

    public static function getImageById($id) {

        return Image::where('id', $id)->first();
    }

    public static function getSliderById($id) {

        return Slider::with('images')->where('id', $id)->first();
    }

    public static function getMenu() {


    }
}