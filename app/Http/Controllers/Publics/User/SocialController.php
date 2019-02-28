<?php

namespace App\Http\Controllers\Publics\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function index() {

        $user = Auth::user();

        return view('public.user.profile', compact('user'));
    }

    public function edit(Request $request) {

        $user = Auth::user();

        $socials = Social::select('value', 'image_id', 'id')->get();

        return view('public.user.profile-edit', compact('user', 'socials'));
    }
}
