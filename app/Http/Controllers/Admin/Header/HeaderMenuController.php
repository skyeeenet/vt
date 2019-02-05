<?php

namespace App\Http\Controllers\Admin\Header;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class HeaderMenuController extends Controller
{
    public function index() {

        $navbar = Menu::all();
        return view('admin.header.menu', compact('navbar'));
    }

    public function create(Request $request) {
        //TODO Реализовать валидацию данных из $request
        $menu_item = new Menu();
        $menu_item->item = $request->input('item_menu');
        $menu_item->url = $request->input('url_menu');
        $menu_item->save();

        return redirect(route('admin.header.menu'));
    }

    public function destroy(Menu $menu) {

        $menu->delete();
        return redirect(route('admin.header.menu'));
    }

    public function update(Menu $menu, Request $request) {

        //TODO Реализовать валидацию данных из $request

        $menu->update([
            'item' => $request->input('menu-item'),
            'url' => $request->input('url-menu')
        ]);

        return redirect()->back();
    }
}
