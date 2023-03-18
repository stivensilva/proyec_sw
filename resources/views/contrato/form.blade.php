<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_cliente') }}
            {{ Form::text('id_cliente', $contrato->id_cliente, ['class' => 'form-control' . ($errors->has('id_cliente') ? ' is-invalid' : ''), 'placeholder' => 'Id Cliente']) }}
            {!! $errors->first('id_cliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_contrato') }}
            {{ Form::text('id_contrato', $contrato->id_contrato, ['class' => 'form-control' . ($errors->has('id_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Id Contrato']) }}
            {!! $errors->first('id_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $contrato->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero_contrato') }}
            {{ Form::text('numero_contrato', $contrato->numero_contrato, ['class' => 'form-control' . ($errors->has('numero_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Numero Contrato']) }}
            {!! $errors->first('numero_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ini') }}
            {{ Form::text('fecha_ini', $contrato->fecha_ini, ['class' => 'form-control' . ($errors->has('fecha_ini') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ini']) }}
            {!! $errors->first('fecha_ini', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $contrato->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_registro') }}
            {{ Form::text('fecha_registro', $contrato->fecha_registro, ['class' => 'form-control' . ($errors->has('fecha_registro') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Registro']) }}
            {!! $errors->first('fecha_registro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_usuario') }}
            {{ Form::text('id_usuario', $contrato->id_usuario, ['class' => 'form-control' . ($errors->has('id_usuario') ? ' is-invalid' : ''), 'placeholder' => 'Id Usuario']) }}
            {!! $errors->first('id_usuario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contacto_contrato') }}
            {{ Form::text('contacto_contrato', $contrato->contacto_contrato, ['class' => 'form-control' . ($errors->has('contacto_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Contacto Contrato']) }}
            {!! $errors->first('contacto_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('credito_dias_cartera') }}
            {{ Form::text('credito_dias_cartera', $contrato->credito_dias_cartera, ['class' => 'form-control' . ($errors->has('credito_dias_cartera') ? ' is-invalid' : ''), 'placeholder' => 'Credito Dias Cartera']) }}
            {!! $errors->first('credito_dias_cartera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lista_precio') }}
            {{ Form::text('lista_precio', $contrato->lista_precio, ['class' => 'form-control' . ($errors->has('lista_precio') ? ' is-invalid' : ''), 'placeholder' => 'Lista Precio']) }}
            {!! $errors->first('lista_precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tipo_contrato') }}
            {{ Form::text('id_tipo_contrato', $contrato->id_tipo_contrato, ['class' => 'form-control' . ($errors->has('id_tipo_contrato') ? ' is-invalid' : ''), 'placeholder' => 'Id Tipo Contrato']) }}
            {!! $errors->first('id_tipo_contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sw_paragrafados') }}
            {{ Form::text('sw_paragrafados', $contrato->sw_paragrafados, ['class' => 'form-control' . ($errors->has('sw_paragrafados') ? ' is-invalid' : ''), 'placeholder' => 'Sw Paragrafados']) }}
            {!! $errors->first('sw_paragrafados', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $contrato->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>