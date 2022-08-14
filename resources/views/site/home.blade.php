@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header text-center">
        <h1>Bienvenido!</h1>
    </div>

    <div class="card-body">
        {{ __('You are logged in!') }}
    </div>
</div>
@endsection