<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Author;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $tamp = Product::all();
        return view('shop.home.index',compact('products'), compact('tamp'));
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
