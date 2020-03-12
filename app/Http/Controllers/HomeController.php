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
        return view('home', compact('products'));
    }
    // public function main()
    // {
    //     $products = \App\Product::all();
    //     return view('main', compact('products'));
    // }
}
