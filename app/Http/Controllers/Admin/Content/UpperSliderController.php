<?php

namespace App\Http\Controllers\Admin\Content;

use App\UpperSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpperSliderController extends Controller
{
    public function index() {

        $slides = UpperSlider::all();

        return view('admin.content.slider.upper-slider', compact('slides'));
    }

    public function store(Request $request) {

        $slider = new UpperSlider([
            'value' => $request->input('slide-text'),
            'image_id' => $request->input('image-number')
        ]);

        $slider->save();

        return redirect()->back();
    }

    public function destroy(UpperSlider $upper) {

        $upper->delete();

        return redirect()->back();
    }

    public function edit(UpperSlider $upper) {

        return view('admin.content.slider.upper-slider-edit', compact('upper'));
    }

    public function update(UpperSlider $upper, Request $request) {

        $upper->update([
           'image_id' => $request->input('image-number'),
           'value' => $request->input('slide-text')
        ]);

        return redirect('/admin/content/upper-slider/');
    }
}
