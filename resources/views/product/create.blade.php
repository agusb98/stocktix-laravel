@extends('layouts.app')

@section('template_title')
Create Product
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card">
                <div class="card-header text-center">
                    <h1 class="card-title">Añadir Producto</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('products.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('product.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection