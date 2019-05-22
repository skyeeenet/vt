<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AdvertController extends Controller
{

    public function __construct() {

        $this->middleware('CheckLead', ['only' => 'store']);
    }

    public function index() {

        $adverts = Advert::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.content.adverts.index', compact('adverts'));
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'advertShort' => 'required|max:70|min:3|',
            'advertText' => 'required|max:300|min:5|',
            'captcha' => 'required|captcha'
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $advert = new Advert([
            'value' => $request->input('advertText'),
            'short' => $request->input('advertShort'),
            'user_id' => Auth::id()
        ]);

        $advert->save();

        return redirect()->back()->with('success', 'true');
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
           'short' => $request->input('advertShort'),
            'is_show' => $request->input('is_show')
        ]);

        return redirect(route('admin.content.adverts'));
    }
}
