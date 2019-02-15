<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Slider;
use App\Models\Slider_Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {

        $sliders = Slider::all();

        return view('admin.content.slider.index', compact('sliders'));
    }

    public function store(Request $request) {

        $slider = new Slider([
            'title' => $request->input('title')
        ]);

        $slider->save();

        $slider_image = new Slider_Image([
            'image_id' => $request->input('image'),
            'value' => $request->input('value')
        ]);

        $slider->images()->save($slider_image);

        return redirect()->back();
    }

    public function create() {

        $images = Image::select('id')->get();

        return view('admin.content.slider.create', compact('images'));
    }

    public function edit(Slider $slider) {

        $images = Image::select('id')->get();

        $slider_images = $slider->images;

        return view('admin.content.slider.edit', compact('images', 'slider_images', 'slider'));
    }

    public function update(Slider $slider, Request $request) {

        $slider_image = new Slider_Image([
            'image_id' => $request->input('image'),
            'value' => $request->input('value')
        ]);

        $slider->images()->save($slider_image);

        return redirect()->back();
    }

    public function destroy(Slider $slider) {

        $slider->images()->delete();
        $slider->delete();

        return redirect()->back();
    }

}
