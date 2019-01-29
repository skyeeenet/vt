<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard() {

        $title = 'Dashboard';

        return view('admin_panel.index', compact('title'));
    }
}
