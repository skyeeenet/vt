<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Contracts\ImageProcessor;
use App\Models\Social;
use App\Models\SocialUser;
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

            $socials = Social::select('value', 'id')->get();

            foreach ($socials as $social) {

                SocialUser::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'social_id' => $social->id
                    ],
                    [
                        'user_id' => $user->id,
                        'social_id' => $social->id,
                        'url' => $request->input($social->value)
                    ]
                );
            }

            $user->update([
                'description' => $request->input('description'),
                'name' => $request->input('name')
            ]);
        }

        return redirect(route('user'));
    }
}
