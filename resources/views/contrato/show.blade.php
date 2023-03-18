@extends('layouts.app')

@section('template_title')
    {{ $contrato->name ?? 'Show Contrato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Contrato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contratos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $contrato->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Id Contrato:</strong>
                            {{ $contrato->id_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $contrato->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Numero Contrato:</strong>
                            {{ $contrato->numero_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ini:</strong>
                            {{ $contrato->fecha_ini }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $contrato->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $contrato->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $contrato->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Contacto Contrato:</strong>
                            {{ $contrato->contacto_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Credito Dias Cartera:</strong>
                            {{ $contrato->credito_dias_cartera }}
                        </div>
                        <div class="form-group">
                            <strong>Lista Precio:</strong>
                            {{ $contrato->lista_precio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tipo Contrato:</strong>
                            {{ $contrato->id_tipo_contrato }}
                        </div>
                        <div class="form-group">
                            <strong>Sw Paragrafados:</strong>
                            {{ $contrato->sw_paragrafados }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $contrato->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
