@extends('layouts.app')

@section('template_title')
Product
@endsection

@section('content')

<div class="card">
    <div class="card-header text-center">
        <h1 class="card-title">Listado de Productos</h1>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>

                        <th>Code</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>$ {{ $product->price }}</td>
                        <td>{{ $product->quantity }}</td>

                        <td style="width: 180px;">
                            <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('product.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                <a class="btn btn-sm btn-success" href="{{ route('product.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
{!! $products->links() !!}

<div class="position-fixed top-0 end-0 me-5 mt-5 pt-3">
    <a href="{{ route('product.create') }}" class="btn btn-success p-3">➕</a>
</div>

@endsection