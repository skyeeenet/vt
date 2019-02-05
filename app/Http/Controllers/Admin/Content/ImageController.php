<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index() {

        $images = Image::all();
        return view('admin.content.images.index', compact('images'));
    }

    public function store(Request $request) {

        $url = $request->input('url-image');

        $image = new Image([
            'url' => $url
        ]);

        $image->save();

        return redirect()->back();
    }

    public function destroy(Image $image) {

        $image->delete();

        return redirect()->back();
    }
}
