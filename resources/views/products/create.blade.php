<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        
      </div>

<div class="tile p-15">
    {!! Form::open(['url' => 'storeProducts', 'method' => 'post', 'class' => 'form-horizontal', 'id'=>"addProductsForm" ]) !!}


    
    <div class="form-group">
        {!! Form::label('Name', 'Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
            @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
        </div>
    </div>

   <div class="form-group">
        {!! Form::label('Product Type', 'Product Type', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::select('type_id',$selectProductTypes,['class' => 'form-control input-sm','id' => 'type_id']) !!}
            
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Specification', 'Specification', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
         <textarea rows="5" id="specification" name="specification" class="form-control" maxlength="500" title="short"></textarea>
            @if ($errors->has('specification')) <p class="help-block red">*{{ $errors->first('specification') }}</p> @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Ordered Date', 'Ordered Date', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('ordered_date',NULL,['class' => 'form-control input-sm','id' => 'ordered_date']) !!}
            @if ($errors->has('ordered_date')) <p class="help-block red">*{{ $errors->first('ordered_date') }}</p> @endif
        </div>
    </div>


     <div class="form-group">
        {!! Form::label('Received Date', 'Received Date', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('received_date',NULL,['class' => 'form-control input-sm','id' => 'received_date']) !!}
            @if ($errors->has('received_date')) <p class="help-block red">*{{ $errors->first('received_date') }}</p> @endif
        </div>
    </div>

     <div class="form-group">
        {!! Form::label('Price', 'Price', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('price',NULL,['class' => 'form-control input-sm','id' => 'price']) !!}
            @if ($errors->has('price')) <p class="help-block red">*{{ $errors->first('price') }}</p> @endif
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Unit', 'Unit', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('unit',NULL,['class' => 'form-control input-sm','id' => 'unit']) !!}
            @if ($errors->has('unit')) <p class="help-block red">*{{ $errors->first('unit') }}</p> @endif
        </div>
    </div>

    
    <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <button type="submit" type="button" class="btn btn-primary">Add To Stock</button>
        </div>
    </div>
      {!! Form::close() !!}
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>