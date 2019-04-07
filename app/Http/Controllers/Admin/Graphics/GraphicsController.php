<?php

namespace App\Http\Controllers\Admin\Graphics;

use App\Http\Controllers\Controller;
use App\Models\Graphics;
use App\Models\Group;
use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function index() {

        $graphics = Graphics::select('type', 'begin', 'end', 'id')->get();

        return view('admin.graphics.index', compact('graphics'));
    }

    public function create() {

        return view('admin.graphics.create');
    }

    public function store(Request $request) {

        Graphics::updateOrCreate([
            'type' => $request->input('type')
        ],
            [
                'type' => $request->input('type'),
                'begin' => $request->input('date_begin'),
                'end' => $request->input('date_end')
            ]);

        return redirect(route('admin.graphics'));
    }

    public function edit(Graphics $graphic) {

        return view('admin.graphics.edit', compact('graphic'));
    }

    public function update(Graphics $graphic, Request $request) {

        $graphic->update([
            'type' => $request->input('type'),
            'begin' => $request->input('begin'),
            'end' => $request->input('begin')
        ]);

        return redirect(route('admin.graphics'));
    }

    public function destroy(Graphics $graphic) {

        $graphic->delete();

        return redirect(route('admin.graphics'));
    }
}
