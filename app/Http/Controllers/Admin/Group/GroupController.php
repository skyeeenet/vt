<?php

namespace App\Http\Controllers\Admin\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() {

        $groups = Group::all();

        return view('admin.group.index', compact('groups'));
    }

    public function create() {

        return view('admin.group.create');
    }

    public function store(Request $request) {

        Group::updateOrCreate([
            'value' => $request->input('group-name')
        ],['value' => $request->input('group-name')]);

        return redirect(route('admin.groups'));
    }

    public function edit(Group $group) {

        return view('admin.group.edit', compact('group'));
    }

    public function update(Group $group, Request $request) {

        $group->update([
            'value' => $request->input('group-name')
        ]);

        return redirect(route('admin.groups'));
    }

    public function destroy(Group $group) {

        $group->delete();

        return redirect(route('admin.groups'));
    }
}
