@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.1/css/responsive.bootstrap5.min.css">
@stop

@section('content_header')
    {{-- <h1>Zonas</h1> --}}
@stop

@section('content')
   <div class="card">
    <div class="card-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; align-items: center;">

                                    <span id="card_title">
                                        {{ __('Zona') }}
                                    </span>

                                    <div class="float-right">
                                        <a href="{{ url("zona/create") }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                        {{ __('Crear Nueva Zona') }}
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
                                    <table id="zona" class="table table-striped dt-responsive nowrap" style="width:100%">
                                        <thead class="thead">
                                            <tr>
                                                <th>No</th>
                                                
                                                <th>Id Zona</th>
                                                <th>Descripcion Zona</th>

                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($zonas as $zona)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    
                                                    <td>{{ $zona->id_zona }}</td>
                                                    <td>{{ $zona->descripcion_zona }}</td>

                                                    <td>
                                                        <form action="{{ url("zona/destroy",$zona->id_zona) }}" method="POST">
                                                            <a class="btn btn-sm btn-primary " href="{{ url("zona/show",$zona->id_zona) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                            <a class="btn btn-sm btn-success" href="{{ url("zona/edit",$zona->id_zona) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        {!! $zonas->links() !!}
                    </div>
                </div>
            </div>
     </div>
   </div>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap5.min.js"></script>
    <script>
    $(document).ready(function () {
    $('#zona').DataTable();
    });
    </script>
@stop
