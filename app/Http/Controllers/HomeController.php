<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;

use Auth;

use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $products = Product::where('user_id', Auth::user()->id)->paginate(10);
        return view('home', compact('products'));
    }

    public function postIndex(ProductRequest $r)
    {
        $r['user_id'] = Auth::user()->id;
        if ($_FILES['picture1']) {
            $pic = \App::make('\App\Libs\Imag')->url($_FILES['picture1']['tmp_name']);
        } else {
            $pic = '';
        }
        $r['picture'] = $pic;
        Product::create($r->all());
        return redirect()->back();
    }

    public function getDelete($id = null)
    {
        $one = Product::find($id);
        if (Auth::user()->id == $one->user_id) {
            $one->delete();
        }
        return redirect()->back();
    }
}
