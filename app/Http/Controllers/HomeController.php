<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
        return view('shop.home.index',compact('products', 'nxb','loai'));
    }

    public function showProducts(){
        $products = Product::all();
        $loai = Category::orderBy('slug', 'DESC')->paginate(5);
        $tacgia = Author::orderBy('id', 'DESC')->paginate(5);
        $nxb = Publisher::all();
        return view('shop.product.index', compact('products', 'nxb', 'loai', 'tacgia'));
    }
    // public function showSearch(){
    //      //get keywords input for search
    //      $keyword=  Input::get('q');
    //      //search that student in Database
    //       $students= Student::find($keyword);
    //      //return display search result to user by using a view
    //      return View::make('selfservice')->with('student', $students);
    // }
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
    public function productDetail($slug)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
        $product = Product::where('slug', '=', $slug)->first();
        $tg = Author::find($product->author_id);
        $nhaxb = Publisher::find($product->publisher_id);
        return view('shop.product.details', compact('loai', 'nxb', 'product', 'tg', 'nhaxb', 'products'));
    }
    public function search()
    {
        $loai = Category::orderBy('id', 'DESC')->get();
        $nxb =Author::orderBy('id', 'DESC')->get();
        if($key=request()->key)
        {
            $products=Product::where('title','like','%'.$key.'%')->get();
        }
        return view('shop.product.search',compact('products', 'nxb','loai', 'key'));
    } 
}
