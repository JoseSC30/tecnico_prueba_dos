@extends('adminlte::page')

@section('template_title')
    Tecnico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tecnico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tecnicos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Ci</th>
										<th>Direccion</th>
										<th>Fnacimiento</th>
										<th>Finicio</th>
										<th>Sexo</th>
										<th>Cargo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tecnicos as $tecnico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tecnico->nombre }}</td>
											<td>{{ $tecnico->ci }}</td>
											<td>{{ $tecnico->direccion }}</td>
											<td>{{ $tecnico->fnacimiento }}</td>
											<td>{{ $tecnico->finicio }}</td>
											<td>{{ $tecnico->sexo }}</td>
											<td>{{ $tecnico->cargo }}</td>

                                            <td>
                                                <form action="{{ route('tecnicos.destroy',$tecnico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tecnicos.show',$tecnico->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tecnicos.edit',$tecnico->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $tecnicos->links() !!}
            </div>
        </div>
    </div>
@endsection
