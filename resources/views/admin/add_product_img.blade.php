@extends('admin.layoute')
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header bg-info">
                <h5>Add Image For Product </h5>
            </div>

            <div class="card-block">
                <form id="second" action="/store_product_img" method="post" enctype="multipart/form-data">
                    @csrf
                    <label class="col-sm-2 font-weight-bold">Product Name :</label>
                    <div class="container-2 d-flex">
                        
                        <select name="product_id" class="form-control col-sm-6" >

                            <option  >Select Product Name</option>
                            @foreach ($data as $item)
                                <option value="{{ $item->product_id }}">{{ $item->product_name }}</option>
                            @endforeach
                        </select>
                       
                        <div class="form-group col-md-4">
                            <input type="file" name="img" id="img" class="form-control form-control-info" required>

                        </div>
                    </div>
                    @error('product_id')
                    <div class="alert alert-danger" style='font-size:11px'>{{ $message }}</div>
                @enderror
                    <div class="row">
                        <label class="col-sm-2"></label>
                        <div class="col-sm-12 text-center">
                            <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
