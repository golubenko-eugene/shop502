<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function remove (Request $request){
    	$cart = new Cart();
    	$cart->remove($request->product_id);
    	return view('cart');
    }
    public function changeQty (Request $request){
    	$cart = new Cart();
    	if($request->product_qty <= 0) {
    		$cart->remove($request->product_id);
    	} 
    	else {
    		$cart->setQty($request->product_id, $request->product_qty);
    	}
    	
    	return view('cart');
}
