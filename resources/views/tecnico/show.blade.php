@extends('adminlte::page')

@section('template_title')
    {{ $tecnico->name ?? 'Show Tecnico' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tecnico</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tecnicos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tecnico->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $tecnico->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $tecnico->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Fnacimiento:</strong>
                            {{ $tecnico->fnacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Finicio:</strong>
                            {{ $tecnico->finicio }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $tecnico->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $tecnico->cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
