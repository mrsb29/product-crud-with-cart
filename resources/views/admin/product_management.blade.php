@extends('admin.layoute')
@section('content')
    <div class="col-sm-12 mr-lg-4">
        <div class="col-lg-12">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Product List</h5>
        
                        <a href="/trashed_data" class="btn btn-info ml-auto">Go To Trash</a>
                        <a href="/add_product" class="btn btn-info ml-auto">Add</a>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive dt-responsive">
                            <div id="dom-jqry_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <table id="dom-jqry" class="table table-striped table-bordered nowrap dataTable"
                                            role="grid" aria-describedby="dom-jqry_info">
                                            <thead>                          <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 35.047px;">Sr. No :</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 20px;">Product Name</th>
                                                    <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 20px;">Product Brand</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 20px;">Product Image</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 155.047px;">Price</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 155.047px;">Actions</th>
                                                       
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($data as $item)
                                                     <tr>
                                                     <td>{{$item->img_id}}</td>
                                                     <td>{{$item->product_name}}</td>
                                                     <td>{{$item->product_brand}}</td>
                                                     <td>
                                                        <img src="{{ asset('public/Image/'. $item->product_img) }}" height="70" class="img-thumbnail" style="width: 70%;">
                                                    </td>
                                                     <td>{{$item->product_price}}</td>
                           
                                                    <td><a href="/edit/{{$item->img_id}}" class="btn-sm btn-info" ><i class="fa fa-edit">  Edit</i></a>
                                                    <a href="/trash/{{$item->img_id}}" class="btn-sm btn-danger" ><i class="fa fa-trash">  Trash</i></a></td>
                                                    </tr> 
                                                    @endforeach 
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
