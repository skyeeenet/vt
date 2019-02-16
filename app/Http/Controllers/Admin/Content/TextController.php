<?php

namespace App\Http\Controllers\Admin\Content;

use App\Http\Controllers\Controller;
use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index() {

        $texts = Text::paginate(20);

        return view('admin.content.text.index', compact('texts'));
    }

    public function create() {

        return view('admin.content.text.create');
    }

    public function store(Request $request) {

        $text = new Text([
            'description' => $request->input('description'),
            'value' => $request->input('body')
        ]);

        $text->save();

        return redirect(route('admin.content.text'));
    }

    public function edit(Text $text) {

        return view('admin.content.text.edit', compact('text'));
    }

    public function update(Text $text, Request $request) {

        $text->update([
            'description' => $request->input('description'),
            'value' => $request->input('body')
        ]);

        return redirect(route('admin.content.text'));
    }

    public function destroy(Text $text) {

        $text->delete();

        return redirect()->back();
    }
}
