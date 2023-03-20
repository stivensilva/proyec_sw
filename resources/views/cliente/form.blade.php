@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>s---</h1>
@stop

@section('content')
    <div class="box box-info padding-1">
    <div class="box-body">
        <div class="container">
            <div class="row">
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('id_cliente', $cliente->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('tipo_cliente', $cliente->tipo_cliente, ['class' => 'form-control' . ($errors->has('tipo_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Cliente']) }}
            {!! $errors->first('tipo_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('tipo_id_cliente', $cliente->tipo_id_cliente, ['class' => 'form-control' . ($errors->has('tipo_id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id Cliente']) }}
            {!! $errors->first('tipo_id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('documento_id', $cliente->documento_id, ['class' => 'form-control' . ($errors->has('documento_id') ? ' is-invalid' : ''), 'placeholder' => 'Documento Id']) }}
            {!! $errors->first('documento_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('digito_verificacion', $cliente->digito_verificacion, ['class' => 'form-control' . ($errors->has('digito_verificacion') ? ' is-invalid' : ''), 'placeholder' => 'Digito Verificacion']) }}
            {!! $errors->first('digito_verificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('primer_nombre', $cliente->primer_nombre, ['class' => 'form-control' . ($errors->has('primer_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
            {!! $errors->first('primer_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('segundo_nombre', $cliente->segundo_nombre, ['class' => 'form-control' . ($errors->has('segundo_nombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
            {!! $errors->first('segundo_nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('primer_apellido', $cliente->primer_apellido, ['class' => 'form-control' . ($errors->has('primer_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
            {!! $errors->first('primer_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('segundo_apellido', $cliente->segundo_apellido, ['class' => 'form-control' . ($errors->has('segundo_apellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
            {!! $errors->first('segundo_apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('nombre_corto', $cliente->nombre_corto, ['class' => 'form-control' . ($errors->has('nombre_corto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Corto']) }}
            {!! $errors->first('nombre_corto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('nombre_juridico', $cliente->nombre_juridico, ['class' => 'form-control' . ($errors->has('nombre_juridico') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Juridico']) }}
            {!! $errors->first('nombre_juridico', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('fecha_nacimiento', $cliente->fecha_nacimiento, ['class' => 'form-control' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nacimiento']) }}
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('id_genero', $cliente->id_genero, ['class' => 'form-control' . ($errors->has('id_genero') ? ' is-invalid' : ''), 'placeholder' => 'Id Genero']) }}
            {!! $errors->first('id_genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('dirección_1', $cliente->dirección_1, ['class' => 'form-control' . ($errors->has('dirección_1') ? ' is-invalid' : ''), 'placeholder' => 'Dirección 1']) }}
            {!! $errors->first('dirección_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('dirección_2', $cliente->dirección_2, ['class' => 'form-control' . ($errors->has('dirección_2') ? ' is-invalid' : ''), 'placeholder' => 'Dirección 2']) }}
            {!! $errors->first('dirección_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('teléfono_1', $cliente->teléfono_1, ['class' => 'form-control' . ($errors->has('teléfono_1') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono 1']) }}
            {!! $errors->first('teléfono_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('teléfono_2', $cliente->teléfono_2, ['class' => 'form-control' . ($errors->has('teléfono_2') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono 2']) }}
            {!! $errors->first('teléfono_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('celular_1', $cliente->celular_1, ['class' => 'form-control' . ($errors->has('celular_1') ? ' is-invalid' : ''), 'placeholder' => 'Celular 1']) }}
            {!! $errors->first('celular_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('celular_2', $cliente->celular_2, ['class' => 'form-control' . ($errors->has('celular_2') ? ' is-invalid' : ''), 'placeholder' => 'Celular 2']) }}
            {!! $errors->first('celular_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('email_1', $cliente->email_1, ['class' => 'form-control' . ($errors->has('email_1') ? ' is-invalid' : ''), 'placeholder' => 'Email 1']) }}
            {!! $errors->first('email_1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('email_2', $cliente->email_2, ['class' => 'form-control' . ($errors->has('email_2') ? ' is-invalid' : ''), 'placeholder' => 'Email 2']) }}
            {!! $errors->first('email_2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('id_pais', $cliente->id_pais, ['class' => 'form-control' . ($errors->has('id_pais') ? ' is-invalid' : ''), 'placeholder' => 'Id Pais']) }}
            {!! $errors->first('id_pais', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('id_departamento', $cliente->id_departamento, ['class' => 'form-control' . ($errors->has('id_departamento') ? ' is-invalid' : ''), 'placeholder' => 'Id Departamento']) }}
            {!! $errors->first('id_departamento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('id_municipio', $cliente->id_municipio, ['class' => 'form-control' . ($errors->has('id_municipio') ? ' is-invalid' : ''), 'placeholder' => 'Id Municipio']) }}
            {!! $errors->first('id_municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::select('id_zona', $zona, null, ['class' => 'form-control' . ($errors->has('id_zona') ? ' is-invalid' : ''), 'placeholder' => 'Id Zona']) }}
            {!! $errors->first('id_zona', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('resposable_iva', $cliente->resposable_iva, ['class' => 'form-control' . ($errors->has('resposable_iva') ? ' is-invalid' : ''), 'placeholder' => 'Resposable Iva']) }}
            {!! $errors->first('resposable_iva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('reteica', $cliente->reteica, ['class' => 'form-control' . ($errors->has('reteica') ? ' is-invalid' : ''), 'placeholder' => 'Reteica']) }}
            {!! $errors->first('reteica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('autoretenedor_fuente', $cliente->autoretenedor_fuente, ['class' => 'form-control' . ($errors->has('autoretenedor_fuente') ? ' is-invalid' : ''), 'placeholder' => 'Autoretenedor Fuente']) }}
            {!! $errors->first('autoretenedor_fuente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('proveedor_sw', $cliente->proveedor_sw, ['class' => 'form-control' . ($errors->has('proveedor_sw') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor Sw']) }}
            {!! $errors->first('proveedor_sw', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('fecha_registro', $cliente->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
            {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('usuario_registra', $cliente->usuario_registra, ['class' => 'form-control' . ($errors->has('usuario_registra') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Registra']) }}
            {!! $errors->first('usuario_registra', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-3">
            {{ Form::label('') }}
            {{ Form::text('estado', $cliente->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    </div>
    <div class="box-footer mt20 my-4">
        <button type="submit" class="btn btn-success">Registar Cliente</button>
    </div>
</div>
{{-- </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop