@extends('layouts.app')

@section('template_title')
    Contrato
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Contrato') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ url("contrato/create") }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Id Contrato</th>
										<th>Descripcion</th>
										<th>Numero Contrato</th>
										<th>Fecha Ini</th>
										<th>Fecha Fin</th>
										<th>Fecha Registro</th>
										<th>Id Usuario</th>
										<th>Contacto Contrato</th>
										<th>Credito Dias Cartera</th>
										<th>Lista Precio</th>
										<th>Id Tipo Contrato</th>
										<th>Sw Paragrafados</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contratos as $contrato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contrato->id_cliente }}</td>
											<td>{{ $contrato->id_contrato }}</td>
											<td>{{ $contrato->descripcion }}</td>
											<td>{{ $contrato->numero_contrato }}</td>
											<td>{{ $contrato->fecha_ini }}</td>
											<td>{{ $contrato->fecha_fin }}</td>
											<td>{{ $contrato->fecha_registro }}</td>
											<td>{{ $contrato->id_usuario }}</td>
											<td>{{ $contrato->contacto_contrato }}</td>
											<td>{{ $contrato->credito_dias_cartera }}</td>
											<td>{{ $contrato->lista_precio }}</td>
											<td>{{ $contrato->id_tipo_contrato }}</td>
											<td>{{ $contrato->sw_paragrafados }}</td>
											<td>{{ $contrato->estado }}</td>

                                            <td>
                                                <form action="{{ route('contratos.destroy',$contrato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contratos.show',$contrato->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contratos.edit',$contrato->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $contratos->links() !!}
            </div>
        </div>
    </div>
@endsection
