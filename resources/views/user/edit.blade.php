@extends('layouts.app')

@section('template_title')
Actualizar Usuario
@endsection

@section('content')
@includeif('partials.errors')

<div class="card">
    <div class="card-header text-center">
        <h1 class="card-title">Actualizar Usuario</h1>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('users.update', $user->id) }}" role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            @include('user.form')

        </form>
    </div>
</div>

@endsection