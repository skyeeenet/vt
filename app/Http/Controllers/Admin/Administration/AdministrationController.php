<?php

namespace App\Http\Controllers\Admin\Administration;

use App\Http\Controllers\Controller;
use App\Models\Administration;
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

        return view('admin.administration.edit', compact('administration', 'offset'));
    }

    public function update(Request $request)
    {
        Administration::updateOrCreate([
            'type' => 'offset'
        ],[
            'type' => 'offset',
            'value' => $request->input('offset')
        ]);

        return redirect()->back();
    }

    public function destroy(Administration $administration)
    {
        //
    }
}
