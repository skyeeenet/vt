<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchResult(Request $request) {

        $this->validate($request, [
            'search' => 'required|max:50|min:10',
        ]);

        $search_text = $request->input('search');

        $posts = Post::search($search_text)->paginate(5);

        return view('public.search', compact('posts'));
    }
}
