<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function index() {

        $images = \App\Models\Image::all();
        return view('admin.content.images.index', compact('images'));
    }

    public function store(Request $request) {

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
                //get filename with extension
                $filenamewithextension = $request->file('image')->getClientOriginalName();

                //get filename without extension
                $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

                //get file extension
                $extension = $request->file('image')->getClientOriginalExtension();

                //filename to store
                $filenametostore = $filename.'_'.time().'.'.$extension;

                //Upload File
                $request->file('image')->storeAs('public/uploads', $filenametostore);

                $path = '/storage/uploads/'. $filenametostore;

                //Resize image here
                $thumbnailpath = public_path('storage/uploads/'.$filenametostore);

                $image = new \App\Models\Image([
                    'url' => $path,
                    'type' => 'local'
                ]);

                $img = Image::make($thumbnailpath)->resize(400, 400, function($constraint) {
                    $constraint->aspectRatio();
                });

                $img->save($thumbnailpath);

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

            unlink(public_path($image->url));

            $image->delete();
        }

        return redirect()->back();
    }
}
