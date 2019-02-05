<?php

namespace App\Http\Controllers\Admin\Header;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderTextController extends Controller
{
    public function index() {

        $items = Header::all();

        $arr = [];

        foreach ($items as $item) {

            $arr[$item->type] = $item->value;
        }

        return view('admin.header.index', compact('arr'));
    }

    public function update(Request $request) {

        if ($request->place) {

            Header::updateOrCreate(
                ['type' => 'place'],
                ['value' => $request->input('place')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'email'],
                ['value' => $request->input('email')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'phone'],
                ['value' => $request->input('phone')]
            );
        }

        if ($request->email) {

            Header::updateOrCreate(
                ['type' => 'logo-text'],
                ['value' => $request->input('logo-text')]
            );
        }

        if ($request->logo) {

            $current_logo = Header::where('type', 'logo')->first();

            Storage::delete('/public/'. $current_logo->value);

            $path = $request->file('logo')->store('uploads', 'public');

            Header::updateOrCreate(
                ['type' => 'logo'],
                ['value' => $path]
            );
        }

        return redirect('/admin/header/text');
    }
}
