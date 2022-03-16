<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('dashboard.home.index');
    }

    public function fileManager()
    {
        return view('dashboard.file-manager.index');
    }
}
