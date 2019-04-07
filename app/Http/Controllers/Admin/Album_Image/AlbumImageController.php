<?php

namespace App\Http\Controllers\Admin\Album_Image;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Album_Image;
use Illuminate\Http\Request;

class AlbumImageController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $image = new Album_Image([
            'album_id' => $request->input('album'),
            'image_id' => $request->input('image')
        ]);

        $image->save();

        return redirect()->back();
    }

    public function destroy(Request $id)
    {
        $res = Album_Image::where('image_id', $id->id)->first();

        $res->delete();

        return redirect()->back();
    }
}
