@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idpedido:</strong>
                            {{ $product->idPedido }}
                        </div>
                        <div class="form-group">
                            <strong>Producto,:</strong>
                            {{ $product->producto, }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $product->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
