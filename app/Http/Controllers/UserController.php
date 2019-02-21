<?php

namespace App\Http\Controllers;

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

    public function update(Request $request) {

        $user = Auth::user();

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
            $request->file('image')->storeAs('public/profile_images', $filenametostore);

            if($user->image != null) {

                Storage::delete('/public/profile_images/'.$user->image);
            }

            $user->update([
                'image' => $filenametostore
            ]);

            //Resize image here
            $thumbnailpath = public_path('storage/profile_images/'.$filenametostore);
            $img = Image::make($thumbnailpath)->resize(400, 400, function($constraint) {
                $constraint->aspectRatio();
            });

            $img->save($thumbnailpath);
        }

        return redirect()->back();
    }
}
