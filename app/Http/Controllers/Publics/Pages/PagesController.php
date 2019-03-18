<?php

namespace App\Http\Controllers\Publics\Pages;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use App\Models\Menu;
use Illuminate\Http\Request;
use Page;

class PagesController extends Controller
{
    public function index() {

        return view('public.index.index');
    }

    public function ads() {

        return view('public.ads');
    }

    public function album() {

        return view('public.album');
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

        return view('public.history');
    }

    public function news() {

        return view('public.news');
    }

    public function plan() {

        return view('public.plan');
    }

    public function schedule() {

        return view('public.schedule');
    }

    public function certification() {

        return view('public.certification');
    }

    public function speciality() {

        return view('public.speciality');
    }

    public function team() {

        return view('public.team');
    }

    public function contacts() {

        return view('public.contacts');
    }
}
