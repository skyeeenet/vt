<?php

namespace App\Http\Controllers\Admin\Bests;

use App\Http\Controllers\Controller;
use App\Models\Best;
use App\User;
use Illuminate\Http\Request;

class BestController extends Controller
{
    public function index() {

        $bests = Best::all();

        return view('admin.bests.index', compact('bests'));
    }

    public function create() {

        $users = User::select('id', 'name')->get();

        return view('admin.bests.create', compact('users'));
    }

    public function store(Request $request) {

        $best = new Best([

            'user_id' => $request->input('user'),
            'interview_url' => $request->input('url'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        $best->save();

        return redirect(route('admin.bests'));
    }

    public function edit(Best $best) {

        $users = User::select('id', 'name')->get();

        return view('admin.bests.edit', compact('best', 'users'));
    }

    public function update(Best $best, Request $request) {

        $best->update([
            'user_id' => $request->input('user'),
            'interview_url' => $request->input('url'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect(route('admin.bests'));
    }

    public function destroy(Best $best) {

        $best->delete();

        return redirect(route('admin.bests'));
    }
}
