<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $pages = Page::select('id', 'url', 'title')->get();

        return view('admin.pages.index', compact('pages'));
    }

    public function store(Request $request) {

        $page = new Page([
            'url' => $request->input('url'),
            'title' => $request->input('title')
        ]);

        $page->save();

        return redirect()->back();
    }

    public function edit(Page $page) {

        return view('admin.pages.edit', compact('page'));
    }

    public function update(Page $page, Request $request) {

        $page->update([
           'url' => $request->input('url'),
           'title' => $request->input('title')
        ]);

        return redirect(route('admin.pages'));
    }

    public function destroy(Page $page) {

        $page->delete();

        return redirect()->back();
    }

    public function attachSlider(Request $request) {

        $page_id = $request->input('page');

        $slider_id = $request->input('slider');

        $slider = Slider::where('id', $slider_id)->first();

        $slider->update([
            'page_id' => $page_id
        ]);

        return redirect()->back();
    }
}
