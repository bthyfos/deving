@extends('master')
@section('content')
@include('products.product_types')
<div class ="row">
<div class="col-md-10">

<div class="block-area" id="alternative-buttons">
        <h3 class="block-title">Manage Products</h3>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#produtTypeModal">Add a Product Type</button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Add to Stock
</button>
</div>



<br/>
<br/>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="block-area" >
                    <div class="table-responsive overflow">
                    <table class="table table-striped table-bordered  table-hover"  id="PISTable" align="center" width="100%">
                           <thead class="thead-inverse">
                            <tr>
                                <th>TYPE</th>
                                <th>TOTAL</th>
                            
                               </tr>
                            </thead>
                            @foreach($inventory  as $product)
                            <tbody>
                            <tr>
                                <td>{{$product->name}}<br/>
                                    <small><u></u></small>
                                </td>
                               <td>{{$product->unit}}</td>
                            </tr>
                          </tbody>
                             @endforeach
                             </table>
                        </div>
                </div>

    <div class="row text-center">
        <div class="col-md-6">
    </div>
    </div>
    </div>
</div>

@include('products.create')
@endsection