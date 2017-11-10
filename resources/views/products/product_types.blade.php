<div class="modal fade" id="produtTypeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="tile p-15">
    {!! Form::open(['url' => 'createType', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ]) !!}
    
    <div class="form-group">
        {!! Form::label('Name', 'Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
            @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <button type="submit" type="button" class="btn btn-primary">Add a Type</button>
        </div>
    </div>
      {!! Form::close() !!}
</div>

  </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>