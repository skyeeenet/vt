<?php

namespace App\Http\Controllers\Admin\Album_Category;

use App\Models\Album_Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumCategoryController extends Controller
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
        $category = new Album_Category([
            'album_id' => $request->input('album'),
            'category_id' => $request->input('category')
        ]);

        $category->save();

        return redirect()->back();
    }

    public function destroy(Request $id)
    {
        $res = Album_Category::where('category_id', $id->id)->first();

        $res->delete();

        return redirect()->back();
    }
}
