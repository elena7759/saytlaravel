<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{
    public function getIndex()
    {
        $products = Product::orderBy('id', 'DESC')
            ->paginate(30);
        return view('products', compact('products'));
    }
    public function getOne($id=null){
        $one=Product::find($id);
        return view('product',compact('one'));
    }
}
