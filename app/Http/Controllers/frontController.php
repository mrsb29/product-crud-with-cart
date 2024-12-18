<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product_img;
use Illuminate\Http\Request;

class frontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data=product_img::join('products','product_imgs.product_id','=','products.product_id')->get();
        $cart_data=cart::all();
        $cart_count=count($cart_data);
        return view('front-end.index',compact('data','cart_count'));
    }

    
}
