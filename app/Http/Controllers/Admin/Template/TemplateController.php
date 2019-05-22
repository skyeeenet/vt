<?php

namespace App\Http\Controllers\Admin\Template;

use App\Http\Controllers\Controller;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TemplateController extends Controller
{
    public function index() {

        $templates = Template::all();
        return view('admin.template.index', compact('templates'));
    }

    public function create() {

        $templates = Template::all();
        return view('admin.template.create', compact('templates'));
    }

    public function store(Request $request) {

        $template = new Template([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        $template->save();
        return redirect(route('admin.templates'), Response::HTTP_CREATED);
    }

    public function edit(Template $template) {

        return view('admin.template.edit', compact('template'));
    }

    public function update(Template $template, Request $request) {

        $template->update($request->all());
        return redirect(route('admin.templates'), Response::HTTP_CREATED);
    }

    public function destroy(Template $template) {

        $template->delete();
        return redirect(route('admin.templates'));
    }
}
