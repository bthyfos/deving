@extends('master')
@section('content')
    <div class="block-area" id="alternative-buttons">
        <h3 class="block-title">Manage Products</h3>
        <button class="btn btn-primary"  data-toggle="modal" data-target="#searchModal" >Click here to search for a product</button>
    </div>
    <br/>
    <br/>
    <div class="block-area">
        <div class="table-responsive overflow">
            <table class="table table-striped table-bordered  table-hover"  id="handovertable" align="center">
                <thead class="thead-inverse">
                <tr>

                    <th>RECIPIENT FULLNAME</th>
                    <th>PRODUCT ISSUED</th>
                    <th>ISSUED OUT DATE</th>
                    <th>ISSUED BY</th>
                </tr>
                </thead>
                @foreach($Activity  as $item)
                    <tbody>
                    <tr>

                        <td>{{$item->recipient }}</td>
                        <td>{{$item->product_type}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->user_id}}</td>
                    </tr>
                    </tbody>
                @endforeach


            </table>
        </div>
    </div>


    @include('handovers.search')
@endsection
@section('footer')
@endsection