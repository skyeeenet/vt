<?php

namespace App\Http\Controllers\Admin\Pages\Index;

use App\Models\Best;
use App\Models\UpperSlider;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index() {

        //dd($_SERVER['REQUEST_URI']);

        $slides = UpperSlider::all();

        $students = User::where('role_id', 2)->get();

        $best = Best::all();

        return view('admin.pages.index.index', compact('slides', 'students', 'best'));
    }
}
