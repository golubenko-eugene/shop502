<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');      // добавляет свойство доступа ко всем методам только через авторизацию
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = \App\Product::all();
        // $favorites = Product::where('favorite', '=', 1)->get();
        // $lastest = Product::where('created_at', 'DESC')->get();

        // Product::where('favorite', '=', 1)->orderBy('created_at', 'DESC')->get();
        $favorites = Product::favorite()->get();
        //dd($favorites); 
        return view('home', compact('products'));
    }
    public function main()
    {
        $products = \App\Product::all();
        $favorites = Product::favorite()->get();
        $lastest = Product::lastest()->paginate(10);

        //dd($lastest);
        return view('main', compact('products', 'favorites', 'lastest'));
    }
    public function product($slug)
    {
        $product = Product::where('slug', '=', $slug)->first();
        return view('product', compact('product'));
    }
}
