@extends('master')
@section('content')
<div class ="row">
<div class="col-md-10">

<div class="block-area" id="alternative-buttons">
        <h3 class="block-title">Manage Recipients</h3>
                <button class="btn btn-primary"  data-toggle="modal" data-target="#myRecipientModal">Add New Recipients</button>
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
                     <table class="table table-striped table-bordered  table-hover"  id="recipientsTable" align="center" >
                      <table class="table table-striped table-bordered  table-hover"  id="PISTable" align="center" width="100%">
                     <thead class="thead-inverse">

                            <tr>
                                <th>STAFF ID</th>
                                <th>STAFF NAME</th>
                                <th>STAFF SURNAME</th>
                                <th>DATE OF BIRTH</th>
                                <th>GENDER</th>
                                <th>ACTION</th>
                               </tr>
                               </thead>

                            @foreach($recipient  as $staff)
                            <tbody>
                            <tr>
                                <td>{{$staff->staff_id}}</td>
                                <td>{{$staff->name}}</td>
                                <td>{{$staff->surname}}</td>
                               <td>{{$staff->dob}}</td>
                                <td>{{$staff->gender}}</td>
                                <td>
                                  <a class="btn btn-danger" href="recipient/{{ $staff->id}}" target="">Delete</a></td>
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


@include('Recipients.create')
@endsection