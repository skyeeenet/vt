<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }


    public function create()
    {
        return view('admin.category.create');
    }


    public function store(Request $request)
    {
        $category = new Category([
            'value' => $request->input('value')
        ]);

        $category->save();

        return redirect(route('admin.categories'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, Category $category)
    {
        $category->update([
            'value' => $request->input('value')
        ]);

        return redirect(route('admin.categories'));
    }


    public function destroy(Category $category)
    {

    }
}
