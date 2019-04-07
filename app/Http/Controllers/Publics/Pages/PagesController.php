<?php

namespace App\Http\Controllers\Publics\Pages;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Group;
use App\Models\Lecturer;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Week;
use Illuminate\Http\Request;
use Page;

class PagesController extends Controller
{
    public function index() {

        return view('public.index.index');
    }

    public function ads() {

        $posts_arr = Page::getAds();

        return view('public.ads', compact('posts_arr'));
    }

    public function singleadvert(Advert $advert) {

        $post = $advert;

        return view('public.adssingle', compact('post'));
    }

    public function album() {

        return view('public.album');
    }

    public function albumCategory(Category $category) {

        return $category;
    }

    public function confstud() {

        $confs = Page::getConferenceByType('Студенческая наука');

        return view('public.confstud', compact('confs'));
    }

    public function confuniv() {

        $confs = Page::getConferenceByType('Университетская наука');

        return view('public.confuniver', compact('confs'));
    }

    public function enroll() {

        return view('public.enroll');
    }

    public function history() {

        $image = Page::getImageById(5)['url'];

        $text = Page::getTextById(4)['value'];

        return view('public.history', compact('image', 'text'));
    }

    public function news() {

        $posts = Page::getNews();

        return view('public.news', compact('posts'));
    }

    public function singlenews(Post $post) {

        return view('public.singlenews', compact('post'));
    }

    public function plan() {

        return view('public.plan');
    }

    public function schedule() {

        $groups = Group::select('id', 'value')->get();

        $weeks = Week::select('id', 'value')->get();

        return view('public.schedule', compact('groups', 'weeks'));
    }

    public function certification() {

        return view('public.certification');
    }

    public function speciality() {

        return view('public.speciality');
    }

    public function team() {

        $lecturers = Page::getLecturers();

        return view('public.team', compact('lecturers'));
    }

    public function teamsingle(Lecturer $lecturer) {

        return view('public.teamsingle', compact('lecturer'));
    }

    public function contacts() {

        return view('public.contacts');
    }
}
