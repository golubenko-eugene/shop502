<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.products.index', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=new Product();

        $products=Product::all();
        $categories = Category::all('id', 'name')->pluck('name', 'id')->all();

        return view('admin.products.create', compact('product', 'categories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        $product->categories()->sync($request->categories);
        return redirect('/admin/products');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.products.edit', compact('product'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $product=Product::find($id);
        // $product->name= $request->name;
        // $product->slug= $request->slug;
        // $product->price= $request->price;
        // $product->describe= $request->describe;
        // $product->sku= $request->sku;
        // $product->favorite= $request->favorite;
        // //$product->img= $request->img;

        // $file= $request->file('img');
        // if($file){
        //     $fname=$file->getClientOriginalName();
        //     $file->move('uploaded', $fname);
        //     $product->img = '/uploaded/' .$fname;
        // }
        // if(!$file){
        //     $product->img= ' ';
        // }

        // $product->save();
        //или
        $product=Product::find($id);
        $product->update($request->all());
        $product->categories()->sync($request->categories);
        return redirect('/admin/products');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect('/admin/products');
    }
}
