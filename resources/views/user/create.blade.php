@extends('layouts.app')

@section('template_title')
Create User
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

            @includeif('partials.errors')

            <div class="card">
                <div class="card-header text-center">
                    <h1 class="card-title">Añadir Usuario</h1>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('users.store') }}" role="form" enctype="multipart/form-data">
                        @csrf

                        @include('user.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection