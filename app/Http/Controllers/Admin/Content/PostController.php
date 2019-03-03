<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index() {

        $posts = Post::select('title', 'image_id', 'user_id','short_body', 'id', 'created_at')->get();

        return view('admin.content.posts.index', compact('posts'));
    }

    public function create() {

        $images = Image::select('id', 'url')->get();

        return view('admin.content.posts.create', compact('images'));
    }

    public function show(Post $post) {

        return view('admin.content.posts.show', compact('post'));
    }

    public function edit(Post $post) {

        $images = Image::select('id', 'url')->get();

        return view('admin.content.posts.edit', compact('post', 'images'));
    }

    public function update(Post $post, Request $request) {

        $post->update([
            'title' => $request->input('title'),
            'image_id' => $request->input('mini'),
            'short_body' => $request->input('short_body'),
            'body' => $request->input('body')
        ]);

        return redirect(route('admin.content.posts'));
    }

    public function destroy(Post $post) {

        $post->delete();

        return redirect(route('admin.content.posts'));
    }

    public function store(Request $request) {

        $post = new Post([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'short_body' => $request->input('short_body'),
            'user_id' => Auth::id(),
            'image_id' => $request->input('mini')
        ]);

        $post->save();

        return redirect(route('admin.content.posts'));
    }
}
