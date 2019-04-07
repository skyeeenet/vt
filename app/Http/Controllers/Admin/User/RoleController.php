<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index() {

        $roles = Role::select('id', 'value', 'public_name')->get();

        return view('admin.roles.index', compact('roles'));
    }

    public function create() {

        return view('admin.roles.create');
    }

    public function store(Request $request) {

        $role = new Role([
            'value' => $request->input('role'),
            'public_name' => $request->input('public')
        ]);

        $role->save();

        return redirect(route('admin.roles'));
    }

    public function edit(Role $role) {

        return view('admin.roles.edit', compact('role'));
    }

    public function update(Role $role, Request $request) {

        $role->update([
            'value' => $request->input('role'),
            'public_name' => $request->input('public')
        ]);

        return redirect(route('admin.roles'));
    }

    public function destroy(Role $role) {

        $role->delete();

        return redirect()->back();
    }
}
