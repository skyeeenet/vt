<?php

namespace App\Http\Controllers\Admin\Album;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();

        return view('admin.album.index', compact('albums'));
    }


    public function create()
    {
        return view('admin.album.create');
    }


    public function store(Request $request)
    {
        $album = new Album([
            'value' => $request->input('value')
        ]);

        $album->save();

        return redirect(route('admin.albums'));
    }

    public function edit(Album $album)
    {

        $images = $album->images;

        $allImages = Image::select('id')->get();
        $allCategories = Category::select('id', 'value')->get();
        $albums = Album::select('id', 'value')->get();
        $categories = $album->categories;

        return view('admin.album.edit', compact('album', 'images', 'allImages', 'albums', 'allCategories', 'categories'));
    }


    public function update(Request $request, Album $album)
    {
        $album->update([
            'value' => $request->input('value')
        ]);

        return redirect(route('admin.albums'));
    }


    public function destroy(Album $album)
    {
        $album->delImages()->delete();

        $album->delCategories()->delete();

        $album->delete();

        return redirect()->back();
    }
}
