<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    

    public function table(){
	  $product1=Product::with('tipo')->get();
   		return view('products',['productos'=>$product1]);
    }
}
