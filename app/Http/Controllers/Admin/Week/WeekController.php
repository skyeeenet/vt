<?php

namespace App\Http\Controllers\Admin\Week;

use App\Http\Controllers\Controller;
use App\Models\Week;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    public function index() {

        $weeks = Week::select('id','value')->get();

        return view('admin.week.index', compact('weeks'));
    }

    public function create() {

        return view('admin.week.create');
    }

    public function store(Request $request) {

        Week::updateOrCreate([
            'value' => $request->input('week-name')
        ],['value' => $request->input('week-name')]);

        return redirect(route('admin.weeks'));
    }

    public function edit(Week $week) {

        return view('admin.week.edit', compact('week'));
    }

    public function update(Week $week, Request $request) {

        $week->update([
            'value' => $request->input('week-name')
        ]);

        return redirect(route('admin.weeks'));
    }

    public function destroy(Week $week) {

        $week->delete();

        return redirect(route('admin.weeks'));
    }
}
