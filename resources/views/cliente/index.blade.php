@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{  url("cliente/create") }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Cliente</th>
										<th>Tipo Cliente</th>
										<th>Tipo Id Cliente</th>
										<th>Documento Id</th>
										<th>Digito Verificacion</th>
										<th>Primer Nombre</th>
										<th>Segundo Nombre</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Nombre Corto</th>
										<th>Nombre Juridico</th>
										<th>Fecha Nacimiento</th>
										<th>Id Genero</th>
										<th>Dirección 1</th>
										<th>Dirección 2</th>
										<th>Teléfono 1</th>
										<th>Teléfono 2</th>
										<th>Celular 1</th>
										<th>Celular 2</th>
										<th>Email 1</th>
										<th>Email 2</th>
										<th>Id Pais</th>
										<th>Id Departamento</th>
										<th>Id Municipio</th>
										<th>Id Zona</th>
										<th>Resposable Iva</th>
										<th>Reteica</th>
										<th>Autoretenedor Fuente</th>
										<th>Proveedor Sw</th>
										<th>Fecha Registro</th>
										<th>Usuario Registra</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cliente->id_cliente }}</td>
											<td>{{ $cliente->tipo_cliente }}</td>
											<td>{{ $cliente->tipo_id_cliente }}</td>
											<td>{{ $cliente->documento_id }}</td>
											<td>{{ $cliente->digito_verificacion }}</td>
											<td>{{ $cliente->primer_nombre }}</td>
											<td>{{ $cliente->segundo_nombre }}</td>
											<td>{{ $cliente->primer_apellido }}</td>
											<td>{{ $cliente->segundo_apellido }}</td>
											<td>{{ $cliente->nombre_corto }}</td>
											<td>{{ $cliente->nombre_juridico }}</td>
											<td>{{ $cliente->fecha_nacimiento }}</td>
											<td>{{ $cliente->id_genero }}</td>
											<td>{{ $cliente->dirección_1 }}</td>
											<td>{{ $cliente->dirección_2 }}</td>
											<td>{{ $cliente->teléfono_1 }}</td>
											<td>{{ $cliente->teléfono_2 }}</td>
											<td>{{ $cliente->celular_1 }}</td>
											<td>{{ $cliente->celular_2 }}</td>
											<td>{{ $cliente->email_1 }}</td>
											<td>{{ $cliente->email_2 }}</td>
											<td>{{ $cliente->id_pais }}</td>
											<td>{{ $cliente->id_departamento }}</td>
											<td>{{ $cliente->id_municipio }}</td>
											<td>{{ $cliente->id_zona }}</td>
											<td>{{ $cliente->resposable_iva }}</td>
											<td>{{ $cliente->reteica }}</td>
											<td>{{ $cliente->autoretenedor_fuente }}</td>
											<td>{{ $cliente->proveedor_sw }}</td>
											<td>{{ $cliente->fecha_registro }}</td>
											<td>{{ $cliente->usuario_registra }}</td>
											<td>{{ $cliente->estado }}</td>

                                            <td>
                                                <form action="{{ route('clientes.destroy',$cliente->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('clientes.show',$cliente->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit',$cliente->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop