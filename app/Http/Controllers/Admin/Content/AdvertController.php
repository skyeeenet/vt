<?php

namespace App\Http\Controllers\Admin\Content;

use App\Advert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{
    public function index() {

        $adverts = Advert::paginate(1);

        return view('admin.content.adverts.index', compact('adverts'));
    }

    public function store(Request $request) {

        $advert = new Advert([
            'value' => $request->input('advertText'),
            'user_id' => Auth::id()
        ]);

        $advert->save();

        return redirect()->back();
    }

    public function destroy(Advert $advert) {

        $advert->delete();

        return redirect()->back();
    }

    public function edit(Advert $advert) {

        return view('admin.content.adverts.edit', compact('advert'));
    }

    public function update(Advert $advert, Request $request) {

        $advert->update([
           'value' => $request->input('advertText')
        ]);

        return redirect(route('admin.content.adverts'));
    }
}
