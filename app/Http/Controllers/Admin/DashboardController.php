<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Page;
class DashboardController extends Controller
{
    public function dashboard() {

        return view('admin.dashboard');
    }
}
