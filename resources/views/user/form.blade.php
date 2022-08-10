<div class="row g-3">
    <div class="col-md-6">
        {{ Form::label('name') }}
        {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Juan']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-6">
        {{ Form::label('email') }}
        {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'juancito98@gmail.com']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-md-12">
        {{ Form::label('password') }}
        {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => '12345678']) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
    </div>

    <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Confirmar</button>
    </div>
</div>