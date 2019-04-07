<?php

namespace App\Http\Controllers\Admin\Schedule;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\OccupationType;
use Illuminate\Http\Request;

class OccupationTypeController extends Controller
{
    public function index() {

        $occupations = OccupationType::paginate(20);

        return view('admin.occupation.index', compact('occupations'));
    }

    public function create() {

        $images = Image::select('id')->get();

        return view('admin.occupation.create', compact('images'));
    }

    public function store(Request $request) {

        $occupation = new OccupationType([

            'image_id' => $request->input('image'),
            'value' => $request->input('value')
        ]);

        $occupation->save();

        return redirect(route('admin.occupation'));
    }

    public function edit(OccupationType $occupation) {

        $images = Image::select('id')->get();

        return view('admin.occupation.edit', compact('images', 'occupation'));
    }

    public function update(OccupationType $occupation, Request $request) {

        $occupation->update([

            'image_id' => $request->input('image'),
            'value' => $request->input('value')
        ]);

        return redirect(route('admin.occupation'));
    }

    public function destroy(OccupationType $occupation) {

        $occupation->delete();

        return redirect()->back();
    }
}
