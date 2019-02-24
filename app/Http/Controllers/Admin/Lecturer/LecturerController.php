<?php

namespace App\Http\Controllers\Admin\Lecturer;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\User;
use Illuminate\Http\Request;

class LecturerController extends Controller
{

    public function index()
    {
        $lecturers = Lecturer::all();

        return view('admin.lecturers.index', compact('lecturers'));
    }


    public function create()
    {
        $users = User::select('id', 'name')->get();

        return view('admin.lecturers.create', compact('users'));
    }


    public function store(Request $request)
    {
        $lecturer = new Lecturer([
            'user_id' => $request->input('user'),
            'position' => $request->input('position'),
            'department' => $request->input('department'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'facebook' => $request->input('facebook'),
            'ntb' => $request->input('ntb')
        ]);

        $lecturer->save();

        return redirect(route('admin.lecturers'));
    }


    public function show(Lecturer $lecturer)
    {
        //
    }

    public function edit(Lecturer $lecturer)
    {
        return view('admin.lecturers', compact('lecturer'));
    }

    public function update(Request $request, Lecturer $lecturer)
    {
        $lecturer->update([
            'user_id' => $request->input('user'),
            'position' => $request->input('position'),
            'department' => $request->input('department'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'facebook' => $request->input('facebook'),
            'ntb' => $request->input('ntb')
        ]);

        return redirect(route('admin.lecturers'));
    }

    public function destroy(Lecturer $lecturer)
    {
        $lecturer->delete();

        return redirect()->back();
    }
}
