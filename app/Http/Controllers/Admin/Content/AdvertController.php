<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertController extends Controller
{
    public function index() {

        $adverts = Advert::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.content.adverts.index', compact('adverts'));
    }

    public function store(Request $request) {

        $advert = new Advert([
            'value' => $request->input('advertText'),
            'short' => $request->input('advertShort'),
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
           'value' => $request->input('advertText'),
           'short' => $request->input('advertShort')
        ]);

        return redirect(route('admin.content.adverts'));
    }
}
