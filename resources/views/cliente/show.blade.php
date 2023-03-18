@extends('layouts.app')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Cliente:</strong>
                            {{ $cliente->id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Cliente:</strong>
                            {{ $cliente->tipo_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id Cliente:</strong>
                            {{ $cliente->tipo_id_cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Documento Id:</strong>
                            {{ $cliente->documento_id }}
                        </div>
                        <div class="form-group">
                            <strong>Digito Verificacion:</strong>
                            {{ $cliente->digito_verificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Nombre:</strong>
                            {{ $cliente->primer_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Nombre:</strong>
                            {{ $cliente->segundo_nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primer Apellido:</strong>
                            {{ $cliente->primer_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundo Apellido:</strong>
                            {{ $cliente->segundo_apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Corto:</strong>
                            {{ $cliente->nombre_corto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Juridico:</strong>
                            {{ $cliente->nombre_juridico }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $cliente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Genero:</strong>
                            {{ $cliente->id_genero }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección 1:</strong>
                            {{ $cliente->dirección_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección 2:</strong>
                            {{ $cliente->dirección_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono 1:</strong>
                            {{ $cliente->teléfono_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono 2:</strong>
                            {{ $cliente->teléfono_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 1:</strong>
                            {{ $cliente->celular_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Celular 2:</strong>
                            {{ $cliente->celular_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 1:</strong>
                            {{ $cliente->email_1 }}
                        </div>
                        <div class="form-group">
                            <strong>Email 2:</strong>
                            {{ $cliente->email_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Id Pais:</strong>
                            {{ $cliente->id_pais }}
                        </div>
                        <div class="form-group">
                            <strong>Id Departamento:</strong>
                            {{ $cliente->id_departamento }}
                        </div>
                        <div class="form-group">
                            <strong>Id Municipio:</strong>
                            {{ $cliente->id_municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Id Zona:</strong>
                            {{ $cliente->id_zona }}
                        </div>
                        <div class="form-group">
                            <strong>Resposable Iva:</strong>
                            {{ $cliente->resposable_iva }}
                        </div>
                        <div class="form-group">
                            <strong>Reteica:</strong>
                            {{ $cliente->reteica }}
                        </div>
                        <div class="form-group">
                            <strong>Autoretenedor Fuente:</strong>
                            {{ $cliente->autoretenedor_fuente }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor Sw:</strong>
                            {{ $cliente->proveedor_sw }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Registro:</strong>
                            {{ $cliente->fecha_registro }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Registra:</strong>
                            {{ $cliente->usuario_registra }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $cliente->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
