@extends('layouts.app')

@section('template_title')
    Listadocumento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Listadocumento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('listadocumentos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Tipo Documento</th>
										<th>Descripcion</th>
										<th>Alterno</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($listadocumentos as $listadocumento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $listadocumento->id_tipo_documento }}</td>
											<td>{{ $listadocumento->descripcion }}</td>
											<td>{{ $listadocumento->alterno }}</td>

                                            <td>
                                                <form action="{{ route('listadocumentos.destroy',$listadocumento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('listadocumentos.show',$listadocumento->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('listadocumentos.edit',$listadocumento->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $listadocumentos->links() !!}
            </div>
        </div>
    </div>
@endsection
