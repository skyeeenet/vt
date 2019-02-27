<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Contracts\ImageProcessor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index() {

        $user = Auth::user();

        return view('user.index', compact('user'));
    }

    public function update(Request $request, ImageProcessor $imageProcessor) {

        $user = Auth::user();

        if($request->hasFile('image')) {

            if($user->image != null) {

                //Storage::delete('/public/profile_images/'.$user->image);
                unlink(public_path($user->image));
            }

            $path = $imageProcessor::compressAndSave($request, 'image', 'storage/profile_images/', 360, 450);

            $user->update([
                'image' => $path
            ]);
        }
        else {
            $user->update([
                'description' => $request->input('description')
            ]);
        }

        return redirect(route('user'));
    }
}
