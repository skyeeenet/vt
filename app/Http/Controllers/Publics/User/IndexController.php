<?php

namespace App\Http\Controllers\Publics\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {

        $user = Auth::user();

        $socials = $user->social;

        return view('public.user.profile', compact('user', 'socials'));
    }

    public function edit(Request $request) {

        $user = Auth::user();

        $socials = Social::select('value', 'image_id', 'id', 'url')->get();

        return view('public.user.profile-edit', compact('user', 'socials'));
    }
}
