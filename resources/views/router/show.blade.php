@extends('layouts.app')

@section('template_title')
    {{ $router->name ?? 'Show Router' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Router</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('routers.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $router->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $router->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $router->modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $router->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
