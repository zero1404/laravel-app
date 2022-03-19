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
        $cart = session()->get('cart', []);
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
        return view('shop.home.index',compact('products', 'nxb','loai', 'cart'));
    }

    public function showProducts(){
        $products = Product::all();
        $cart = session()->get('cart', []);
        $loai = Category::orderBy('slug', 'DESC')->paginate(5);
        $tacgia = Author::orderBy('id', 'DESC')->paginate(5);
        $nxb = Publisher::all();
        return view('shop.product.index', compact('products', 'nxb', 'loai', 'tacgia',  'cart'));
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
        $cart = session()->get('cart', []);
        $products = Product::orderBy('id', 'DESC')->paginate(4);
        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
        $product = Product::where('slug', '=', $slug)->first();
        $tg = Author::find($product->author_id);
        $nhaxb = Publisher::find($product->publisher_id);
        return view('shop.product.details', compact('loai', 'nxb', 'product', 'tg', 'nhaxb', 'products', 'cart'));
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
    public function cart(){
        $cart = session()->get('cart', []);
        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
            return view('shop.cart.index', compact('loai', 'nxb', 'cart'));
    }
    public function addToCart($id)
    {

        $loai = Category::orderBy('id', 'DESC')->paginate(5);
        $nxb =Publisher::orderBy('id', 'DESC')->paginate(5);
        $product = Product::where('id', '=', $id)->first();
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        } 
        session()->put('cart', $cart);
        // return view('shop.cart.index', compact('loai', 'nxb', 'cart'));
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function removeCart(Request $request)
    {
        var_dump($request->id);
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }
    public function updateCart(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
}
