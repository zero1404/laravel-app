<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('shop.home.index');
    }

    public function showAbout()
    {
        return view('shop.home.about');
    }

    public function showLogin()
    {
        return view('shop.auth.login');
    }

    public function showRegister()
    {
        return view('shop.auth.register');
    }
}
