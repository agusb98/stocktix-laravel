@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-self-center">
    <div class="card" style="max-width: 25em;">
        <div class="card-header text-center">
            <h1>
                Ingresar Sesión
            </h1>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
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

                    <div class="col-md-12 text-start">
                        <label for="password" class="col-md-4 col-form-label">
                            Contraseña
                        </label>

                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-12 text-end">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-success">Ingresar</button>
                    </div>

                    <div class="col-md-12">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection