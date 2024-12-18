@extends('admin.layoute')
@section('content')
<div class="col-sm-12 mr-lg-4">
    
    <form class="form-horizontal" action="/store_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body col-md-12 d-flex ">
            <div class="container-1 col-md-6">
                <div class="container-2 d-flex">
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Product Name</label>
                        <input type="text" name="product_name" class="form-control form-control-info"
                            placeholder="Enter Product Name" required>
                        @error('product_name')
                            <div class="alert alert-danger" style='font-size:11px'>{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Product Brand</label>
                    <input type="brand" name="brand" class="form-control form-control-info"
                        placeholder="Enter Brand Name" required>
                    
                </div>

            </div>

            <div class="container-1 col-md-6">
               <div class="form-group col-md-12">
                    <label class="font-weight-bold">Price Of Product</label>
                    <input type="text" name="price" class="form-control form-control-info"
                        placeholder="Enter Price of Product" required>
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Tag of product </label>
                    <input class="form-control bootstrap-tagsinput" name="tag" >
                   
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