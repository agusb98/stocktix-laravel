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
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Observation</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->code }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->observation }}</td>

                        <td style="width: 11em;">
                            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
    <a href="{{ route('products.create') }}" class="btn btn-success p-3">➕</a>
</div>

@endsection

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) {
        hideAlert();
    });

    function hideAlert() {
        var alert = document.getElementsByClassName('alert')[0];

        setTimeout(() => {
            alert.classList.add('d-none');
        }, 5000)
    }
</script>