<?php

namespace App\Http\Controllers\Publics\Index;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $menu = Menu::with('submenu')->get();

        return view('public.index.index', compact('menu'));
    }
}
