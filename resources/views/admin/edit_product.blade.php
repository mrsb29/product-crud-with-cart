@extends('admin.layoute')
@section('content')
<div class="col-sm-12 mr-lg-4">
    
    <form class="form-horizontal" action="/edit_product" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="img_id" value="{{$product->img_id}}" >
        <div class="card-body col-md-12 d-flex ">
            <div class="container-1 col-md-6">
                <div class="container-2 d-flex">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Product Name</label>
                        <input type="text" name="product_name" class="form-control form-control-info"
                            placeholder="Enter Product Name" value="{{$product->product_name}}" required>
                        @error('product_name')
                            <div class="alert alert-danger" style='font-size:11px'>{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Product Brand</label>
                    <input type="brand" name="brand" class="form-control form-control-info"
                        placeholder="Enter Brand Name" value="{{$product->product_brand}}" required>
                    
                </div>
                <div class="form-group col-md-4">
                    <input type="file" name="img" id="img" value="{{$product->product_img}}" class="form-control form-control-info">
                    <td>
                        <img src="{{ asset('public/Image/'. $product->product_img) }}" height="70" class="img-thumbnail" style="width: 70%;">
                    </td>
                </div>

            </div>

            <div class="container-1 col-md-6">
               <div class="form-group col-md-12">
                    <label class="font-weight-bold">Price Of Product</label>
                    <input type="text" name="price" class="form-control form-control-info"
                        placeholder="Enter Price of Product" value="{{$product->product_price}}" required>
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Tag of product </label>
                    <input type="text" name="tag" class="form-control form-control-info"
                        placeholder="Add Tag" value="{{$product->product_tag}}" required>
                   
                </div>
            </div>
        </div>


        {{-- Basic Datail End --}}
       
        <div class="container-2 text-center">
            <div class="form-group ">
                <button type="submit" class="btn-sm btn-info">Submit</button>
            </div>
        </div>

    </form>
  
</div>
@endsection