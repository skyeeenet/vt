<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    public function index() {

        $pages = Page::select('id', 'slug', 'seo_title', 'template_id' , 'seo_h1')->with('template')->get();

        return view('admin.pages.index', compact('pages'));
    }

    public function store(Request $request) {

        $page = new Page([
            'seo_title' => $request->input('seo_title'),
            'seo_description' => $request->input('seo_description'),
            'seo_h1' => $request->input('seo_h1'),
            'content' => $request->input('content'),
            'template_id' => $request->input('template_id'),
        ]);

        $page->save();

        return redirect()->back();
    }

    public function create() {

        $templates = Template::all();
        $fields = Page::with('customFields')->get();

        return view('admin.pages.create', compact('templates', 'fields'));
    }

    public function show($slug) {

        if (is_numeric($slug)) {

            $page = Page::findOrFail($slug);

            return Redirect::to(route('page.show', $page->slug), 301);
        }

        $page = Page::whereSlug($slug)->firstOrFail();

        return view($this::getTemplateNameById($page->template_id), compact('page'));
    }

    public function edit(Page $page) {

        $templates = Template::all();

        $fields = $page->customFields;

        return view('admin.pages.edit', compact('page', 'templates', 'fields'));
    }

    public function update(Page $page, Request $request) {

        $page->update([
            'seo_title' => $request->input('seo_title'),
            'seo_description' => $request->input('seo_description'),
            'seo_h1' => $request->input('seo_h1'),
            'content' => $request->input('content'),
            'template_id' => $request->input('template_id'),
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

    private static function getTemplateNameById($id) {

        $temp_name = Template::findOrFail($id)->name;
        return 'templates.' . $temp_name;
    }
}
