<div  id ="searchModal" class="modal fade" role ="dialog">
<div class="modal-dialog">

<!--   Modal Content-->
<div class ="modal-content">
<div class="modal-header">
<button type="button" class ="close" data-dismiss ="modal">&times;</button>
<h4 class ="modal-title">Search Form</h4>
</div>
<div class="modal-body">


<div class="tile p-15">
    {!! Form::open(['url' => 'storeActivity', 'method' => 'get', 'class' => 'form-horizontal', 'id'=>"searchForm" ]) !!}


    
    <div class="form-group">
        {!! Form::label(' Recipient Name', 'Recipient Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('name',NULL,['class' => 'form-control input-sm','id' => 'name']) !!}
            @if ($errors->has('name')) <p class="help-block red">*{{ $errors->first('name') }}</p> @endif
        </div>
    </div>

   <div class="form-group">
        {!! Form::label('Product Name', 'Product Name', array('class' => 'col-md-3 control-label')) !!}
        <div class="col-md-6">
            {!! Form::text('product',null,['class' => 'form-control input-sm','id' => 'product']) !!}
            
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-3 col-md-10">
            <button type="submit" type="button" class="btn btn-primary">Add To Stock</button>
        </div>
    </div>
      {!! Form::close() !!}
</div>


</div>
<div class ="modal-footer">
<button type="button"  class="btn btn-default" data-dismiss ="modal">Close</button>
</div>
</div>
</div>
</div>