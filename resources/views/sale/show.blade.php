@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sale.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Product Id:</strong>
                            {{ $sale->product_id }}
                        </div>
                        <div class="form-group">
                            <strong>Client Id:</strong>
                            {{ $sale->client_id }}
                        </div>
                        <div class="form-group">
                            <strong>Debt:</strong>
                            {{ $sale->debt }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $sale->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
