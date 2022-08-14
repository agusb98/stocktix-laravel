<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('product_id') }}
            {{ Form::text('product_id', $sale->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('client_id') }}
            {{ Form::text('client_id', $sale->client_id, ['class' => 'form-control' . ($errors->has('client_id') ? ' is-invalid' : ''), 'placeholder' => 'Client Id']) }}
            {!! $errors->first('client_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('debt') }}
            {{ Form::text('debt', $sale->debt, ['class' => 'form-control' . ($errors->has('debt') ? ' is-invalid' : ''), 'placeholder' => 'Debt']) }}
            {!! $errors->first('debt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $sale->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>