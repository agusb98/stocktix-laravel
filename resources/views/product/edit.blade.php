@extends('layouts.app')

@section('template_title')
Actualizar Producto
@endsection

@section('content')
@includeif('partials.errors')

<div class="card">
    <div class="card-header text-center">
        <h1 class="card-title">Actualizar Producto</h1>
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('product.update', $product->id) }}" role="form" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf

            @include('product.form')

        </form>
    </div>
</div>

@endsection