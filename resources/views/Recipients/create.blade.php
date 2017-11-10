<div  id ="myRecipientModal" class="modal fade" role ="dialog">
<div class="modal-dialog">

<!--   Modal Content-->
<div class ="modal-content">
<div class="modal-header">
<button type="button" class ="close" data-dismiss ="modal">&times;</button>
<h4 class ="modal-title"> New Recipient Capture Form</h4>
</div>
<div class="modal-body">

<div class="tile p-15">
    {!! Form::open(['url' => 'storeRecipients', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ]) !!}

      <div class="form-group">
        {!! Form::label('Staff ID', 'Staff ID', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('staff_id',NULL,['class' => 'form-control input-sm','id' => 'staff_id']) !!}
            @if ($errors->has('received_date')) <p class="help-block red">*{{ $errors->first('received_date') }}</p> @endif
        </div>
    </div>

	<div class="form-group">
        {!! Form::label('Name', 'Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
            @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
        </div>
    </div>

   <div class="form-group">
        {!! Form::label('Surname', 'Surname', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('surname',Null,['class' => 'form-control input-sm','id' => 'surname']) !!}
            
        </div>
    </div>



     <div class="form-group">
        {!! Form::label('Gender', 'Gender', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
           {!! Form::select('gender',['0' => 'Select/All','Male' => 'Male','Female' => 'Female'],0,['class' => 'form-control' ,'id' => 'gender']) !!}
            @if ($errors->has('price')) <p class="help-block red">*{{ $errors->first('price') }}</p> @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Date of Birth', 'Date of Birth', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('dob',NULL,['class' => 'form-control input-sm','id' => 'dob']) !!}
            @if ($errors->has('ordered_date')) <p class="help-block red">*{{ $errors->first('ordered_date') }}</p> @endif
        </div>
    </div>


   


    
    <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <button type="submit" type="button" class="btn btn-primary">Add Recipient</button>
        </div>
    </div>
      {!! Form::close() !!}

 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>