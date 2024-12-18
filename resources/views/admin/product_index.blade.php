@extends('admin.layoute')
@section('content')
    <div class="col-sm-12 mr-lg-4">
        <div class="col-lg-12">
            @if (session('registration-success'))
                <div class="alert alert-success">
                    {{ session('registration-success') }}
                </div>
            @endif
            <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h5>Product List</h5>
        
                        <a href="/add_product" class="btn btn-info ml-auto">Add New</a>
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
                                                        style="width: 20px;">Brand</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 155.047px;">Price</th>
                                                        <th class="sorting_asc" tabindex="0" aria-controls="lang-dt" rowspan="1"
                                                        colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 155.047px;">Tag Of Product</th>
                                                       
                                                </tr>
                                            </thead>
                                            <tbody>
                                             @foreach($data as $item)
                                                     <tr>
                                                     <td>{{$item->product_id}}</td>
                                                     <td>{{$item->product_name}}</td>
                                                     <td>{{$item->product_brand}}</td>
                                                     <td>{{$item->product_price}}</td>
                                                     <td>{{$item->product_tag}}</td>
                                                    
{{--                                                     
                                                    <td><a href="/edit_membership_plan/{{$item->membership_plan_id}}" class="btn-sm btn-info" ><i class="fa fa-edit">  Edit</i></a></td>
                                                    <td><a href="/membership_plan/status/update/{{$item->membership_plan_id}}" class="btn-sm btn-danger" ><i class="fa fa-trash">  Trash</i></a></td> --}}
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
