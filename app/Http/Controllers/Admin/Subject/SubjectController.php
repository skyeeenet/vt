<?php

namespace App\Http\Controllers\Admin\Subject;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index() {

        $subjects = Subject::select('id','value')->get();

        return view('admin.subject.index', compact('subjects'));
    }

    public function show(Subject $subject) {

        return view('admin.subject.edit', compact('subject'));
    }

    public function create() {

        return view('admin.subject.create');
    }

    public function store(Request $request) {

        Subject::updateOrCreate([
            'value' => $request->input('subject-name')
        ],['value' => $request->input('subject-name')]);

        return redirect(route('admin.subjects'));
    }

    public function edit(Subject $subject) {

        return view('admin.subject.edit', compact('subject'));
    }

    public function update(Subject $subject, Request $request) {

        $subject->update([
            'value' => $request->input('subject-name')
        ]);

        return redirect(route('admin.subjects'));
    }

    public function destroy(Subject $subject) {

        $subject->delete();

        return redirect(route('admin.subjects'));
    }
}
