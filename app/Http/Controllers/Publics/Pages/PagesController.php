<?php

namespace App\Http\Controllers\Publics\Pages;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Models\Album_Image;
use App\Models\Category;
use App\Models\Conference;
use App\Models\Group;
use App\Models\Image;
use App\Models\Lecturer;
use App\Models\Menu;
use App\Models\Post;
use App\Models\Week;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Page;

class PagesController extends Controller
{

    public function __construct() {

        $this->middleware('auth', ['only' => 'offerAds']);
        $this->middleware('CheckLead', ['only' => 'offerAds']);
    }

    public function index() {

        return view('public.index.index');
    }

    public function ads() {

        $posts_arr = Page::getAds();

        return view('public.ads', compact('posts_arr'));
    }

    public function singleadvert($slug) {

        if (is_numeric($slug)) {

            $advert = Advert::findOrFail($slug);

            return Redirect::to(route('singAdvert', $advert->slug), 301);
        }

        $post = Advert::whereSlug($slug)->firstOrFail();

        return view('public.adssingle', compact('post'));
    }

    public function album() {

        $images = Album_Image::paginate(20);

        $in = [];

        foreach ($images as $image) {

            $in[] = $image['image_id'];
        }

        $image_urls = Image::whereIn('id', $in)->get();

        $urls = [];

        foreach ($image_urls as $image) {

            $urls[] = $image['url'];
        }

        return view('public.album', compact('images', 'urls'));
    }

    public function albumCategory(Category $category) {

        $albums = $category->albums;

        $urls = [];

        foreach ($albums as $album) {

            $images = $album->images;

            foreach ($images as $image) {

                $urls[] = $image['url'];
            }
        }

        return view('public.album', compact('urls'));
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

    public function singlenews($slug) {

        if (is_numeric($slug)) {

            $post = Post::findOrFail($slug);

            return Redirect::to(route('post.show', $post->slug), 301);
        }

        $post = Post::whereSlug($slug)->firstOrFail();

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

    public function offerAds() {

        return view('public.ads-offer');
    }
}
