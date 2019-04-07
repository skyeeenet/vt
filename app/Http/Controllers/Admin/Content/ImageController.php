<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Contracts\ImageProcessor;
use Http\Client\Exception;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index() {

        $images = \App\Models\Image::all();
        return view('admin.content.images.index', compact('images'));
    }

    public function store(Request $request, ImageProcessor $imageProcessor) {

        if ($request->input('type') == 'remote') {

            $url = $request->input('url-image');
            $image = new \App\Models\Image([
                'url' => $url,
                'type' => 'remote'
            ]);

            $image->save();
        }
        else if ($request->input('type') == 'local') {

            if($request->hasFile('image')) {

                $width = $request->input('width');
                $height = $request->input('height');

                $path = $imageProcessor::compressAndSave($request, 'image', 'storage/uploads/', $width, $height);

                $image = new \App\Models\Image([
                    'url' => $path,
                    'type' => 'local'
                ]);

                $image->save();
            }
        }

        return redirect()->back();
    }

    public function edit(\App\Models\Image $image) {

        return view('admin.content.images.edit', compact('image'));
    }

    public function update(\App\Models\Image $image, Request $request) {

        $image->update([
            'url' => $request->input('url'),
            'type' => $request->input('type')
        ]);

        return redirect(route('admin.content.images'));
    }

    public function destroy(\App\Models\Image $image) {

        if ($image->type == 'remote') {
            $image->delete();
        }
        else if ($image->type == 'local') {

            $image->delete();

            try {
                unlink(public_path($image->url));
            }
            catch(Exception $ex) {}

        }

        return redirect()->back();
    }
}
