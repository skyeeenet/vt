<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index() {

        $socials = Social::paginate(20);

        return view('admin.user.social.index', compact('socials'));
    }

    public function create() {

        $images = Image::select('id')->get();

        return view('admin.user.social.create', compact('images'));
    }

    public function store(Request $request) {

        $social = new Social([

            'image_id' => $request->input('image'),
            'value' => $request->input('value'),
            'url' => $request->input('url')
        ]);

        $social->save();

        return redirect(route('admin.socials'));
    }

    public function edit(Social $social) {

        $images = Image::select('id')->get();

        return view('admin.user.social.edit', compact('social','images'));
    }

    public function update(Social $social, Request $request) {

        $social->update([

            'image_id' => $request->input('image'),
            'value' => $request->input('value'),
            'url' => $request->input('url'),
        ]);

        return redirect(route('admin.socials'));
    }

    public function destroy(Social $social) {

        $social->socialUser()->delete();

        $social->delete();

        return redirect()->back();
    }
}
