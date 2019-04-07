<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Slider_Image;
use Illuminate\Http\Request;

class SliderImageController extends Controller
{
    public function edit(Slider_Image $slider_Image) {

        $images = Image::select('id')->get();

        return view('admin.content.sliderImage.edit', compact('slider_Image', 'images'));
    }

    public function update(Slider_Image $slider_Image, Request $request) {

        $slider_Image->update([
            'image_id' => $request->input('image'),
            'value' => $request->input('value')
        ]);

        return redirect()->back();
    }

    public function destroy(Slider_Image $slider_Image) {

        $slider_Image->delete();

        return redirect()->back();
    }
}
