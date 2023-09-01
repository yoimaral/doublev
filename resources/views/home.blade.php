@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                    <div class=" box-footer mt20">
                        <a href="{{ route('products.index') }}"><button class="btn btn-primary">Acceder a
                                productos</button></a>
                        <a href="{{ route('users.index') }}"><button class="btn btn-primary">Acceder a
                                Usuarios</button></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
