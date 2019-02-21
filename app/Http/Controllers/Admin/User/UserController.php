<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Role;
use App\Models\Social;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index() {

        $users = User::paginate(10);

        return view('admin.user.index', compact('users'));
    }

    public function edit(User $user) {

        $roles = Role::all();

        return view('admin.user.edit', compact('user', 'roles'));
    }

    public function create() {

        $user = Auth::user();

        $socials = Social::all();

        return view('admin.user.create', compact('user', 'socials'));
    }

    public function store(Request $request) {


    }

    public function update(User $user, Request $request) {

        $user->update([

            'role_id' => $request->input('role'),
            'description' => $request->input('description'),
            'email' => $request->input('email'),
            'name' => $request->input('name')
        ]);

        return redirect(route('admin.users'));
    }

    public function destroy(User $user) {

        return redirect()->back();
    }
}
