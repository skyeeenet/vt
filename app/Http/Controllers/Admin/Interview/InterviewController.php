<?php

namespace App\Http\Controllers\Admin\Interview;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use App\User;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index() {
         $interviews = Interview::select('id', 'slug', 'seo_h1')->paginate(10);

         return view('admin.interview.index', compact('interviews'));
    }

    public function create() {
        $users = User::select('name', 'id')->get();
        return view('admin.interview.create', compact('users'));
    }

    public function store(Request $request) {

        $inretview = new Interview([
            'user_id' => $request->input('user'),
            'content' => $request->input('body'),
            'seo_title' => $request->input('seo_title'),
            'seo_h1' => $request->input('seo_h1'),
            'seo_description' => $request->input('seo_description')
        ]);

        $inretview->save();

        return redirect(route('admin.interviews'));
    }

    public function update(Request $request, Interview $interview) {

        $interview->update([
            'user_id' => $request->input('user'),
            'content' => $request->input('body'),
            'seo_title' => $request->input('seo_title'),
            'seo_h1' => $request->input('seo_h1'),
            'seo_description' => $request->input('seo_description')
        ]);

        return redirect(route('admin.interviews'));
    }

    public function edit(Interview $interview) {

        $users = User::select('name', 'id')->get();
        return view('admin.interview.edit', compact('interview', 'users'));
    }
}
