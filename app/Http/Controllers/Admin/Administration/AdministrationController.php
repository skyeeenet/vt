<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;
use App\Models\Role;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Administration $administration)
    {
        //
    }

    public function edit(Administration $administration)
    {
        $offset = Administration::where('type', 'offset')->first();
        $admin = Administration::where('type', 'admin')->first();
        $lead = Administration::where('type', 'lead')->first();
        $roles = Role::all();

        return view('admin.administration.edit', compact('administration', 'offset', 'roles', 'admin', 'lead'));
    }

    public function update(Request $request)
    {
        Administration::updateOrCreate([
            'type' => 'offset'
        ],[
            'type' => 'offset',
            'value' => $request->input('offset')
        ]);

        if ($request->admin) {
            Administration::updateOrCreate(
                ['type' => 'admin'],
                ['value' => $request->input('admin')]
            );
        }

        if ($request->lead) {
            Administration::updateOrCreate(
                ['type' => 'lead'],
                ['value' => $request->input('lead')]
            );
        }

        return redirect()->back();
    }

    public function destroy(Administration $administration)
    {
        //
    }
}
