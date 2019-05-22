<?php

namespace App\Http\Controllers\Admin\CustomField;

use App\Http\Controllers\Controller;
use App\Models\CustomField;
use Illuminate\Http\Request;

class CustomFieldController extends Controller
{

    public function edit(CustomField $field) {

        return view('admin.field.edit', compact('field'));
    }

    public function store(Request $request) {
        $field = new CustomField([
            'page_id' => $request->input('page_id'),
            'value' => $request->input('value'),
            'description' => $request->input('description')
        ]);

        $field->save();

        return redirect()->back();
    }

    public function destroy(CustomField $field) {
        $field->delete();
        return redirect()->back();
    }

    public function update(CustomField $field, Request $request) {

        $field->update([
            'value' => $request->input('value'),
            'description' => $request->input('description')
        ]);

        return redirect()->back();
    }
}
