<?php

namespace App\Http\Controllers\Publics\Index;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;
use Page;

class IndexController extends Controller
{
    public function index() {

        $recent_posts = Page::getLatestNews();

        return view('public.index.index', compact('recent_posts'));
    }
}
