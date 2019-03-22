<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use App\Models\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchResult(Request $request) {

        $this->validate($request, [
            'search' => 'required|max:50|min:3',
        ]);

        $search_text = $request->input('search');

        $posts = Post::search($search_text)->get();

        $posts_arr = [];

        foreach ($posts as $post) {

            $posts_arr[] = Post::where('id', $post['id'])->first();
        }

        return view('public.search', compact('posts_arr'));
    }

    public function searchads(Request $request) {

        $this->validate($request, [
            'search' => 'required|max:50|min:3',
        ]);

        $search_text = $request->input('search');

        $posts = Advert::search($search_text)->get();

        $posts_arr = [];

        foreach ($posts as $post) {

            $posts_arr[] = Advert::where('id', $post['id'])->first();
        }

        return view('public.ads', compact('posts_arr'));
    }

    public function fullSearch(Request $request) {

        $this->validate($request, [
            'search' => 'required|max:50|min:3',
        ]);

        $search_text = $request->input('search');

        $posts = Post::search($search_text)->get();

        $posts_arr = [];

        foreach ($posts as $post) {

            $posts_arr[] = Post::where('id', $post['id'])->first();
        }

        $ads = Advert::search($search_text)->get();

        $ads_arr = [];

        foreach ($ads as $ad) {

            $ads_arr[] = Advert::where('id', $ad['id'])->first();
        }

        return view('public.search', compact('posts_arr', 'ads_arr'));
    }
}
