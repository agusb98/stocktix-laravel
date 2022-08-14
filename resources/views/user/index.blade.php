@extends('layouts.app')

@section('template_title')
Usuario
@endsection

@section('content')

<div class="card">
    <div class="card-header text-center">
        <h1 class="card-title">Listado de Usuarios</h1>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Creación</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->email }}</td>
                        <td>{{ $product->created_at }}</td>

                        <td style="width: 180px;">
                            <form action="{{ route('user.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-sm btn-success " href="{{ route('user.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                <a class="btn btn-sm btn-warning" href="{{ route('user.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{!! $users->links() !!}

<div class="position-fixed top-0 end-0 me-5 mt-5 pt-3">
    <a href="{{ route('user.create') }}" class="btn btn-success p-3">➕</a>
</div>

@endsection