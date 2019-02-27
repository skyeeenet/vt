<?php

namespace App\Http\Controllers\Publics\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {

        $user = Auth::user();

        return view('public.user.profile', compact('user'));
    }

    public function edit(Request $request) {

        $user = Auth::user();

        return view('public.user.profile-edit', compact('user'));
    }
}
