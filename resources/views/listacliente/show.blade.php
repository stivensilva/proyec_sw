@extends('layouts.app')

@section('template_title')
    {{ $listacliente->name ?? 'Show Listacliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listacliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listaclientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Tipo Cliente:</strong>
                            {{ $listacliente->id_tipo_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion Cliente:</strong>
                            {{ $listacliente->descripcion_cliente }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
