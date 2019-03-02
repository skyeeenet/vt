<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
//use App\Models\Image;
use App\Http\Helpers\Contracts\ImageProcessor;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\Social;
use App\Models\SocialUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    public function index() {

        $users = User::paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user) {

        $roles = Role::all();

        $socials = Social::all();

        return view('admin.user.edit', compact('user', 'roles', 'socials'));
    }

    public function create() {

        $user = Auth::user();

        $socials = Social::all();

        return view('admin.user.create', compact('user', 'socials'));
    }

    public function store(Request $request) {


    }

    public function update(User $user, UserRequest $request, ImageProcessor $imageProcessor) {

        $socials = Social::all();

        if ($request->hasFile('image')) {

            if($request->hasFile('image')) {

                if($user->image != null) {

                    //Storage::delete('/public/profile_images/'.$user->image);
                    unlink(public_path($user->image));
                }

                $path = $imageProcessor::compressAndSave($request, 'image', 'storage/profile_images/', 360, 450);

                foreach ($socials as $social) {

                    SocialUser::updateOrCreate(
                        [
                            'user_id' => $user->id,
                            'social_id' => $social->id
                        ],
                        [
                            'user_id' => $user->id,
                            'social_id' => $social->id,
                            'url' => $social->url . $request->input($social->value)
                        ]
                    );
                }

                $user->update([
                    'image' => $path,
                    'role_id' => $request->input('role'),
                    'description' => $request->input('description'),
                    'email' => $request->input('email'),
                    'name' => $request->input('name')
                ]);
            }
        }
        else {

            foreach ($socials as $social) {

                SocialUser::updateOrCreate(
                    [
                        'user_id' => $user->id,
                        'social_id' => $social->id
                    ],
                    [
                        'user_id' => $user->id,
                        'social_id' => $social->id,
                        'url' => $social->url . $request->input($social->value)
                    ]
                );
            }

            $user->update([

                'role_id' => $request->input('role'),
                'description' => $request->input('description'),
                'email' => $request->input('email'),
                'name' => $request->input('name')
            ]);
        }



        return redirect(route('admin.users'));
    }

    public function destroy(User $user) {

        return redirect()->back();
    }
}
