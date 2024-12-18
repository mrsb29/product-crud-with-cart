<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_img;
use App\Models\product_img_tables;
use App\Models\product_imgs;
use finfo;
use Illuminate\Database\Console\PruneCommand;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=product::all();

       return view('admin.product_index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
          
        $data=new product;
        $data->product_name = $request->product_name;
        $data->product_brand=$request->brand;
        $data->product_price=$request->price;
        $data->product_tag=$request->tag;
        $data->save();
        return redirect('/product_index')->with('registration-success','Data Inserted');       
    }

    /**
     * Display the specified resource.
     */

    
    public function add_img()
    {
        $data=product::all();
        return view('admin.add_product_img',compact('data'));
    }
    public function store_img(Request $request)
    {
        $data=new product_img;
        $request->validate([
            'product_id' => 'unique:product_imgs,product_id',
        ]);
        $data->product_id=$request->product_id;
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data->product_img= $filename;
        }
        $data->save();
        return redirect('/product_management');
    }
    public function show()
    {
         $data=product_img::join('products','product_imgs.product_id','=','products.product_id')->get();
         return view('admin.product_management',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data['product']=product_img::where('img_id',$id)->join('products','product_imgs.product_id','=','products.product_id')->first();
        return view('admin.edit_product',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $data= product_img ::find($request->post('img_id'));
        if($request->file('img')){
            $file= $request->file('img');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data->product_img= $filename;
        }
        $data->update();

        $pro_data=product::find($request->post('img_id'));
        $pro_data->product_name=$request->product_name;
        $pro_data->product_brand=$request->brand;
      
        $pro_data->product_price=$request->price;
        $pro_data->product_tag=$request->tag;
        $pro_data->update();

        return redirect('product_management')->with('msg','Product Updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=product_img::find($id);
        $data->delete();
        return redirect('/product_management')->with('msg','Record added into trashed data ');
    }

    public function trashed_data()
    {
        $data=product_img::join('products','product_imgs.product_id','=','products.product_id')->onlyTrashed()->get();
        return view('admin.trashed_data',compact('data'));
    }
    public function restore(string $id)
    {
        $data=product_img::onlyTrashed()->find($id);
        $data->restore();
        return redirect('/product_management')->with('msg','Record Is Restore');
    }
    public function Delete(string $id)
    {
        $data=product_img::onlyTrashed()->find($id);
        $data->forceDelete();
        return redirect('/product_management')->with('msg','Record Is Deleted ');
    }
}
