@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center">
    <div class="card" style="max-width: 25em;">
        <div class="card-header text-center">
            <h1>
                Reestablecer Contraseña
            </h1>
        </div>

        <div class="card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row g-3">
                    <div class="col-md-12 text-start">
                        <label for="email" class="col-md-4 col-form-label">
                            Correo
                        </label>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success">Confirmar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection