<?php

namespace App\Http\Controllers\Admin\Header;

use App\Http\Controllers\Controller;
use App\Menu;
use App\Submenu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function show(Menu $menu) {

        return view('admin.header.submenu', compact('menu'));
    }

    public function store(Menu $menu, Request $request) {

        $submenu = new Submenu([
            'value' => $request->input('sub-menu-item'),
            'url' => $request->input('sub-url-menu')
        ]);

        $menu->submenu()->save($submenu);

        return redirect()->back();
    }

    public function destroy(Submenu $submenu) {

        $submenu->delete();
        return redirect()->back();
    }

    public function showPageUpdate(Submenu $submenu) {

        return view('admin.header.submenu_edit', compact('submenu'));
    }

    public function update(Submenu $submenu, Request $request) {

        $submenu->update([
           'value' => $request->input('sub-menu-item'),
            'url' => $request->input('sub-url-menu')
        ]);

        return redirect('/admin/header/submenu/'.$submenu->menu_id);
    }
}
