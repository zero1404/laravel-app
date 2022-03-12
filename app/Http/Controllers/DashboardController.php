<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct() {

    }

    public function index() {
        $parentIds = DB::table('categories')->pluck('id')->toArray();
        $data =  Arr::random($parentIds, 1);
        dd($data[0]);
        return view('dashboard.home.index', compact('data'));
    }

    public function fileManager()
    {
        return view('dashboard.file-manager.index');
    }
}
