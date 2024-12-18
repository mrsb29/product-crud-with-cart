<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\product;
use App\Models\product_img;
use Illuminate\Http\Request;

class cartController extends Controller
{

    public function store(Request $request)
    {
      
         $user_id=auth()->user();
       
        $data=new cart;
        $data->user_id=$user_id->id;
        $data->product_id=$request->product_id;
        $data->save();
        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
      
         $card_data=cart::all();
        $se_data=product_img::join('products','product_imgs.product_id','=','products.product_id')->get();
        $total = 0;

        foreach ($se_data as $item) {
            $total += $item->product_price;
        }
        return view('front-end.cart_page', compact('se_data','total'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */

}
