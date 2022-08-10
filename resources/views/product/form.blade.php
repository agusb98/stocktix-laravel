<div class="row g-3">
    <div class="col-md-6">
        {{ Form::label('code') }}
        {{ Form::text('code', $product->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Code']) }}
        {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-6">
        {{ Form::label('name') }}
        {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-12">
        {{ Form::label('description') }}
        {{ Form::textarea('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
        {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-4">
        {{ Form::label('price') }}
        {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Price']) }}
        {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-4">
        {{ Form::label('quantity') }}
        {{ Form::text('quantity', $product->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Quantity']) }}
        {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-4">
        {{ Form::label('status') }}
        {{ Form::select('status', array(1 => 'Disponible', 2 => 'No Disponible'), $product->status, ['class' => 'form-control form-select' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-12">
        {{ Form::label('observation') }}
        {{ Form::textarea('observation', $product->observation, ['class' => 'form-control' . ($errors->has('observation') ? ' is-invalid' : ''), 'placeholder' => 'Observation']) }}
        {!! $errors->first('observation', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Confirmar</button>
    </div>
</div>